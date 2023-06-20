<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a suggested account to follow and an associated reason for the suggestion.
 */
class Suggestion
{ 
    /**
     * The reason this account is being suggested.
     * 
     * @param string $source (Enumerable oneOf)
     */
    protected string $source;
    
    /**
     * The account being recommended to follow.
     * 
     * @param Account $account [Account]({{< relref "entities/Account" >}})
     */
    protected Account $account;
    
}
