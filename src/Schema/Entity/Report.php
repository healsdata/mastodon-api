<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Reports filed against users and/or statuses, to be taken action on by moderators.
 */
class Report
{ 
    /**
     * The ID of the report in the database.
     * 
     * @param string $id (cast from integer)
     */
    protected string $id;
    
    /**
     * Whether an action was taken yet.
     * 
     * @param bool $actionTaken 
     */
    protected bool $actionTaken;
    
    /**
     * When an action was taken against the report.
     * 
     * @param string|null $actionTakenAt {{<nullable>}} String (ISO 8601 Datetime) or null
     */
    protected string|null $actionTakenAt = null;
    
    /**
     * The generic reason for the report.
     * 
     * @param string $category (Enumerable oneOf)
     */
    protected string $category;
    
    /**
     * The reason for the report.
     * 
     * @param string $comment 
     */
    protected string $comment;
    
    /**
     * Whether the report was forwarded to a remote domain.
     * 
     * @param bool $forwarded 
     */
    protected bool $forwarded;
    
    /**
     * When the report was created.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
    /**
     * IDs of statuses that have been attached to this report for additional context.
     * 
     * @param []|null $statusIds {{<nullable>}} Array of String (cast from integer), or null
     */
    protected array|null $statusIds = null;
    
    /**
     * IDs of the rules that have been cited as a violation by this report.
     * 
     * @param []|null $ruleIds {{<nullable>}} Array of String (cast from integer), or null
     */
    protected array|null $ruleIds = null;
    
    /**
     * The account that was reported.
     * 
     * @param Account $targetAccount [Account]({{< relref "entities/account" >}})
     */
    protected Account $targetAccount;
    
}
