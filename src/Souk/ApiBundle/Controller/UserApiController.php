<?php

namespace Souk\ApiBundle\Controller;

use Souk\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserApiController extends Controller
{

///se connecter à traver l'application
  public function getUserAction($login, $password)
  {


    /*$errors = [];
    $errors[] = 'succ';
*/
    $passwordEncoder = $this->get('security.password_encoder');

    $serializer = new   Serializer([new ObjectNormalizer()]);
    $user = $this->getDoctrine()->getManager()
      ->getRepository('UserBundle:User')
      ->findBy(array("username" => $login));
    if (!$passwordEncoder->isPasswordValid($user[0], $password, $user[0]->getSalt())) {
      $formatted = $serializer->normalize('erreur', 'json');

      return new JsonResponse($formatted);

    }
    else{

      $formatted = $serializer->normalize($user, 'json');
      return new JsonResponse($formatted);

    }




  }

}
