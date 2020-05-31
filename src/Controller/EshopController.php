<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EshopController extends AbstractController
{
    /**
     * @Route("/", name="eshop")
     */
    public function index()
    {
        return $this->render('eshop/index.html.twig', [
            'controller_name' => 'EshopController',
        ]);
    }

    /**
     * @Route("/search", name="search")
     */
    public function search()
    {
        // In a real world app, this value would come from the Request object, now it is just a simulation
        $search = 'laptops';

        // simulate call to database
        sleep(1);

        // simulate result from database
        $result = ' coming from database.';

        return new Response('Your search results for '.$search.$result);
    }

    /**
     * @Route("/signup-sms", name="signup-sms")
     */
    public function SignUpSMS()
    {
        $phoneNumber = '111 222 333';

        // connect to api for external sms service provider, to send welcome msg after signup
        // simulate it
        sleep(2);

        return new Response(sprintf('Your phone number %s is succesfully signed up to our sms newsletter!', $phoneNumber));
    }

        /**
     * @Route("/order", name="order")
     */
    public function Order()
    {
        $productId = 4873;
        $productName = 'product name';
        $productAmount = 4;

        // save order to database

        // send email to client confirming the order (product name, amount, price, etc...)

        // update warehouse database to keep stock update in physical stores
        sleep(3);

        return new Response('Product ordered! - ' . $productName);
    }
}
