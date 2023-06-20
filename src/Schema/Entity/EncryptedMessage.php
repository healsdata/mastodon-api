<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents an encrypted message.
 */
class EncryptedMessage
{ 
    /**
     * The ID of the EncryptedMessage in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The ID of the Account that sent this message.
     * 
     * @param string $accountId (cast from an integer, but not guaranteed to be a number)
     */
    protected string $accountId;
    
    /**
     * The ID of the Device that sent this message.
     * 
     * @param string $deviceId (cast from an integer, but not guaranteed to be a number)
     */
    protected string $deviceId;
    
    /**
     * Whether the message is a pre-key message (used to establish a new session) or a normally encrypted message (part of an existing session).
     * 
     * @param string $type (Enumerable, oneOf)
     */
    protected string $type;
    
    /**
     * The encrypted message content.
     * 
     * @param string $body 
     */
    protected string $body;
    
    /**
     * An HMAC SHA-256 digest hash of the message.
     * 
     * @param string $digest (SHA256)
     */
    protected string $digest;
    
    /**
     * A signed value to be used when reporting the message body for its content.
     * 
     * @param string $messageFranking 
     */
    protected string $messageFranking;
    
    /**
     * A timestamp for when the message was created.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
}
