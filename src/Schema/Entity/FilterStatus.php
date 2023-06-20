<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a status ID that, if matched, should cause the filter action to be taken.
 */
class FilterStatus
{ 
    /**
     * The ID of the FilterStatus in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The ID of the Status that will be filtered.
     * 
     * @param string $statusId (cast from an integer, but not guaranteed to be a number)
     */
    protected string $statusId;
    
}
