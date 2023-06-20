<?php

namespace Healsdata\MastodonApi\Schema\Entity\Admin;

/**
 * Admin-level information about a filed report.
 */
class Report
{ 
    /**
     * The ID of the report in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * Whether an action was taken to resolve this report.
     * 
     * @param bool $actionTaken 
     */
    protected bool $actionTaken;
    
    /**
     * When an action was taken, if this report is currently resolved.
     * 
     * @param string|null $actionTakenAt {{<nullable>}} String (ISO 8601 Datetime) or null
     */
    protected string|null $actionTakenAt = null;
    
    /**
     * The category under which the report is classified.
     * 
     * @param string $category (Enumerable oneOf)
     */
    protected string $category;
    
    /**
     * An optional reason for reporting.
     * 
     * @param string $comment 
     */
    protected string $comment;
    
    /**
     * Whether a report was forwarded to a remote instance.
     * 
     * @param bool $forwarded 
     */
    protected bool $forwarded;
    
    /**
     * The time the report was filed.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
    /**
     * The time of last action on this report.
     * 
     * @param string $updatedAt (ISO 8601 Datetime)
     */
    protected string $updatedAt;
    
    /**
     * The account which filed the report.
     * 
     * @param Admin::Account $account [Admin::Account]({{< relref "entities/Admin_Account" >}})
     */
    protected Admin::Account $account;
    
    /**
     * The account being reported.
     * 
     * @param Admin::Account $targetAccount [Admin::Account]({{< relref "entities/Admin_Account" >}})
     */
    protected Admin::Account $targetAccount;
    
    /**
     * The account of the moderator assigned to this report.
     * 
     * @param Admin::Account|null $assignedAccount {{<nullable>}} [Admin::Account]({{< relref "entities/Admin_Account" >}}) or null
     */
    protected Admin::Account|null $assignedAccount = null;
    
    /**
     * The account of the moderator who handled the report.
     * 
     * @param Admin::Account|null $actionTakenByAccount {{<nullable>}} [Admin::Account]({{< relref "entities/Admin_Account" >}}) or null
     */
    protected Admin::Account|null $actionTakenByAccount = null;
    
    /**
     * Statuses attached to the report, for context.
     * 
     * @param Status[] $statuses of [Status]({{< relref "entities/Status" >}})
     */
    protected array $statuses;
    
    /**
     * Rules attached to the report, for context.
     * 
     * @param Rule[] $rules of [Rule]({{< relref "entities/Rule" >}})
     */
    protected array $rules;
    
}
