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
interface SocialNetworkPoster
{
    /**
     * O método de fábrica real. Observe que ele retorna o conector
     * abstrato. Isso permite que as subclasses retornem qualquer conector
     * de concreto sem quebrar o contrato da superclasse.
     *
     * @return SocialNetworkConnector
     */
    public function getSocialNetwork(): SocialNetworkConnector;
}
