<?php

namespace Healsdata\MastodonApi\Schema\Entity\Admin;

/**
 * Represents an IP address associated with a user.
 */
class Ip
{ 
    /**
     * The IP address.
     * 
     * @param string $ip (IP address)
     */
    protected string $ip;
    
    /**
     * The timestamp of when the IP address was last used for this account.
     * 
     * @param string $usedAt (ISO 8601 Datetime)
     */
    protected string $usedAt;
    
}
