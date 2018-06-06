<?php

namespace Souk\ApiBundle\Controller;

use Souk\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;


class UserApiController extends Controller
{

    public function getUserAction($login, $password)
    {
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new   Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $user = $this->getDoctrine()->getManager()
            ->getRepository('FreelancerBundle:User')
            ->findBy(array("username" => $login));
<<<<<<< HEAD
        if (!$passwordEncoder->isPasswordValid($user[0], $password, $user[0]->getSalt())) {



=======
        $passwordEncoder = $this->get('security.password_encoder');
        
        if ($user!= null){
            if(!$passwordEncoder->isPasswordValid($user[0], $password, $user[0]->getSalt()))
            {
                $formatted = $serializer->normalize('erreur', 'json');
                return new JsonResponse($formatted);
            }else {
                $formatted = $serializer->normalize($user, 'json');
                return new JsonResponse($formatted);
            }
        }else{
>>>>>>> 774c7f8b1e1a154fc797224c226c03cca4959cfe
            $formatted = $serializer->normalize('erreur', 'json');
            return new JsonResponse($formatted);
        }
    }

}
