<?php declare(strict_types=1);

namespace Brunoferreiras\Creational\FactoryMethod\Tests;

use Brunoferreiras\Creational\FactoryMethod\FacebookConnector;
use Brunoferreiras\Creational\FactoryMethod\FacebookPoster;
use Brunoferreiras\Creational\FactoryMethod\LinkedInConnector;
use Brunoferreiras\Creational\FactoryMethod\LinkedInPoster;
use PHPUnit\Framework\TestCase;

class SocialNetworkPosterTest extends TestCase
{
    public function testCanCreateFacebookPoster()
    {
        $networkFactory = new FacebookPoster('bruno', '****');
        $connector = $networkFactory->getSocialNetwork();
        $this->assertInstanceOf(FacebookConnector::class, $connector);
    }

    public function testCanCreateLinkedInPoster()
    {
        $networkFactory = new LinkedInPoster('bruno', '****');
        $connector = $networkFactory->getSocialNetwork();
        $this->assertInstanceOf(LinkedInConnector::class, $connector);
    }
}
