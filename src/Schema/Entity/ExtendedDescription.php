<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents an extended description for the instance, to be shown on its about page.
 */
class ExtendedDescription
{ 
    /**
     * A timestamp of when the extended description was last updated.
     * 
     * @param string $updatedAt (ISO 8601 Datetime)
     */
    protected string $updatedAt;
    
    /**
     * The rendered HTML content of the extended description.
     * 
     * @param string $content (HTML)
     */
    protected string $content;
    
}
