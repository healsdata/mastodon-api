<?php

namespace Healsdata\MastodonApi\Schema\Entity\Admin;

/**
 * Represents a canonical email block (hashed).
 */
class CanonicalEmailBlock
{ 
    /**
     * The ID of the email block in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The SHA256 hash of the canonical email address.
     * 
     * @param string $canonicalEmailHash (SHA256)
     */
    protected string $canonicalEmailHash;
    
}
