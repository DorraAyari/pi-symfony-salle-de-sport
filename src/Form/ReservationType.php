<?php

namespace App\Form;

use App\Entity\Reservation;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\LessThan;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Day',DateType::class)

        ->add('Start', TimeType::class)
        ->add('Finish', TimeType::class, [
            'constraints' => [
               
                new LessThan(' 22:00'),
            ],
        ])
           // ->add('capacity',IntegerType::class)
            ->add('save',SubmitType::class)

        ;
    }
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
            'constraints' => [
                new Callback([$this, 'validateAvailability']),
            ],
        ]);
    }

    public function validateAvailability(Reservation $reservation, ExecutionContextInterface $context): void
    {
        $start = $reservation->getStart();
        $finish = $reservation->getFinish();
        $day = $reservation->getDay();

        // Check if the start time is before the finish time
        if ($start >= $finish) {
            $context->buildViolation('The start time must be before the finish time.')
                ->atPath('Start')
                ->addViolation();
        }

        // Check if the time range is available
        $repository = $this->entityManager->getRepository(Reservation::class);
        $conflictingReservations = $repository->createQueryBuilder('r')
            ->where('r.Day = :day')
            ->andWhere('(r.Start <= :start and r.Finish >= :start) or (r.Start <= :finish and r.Finish >= :finish)')
            ->setParameters([
                'day' => $day,
                'start' => $start,
                'finish' => $finish,
            ])
            ->getQuery()
            ->getResult();

        if (count($conflictingReservations) >= 5) {
            $context->buildViolation('This time range is already fully booked.')
                ->atPath('Start')
                ->addViolation();
        }
    }
}