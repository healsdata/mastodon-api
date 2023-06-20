<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a conversation with "direct message" visibility.
 */
class Conversation
{ 
    /**
     * The ID of the conversation in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * Is the conversation currently marked as unread?
     * 
     * @param bool $unread 
     */
    protected bool $unread;
    
    /**
     * Participants in the conversation.
     * 
     * @param Account[] $accounts of [Account]({{< relref "entities/Account" >}})
     */
    protected array $accounts;
    
    /**
     * The last status in the conversation.
     * 
     * @param Status|null $lastStatus {{<nullable>}} [Status]({{< relref "entities/Status" >}})
     */
    protected Status|null $lastStatus = null;
    
}
