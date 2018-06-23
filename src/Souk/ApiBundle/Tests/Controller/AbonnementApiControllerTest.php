<?php

namespace Souk\ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AbonnementApiControllerTest extends WebTestCase
{
    public function testListe()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/liste');
    }

}
