<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a custom user role that grants permissions.
 */
class Role
{ 
    /**
     * The ID of the Role in the database.
     * 
     * @param int $id 
     */
    protected int $id;
    
    /**
     * The name of the role.
     * 
     * @param string $name 
     */
    protected string $name;
    
    /**
     * The hex code assigned to this role. If no hex code is assigned, the string will be empty.
     * 
     * @param string $color 
     */
    protected string $color;
    
    /**
     * A bitmask that represents the sum of all permissions granted to the role.
     * 
     * @param int $permissions 
     */
    protected int $permissions;
    
    /**
     * Whether the role is publicly visible as a badge on user profiles.
     * 
     * @param bool $highlighted 
     */
    protected bool $highlighted;
    
}
