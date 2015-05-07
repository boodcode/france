<?php

namespace Boodcode\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Boodcode\ContactBundle\Entity\Contact;
use Boodcode\ContactBundle\Entity\Attachment;

use Boodcode\ContactBundle\Form\ContactType;
use Boodcode\ContactBundle\Form\AttachmentType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\File\UploadedFile;



class DefaultController extends Controller
{
    /* Add Contact */
    public function add_contactAction(Request $request, $_locale)
    {
        $contact = new Contact();
        //$document = new Attachment();

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->get('form.factory')->create(new ContactType, $contact);
        $form->handleRequest($request);

        if($request->getMethod() == "POST"){
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);

                $attachment = $contact->getAttachment();
                if($attachment !== null){
                    $uploadableManager = $this->get('stof_doctrine_extensions.uploadable.manager');
                    $uploadableManager->markEntityToUpload($attachment, $attachment->getFile());
                }

                //print_r($contact->getAttachment()->getFile());
                //die();

                $em->flush();

                //inscription Mailchimp
                /*
                if($contact->getNewsletter()){
                    $mailchimp = $this->get('MailChimp');
                    $listID = $_locale == 'fr' ? '94bbe80e06' : 'c0cdff7b5c';
                    $mailchimp->setListID($listID);

                    $list = $mailchimp->getList();
                    $list->setUpdateExisting(true); // optional default : false
                    //
                    $list->Subscribe($contact->getMail());
                }
                */

                // -----   envoi du mail
                //recup de l'objet
                /*
                $repository = $this
                    ->getDoctrine()->getManager()
                    ->getRepository('BoodcodeContactBundle:ContactObjet');
                $contactObjet = $repository->findOneBy(array('id' => $contact->getContactObjet()));
                */
                $mailer = $this->get('mailer');

                $message = \Swift_Message::newInstance()
                    ->setSubject('Formulaire de contact')
                    ->setFrom('contact@francoise-aberton.com')
                    //->setTo($contactObjet->getMail())
                    ->setTo('aberton_f@yahoo.fr')
                    ->setContentType("text/html")
                    ->setCharset('utf-8')
                    ->setBody($this->renderView('BoodcodeContactBundle:Mail:email.html.twig', array(
                        'contact' => $contact,
                        //'contactObjet' => $contactObjet
                    )));

                //recup de la pièce jointe (son url)
                /*
                if($attachment !== null){
                    $repository = $this
                        ->getDoctrine()->getManager()
                        ->getRepository('BoodcodeContactBundle:Attachment');
                    $attachment = $repository->findOneBy(array('id' => $contact->getAttachment()));
                    $attachmentPath = $attachment->getFile();
                    $mail_attachment = \Swift_Attachment::fromPath($attachmentPath);

                    $message->attach($mail_attachment);
                }
                */

                $mailer->send($message);
              
                //message de success
                $request->getSession()->getFlashBag()->add('notice', 'Contact bien enregisté');
                return $this->render('BoodcodeContactBundle:Default:registration_success.html.twig', array(
                    'body_class'=>'contact_form'
                ));
            } 
            //if not valid
            return $this->render('BoodcodeContactBundle:Default:contact_form.html.twig', array(
                'form' => $form->createView(),
                'body_class'=>'contact_form'
            ));
        }

        //affichage du formulaire
        return $this->render('BoodcodeContactBundle:Default:contact_form.html.twig', array(
            'form' => $form->createView(),
            'body_class'=>'contact_form'
        ));
    }
}
