<?php

namespace Healsdata\MastodonApi\Schema\Entity\Admin;

/**
 * Represents quantitative data about the server.
 */
class Measure
{ 
    /**
     * The unique keystring for the requested measure.
     * 
     * @param string $key 
     */
    protected string $key;
    
    /**
     * The units associated with this data item's value, if applicable.
     * 
     * @param string|null $unit {{<nullable>}} String or null
     */
    protected string|null $unit = null;
    
    /**
     * The numeric total associated with the requested measure.
     * 
     * @param string $total (cast from integer)
     */
    protected string $total;
    
    /**
     * A human-readable formatted value for this data item.
     * 
     * @param string $humanValue 
     */
    protected string $humanValue;
    
    /**
     * The numeric total associated with the requested measure, in the previous period. Previous period is calculated by subtracting the start_at and end_at dates, then offsetting both start and end dates backwards by the length of the time period.
     * 
     * @param string $previousTotal (cast from integer)
     */
    protected string $previousTotal;
    
    /**
     * The data available for the requested measure, split into daily buckets.
     * 
     * @param [] $data of Hash
     */
    protected array $data;
    
    /**
     * Midnight on the requested day in the time period.
     * 
     * @param string $data[][date] (ISO 8601 Datetime)
     */
    protected string $data[][date];
    
    /**
     * The numeric value for the requested measure.
     * 
     * @param string $data[][value] (cast from integer)
     */
    protected string $data[][value];
    
}
