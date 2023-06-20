<?php

namespace Healsdata\MastodonApi\Schema\Entity\Admin;

/**
 * Represents an IP address range that cannot be used to sign up.
 */
class IpBlock
{ 
    /**
     * The ID of the DomainBlock in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The IP address range that is not allowed to federate.
     * 
     * @param string $ip (IP address and prefix)
     */
    protected string $ip;
    
    /**
     * The associated policy with this IP block.
     * 
     * @param string $severity (Enumerable, oneOf)
     */
    protected string $severity;
    
    /**
     * The recorded reason for this IP block.
     * 
     * @param string $comment 
     */
    protected string $comment;
    
    /**
     * When the IP block was created.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
    /**
     * When the IP block will expire.
     * 
     * @param string|null $expiresAt {{<nullable>}} String (ISO 8601 Datetime)
     */
    protected string|null $expiresAt = null;
    
}
