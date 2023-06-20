<?php

namespace Healsdata\MastodonApi\Schema\Entity\Admin;

/**
 * Represents an email domain that cannot be used to sign up.
 */
class EmailDomainBlock
{ 
    /**
     * The ID of the EmailDomainBlock in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The email domain that is not allowed to be used for signups.
     * 
     * @param string $domain 
     */
    protected string $domain;
    
    /**
     * When the email domain was disallowed from signups.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
    /**
     * Usage statistics for given days (typically the past week).
     * 
     * @param [] $history of Hash
     */
    protected array $history;
    
    /**
     * UNIX timestamp on midnight of the given day.
     * 
     * @param string $history[][day] (UNIX timestamp)
     */
    protected string $history[][day];
    
    /**
     * The counted accounts signup attempts using that email domain within that day.
     * 
     * @param string $history[][accounts] (cast from an integer)
     */
    protected string $history[][accounts];
    
    /**
     * The counted IP signup attempts of that email domain within that day.
     * 
     * @param string $history[][uses] (cast from an integer)
     */
    protected string $history[][uses];
    
}
