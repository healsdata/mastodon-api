<?php

namespace Healsdata\MastodonApi\Schema\Entity\Admin;

/**
 * Represents a domain limited from federating.
 */
class DomainBlock
{ 
    /**
     * The ID of the DomainBlock in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The domain that is not allowed to federate.
     * 
     * @param string $domain 
     */
    protected string $domain;
    
    /**
     * When the domain was blocked from federating.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
    /**
     * The policy to be applied by this domain block.
     * 
     * @param string $severity (Enumerable oneOf)
     */
    protected string $severity;
    
    /**
     * Whether to reject media attachments from this domain
     * 
     * @param bool $rejectMedia 
     */
    protected bool $rejectMedia;
    
    /**
     * Whether to reject reports from this domain
     * 
     * @param bool $rejectReports 
     */
    protected bool $rejectReports;
    
    /**
     * 
     * 
     * @param string|null $privateComment {{<nullable>}} String
     */
    protected string|null $privateComment = null;
    
    /**
     * 
     * 
     * @param string|null $publicComment {{<nullable>}} String
     */
    protected string|null $publicComment = null;
    
    /**
     * Whether to obfuscate public displays of this domain block
     * 
     * @param bool $obfuscate 
     */
    protected bool $obfuscate;
    
}
