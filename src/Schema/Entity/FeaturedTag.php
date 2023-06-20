<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a hashtag that is featured on a profile.
 */
class FeaturedTag
{ 
    /**
     * The internal ID of the featured tag in the database.
     * 
     * @param string $id (cast from integer but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The name of the hashtag being featured.
     * 
     * @param string $name 
     */
    protected string $name;
    
    /**
     * A link to all statuses by a user that contain this hashtag.
     * 
     * @param string $url (URL)
     */
    protected string $url;
    
    /**
     * The number of authored statuses containing this hashtag.
     * 
     * @param int $statusesCount 
     */
    protected int $statusesCount;
    
    /**
     * The timestamp of the last authored status containing this hashtag.
     * 
     * @param string $lastStatusAt (ISO 8601 Datetime)
     */
    protected string $lastStatusAt;
    
}
