<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents the software instance of Mastodon running on this domain.
 */
class Instance
{ 
    /**
     * The domain name of the instance.
     * 
     * @param string $domain 
     */
    protected string $domain;
    
    /**
     * The title of the website.
     * 
     * @param string $title 
     */
    protected string $title;
    
    /**
     * The version of Mastodon installed on the instance.
     * 
     * @param string $version 
     */
    protected string $version;
    
    /**
     * The URL for the source code of the software running on this instance, in keeping with AGPL license requirements.
     * 
     * @param string $sourceUrl (URL)
     */
    protected string $sourceUrl;
    
    /**
     * A short, plain-text description defined by the admin.
     * 
     * @param string $description 
     */
    protected string $description;
    
    /**
     * Usage data for this instance.
     * 
     * @param array $usage 
     */
    protected array $usage;
    
    /**
     * Usage data related to users on this instance.
     * 
     * @param array $usage[users] 
     */
    protected array $usage[users];
    
    /**
     * The number of active users in the past 4 weeks.
     * 
     * @param int $usage[users][activeMonth] 
     */
    protected int $usage[users][activeMonth];
    
    /**
     * An image used to represent this instance.
     * 
     * @param array $thumbnail 
     */
    protected array $thumbnail;
    
    /**
     * The URL for the thumbnail image.
     * 
     * @param string $thumbnail[url] (URL)
     */
    protected string $thumbnail[url];
    
    /**
     * Primary languages of the website and its staff.
     * 
     * @param [] $languages of String (ISO 639-1 two-letter code)
     */
    protected array $languages;
    
    /**
     * Configured values and limits for this website.
     * 
     * @param array $configuration 
     */
    protected array $configuration;
    
    /**
     * URLs of interest for clients apps.
     * 
     * @param array $configuration[urls] 
     */
    protected array $configuration[urls];
    
    /**
     * The Websockets URL for connecting to the streaming API.
     * 
     * @param string $configuration[urls][streamingApi] (URL)
     */
    protected string $configuration[urls][streamingApi];
    
    /**
     * Limits related to accounts.
     * 
     * @param array $configuration[accounts] 
     */
    protected array $configuration[accounts];
    
    /**
     * The maximum number of featured tags allowed for each account.
     * 
     * @param int $configuration[accounts][maxFeaturedTags] 
     */
    protected int $configuration[accounts][maxFeaturedTags];
    
    /**
     * Limits related to authoring statuses.
     * 
     * @param array $configuration[statuses] 
     */
    protected array $configuration[statuses];
    
    /**
     * The maximum number of allowed characters per status.
     * 
     * @param int $configuration[statuses][maxCharacters] 
     */
    protected int $configuration[statuses][maxCharacters];
    
    /**
     * The maximum number of media attachments that can be added to a status.
     * 
     * @param int $configuration[statuses][maxMediaAttachments] 
     */
    protected int $configuration[statuses][maxMediaAttachments];
    
    /**
     * Each URL in a status will be assumed to be exactly this many characters.
     * 
     * @param int $configuration[statuses][charactersReservedPerUrl] 
     */
    protected int $configuration[statuses][charactersReservedPerUrl];
    
    /**
     * Hints for which attachments will be accepted.
     * 
     * @param array $configuration[mediaAttachments] 
     */
    protected array $configuration[mediaAttachments];
    
    /**
     * Contains MIME types that can be uploaded.
     * 
     * @param [] $configuration[mediaAttachments][supportedMimeTypes] of String
     */
    protected array $configuration[mediaAttachments][supportedMimeTypes];
    
    /**
     * The maximum size of any uploaded image, in bytes.
     * 
     * @param int $configuration[mediaAttachments][imageSizeLimit] 
     */
    protected int $configuration[mediaAttachments][imageSizeLimit];
    
    /**
     * The maximum number of pixels (width times height) for image uploads.
     * 
     * @param int $configuration[mediaAttachments][imageMatrixLimit] 
     */
    protected int $configuration[mediaAttachments][imageMatrixLimit];
    
    /**
     * The maximum size of any uploaded video, in bytes.
     * 
     * @param int $configuration[mediaAttachments][videoSizeLimit] 
     */
    protected int $configuration[mediaAttachments][videoSizeLimit];
    
    /**
     * The maximum frame rate for any uploaded video.
     * 
     * @param int $configuration[mediaAttachments][videoFrameRateLimit] 
     */
    protected int $configuration[mediaAttachments][videoFrameRateLimit];
    
    /**
     * The maximum number of pixels (width times height) for video uploads.
     * 
     * @param int $configuration[mediaAttachments][videoMatrixLimit] 
     */
    protected int $configuration[mediaAttachments][videoMatrixLimit];
    
    /**
     * Limits related to polls.
     * 
     * @param array $configuration[polls] 
     */
    protected array $configuration[polls];
    
    /**
     * Each poll is allowed to have up to this many options.
     * 
     * @param int $configuration[polls][maxOptions] 
     */
    protected int $configuration[polls][maxOptions];
    
    /**
     * Each poll option is allowed to have this many characters.
     * 
     * @param int $configuration[polls][maxCharactersPerOption] 
     */
    protected int $configuration[polls][maxCharactersPerOption];
    
    /**
     * The shortest allowed poll duration, in seconds.
     * 
     * @param int $configuration[polls][minExpiration] 
     */
    protected int $configuration[polls][minExpiration];
    
    /**
     * The longest allowed poll duration, in seconds.
     * 
     * @param int $configuration[polls][maxExpiration] 
     */
    protected int $configuration[polls][maxExpiration];
    
    /**
     * Hints related to translation.
     * 
     * @param array $configuration[translation] 
     */
    protected array $configuration[translation];
    
    /**
     * Whether the Translations API is available on this instance.
     * 
     * @param bool $configuration[translation][enabled] 
     */
    protected bool $configuration[translation][enabled];
    
    /**
     * Whether registrations are enabled.
     * 
     * @param bool $registrations[enabled] 
     */
    protected bool $registrations[enabled];
    
    /**
     * Whether registrations require moderator approval.
     * 
     * @param bool $registrations[approvalRequired] 
     */
    protected bool $registrations[approvalRequired];
    
    /**
     * A custom message to be shown when registrations are closed.
     * 
     * @param string|null $registrations[message] {{<nullable>}} String (HTML) or null
     */
    protected string|null $registrations[message] = null;
    
    /**
     * Hints related to contacting a representative of the website.
     * 
     * @param array $contact 
     */
    protected array $contact;
    
    /**
     * An email address that can be messaged regarding inquiries or issues.
     * 
     * @param string $contact[email] (Email)
     */
    protected string $contact[email];
    
    /**
     * An account that can be contacted natively over the network regarding inquiries or issues.
     * 
     * @param Account $contact[account] [Account]({{< relref "entities/Account" >}})
     */
    protected Account $contact[account];
    
    /**
     * An itemized list of rules for this website.
     * 
     * @param Rule[] $rules of [Rule]({{< relref "entities/Rule" >}})
     */
    protected array $rules;
    
}
