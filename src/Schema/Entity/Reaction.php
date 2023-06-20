<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents an emoji reaction to an Announcement.
 */
class Reaction
{ 
    /**
     * The emoji used for the reaction. Either a unicode emoji, or a custom emoji's shortcode.
     * 
     * @param string $name 
     */
    protected string $name;
    
    /**
     * The total number of users who have added this reaction.
     * 
     * @param int $count 
     */
    protected int $count;
    
    /**
     * If there is a currently authorized user: Have you added this reaction?
     * 
     * @param bool $me 
     */
    protected bool $me;
    
    /**
     * If the reaction is a custom emoji: A link to the custom emoji.
     * 
     * @param string $url (URL)
     */
    protected string $url;
    
    /**
     * If the reaction is a custom emoji: A link to a non-animated version of the custom emoji.
     * 
     * @param string $staticUrl (URL)
     */
    protected string $staticUrl;
    
}
