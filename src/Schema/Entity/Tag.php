<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a hashtag used within the content of a status.
 */
class Tag
{ 
    /**
     * The value of the hashtag after the # sign.
     * 
     * @param string $name 
     */
    protected string $name;
    
    /**
     * A link to the hashtag on the instance.
     * 
     * @param string $url (URL)
     */
    protected string $url;
    
    /**
     * Usage statistics for given days (typically the past week).
     * 
     * @param [] $history of Hash
     */
    protected array $history;
    
    /**
     * UNIX timestamp on midnight of the given day.
     * 
     * @param string $history[][day] (UNIX timestamp)
     */
    protected string $history[][day];
    
    /**
     * The counted usage of the tag within that day.
     * 
     * @param string $history[][uses] (cast from an integer)
     */
    protected string $history[][uses];
    
    /**
     * The total of accounts using the tag within that day.
     * 
     * @param string $history[][accounts] (cast from an integer)
     */
    protected string $history[][accounts];
    
    /**
     * Whether the current token's authorized user is following this tag.
     * 
     * @param bool $following 
     */
    protected bool $following;
    
    /**
     * The ID of the Tag in the database.
     * 
     * @param string $id (cast from integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * Whether the hashtag has been approved to trend.
     * 
     * @param bool $trendable 
     */
    protected bool $trendable;
    
    /**
     * Whether the hashtag has not been disabled from auto-linking.
     * 
     * @param bool $usable 
     */
    protected bool $usable;
    
    /**
     * Whether the hashtag has not been reviewed yet to approve or deny its trending.
     * 
     * @param bool $requiresReview 
     */
    protected bool $requiresReview;
    
}
