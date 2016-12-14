<?php

namespace OpenScienceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EndGameControllerTest extends WebTestCase
{
    public function testFirst()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/first');
    }

    public function testSecond()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/second');
    }

    public function testThird()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/third');
    }

}
