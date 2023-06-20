<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a subset of your follows who also follow some other user.
 */
class FamiliarFollowers
{ 
    /**
     * The ID of the Account in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * Accounts you follow that also follow this account.
     * 
     * @param Account[] $accounts of [Account]({{< relref "entities/Account" >}})
     */
    protected array $accounts;
    
}
