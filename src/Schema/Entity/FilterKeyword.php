<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a keyword that, if matched, should cause the filter action to be taken.
 */
class FilterKeyword
{ 
    /**
     * The ID of the FilterKeyword in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The phrase to be matched against.
     * 
     * @param string $keyword 
     */
    protected string $keyword;
    
    /**
     * Should the filter consider word boundaries? See [implementation guidelines for filters]({{< relref "api/guidelines#filters" >}}).
     * 
     * @param bool $wholeWord 
     */
    protected bool $wholeWord;
    
}
