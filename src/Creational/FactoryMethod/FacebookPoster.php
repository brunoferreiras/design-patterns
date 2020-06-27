<?php

namespace Brunoferreiras\Creational\FactoryMethod;

/**
 * Esse criador é compatível com o Facebook. Lembre-se que esta classe
 * também hera o método 'post' da classe pai.
 * Criadores concretos são as classes que o cliente realmente usa.
 */
class FacebookPoster extends SocialNetworkPoster
{
    private string $login;
    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}
