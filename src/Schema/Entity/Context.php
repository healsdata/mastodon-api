<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents the tree around a given status. Used for reconstructing threads of statuses.
 */
class Context
{ 
    /**
     * Parents in the thread.
     * 
     * @param Status[] $ancestors of [Status]({{< relref "entities/Status" >}})
     */
    protected array $ancestors;
    
    /**
     * Children in the thread.
     * 
     * @param Status[] $descendants of [Status]({{< relref "entities/Status" >}})
     */
    protected array $descendants;
    
}
