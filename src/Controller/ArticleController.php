<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{

    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response('Yeeaaa');
    }

    /**
     * @Route("/news/{slug}")
     */

    public function show($slug)
    {
        return new Response(sprintf(
            'Hello evely budy: %s',
            $slug
        ));
    }
}