<?php

namespace App\Controller;
use App\Entity\Produit;
use App\Entity\Command;
use App\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\CommandRepository;
use App\Repository\ProduitRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
class CommandController extends AbstractController
{
    #[Route('/command', name: 'app_command')]
    public function index(SessionInterface $session ,ProduitRepository $produitR)
    {
        $command = $session->get('command',[]);
        $commandwithdata = [];
        
        foreach ($command as $id => $qantity) {
            $commandwithdata[] = [
                'produit' => $produitR->find($id),
                'qantity' => $qantity

            ];
        }
        $total =0;
        foreach ($commandwithdata as $item) {
            $totalItem =$item['produit']->getPrix() * $item['qantity'];
            $total += $totalItem;
        }
        

        return $this->render('command/command.html.twig', [
         'items' => $commandwithdata,
         'total' => $total
        ]);

    }

    #[Route('/command/add/{id}', name: 'app_add')]
    public function addcom(SessionInterface $session , $id,ProduitRepository $produitR ,Request $req)
    {
        $session = $req->getSession();
        $command = $session->get('command',[]);
        if(!empty($command[$id])){
            $command[$id]++;
        }else{
            $command[$id]=1;
        }
        $session->set('command',$command);
        return $this->redirectToRoute("app_command");
        
        
           }
           #[Route('/command/diminuier/{id}', name: 'app_diminuier')]
           public function diminuer(SessionInterface $session ,Produit $produit )
           {
               $command = $session->get('command',[]);
               $id = $produit->getId();

               if(!empty($command[$id])){

                if (!$command[$id] > 1) {
                    $command[$id]--;
                }else {
                    unset($command[$id]);
                }  
                    $command[$id] = 1;
                
               }
               $session->set('command',$command);
               return $this->redirectToRoute("app_command");
               
               
                  }



          #[Route('/command/remove/{id}', name: 'app_remove')]
           public function removecmd(SessionInterface $session ,$id)
           {
               $command = $session->get('command',[]);
               if(!empty($command[$id])){
                unset($command[$id]);
               }
               $session->set('command',$command);

       return $this->redirectToRoute("app_command");
           }



           #[Route('/command/admin', name: 'app_command_admin')]
    public function indexadd(SessionInterface $session ,ProduitRepository $produitR)
    {
        $command = $session->get('command',[]);
        $commandwithdata = [];
        
        foreach ($command as $id => $qantity) {
            $commandwithdata[] = [
                'produit' => $produitR->find($id),
                'qantity' => $qantity

            ];
        }
        $total =0;
        foreach ($commandwithdata as $item) {
            $totalItem =$item['produit']->getPrix()*$item['qantity'];
            $total += $totalItem;
        
        return $this->render('command/index.html.twig', [
         'items' => $commandwithdata,
         'total' => $total
        ]);

         
     }
     ///#[Route('/command/add', name: 'app_add2')]
     //public function valider(Request $request, ValidatorInterface $validator): Response
    //{
        // Récupérez votre panier depuis la base de données ou créez-en un nouveau
       // $command = new Command();

        // Validez le panier avec le service Validator de Symfony
       // $errors = $validator->validate($command);

        //if (count($errors) > 0) {
            // Si des erreurs de validation sont trouvées, traitez-les ici
        //}

        // Affichez le panier dans le template
       // return $this->render('command/index.html.twig', [
            //'command' => $command,
        //]);
    }



    
    #[Route('/command/add', name: 'command_list')]
    public function listOrders(): Response
    {
        $command = $this->getDoctrine()->getRepository(Command::class)->findAll();

        return $this->render('command/index.html.twig', [
            'command' => $command,
        ]);
    }
}
     



