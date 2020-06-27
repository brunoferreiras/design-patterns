<?php

namespace Brunoferreiras\Creational\FactoryMethod;

/**
 * Esse criador é suporta o LinkedIn.
 */
class LinkedInPoster implements SocialNetworkPoster
{
    private string $email;
    private string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}
