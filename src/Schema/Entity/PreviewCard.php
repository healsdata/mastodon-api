<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a rich preview card that is generated using OpenGraph tags from a URL.
 */
class PreviewCard
{ 
    /**
     * Location of linked resource.
     * 
     * @param string $url (URL)
     */
    protected string $url;
    
    /**
     * Title of linked resource.
     * 
     * @param string $title 
     */
    protected string $title;
    
    /**
     * Description of preview.
     * 
     * @param string $description 
     */
    protected string $description;
    
    /**
     * The type of the preview card.
     * 
     * @param string $type (Enumerable, oneOf)
     */
    protected string $type;
    
    /**
     * The author of the original resource.
     * 
     * @param string $authorName 
     */
    protected string $authorName;
    
    /**
     * A link to the author of the original resource.
     * 
     * @param string $authorUrl (URL)
     */
    protected string $authorUrl;
    
    /**
     * The provider of the original resource.
     * 
     * @param string $providerName 
     */
    protected string $providerName;
    
    /**
     * A link to the provider of the original resource.
     * 
     * @param string $providerUrl (URL)
     */
    protected string $providerUrl;
    
    /**
     * HTML to be used for generating the preview card.
     * 
     * @param string $html (HTML)
     */
    protected string $html;
    
    /**
     * Width of preview, in pixels.
     * 
     * @param int $width 
     */
    protected int $width;
    
    /**
     * Height of preview, in pixels.
     * 
     * @param int $height 
     */
    protected int $height;
    
    /**
     * Preview thumbnail.
     * 
     * @param string|null $image {{<nullable>}} String (URL)
     */
    protected string|null $image = null;
    
    /**
     * Used for photo embeds, instead of custom `html`.
     * 
     * @param string $embedUrl (URL)
     */
    protected string $embedUrl;
    
    /**
     * A hash computed by [the BlurHash algorithm](https://github.com/woltapp/blurhash), for generating colorful preview thumbnails when media has not been downloaded yet.
     * 
     * @param string|null $blurhash {{<nullable>}} String
     */
    protected string|null $blurhash = null;
    
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
     * The counted accounts using the link within that day.
     * 
     * @param string $history[][accounts] (cast from an integer)
     */
    protected string $history[][accounts];
    
    /**
     * The counted statuses using the link within that day.
     * 
     * @param string $history[][uses] (cast from an integer)
     */
    protected string $history[][uses];
    
}
