<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a user of Mastodon and their associated profile.
 */
class Account
{ 
    /**
     * The account id.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The username of the account, not including domain.
     * 
     * @param string $username 
     */
    protected string $username;
    
    /**
     * The Webfinger account URI. Equal to `username` for local users, or `username@domain` for remote users.
     * 
     * @param string $acct 
     */
    protected string $acct;
    
    /**
     * The location of the user's profile page.
     * 
     * @param string $url (URL)
     */
    protected string $url;
    
    /**
     * The profile's display name.
     * 
     * @param string $displayName 
     */
    protected string $displayName;
    
    /**
     * The profile's bio or description.
     * 
     * @param string $note (HTML)
     */
    protected string $note;
    
    /**
     * An image icon that is shown next to statuses and in the profile.
     * 
     * @param string $avatar (URL)
     */
    protected string $avatar;
    
    /**
     * A static version of the avatar. Equal to `avatar` if its value is a static image; different if `avatar` is an animated GIF.
     * 
     * @param string $avatarStatic (URL)
     */
    protected string $avatarStatic;
    
    /**
     * An image banner that is shown above the profile and in profile cards.
     * 
     * @param string $header (URL)
     */
    protected string $header;
    
    /**
     * A static version of the header. Equal to `header` if its value is a static image; different if `header` is an animated GIF.
     * 
     * @param string $headerStatic (URL)
     */
    protected string $headerStatic;
    
    /**
     * Whether the account manually approves follow requests.
     * 
     * @param bool $locked 
     */
    protected bool $locked;
    
    /**
     * Additional metadata attached to a profile as name-value pairs.
     * 
     * @param Field[] $fields of [Field](#Field)
     */
    protected array $fields;
    
    /**
     * Custom emoji entities to be used when rendering the profile.
     * 
     * @param CustomEmoji[] $emojis of [CustomEmoji]({{< relref "entities/CustomEmoji" >}})
     */
    protected array $emojis;
    
    /**
     * Indicates that the account may perform automated actions, may not be monitored, or identifies as a robot.
     * 
     * @param bool $bot 
     */
    protected bool $bot;
    
    /**
     * Indicates that the account represents a Group actor.
     * 
     * @param bool $group 
     */
    protected bool $group;
    
    /**
     * Whether the account has opted into discovery features such as the profile directory.
     * 
     * @param bool|null $discoverable {{<nullable>}} Boolean
     */
    protected bool|null $discoverable = null;
    
    /**
     * Whether the local user has opted out of being indexed by search engines.
     * 
     * @param bool|null $noindex {{<nullable>}} Boolean
     */
    protected bool|null $noindex = null;
    
    /**
     * Indicates that the profile is currently inactive and that its user has moved to a new account.
     * 
     * @param Account|null $moved {{<nullable>}} [Account]({{< relref "entities/Account" >}}), or null if the profile is suspended.
     */
    protected Account|null $moved = null;
    
    /**
     * An extra attribute returned only when an account is suspended.
     * 
     * @param bool $suspended 
     */
    protected bool $suspended;
    
    /**
     * An extra attribute returned only when an account is silenced. If true, indicates that the account should be hidden behind a warning screen.
     * 
     * @param bool $limited 
     */
    protected bool $limited;
    
    /**
     * When the account was created.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
    /**
     * When the most recent status was posted.
     * 
     * @param string|null $lastStatusAt {{<nullable>}} String (ISO 8601 Date), or null if no statuses
     */
    protected string|null $lastStatusAt = null;
    
    /**
     * How many statuses are attached to this account.
     * 
     * @param int $statusesCount 
     */
    protected int $statusesCount;
    
    /**
     * The reported followers of this profile.
     * 
     * @param int $followersCount 
     */
    protected int $followersCount;
    
    /**
     * The reported follows of this profile.
     * 
     * @param int $followingCount 
     */
    protected int $followingCount;
    
    /**
     * An extra attribute that contains source values to be used with API methods that [verify credentials]({{< relref "methods/accounts#verify_credentials" >}}) and [update credentials]({{< relref "methods/accounts#update_credentials" >}}).
     * 
     * @param array $source 
     */
    protected array $source;
    
    /**
     * Profile bio, in plain-text instead of in HTML.
     * 
     * @param string $source[note] 
     */
    protected string $source[note];
    
    /**
     * Metadata about the account.
     * 
     * @param Field[] $source[fields] of [Field](#Field)
     */
    protected array $source[fields];
    
    /**
     * The default post privacy to be used for new statuses.
     * 
     * @param string $source[privacy] (Enumerable, oneOf)
     */
    protected string $source[privacy];
    
    /**
     * Whether new statuses should be marked sensitive by default.
     * 
     * @param bool $source[sensitive] 
     */
    protected bool $source[sensitive];
    
    /**
     * The default posting language for new statuses.
     * 
     * @param string $source[language] (ISO 639-1 language two-letter code) or empty string
     */
    protected string $source[language];
    
    /**
     * The number of pending follow requests.
     * 
     * @param int $source[followRequestsCount] 
     */
    protected int $source[followRequestsCount];
    
    /**
     * The role assigned to the currently authorized user.
     * 
     * @param Role $role [Role]({{< relref "entities/Role" >}})
     */
    protected Role $role;
    
    /**
     * When a timed mute will expire, if applicable.
     * 
     * @param string|null $muteExpiresAt {{<nullable>}} String (ISO 8601 Datetime), or null if the mute is indefinite
     */
    protected string|null $muteExpiresAt = null;
    
    /**
     * The key of a given field's key-value pair.
     * 
     * @param string $name 
     */
    protected string $name;
    
    /**
     * The value associated with the `name` key.
     * 
     * @param string $value (HTML)
     */
    protected string $value;
    
    /**
     * Timestamp of when the server verified a URL value for a rel="me" link.
     * 
     * @param string|null $verifiedAt {{<nullable>}} String (ISO 8601 Datetime) if `value` is a verified URL. Otherwise, null.
     */
    protected string|null $verifiedAt = null;
    
}
