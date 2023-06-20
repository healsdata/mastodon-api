<?php

namespace Healsdata\MastodonApi\Schema\Entity\V1;

/**
 * Represents the software instance of Mastodon running on this domain.
 */
class Instance
{ 
    /**
     * The domain name of the instance.
     * 
     * @param string $uri 
     */
    protected string $uri;
    
    /**
     * The title of the website.
     * 
     * @param string $title 
     */
    protected string $title;
    
    /**
     * A short, plain-text description defined by the admin.
     * 
     * @param string $shortDescription 
     */
    protected string $shortDescription;
    
    /**
     * An HTML-permitted description of the Mastodon site.
     * 
     * @param string $description 
     */
    protected string $description;
    
    /**
     * An email that may be contacted for any inquiries.
     * 
     * @param string $email 
     */
    protected string $email;
    
    /**
     * The version of Mastodon installed on the instance.
     * 
     * @param string $version 
     */
    protected string $version;
    
    /**
     * URLs of interest for clients apps.
     * 
     * @param array $urls 
     */
    protected array $urls;
    
    /**
     * The Websockets URL for connecting to the streaming API.
     * 
     * @param string $urls[streamingApi] (URL)
     */
    protected string $urls[streamingApi];
    
    /**
     * Statistics about how much information the instance contains.
     * 
     * @param array $stats 
     */
    protected array $stats;
    
    /**
     * Total users on this instance.
     * 
     * @param int $stats[userCount] 
     */
    protected int $stats[userCount];
    
    /**
     * Total statuses on this instance.
     * 
     * @param int $stats[statusCount] 
     */
    protected int $stats[statusCount];
    
    /**
     * Total domains discovered by this instance.
     * 
     * @param int $stats[domainCount] 
     */
    protected int $stats[domainCount];
    
    /**
     * Banner image for the website.
     * 
     * @param string|null $thumbnail {{<nullable>}} String (URL)
     */
    protected string|null $thumbnail = null;
    
    /**
     * Primary languages of the website and its staff.
     * 
     * @param [] $languages of String (ISO 639-1 two-letter code)
     */
    protected array $languages;
    
    /**
     * Whether registrations are enabled.
     * 
     * @param bool $registrations 
     */
    protected bool $registrations;
    
    /**
     * Whether registrations require moderator approval.
     * 
     * @param bool $approvalRequired 
     */
    protected bool $approvalRequired;
    
    /**
     * Whether invites are enabled.
     * 
     * @param bool $invitesEnabled 
     */
    protected bool $invitesEnabled;
    
    /**
     * Configured values and limits for this website.
     * 
     * @param array $configuration 
     */
    protected array $configuration;
    
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
     * A user that can be contacted, as an alternative to `email`.
     * 
     * @param Account $contactAccount [Account]({{< relref "entities/Account" >}})
     */
    protected Account $contactAccount;
    
    /**
     * An itemized list of rules for this website.
     * 
     * @param Rule[] $rules of [Rule]({{< relref "entities/Rule" >}})
     */
    protected array $rules;
    
}
