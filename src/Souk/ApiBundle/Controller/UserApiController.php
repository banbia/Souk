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
=======
///se connecter à traver l'application
>>>>>>> 3ba7a57b7ea4ad47aae70f36d28acc192a2b98c1
    public function getUserAction($login, $password)
    {

        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);

<<<<<<< HEAD
        /*$errors = [];
        $errors[] = 'succ';
    */

        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
=======

        $serializer = new   Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $passwordEncoder = $this->get('security.password_encoder');
>>>>>>> 3ba7a57b7ea4ad47aae70f36d28acc192a2b98c1

        $user = $this->getDoctrine()->getManager()
            ->getRepository('UserBundle:User')
            ->findBy(array("username" => $login));
<<<<<<< HEAD
        $passwordEncoder = $this->get('security.password_encoder');

        if (!$passwordEncoder->isPasswordValid($user[0], $password, $user[0]->getSalt())) {
            $formatted = $serializer->normalize('erreur', 'json');

            return new JsonResponse($formatted);

        } else {

            $formatted = $serializer->normalize($user, 'json');
            return new JsonResponse($formatted);

        }
=======
        if (!$passwordEncoder->isPasswordValid($user[0], $password, $user[0]->getSalt())) {

<<<<<<< HEAD
=======
    }else{
>>>>>>> e501a072b342ef776d0ad190ff3dfa13f3c82b07

            $formatted = $serializer->normalize('erreur', 'json');

            return new JsonResponse($formatted);

        } else {

            $formatted = $serializer->normalize($user, 'json');
            return new JsonResponse($formatted);
>>>>>>> 3ba7a57b7ea4ad47aae70f36d28acc192a2b98c1

        }

<<<<<<< HEAD
=======

>>>>>>> 3ba7a57b7ea4ad47aae70f36d28acc192a2b98c1
    }

}
