<?php

namespace Healsdata\MastodonApi\Schema\Entity\Admin;

/**
 * Represents a retention metric.
 */
class Cohort
{ 
    /**
     * The timestamp for the start of the period, at midnight.
     * 
     * @param string $period (ISO 8601 Datetime)
     */
    protected string $period;
    
    /**
     * The size of the bucket for the returned data.
     * 
     * @param string $frequency (Enumerable oneOf)
     */
    protected string $frequency;
    
    /**
     * Retention data for users who registered during the given period.
     * 
     * @param CohortData[] $data of [CohortData](#CohortData)
     */
    protected array $data;
    
    /**
     * The percentage rate of users who registered in the specified `period` and were active for the given `date` bucket.
     * 
     * @param int $rate 
     */
    protected int $rate;
    
    /**
     * How many users registered in the specified `period` and were active for the given `date` bucket.
     * 
     * @param int $value 
     */
    protected int $value;
    
}
