<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a filter whose keywords matched a given status.
 */
class FilterResult
{ 
    /**
     * The filter that was matched.
     * 
     * @param Filter $filter [Filter]({{< relref "entities/Filter" >}})
     */
    protected Filter $filter;
    
    /**
     * The keyword within the filter that was matched.
     * 
     * @param []|null $keywordMatches {{<nullable>}} Array of String, or null
     */
    protected array|null $keywordMatches = null;
    
    /**
     * The status ID within the filter that was matched.
     * 
     * @param string|null $statusMatches {{<nullable>}} String, or null
     */
    protected string|null $statusMatches = null;
    
}
