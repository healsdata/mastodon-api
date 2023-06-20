<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents the relationship between accounts, such as following / blocking / muting / etc.
 */
class Relationship
{ 
    /**
     * The account ID.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * Are you following this user?
     * 
     * @param bool $following 
     */
    protected bool $following;
    
    /**
     * Are you receiving this user's boosts in your home timeline?
     * 
     * @param bool $showingReblogs 
     */
    protected bool $showingReblogs;
    
    /**
     * Have you enabled notifications for this user?
     * 
     * @param bool $notifying 
     */
    protected bool $notifying;
    
    /**
     * Which languages are you following from this user?
     * 
     * @param [] $languages of String (ISO 639-1 language two-letter code)
     */
    protected array $languages;
    
    /**
     * Are you followed by this user?
     * 
     * @param bool $followedBy 
     */
    protected bool $followedBy;
    
    /**
     * Are you blocking this user?
     * 
     * @param bool $blocking 
     */
    protected bool $blocking;
    
    /**
     * Is this user blocking you?
     * 
     * @param bool $blockedBy 
     */
    protected bool $blockedBy;
    
    /**
     * Are you muting this user?
     * 
     * @param bool $muting 
     */
    protected bool $muting;
    
    /**
     * Are you muting notifications from this user?
     * 
     * @param bool $mutingNotifications 
     */
    protected bool $mutingNotifications;
    
    /**
     * Do you have a pending follow request for this user?
     * 
     * @param bool $requested 
     */
    protected bool $requested;
    
    /**
     * Are you blocking this user's domain?
     * 
     * @param bool $domainBlocking 
     */
    protected bool $domainBlocking;
    
    /**
     * Are you featuring this user on your profile?
     * 
     * @param bool $endorsed 
     */
    protected bool $endorsed;
    
    /**
     * This user's profile bio
     * 
     * @param string $note 
     */
    protected string $note;
    
}
