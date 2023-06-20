<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents an announcement set by an administrator.
 */
class Announcement
{ 
    /**
     * The ID of the announcement in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The text of the announcement.
     * 
     * @param string $content (HTML)
     */
    protected string $content;
    
    /**
     * When the announcement will start.
     * 
     * @param string|null $startsAt {{<nullable>}} String (ISO 8601 Datetime) or null
     */
    protected string|null $startsAt = null;
    
    /**
     * When the announcement will end.
     * 
     * @param string|null $endsAt {{<nullable>}} String (ISO 8601 Datetime) or null
     */
    protected string|null $endsAt = null;
    
    /**
     * Whether the announcement is currently active.
     * 
     * @param bool $published 
     */
    protected bool $published;
    
    /**
     * Whether the announcement should start and end on dates only instead of datetimes. Will be false if there is no `starts_at` or `ends_at` time.
     * 
     * @param bool $allDay 
     */
    protected bool $allDay;
    
    /**
     * When the announcement was published.
     * 
     * @param string $publishedAt (ISO 8601 Datetime)
     */
    protected string $publishedAt;
    
    /**
     * When the announcement was last updated.
     * 
     * @param string $updatedAt (ISO 8601 Datetime)
     */
    protected string $updatedAt;
    
    /**
     * Whether the announcement has been read by the current user.
     * 
     * @param bool $read 
     */
    protected bool $read;
    
    /**
     * Accounts mentioned in the announcement text.
     * 
     * @param Announcement::Account[] $mentions of [Announcement::Account](#Account)
     */
    protected array $mentions;
    
    /**
     * Statuses linked in the announcement text.
     * 
     * @param Announcement::Status[] $statuses of [Announcement::Status](#Status)
     */
    protected array $statuses;
    
    /**
     * Tags linked in the announcement text.
     * 
     * @param Status::Tag[] $tags of [Status::Tag]({{< relref "entities/Status#Tag" >}})
     */
    protected array $tags;
    
    /**
     * Custom emoji used in the announcement text.
     * 
     * @param CustomEmoji[] $emojis of [CustomEmoji]({{< relref "entities/CustomEmoji" >}})
     */
    protected array $emojis;
    
    /**
     * Emoji reactions attached to the announcement.
     * 
     * @param Reaction[] $reactions of [Reaction]({{< relref "entities/Reaction" >}})
     */
    protected array $reactions;
    
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
     * The ID of an attached Status in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The URL of an attached Status.
     * 
     * @param string $url (URL)
     */
    protected string $url;
    
}
