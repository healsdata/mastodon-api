<?php

namespace Healsdata\MastodonApi\Schema\Entity\Admin;

/**
 * Represents a domain allowed to federate.
 */
class DomainAllow
{ 
    /**
     * The ID of the DomainAllow in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The domain that is allowed to federate.
     * 
     * @param string $domain 
     */
    protected string $domain;
    
    /**
     * When the domain was allowed to federate.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
}
