<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a rule that server users should follow.
 */
class Rule
{ 
    /**
     * An identifier for the rule.
     * 
     * @param string $id (cast from integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The rule to be followed.
     * 
     * @param string $text 
     */
    protected string $text;
    
}
