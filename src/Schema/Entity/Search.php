<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents the results of a search.
 */
class Search
{ 
    /**
     * Accounts which match the given query
     * 
     * @param Account[] $accounts of [Account]({{< relref "entities/Account" >}})
     */
    protected array $accounts;
    
    /**
     * Statuses which match the given query
     * 
     * @param Status[] $statuses of [Status]({{< relref "entities/Status" >}})
     */
    protected array $statuses;
    
    /**
     * Hashtags which match the given query
     * 
     * @param Tag[] $hashtags of [Tag]({{< relref "entities/Tag" >}})
     */
    protected array $hashtags;
    
}
