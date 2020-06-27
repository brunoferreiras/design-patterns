<?php

namespace Brunoferreiras\Creational\FactoryMethod;

/**
 * O criador declara um método de fábrica que pode ser usado como uma
 * substituição de chamadas de produtos diretas do construtor, por exemplo:
 *
 * - Antes: $p = new FacebookConnector;
 * - Depois: $p = $this->getSocialNetwork();
 *
 * Isso permite alterar o tipo de produto que está sendo criado pelas
 * subclasses do SocialNetworkPoster.
 */
abstract class SocialNetworkPoster
{
    /**
     * O método de fábrica real. Observe que ele retorna o conector
     * abstrato. Isso permite que as subclasses retornem qualquer conector
     * de concreto sem quebrar o contrato da superclasse.
     *
     * @return SocialNetworkConnector
     */
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    /**
     * Quando o método de fábrica é usado dentro da regra de negócios do
     * do criador, as subclasses podem alterar a lógica indiretamente retornando diferentes tipos de conector do método de fábrica.
     */
    public function post($content): void
    {
        $network = $this->getSocialNetwork();

        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}
