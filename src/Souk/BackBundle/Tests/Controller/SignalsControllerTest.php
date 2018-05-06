<?php

namespace Souk\BackBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SignalsControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/signals');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/viewEv');
    }

    public function testConsulter()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/viewAnc');
    }

    public function testDeleteev()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteEv');
    }

    public function testDeleteanc()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteAnc');
    }

}
