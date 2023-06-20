<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a user's preferences.
 */
class Preferences
{ 
    /**
     * Default visibility for new posts. Equivalent to [CredentialAccount#source\[privacy\]]({{< relref "entities/Account#source-privacy" >}}).
     * 
     * @param string $posting:default:visibility (Enumerable, oneOf)
     */
    protected string $posting:default:visibility;
    
    /**
     * Default sensitivity flag for new posts. Equivalent to [CredentialAccount#source\[sensitive\]]({{< relref "entities/Account#source-sensitive" >}}).
     * 
     * @param bool $posting:default:sensitive 
     */
    protected bool $posting:default:sensitive;
    
    /**
     * Default language for new posts. Equivalent to [CredentialAccount#source\[language\]]({{< relref "entities/Account#source-language" >}})
     * 
     * @param string|null $posting:default:language {{<nullable>}} String (ISO 639-1 language two-letter code), or null
     */
    protected string|null $posting:default:language = null;
    
    /**
     * Whether media attachments should be automatically displayed or blurred/hidden.
     * 
     * @param string $reading:expand:media (Enumerable, oneOf)
     */
    protected string $reading:expand:media;
    
    /**
     * Whether CWs should be expanded by default.
     * 
     * @param bool $reading:expand:spoilers 
     */
    protected bool $reading:expand:spoilers;
    
}
