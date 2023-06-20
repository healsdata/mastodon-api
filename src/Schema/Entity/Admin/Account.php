<?php

namespace Healsdata\MastodonApi\Schema\Entity\Admin;

/**
 * Admin-level information about a given account.
 */
class Account
{ 
    /**
     * The ID of the account in the database.
     * 
     * @param string $id (cast from an integer, but not guaranteed to be a number)
     */
    protected string $id;
    
    /**
     * The username of the account.
     * 
     * @param string $username 
     */
    protected string $username;
    
    /**
     * The domain of the account, if it is remote.
     * 
     * @param string|null $domain {{<nullable>}} String, or null for local accounts
     */
    protected string|null $domain = null;
    
    /**
     * When the account was first discovered.
     * 
     * @param string $createdAt (ISO 8601 Datetime)
     */
    protected string $createdAt;
    
    /**
     * The email address associated with the account.
     * 
     * @param string $email 
     */
    protected string $email;
    
    /**
     * The IP address last used to login to this account.
     * 
     * @param string|null $ip {{<nullable>}} String
     */
    protected string|null $ip = null;
    
    /**
     * All known IP addresses associated with this account.
     * 
     * @param Admin::Ip[] $ips of [Admin::Ip]({{< relref "entities/Admin_Ip" >}})
     */
    protected array $ips;
    
    /**
     * The locale of the account.
     * 
     * @param string $locale (ISO 639 Part 1 two-letter language code)
     */
    protected string $locale;
    
    /**
     * The reason given when requesting an invite (for instances that require manual approval of registrations)
     * 
     * @param string|null $inviteRequest {{<nullable>}} String
     */
    protected string|null $inviteRequest = null;
    
    /**
     * The current role of the account.
     * 
     * @param Role $role [Role]({{<relref "entities/role">}})
     */
    protected Role $role;
    
    /**
     * Whether the account has confirmed their email address.
     * 
     * @param bool $confirmed 
     */
    protected bool $confirmed;
    
    /**
     * Whether the account is currently approved.
     * 
     * @param bool $approved 
     */
    protected bool $approved;
    
    /**
     * Whether the account is currently disabled.
     * 
     * @param bool $disabled 
     */
    protected bool $disabled;
    
    /**
     * Whether the account is currently suspended.
     * 
     * @param bool $suspended 
     */
    protected bool $suspended;
    
    /**
     * User-level information about the account.
     * 
     * @param Account $account [Account]({{< relref "entities/account" >}})
     */
    protected Account $account;
    
    /**
     * The ID of the [Application]({{< relref "entities/application" >}}) that created this account, if applicable.
     * 
     * @param string $createdByApplicationId (cast from an integer, but not guaranteed to be a number)
     */
    protected string $createdByApplicationId;
    
    /**
     * The ID of the [Account]({{< relref "entities/account" >}}) that invited this user, if applicable.
     * 
     * @param string $invitedByAccountId (cast from an integer, but not guaranteed to be a number)
     */
    protected string $invitedByAccountId;
    
}
