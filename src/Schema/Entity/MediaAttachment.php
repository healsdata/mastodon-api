<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a file or media attachment that can be added to a status.
 */
class MediaAttachment
{ 
    /**
     * The ID of the attachment in the database.
     * 
     * @param string $id (cast from an integer but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The type of the attachment.
     * 
     * @param string $type (Enumerable, oneOf)
     */
    protected string $type;
    
    /**
     * The location of the original full-size attachment.
     * 
     * @param string $url (URL)
     */
    protected string $url;
    
    /**
     * The location of a scaled-down preview of the attachment.
     * 
     * @param string $previewUrl (URL)
     */
    protected string $previewUrl;
    
    /**
     * The location of the full-size original attachment on the remote website.
     * 
     * @param string|null $remoteUrl {{<nullable>}} String (URL), or null if the attachment is local
     */
    protected string|null $remoteUrl = null;
    
    /**
     * Metadata returned by Paperclip.
     * 
     * @param array $meta 
     */
    protected array $meta;
    
    /**
     * Alternate text that describes what is in the media attachment, to be used for the visually impaired or when media attachments do not load.
     * 
     * @param string $description 
     */
    protected string $description;
    
    /**
     * A hash computed by [the BlurHash algorithm](https://github.com/woltapp/blurhash), for generating colorful preview thumbnails when media has not been downloaded yet.
     * 
     * @param string $blurhash (Blurhash)
     */
    protected string $blurhash;
    
    /**
     * A shorter URL for the attachment.
     * 
     * @param string $textUrl (URL)
     */
    protected string $textUrl;
    
}
