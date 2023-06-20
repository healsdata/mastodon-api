<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a poll attached to a status.
 */
class Poll
{ 
    /**
     * The ID of the poll in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * When the poll ends.
     * 
     * @param string|null $expiresAt {{<nullable>}} String (ISO 8601 Datetime), or null if the poll does not end
     */
    protected string|null $expiresAt = null;
    
    /**
     * Is the poll currently expired?
     * 
     * @param bool $expired 
     */
    protected bool $expired;
    
    /**
     * Does the poll allow multiple-choice answers?
     * 
     * @param bool $multiple 
     */
    protected bool $multiple;
    
    /**
     * How many votes have been received.
     * 
     * @param int $votesCount 
     */
    protected int $votesCount;
    
    /**
     * How many unique accounts have voted on a multiple-choice poll.
     * 
     * @param int|null $votersCount {{<nullable>}} Integer, or null if `multiple` is false.
     */
    protected int|null $votersCount = null;
    
    /**
     * Possible answers for the poll.
     * 
     * @param Poll::Option[] $options of [Poll::Option](#Option)
     */
    protected array $options;
    
    /**
     * Custom emoji to be used for rendering poll options.
     * 
     * @param CustomEmoji[] $emojis of [CustomEmoji]({{< relref "entities/CustomEmoji" >}})
     */
    protected array $emojis;
    
    /**
     * When called with a user token, has the authorized user voted?
     * 
     * @param bool $voted 
     */
    protected bool $voted;
    
    /**
     * When called with a user token, which options has the authorized user chosen? Contains an array of index values for `options`.
     * 
     * @param [] $ownVotes of Integer
     */
    protected array $ownVotes;
    
    /**
     * The text value of the poll option.
     * 
     * @param string $title 
     */
    protected string $title;
    
    /**
     * The total number of received votes for this option.
     * 
     * @param int|null $votesCount {{<nullable>}} Integer, or null if results are not published yet.
     */
    protected int|null $votesCount = null;
    
}
