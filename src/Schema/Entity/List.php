<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a list of some users that the authenticated user follows.
 */
class List
{ 
    /**
     * The internal database ID of the list.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The user-defined title of the list.
     * 
     * @param string $title 
     */
    protected string $title;
    
    /**
     * Which replies should be shown in the list.
     * 
     * @param string $repliesPolicy (Enumerable oneOf)
     */
    protected string $repliesPolicy;
    
}
