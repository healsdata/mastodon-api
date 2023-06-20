<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a status that will be published at a future scheduled date.
 */
class ScheduledStatus
{ 
    /**
     * ID of the scheduled status in the database.
     * 
     * @param string $id (cast from an integer but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The timestamp for when the status will be posted.
     * 
     * @param string $scheduledAt (ISO 8601 Datetime)
     */
    protected string $scheduledAt;
    
    /**
     * The parameters that were used when scheduling the status, to be used when the status is posted.
     * 
     * @param array $params 
     */
    protected array $params;
    
    /**
     * Text to be used as status content.
     * 
     * @param string $params[text] 
     */
    protected string $params[text];
    
    /**
     * Poll to be attached to the status.
     * 
     * @param array|null $params[poll] {{<nullable>}} Hash
     */
    protected array|null $params[poll] = null;
    
    /**
     * The poll options to be used.
     * 
     * @param [] $params[poll][options[]] of String
     */
    protected array $params[poll][options[]];
    
    /**
     * How many seconds the poll should last before closing.
     * 
     * @param string $params[poll][expiresIn] (cast from integer)
     */
    protected string $params[poll][expiresIn];
    
    /**
     * Whether the poll allows multiple choices.
     * 
     * @param bool|null $params[poll][multiple] {{<optional>}} Boolean
     */
    protected bool|null $params[poll][multiple] = null;
    
    /**
     * Whether the poll should hide total votes until after voting has ended.
     * 
     * @param bool|null $params[poll][hideTotals] {{<optional>}} Boolean
     */
    protected bool|null $params[poll][hideTotals] = null;
    
    /**
     * IDs of the MediaAttachments that will be attached to the status.
     * 
     * @param []|null $params[mediaIds] {{<nullable>}} Array of String
     */
    protected array|null $params[mediaIds] = null;
    
    /**
     * Whether the status will be marked as sensitive.
     * 
     * @param bool|null $params[sensitive] {{<nullable>}} Boolean
     */
    protected bool|null $params[sensitive] = null;
    
    /**
     * The text of the content warning or summary for the status.
     * 
     * @param string|null $params[spoilerText] {{<nullable>}} String
     */
    protected string|null $params[spoilerText] = null;
    
    /**
     * The visibility that the status will have once it is posted.
     * 
     * @param string $params[visibility] (Enumerable oneOf)
     */
    protected string $params[visibility];
    
    /**
     * ID of the Status that will be replied to.
     * 
     * @param int|null $params[inReplyToId] {{<nullable>}} Integer
     */
    protected int|null $params[inReplyToId] = null;
    
    /**
     * The language that will be used for the status.
     * 
     * @param string|null $params[language] {{<nullable>}} String (ISO 639-1 two-letter language code)
     */
    protected string|null $params[language] = null;
    
    /**
     * ID of the Application that posted the status.
     * 
     * @param int $params[applicationId] 
     */
    protected int $params[applicationId];
    
    /**
     * When the status will be scheduled. This will be null because the status is only scheduled once.
     * 
     * @param null|null $params[scheduledAt] {{<nullable>}} Null
     */
    protected null|null $params[scheduledAt] = null;
    
    /**
     * Idempotency key to prevent duplicate statuses.
     * 
     * @param string|null $params[idempotency] {{<nullable>}} String
     */
    protected string|null $params[idempotency] = null;
    
    /**
     * Whether the status should be rate limited <!-- TODO: What does this mean -->.
     * 
     * @param bool $params[withRateLimit] 
     */
    protected bool $params[withRateLimit];
    
    /**
     * Media that will be attached when the status is posted.
     * 
     * @param MediaAttachment[] $mediaAttachments of [MediaAttachment]({{< relref "entities/MediaAttachment" >}})
     */
    protected array $mediaAttachments;
    
}
