<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a domain that is blocked by the instance.
 */
class DomainBlock
{ 
    /**
     * The domain which is blocked. This may be obfuscated or partially censored.
     * 
     * @param string $domain 
     */
    protected string $domain;
    
    /**
     * The SHA256 hash digest of the domain string.
     * 
     * @param string $digest (SHA256)
     */
    protected string $digest;
    
    /**
     * The level to which the domain is blocked.
     * 
     * @param string $severity (Enumerable, oneOf)
     */
    protected string $severity;
    
}
