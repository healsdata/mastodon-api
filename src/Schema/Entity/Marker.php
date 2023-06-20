<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents the last read position within a user's timelines.
 */
class Marker
{ 
    /**
     * The ID of the most recently viewed entity.
     * 
     * @param string $lastReadId (cast from integer but not guaranteed to be a number)
     */
    protected string $lastReadId;
    
    /**
     * An incrementing counter, used for locking to prevent write conflicts.
     * 
     * @param int $version 
     */
    protected int $version;
    
    /**
     * The timestamp of when the marker was set.
     * 
     * @param string $updatedAt (ISO 8601 Datetime)
     */
    protected string $updatedAt;
    
}
