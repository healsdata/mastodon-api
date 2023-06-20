<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a status posted by an account.
 */
class Status
{ 
    /**
     * ID of the status in the database.
     * 
     * @param string $id (cast from an integer but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * URI of the status used for federation.
     * 
     * @param string $uri 
     */
    protected string $uri;
    
    /**
     * The date when this status was created.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
    /**
     * The account that authored this status.
     * 
     * @param Account $account [Account]({{< relref "entities/Account" >}})
     */
    protected Account $account;
    
    /**
     * HTML-encoded status content.
     * 
     * @param string $content (HTML)
     */
    protected string $content;
    
    /**
     * Visibility of this status.
     * 
     * @param string $visibility (Enumerable oneOf)
     */
    protected string $visibility;
    
    /**
     * Is this status marked as sensitive content?
     * 
     * @param bool $sensitive 
     */
    protected bool $sensitive;
    
    /**
     * Subject or summary line, below which status content is collapsed until expanded.
     * 
     * @param string $spoilerText 
     */
    protected string $spoilerText;
    
    /**
     * Media that is attached to this status.
     * 
     * @param MediaAttachment[] $mediaAttachments of [MediaAttachment]({{< relref "entities/MediaAttachment" >}})
     */
    protected array $mediaAttachments;
    
    /**
     * The application used to post this status.
     * 
     * @param array $application 
     */
    protected array $application;
    
    /**
     * The name of the application that posted this status.
     * 
     * @param string $application[name] 
     */
    protected string $application[name];
    
    /**
     * The website associated with the application that posted this status.
     * 
     * @param string|null $application[website] {{<nullable>}} String (URL) or null
     */
    protected string|null $application[website] = null;
    
    /**
     * Mentions of users within the status content.
     * 
     * @param Status::Mention[] $mentions of [Status::Mention](#Mention)
     */
    protected array $mentions;
    
    /**
     * Hashtags used within the status content.
     * 
     * @param Status::Tag[] $tags of [Status::Tag](#Tag)
     */
    protected array $tags;
    
    /**
     * Custom emoji to be used when rendering status content.
     * 
     * @param CustomEmoji[] $emojis of [CustomEmoji]({{< relref "entities/CustomEmoji" >}})
     */
    protected array $emojis;
    
    /**
     * How many boosts this status has received.
     * 
     * @param int $reblogsCount 
     */
    protected int $reblogsCount;
    
    /**
     * How many favourites this status has received.
     * 
     * @param int $favouritesCount 
     */
    protected int $favouritesCount;
    
    /**
     * How many replies this status has received.
     * 
     * @param int $repliesCount 
     */
    protected int $repliesCount;
    
    /**
     * A link to the status's HTML representation.
     * 
     * @param string|null $url {{<nullable>}} String (URL) or null
     */
    protected string|null $url = null;
    
    /**
     * ID of the status being replied to.
     * 
     * @param string|null $inReplyToId {{<nullable>}} String (cast from an integer but not guaranteed to be a number) or null
     */
    protected string|null $inReplyToId = null;
    
    /**
     * ID of the account that authored the status being replied to.
     * 
     * @param string|null $inReplyToAccountId {{<nullable>}} String (cast from an integer but not guaranteed to be a number) or null
     */
    protected string|null $inReplyToAccountId = null;
    
    /**
     * The status being reblogged.
     * 
     * @param Status|null $reblog {{<nullable>}} [Status](#) or null
     */
    protected Status|null $reblog = null;
    
    /**
     * The poll attached to the status.
     * 
     * @param Poll|null $poll {{<nullable>}} [Poll]({{< relref "entities/Poll" >}}) or null
     */
    protected Poll|null $poll = null;
    
    /**
     * Preview card for links included within status content.
     * 
     * @param PreviewCard|null $card {{<nullable>}} [PreviewCard]({{< relref "entities/PreviewCard" >}}) or null
     */
    protected PreviewCard|null $card = null;
    
    /**
     * Primary language of this status.
     * 
     * @param string|null $language {{<nullable>}} String (ISO 639 Part 1 two-letter language code) or null
     */
    protected string|null $language = null;
    
    /**
     * Plain-text source of a status. Returned instead of `content` when status is deleted, so the user may redraft from the source text without the client having to reverse-engineer the original text from the HTML content.
     * 
     * @param string|null $text {{<nullable>}} String or null
     */
    protected string|null $text = null;
    
    /**
     * Timestamp of when the status was last edited.
     * 
     * @param string|null $editedAt {{<nullable>}} String (ISO 8601 Datetime)
     */
    protected string|null $editedAt = null;
    
    /**
     * If the current token has an authorized user: Have you favourited this status?
     * 
     * @param bool $favourited 
     */
    protected bool $favourited;
    
    /**
     * If the current token has an authorized user: Have you boosted this status?
     * 
     * @param bool $reblogged 
     */
    protected bool $reblogged;
    
    /**
     * If the current token has an authorized user: Have you muted notifications for this status's conversation?
     * 
     * @param bool $muted 
     */
    protected bool $muted;
    
    /**
     * If the current token has an authorized user: Have you bookmarked this status?
     * 
     * @param bool $bookmarked 
     */
    protected bool $bookmarked;
    
    /**
     * If the current token has an authorized user: Have you pinned this status? Only appears if the status is pinnable.
     * 
     * @param bool $pinned 
     */
    protected bool $pinned;
    
    /**
     * If the current token has an authorized user: The filter and keywords that matched this status.
     * 
     * @param FilterResult[] $filtered of [FilterResult]({{< relref "entities/FilterResult" >}})
     */
    protected array $filtered;
    
    /**
     * The account ID of the mentioned user.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The username of the mentioned user.
     * 
     * @param string $username 
     */
    protected string $username;
    
    /**
     * The location of the mentioned user's profile.
     * 
     * @param string $url (URL)
     */
    protected string $url;
    
    /**
     * The webfinger acct: URI of the mentioned user. Equivalent to `username` for local users, or `username@domain` for remote users.
     * 
     * @param string $acct 
     */
    protected string $acct;
    
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
    
}
