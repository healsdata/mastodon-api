<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a custom emoji.
 */
class CustomEmoji
{ 
    /**
     * The name of the custom emoji.
     * 
     * @param string $shortcode 
     */
    protected string $shortcode;
    
    /**
     * A link to the custom emoji.
     * 
     * @param string $url (URL)
     */
    protected string $url;
    
    /**
     * A link to a static copy of the custom emoji.
     * 
     * @param string $staticUrl (URL)
     */
    protected string $staticUrl;
    
    /**
     * Whether this Emoji should be visible in the picker or unlisted.
     * 
     * @param bool $visibleInPicker 
     */
    protected bool $visibleInPicker;
    
    /**
     * Used for sorting custom emoji in the picker.
     * 
     * @param string $category 
     */
    protected string $category;
    
}
