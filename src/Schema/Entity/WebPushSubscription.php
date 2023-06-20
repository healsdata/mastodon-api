<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a subscription to the push streaming server.
 */
class WebPushSubscription
{ 
    /**
     * The ID of the Web Push subscription in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * Where push alerts will be sent to.
     * 
     * @param string $endpoint (URL)
     */
    protected string $endpoint;
    
    /**
     * The streaming server's VAPID key.
     * 
     * @param string $serverKey 
     */
    protected string $serverKey;
    
    /**
     * Which alerts should be delivered to the `endpoint`.
     * 
     * @param array $alerts 
     */
    protected array $alerts;
    
    /**
     * Receive a push notification when someone else has mentioned you in a status?
     * 
     * @param bool $alerts[mention] 
     */
    protected bool $alerts[mention];
    
    /**
     * Receive a push notification when a subscribed account posts a status?
     * 
     * @param bool $alerts[status] 
     */
    protected bool $alerts[status];
    
    /**
     * Receive a push notification when a status you created has been boosted by someone else?
     * 
     * @param bool $alerts[reblog] 
     */
    protected bool $alerts[reblog];
    
    /**
     * Receive a push notification when someone has followed you?
     * 
     * @param bool $alerts[follow] 
     */
    protected bool $alerts[follow];
    
    /**
     * Receive a push notification when someone has requested to followed you?
     * 
     * @param bool $alerts[followRequest] 
     */
    protected bool $alerts[followRequest];
    
    /**
     * Receive a push notification when a status you created has been favourited by someone else?
     * 
     * @param bool $alerts[favourite] 
     */
    protected bool $alerts[favourite];
    
    /**
     * Receive a push notification when a poll you voted in or created has ended?
     * 
     * @param bool $alerts[poll] 
     */
    protected bool $alerts[poll];
    
    /**
     * Receive a push notification when a status you interacted with has been edited?
     * 
     * @param bool $alerts[update] 
     */
    protected bool $alerts[update];
    
    /**
     * Receive a push notification when a new user has signed up?
     * 
     * @param bool $alerts[admin.signUp] 
     */
    protected bool $alerts[admin.signUp];
    
    /**
     * Receive a push notification when a new report has been filed?
     * 
     * @param bool $alerts[admin.report] 
     */
    protected bool $alerts[admin.report];
    
}
