<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a user-defined filter for determining which statuses should not be shown to the user.
 */
class Filter
{ 
    /**
     * The ID of the Filter in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * A title given by the user to name the filter.
     * 
     * @param string $title 
     */
    protected string $title;
    
    /**
     * The contexts in which the filter should be applied.
     * 
     * @param [] $context of String (Enumerable, anyOf)
     */
    protected array $context;
    
    /**
     * When the filter should no longer be applied.
     * 
     * @param string|null $expiresAt {{<nullable>}} String (ISO 8601 Datetime), or null if the filter does not expire
     */
    protected string|null $expiresAt = null;
    
    /**
     * The action to be taken when a status matches this filter.
     * 
     * @param string $filterAction (Enumerable, oneOf)
     */
    protected string $filterAction;
    
    /**
     * The keywords grouped under this filter.
     * 
     * @param FilterKeyword[] $keywords of [FilterKeyword]({{< relref "entities/FilterKeyword" >}})
     */
    protected array $keywords;
    
    /**
     * The statuses grouped under this filter.
     * 
     * @param FilterStatus[] $statuses of [FilterStatus]({{< relref "entities/FilterStatus" >}})
     */
    protected array $statuses;
    
}
