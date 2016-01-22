<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;


class DefaultController extends Controller
{
//    /**
//     * @Route("/", name="homepage")
//     */
//    public function indexAction(Request $request)
//    {
//        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
//        ]);
//    }

//    /**
//     * @Route("/", name="create")
//     */
//    public function createAction()
//    {
//        $product = new Product();
//        $product->setName('A Foo Bar');
//        $product->setPrice('19');
//        $product->setDescription('Lorem ipsum dolor');
//
//        $em = $this->getDoctrine()->getManager();
//
//        $em->persist($product);
//        $em->flush();
//
//        return new Response('Created product id '.$product->getId());
//    }

    /**
     * @Route("/", name="create")
     */
    public function createAction()
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find(1);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '. 1
            );
        }

        return new Response('Created product id '.$product->getId());
    }

}


