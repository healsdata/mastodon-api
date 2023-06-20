<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents an error message.
 */
class Error
{ 
    /**
     * The error message.
     * 
     * @param string $error 
     */
    protected string $error;
    
    /**
     * A longer description of the error, mainly provided with the OAuth API.
     * 
     * @param string $errorDescription 
     */
    protected string $errorDescription;
    
}
