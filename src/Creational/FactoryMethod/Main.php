<?php

namespace Brunoferreiras\Creational\FactoryMethod;

class Main
{
    private function clientCode(SocialNetworkPoster $creator)
    {
        $creator->post('Hello world!');
        $creator->post('I had a large hamburger this morning!');
    }

    public function run()
    {
        echo "Testing ConcreteCreator1: \n";
        $this->clientCode(new FacebookPoster('bruno', '******'));
        echo "\n\n";

        echo "Testing ConcreteCreator2: \n";
        $this->clientCode(new LinkedInPoster("bruno@example.com", "*****"));
    }
}
