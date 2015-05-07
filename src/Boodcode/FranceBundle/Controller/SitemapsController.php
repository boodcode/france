<?php
// src/Boodcode/FranceBundle/Controller/WorkController.php


namespace Boodcode\FranceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Boodcode\FranceBundle\Entity\Work;

class SitemapsController extends Controller
{

    /**
     * @Route("/sitemap.{_format}", name="sitemaps_sitemap", Requirements={"_format" = "xml"})
     * @Template("BoodcodeFranceBundle:Sitemaps:sitemap.xml.twig")
     */
    public function sitemapAction() 
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $urls = array();
        $hostname = $this->getRequest()->getHost();

        // add some urls homepage
        $urls[] = array(
        	'loc' => $this->get('router')->generate('boodcode_france_homepage'),
        	'changefreq' => 'weekly', 
        	'priority' => '1.0'
        	);
        $urls[] = array(
        	'loc' => $this->get('router')->generate('boodcode_france_about'),
        	'changefreq' => 'weekly', 
        	'priority' => '1.0'
        	);
        $urls[] = array(
        	'loc' => $this->get('router')->generate('boodcode_france_clients'),
        	'changefreq' => 'weekly', 
        	'priority' => '1.0'
        	);

        //print_r($urls);
        // multi-lang pages
        /*
        foreach($languages as $lang) {
            $urls[] = array('loc' => $this->get('router')->generate('boodcode_france_about', array('_locale' => $lang)), 'changefreq' => 'monthly', 'priority' => '0.3');
        }
        */
        
        // urls from database
        
        //$urls[] = array('loc' => $this->get('router')->generate('home_product_overview', array('_locale' => 'en')), 'changefreq' => 'weekly', 'priority' => '0.7');
        // service
        foreach ($em->getRepository('BoodcodeFranceBundle:Work')->findAll() as $work) {
            $urls[] = array(
            	'loc' => $this->get('router')->generate('boodcode_france_work', array('slug' => $work->getSlug())),
                'priority' => '0.5'
                );
        }
        

        return array('urls' => $urls, 'hostname' => $hostname);
    }
}