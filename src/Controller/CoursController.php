<?php

namespace App\Controller;
use App\Entity\User;

use App\Entity\Cours;
use App\Entity\Rating;
use App\Form\CoursType;
use App\Form\RatingType;

use Symfony\Component\Mime\Email;
use App\Repository\CoachRepository;
use App\Repository\CoursRepository;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Address;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security as ConfigurationSecurity;

class CoursController extends AbstractController
{
    #[Route('/cours', name: 'app_cours')]
    public function index(CoursRepository $coursRepository): Response
    {
        $cours=$coursRepository->findAll();

        return $this->render('cours/index.html.twig', [
            'cours' => $cours,
        ]);
    }
    #[Route('/detail/{id}', name: 'app_detail')]
    public function detail(Request $request, CoursRepository $coursRepository, $id,UserRepository $userRepository): Response
    {
        $cours = $coursRepository->find($id);
        $user = $userRepository->find($id);

        $rating = new Rating();
        $form = $this->createForm(RatingType::class, $rating);
        $form->handleRequest($request);
    
        $selectedRating = 0; // Set default value to 0
        if ($form->isSubmitted() && $form->isValid()) {
            $rating = $form->getData();
            $rating->setCours($cours);
            $rating->setUser($user);
            $rating->setUserId($user); // set user id here

            $entityManager = $this->getDoctrine()->getManager();
            try {
                $entityManager->persist($rating);
                $entityManager->flush();
            } catch (\Exception $e) {
                // handle the error here, e.g. print the error message
                echo $e->getMessage();
            }
            $selectedRating = $rating->getStars();
        } else {
            // Check if the user has previously rated this course
          // Check if the user has previously rated this course
    $existingRating = $this->getDoctrine()->getRepository(Rating::class)
    ->findOneBy(['cours' => $cours, 'user' => $this->getUser()]);
    if ($existingRating) {
    $selectedRating = $existingRating->getStars();
    }
    
            
        }
        
        return $this->render('cours/detail.html.twig', [
            'cours' => $cours,
            'usser' => $user,
            'form' => $form->createView(),
            'selectedRating' => $selectedRating,
        ]);
    
    }
    
#[Route('/showcrc/{id}', name: 'showcr')]
public function coursDetail(Request $request, CoursRepository $coursRepository, $id): Response
{
    $cours = $coursRepository->find($id);
    $rating = new Rating();
    $form = $this->createForm(RatingType::class, $rating);
    $form->handleRequest($request);

    $selectedRating = 0; // Set default value to 0
    if ($form->isSubmitted() && $form->isValid()) {
        $rating = $form->getData();
        $rating->setCours($cours);
        $entityManager = $this->getDoctrine()->getManager();
        try {
            $entityManager->persist($rating);
            $entityManager->flush();
        } catch (\Exception $e) {
            // handle the error here, e.g. print the error message
            echo $e->getMessage();
        }
        $selectedRating = $rating->getStars();
    } else {
        // Check if the user has previously rated this course
      // Check if the user has previously rated this course
$existingRating = $this->getDoctrine()->getRepository(Rating::class)
->findOneBy(['cours' => $cours, 'user' => $this->getUser()]);
if ($existingRating) {
$selectedRating = $existingRating->getStars();
}

        
    }
    
    return $this->render('cours/detail-cours.html.twig', [
        'cours' => $cours,
        'form' => $form->createView(),
        'selectedRating' => $selectedRating,
    ]);
}


    
    #[Route('/showc/{id}', name: 'showc')]
    public function show(CoursRepository $coursRepository,$id): Response
    {
        $cours=$coursRepository->find($id);
        return $this->render('cours/show.html.twig', [
            'cours' => $cours,
        ]);
    }
    #[Route('/readc', name: 'readc')]
    public function afficheall(CoursRepository $coursRepository, Request $request): Response
    {
        $searchTerm = $request->query->get('search');
        $cours = $coursRepository->findAll();

    if ($searchTerm) {
        $cours = $coursRepository->findBySearch($searchTerm);
    }

    
        return $this->render('cours/readc.html.twig', [
            'cours' => $cours,
           
        ]);
    }
    
    
    #[Route('/ajouterc', name: 'ajouterc')]

    public function ajouter(Request $request , ManagerRegistry $doctrine, MailerInterface $mailer): Response
    {
       $cours = new Cours;

       $form = $this->createForm(CoursType::class, $cours);
       $form->handleRequest($request);
     
    if ($form->isSubmitted() && $form->isValid()) {

        $image = $form->get('image')->getData();
        if ($image) {
            // On boucle sur les images
            foreach($image as $image){

                 $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                try {

                    // On copie le fichier dans le dossier uploads
                    $image->move(
                        $this->getParameter('images_directory'),
                        $fichier
                    );
                }  catch (FileException $e) {
                    // handle exception
                // On copie le fichier dans le dossier uploads
            }
        }

                // On stocke l'image dans la base de données (son nom)
                $cours->setImage($fichier);
    }
        $em = $doctrine->getManager();
        $em->persist($cours);
        $em->flush();

     
       return $this->redirectToRoute('readc', [
    ]);
       }
       return $this->renderForm('cours/ajouterc.html.twig', [
        'cours' => $form,
    ]);
       
    }
    #[Route('/modifierc/{id}', name: 'modifierc')]

    public function modifier(Request $request , ManagerRegistry $doctrine, Cours $cours): Response
    {    

        $form = $this->createForm(CoursType::class, $cours);
        $form->handleRequest($request);
        
        if ($form->IsSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            if ($image) {
                foreach($image as $image){
    
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                try {
                    // On copie le fichier dans le dossier uploads
                    $image->move(
                        $this->getParameter('images_directory'),
                        $fichier
                    );
                } catch (FileException $e) {
                    // handle exception
                    // On copie le fichier dans le dossier uploads
                }
            }
                // On stocke l'image dans la base de données (son nom)
                $cours->setImage($fichier);
            }
    
    
            // On stocke l'image dans la base de données (son nom)
            $em = $doctrine->getManager();
            // persist = ajouter
            $em->persist($cours);
            // flush = push
            $em->flush();
    
            return $this->redirectToRoute('readc');
        }
    
        return $this->renderForm('cours/modifierc.html.twig', [
            'cours' => $form,

        ]);
    }
    #[Route('supprimerc/{id}', name: 'supprimerc')]

    public function supprimercc($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $cours =$doctrine->getRepository(Cours::class);
    $cours =  $cours->find($id);
    $em->remove($cours);
$em->flush();
return $this->redirectToRoute('readc');

}



#[Route("reserver/{id}", name: 'reserve_cours')]
public function reserverCours(Cours $cours, Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer,Security $security) : Response
{      

    $user = $security->getUser();

    $nbPlaces = $request->request->get('nbPlaces');
    if ($nbPlaces <= 0){
        $this->addFlash('echec', 'Le nombre de places doit être au moins de 1');
        return $this->redirectToRoute('app_cours', ['id' => $cours->getId()]);
    }

    if (!$cours->reserve($nbPlaces)) {
        $this->addFlash('error', 'Il n\'y a pas assez de places disponibles.');
        return $this->redirectToRoute('app_cours', ['id' => $cours->getId()]);
    }
    $entityManager->flush();

    $email = (new TemplatedEmail())
    ->from('from@example.com')
    ->to('<dorra.ayari@esprit.tn>')
    ->subject('Reservation Information')
    ->text('Sending emails is fun again!')
    ->htmlTemplate('emails/reservation_confirmation.html.twig')
        ->context([
            'cours' => $cours,
            'nbPlaces' => $nbPlaces,
            'user' => $user,
        ]);
$mailer->send($email);


    $this->addFlash('success', 'Réservation effectuée avec succès !');

    return $this->redirectToRoute('app_cours', ['id' => $cours->getId()]);
}


#[Route("/cours/rating", name: 'cours_rating')]
public function coursRating(Request $request)
{
    $rating = new Rating();
    $form = $this->createForm(RatingType::class, $rating);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $rating = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($rating);
        $entityManager->flush();

        return $this->redirectToRoute('showcr', [
            'id' => $rating->getCours()->getId(),
        ]);
    }

    return $this->render('cours/detail-cours.html.twig', [
        'form' => $form->createView(),
        'rating' => $rating,
    ]);
}



}

