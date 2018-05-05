<?php

namespace Souk\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserApiController extends Controller
{

///se connecter à traver l'application
  public function getUserAction($login, $password)
  {
    $user = $this->getDoctrine()->getManager()
      ->getRepository('UserBundle:User')
      ->findBy(array("username" => $login, "password" => md5($password)));

//var_dump( md5($password) );
    $serializer = new   Serializer([new ObjectNormalizer()]);
    $formatted = $serializer->normalize($user, 'json');

    return new JsonResponse($formatted);
  }


}
