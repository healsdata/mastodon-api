<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a notification of an event relevant to the user.
 */
class Notification
{ 
    /**
     * The id of the notification in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The type of event that resulted in the notification.
     * 
     * @param string $type (Enumerable oneOf)
     */
    protected string $type;
    
    /**
     * The timestamp of the notification.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
    /**
     * The account that performed the action that generated the notification.
     * 
     * @param Account $account [Account]({{< relref "entities/Account" >}})
     */
    protected Account $account;
    
    /**
     * Status that was the object of the notification. Attached when `type` of the notification is `favourite`, `reblog`, `status`, `mention`, `poll`, or `update`.
     * 
     * @param Status $status [Status]({{< relref "entities/Status" >}})
     */
    protected Status $status;
    
    /**
     * Report that was the object of the notification. Attached when `type` of the notification is `admin.report`.
     * 
     * @param Report $report [Report]({{< relref "entities/Report" >}})
     */
    protected Report $report;
    
}
