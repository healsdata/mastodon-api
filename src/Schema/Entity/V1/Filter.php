<?php

namespace Healsdata\MastodonApi\Schema\Entity\V1;

/**
 * Represents a user-defined filter for determining which statuses should not be shown to the user. Contains a single keyword or phrase.
 */
class Filter
{ 
    /**
     * The ID of the filter in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The text to be filtered.
     * 
     * @param string $phrase 
     */
    protected string $phrase;
    
    /**
     * The contexts in which the filter should be applied.
     * 
     * @param [] $context of String (Enumerable anyOf)
     */
    protected array $context;
    
    /**
     * When the filter should no longer be applied.
     * 
     * @param string|null $expiresAt {{<nullable>}} String (ISO 8601 Datetime), or null if the filter does not expire
     */
    protected string|null $expiresAt = null;
    
    /**
     * Should matching entities in home and notifications be dropped by the server? See [implementation guidelines for filters]({{< relref "api/guidelines#filters" >}}).
     * 
     * @param bool $irreversible 
     */
    protected bool $irreversible;
    
    /**
     * Should the filter consider word boundaries? See [implementation guidelines for filters]({{< relref "api/guidelines#filters" >}}).
     * 
     * @param bool $wholeWord 
     */
    protected bool $wholeWord;
    
}
