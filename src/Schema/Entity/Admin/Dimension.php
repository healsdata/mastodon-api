<?php

namespace Healsdata\MastodonApi\Schema\Entity\Admin;

/**
 * Represents qualitative data about the server.
 */
class Dimension
{ 
    /**
     * The unique keystring for the requested dimension.
     * 
     * @param string $key 
     */
    protected string $key;
    
    /**
     * The data available for the requested dimension.
     * 
     * @param [] $data of Hash
     */
    protected array $data;
    
    /**
     * The unique keystring for this data item.
     * 
     * @param string $key 
     */
    protected string $key;
    
    /**
     * A human-readable key for this data item.
     * 
     * @param string $humanKey 
     */
    protected string $humanKey;
    
    /**
     * The value for this data item.
     * 
     * @param string $value 
     */
    protected string $value;
    
    /**
     * The units associated with this data item's value, if applicable.
     * 
     * @param string $unit 
     */
    protected string $unit;
    
    /**
     * A human-readable formatted value for this data item.
     * 
     * @param string $humanValue 
     */
    protected string $humanValue;
    
}
