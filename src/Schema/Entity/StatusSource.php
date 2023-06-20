<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a status's source as plain text.
 */
class StatusSource
{ 
    /**
     * ID of the status in the database.
     * 
     * @param string $id (cast from an integer but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The plain text used to compose the status.
     * 
     * @param string $text 
     */
    protected string $text;
    
    /**
     * The plain text used to compose the status's subject or content warning.
     * 
     * @param string $spoilerText 
     */
    protected string $spoilerText;
    
}
