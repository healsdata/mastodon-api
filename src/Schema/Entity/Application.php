<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents an application that interfaces with the REST API to access accounts or post statuses.
 */
class Application
{ 
    /**
     * The name of your application.
     * 
     * @param string $name 
     */
    protected string $name;
    
    /**
     * The website associated with your application.
     * 
     * @param string|null $website {{<nullable>}} String (URL)
     */
    protected string|null $website = null;
    
    /**
     * Used for Push Streaming API. Returned with [POST /api/v1/apps]({{< relref "methods/apps#create" >}}). Equivalent to [WebPushSubscription#server_key]({{< relref "entities/WebPushSubscription#server_key" >}})
     * 
     * @param string $vapidKey 
     */
    protected string $vapidKey;
    
    /**
     * Client ID key, to be used for obtaining OAuth tokens
     * 
     * @param string $clientId 
     */
    protected string $clientId;
    
    /**
     * Client secret key, to be used for obtaining OAuth tokens
     * 
     * @param string $clientSecret 
     */
    protected string $clientSecret;
    
}
