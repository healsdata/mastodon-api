<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents the result of machine translating some status content
 */
class Translation
{ 
    /**
     * The translated text of the status.
     * 
     * @param string $content (HTML)
     */
    protected string $content;
    
    /**
     * The language of the source text, as auto-detected by the machine translation provider.
     * 
     * @param string $detectedSourceLanguage (ISO 639 language code)
     */
    protected string $detectedSourceLanguage;
    
}
