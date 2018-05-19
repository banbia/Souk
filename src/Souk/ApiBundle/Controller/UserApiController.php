<?php

namespace Souk\ApiBundle\Controller;

use Souk\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;


class UserApiController extends Controller
{

<<<<<<< HEAD
///se connecter à traver l'application
    public function getUserAction($login, $password)
    {
=======

///se connecter à traver l'application
    public function getUserAction($login, $password)
    {

        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);


        /*$errors = [];
        $errors[] = 'succ';
    */

>>>>>>> f4940d4d621a78dee3783736c63804b2fe4ff646
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
<<<<<<< HEAD

=======


        $serializer = new   Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $passwordEncoder = $this->get('security.password_encoder');
>>>>>>> f4940d4d621a78dee3783736c63804b2fe4ff646


        $user = $this->getDoctrine()->getManager()
            ->getRepository('UserBundle:User')
            ->findBy(array("username" => $login));
<<<<<<< HEAD
=======

>>>>>>> f4940d4d621a78dee3783736c63804b2fe4ff646
        $passwordEncoder = $this->get('security.password_encoder');

        if (!$passwordEncoder->isPasswordValid($user[0], $password, $user[0]->getSalt())) {
            $formatted = $serializer->normalize('erreur', 'json');

            return new JsonResponse($formatted);

        } else {

            $formatted = $serializer->normalize($user, 'json');
            return new JsonResponse($formatted);

        }
<<<<<<< HEAD
=======


>>>>>>> f4940d4d621a78dee3783736c63804b2fe4ff646


    }

}
