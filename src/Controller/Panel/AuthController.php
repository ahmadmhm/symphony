<?php

namespace App\Controller\Panel;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthController extends AbstractController
{

    public function show(Request $request)
    {
        return $this->render('panel/auth/login.html.twig');
    }
}