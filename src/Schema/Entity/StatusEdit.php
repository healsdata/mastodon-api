<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a revision of a status that has been edited.
 */
class StatusEdit
{ 
    /**
     * The content of the status at this revision.
     * 
     * @param string $content (HTML)
     */
    protected string $content;
    
    /**
     * The content of the subject or content warning at this revision.
     * 
     * @param string $spoilerText (HTML)
     */
    protected string $spoilerText;
    
    /**
     * Whether the status was marked sensitive at this revision.
     * 
     * @param bool $sensitive 
     */
    protected bool $sensitive;
    
    /**
     * The timestamp of when the revision was published.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
    /**
     * The account that published this revision.
     * 
     * @param Account $account Account
     */
    protected Account $account;
    
    /**
     * The current state of the poll options at this revision. Note that edits changing the poll options will be collapsed together into one edit, since this action resets the poll.
     * 
     * @param array $poll 
     */
    protected array $poll;
    
    /**
     * The poll options at this revision.
     * 
     * @param [] $poll.options[] of Hash
     */
    protected array $poll.options[];
    
    /**
     * The text for a poll option.
     * 
     * @param string $poll.options[].title 
     */
    protected string $poll.options[].title;
    
    /**
     * The current state of the poll options at this revision. Note that edits changing the poll options will be collapsed together into one edit, since this action resets the poll.
     * 
     * @param MediaAttachment[] $mediaAttachments of [MediaAttachment]({{<relref "entities/MediaAttachment">}})
     */
    protected array $mediaAttachments;
    
    /**
     * Any custom emoji that are used in the current revision.
     * 
     * @param CustomEmoji[] $emojis of [CustomEmoji]({{<relref "entities/CustomEmoji">}})
     */
    protected array $emojis;
    
}
