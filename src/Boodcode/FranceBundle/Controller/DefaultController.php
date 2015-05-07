<?php

namespace Boodcode\FranceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Boodcode\FranceBundle\Entity\Work;
use Boodcode\FranceBundle\Entity\Image;

use Boodcode\FranceBundle\Form\WorkType;
use Boodcode\FranceBundle\Form\WorkEditType;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Presta\SitemapBundle\Event\SitemapPopulateEvent;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;

class DefaultController extends Controller
{


    public function boot()
    {
        $router = $this->container->get('router');
        $event  = $this->container->get('event_dispatcher');

        //listen presta_sitemap.populate event
        $event->addListener(
            SitemapPopulateEvent::ON_SITEMAP_POPULATE,
            function(SitemapPopulateEvent $event) use ($router){
                //get absolute homepage url
                $url = $router->generate('homepage', array(), true);

                //add homepage url to the urlset named default
                $event->getGenerator()->addUrl(
                    new UrlConcrete(
                        $url,
                        new \DateTime(),
                        UrlConcrete::CHANGEFREQ_HOURLY,
                        1
                    ),
                    'default'
                );
        });
    }

    /**
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function adminAction()
    {
         $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BoodcodeFranceBundle:Work');
        
        //$liste_works = $repository->findAll();
        $liste_works = $repository->findBy(array(), array('ordre' => 'asc'));
        if(sizeof($liste_works)>0) :
            return $this->render('BoodcodeFranceBundle:Default:admin.html.twig' , array('works'=>$liste_works, 'body_class'=>'admin'));
        else:
            return $this->render('BoodcodeFranceBundle:Default:work.html.twig'); 
        endif;

    }


    public function orderingimageAction(Request $request){
        $new_ordering = $request->get('itemId');

        $ordre_num = 1;
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('BoodcodeFranceBundle:Image');
    
        //die($new_ordering);
        $datas = array();
        foreach ($new_ordering as $k=>$id) {
            $image = $repository->find($id);
            $image->setOrdre($ordre_num++);
            $em->persist($image);
        }
        $em->flush();

        $response = new JsonResponse();
        return $response->setData(array('data' => $new_ordering));
    }
    
    /* Add Work */
    public function addAction(Request $request)
    {
        /********
    	// Création de l'entité Work
        $work = new Work();
        $work->setTitre('Recherche développeur Symfony2.');
        $work->setDescription('Alexandre');
        $work->setDetails("Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…");
        $work->setPublication(true);

        // Création d'une première image
        $image1 = new Image();
        $image1->setUrl('Marine.jpg');
        $image1->setAlt("J'ai toutes les qualités requises.");

        // Création d'une deuxième image par exemple
        $image2 = new Image();
        $image2->setUrl('Pierre.jpg');
        $image2->setAlt("Je suis très motivé.");

        // On lie les images à work
        $image1->setWork($work);
        $image2->setWork($work);

        $em = $this->getDoctrine()->getManager();
        $em->persist($work);
        $em->persist($image1);
        $em->persist($image2);
        $em->flush();

        $liste_images = array($image1, $image2);

        // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

        // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        if ($request->isMethod('POST')) {
          // Ici, on s'occupera de la création et de la gestion du formulaire

          $request->getSession()->getFlashBag()->add('notice', 'Work bien enregistrée.');

          // Puis on redirige vers la page de visualisation de cettte annonce
          return $this->redirect($this->generateUrl('boodcode_france_work', array('id' => 5)));
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->redirect($this->generateUrl('boodcode_france_homepage'));
        *******/


        // On vérifie que l'utilisateur dispose bien du rôle ROLE_ADMIN
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
          // Sinon on déclenche une exception « Accès interdit »
          throw new AccessDeniedException('Accès limité aux auteurs.');
        }



        $work = new Work();

        // On crée le FormBuilder grâce au service form factory

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->get('form.factory')->create(new WorkType, $work);
        ;

       
        if($form->handleRequest($request)->isValid()){

            $em = $this->getDoctrine()->getManager();
           // var_dump($work);
            $em->persist($work);
           // var_dump($work);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Work bien enregisté');

            return $this->redirect($this->generateUrl('boodcode_france_admin'));
        }

        return $this->render('BoodcodeFranceBundle:Default:add.html.twig', array(
            'form' => $form->createView(),
            'body_class'=>'admin'
            ));

    }


    public function editerAction($id, Request $request)
    {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_ADMIN
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
          // Sinon on déclenche une exception « Accès interdit »
          throw new AccessDeniedException('Accès limité aux auteurs.');
        }

        /**********************************************************/
        /**********************************************************/
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getManager();

        // On récupère l'entité correspondant a l'id
        $work = $em->getRepository('BoodcodeFranceBundle:Work')
                    ->find($id);

        // Si l'entrée n'existe pas, on affiche une erreur 404
        if ( null === $work ) {
          throw $this->createNotFoundException('Entrée[id='.$id.'] inexistante');
        }
        /**********************************************************/
        /**********************************************************/

        //Formulaire   
        $form = $this->createForm(new workEditType($work->getId()), $work);
        //
        ;
        if($form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($work);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Entrée bien mise à jour');

            return $this->redirect($this->generateUrl('boodcode_france_admin'));
        }

        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('BoodcodeFranceBundle:Default:editer.html.twig', array(
          'form' => $form->createView(),
          'body_class'=>'admin'
        ));  
    }




    public function deleteAction($id, Request $request)
    {


        // On vérifie que l'utilisateur dispose bien du rôle ROLE_ADMIN
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
          // Sinon on déclenche une exception « Accès interdit »
          throw new AccessDeniedException('Accès limité aux admins.');
        }

        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $work = $em->getRepository('BoodcodeFranceBundle:Work')->find($id);

        if (null === $work) {
          throw new NotFoundHttpException("Le Work d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
          $em->remove($work);
          $em->flush();

          $request->getSession()->getFlashBag()->add('info', "Le work a bien été supprimé.");

          return $this->redirect($this->generateUrl('boodcode_france_homepage'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('BoodcodeFranceBundle:Default:delete.html.twig', array(
          'work' => $work,
          'form'   => $form->createView(),
          'body_class'=>'admin'
        ));
    }


    public function workAction(Work $work)
    {
        $mailer = $this->get('mailer');

        //Système de navigation Prev/Next
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BoodcodeFranceBundle:Work');
        $liste_works = $repository->findPublishedWorks();

        $maxIndex = sizeof($liste_works);
        foreach ($liste_works as $k => $w):
            if($w === $work) : 
                $prevIndex = $k!=0  ? $k-1 : $maxIndex-1;
                $prevSlug = $liste_works[$prevIndex]->getSlug();
                $nextIndex = $k!= $maxIndex-1 ? $k+1 : 0;
                $nextSlug = $liste_works[$nextIndex]->getSlug();
            endif;
        endforeach;

        //recup des images
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BoodcodeFranceBundle:Image');

        //$liste_images = $repository->findImagesByWork($work->getId());
            //ou
        $liste_images = $repository->findBy(
                                        array('work'=>$work),
                                        array('ordre'=>'ASC')
                                        );

        return $this->render('BoodcodeFranceBundle:Default:work.html.twig', array(	
            'work' => $work,
            'image'=> $liste_images,
            'prevSlug' => $prevSlug,
            'nextSlug'=> $nextSlug,
            'body_class' => 'work-tpl'
        ));
    }


    public function indexAction()
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BoodcodeFranceBundle:Work');
        
        $liste_works = $repository->findPublishedWorks();

        return $this->render('BoodcodeFranceBundle:Default:index.html.twig', array(	'works' => $liste_works));
    }


    public function aboutAction()
    {
        return $this->render('BoodcodeFranceBundle:Default:about.html.twig',array(
            'body_class' => 'about-tpl'
            ));
    }


    public function clientsAction()
    {
        $liste_clients = array('bnp','canal','candia','gestrim','kookai','mercedes','novartis','noviderm','paco-rabanne','paris-region','partouche','peugeot','plessis','societe-generale','total');
        return $this->render('BoodcodeFranceBundle:Default:clients.html.twig', array(
            'clients' => $liste_clients,
            'body_class' => 'clients-tpl'
            ));
    }
}
