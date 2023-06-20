<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents a proof from an external identity provider.
 */
class IdentityProof
{ 
    /**
     * The name of the identity provider.
     * 
     * @param string $provider 
     */
    protected string $provider;
    
    /**
     * The account owner's username on the identity provider's service.
     * 
     * @param string $providerUsername 
     */
    protected string $providerUsername;
    
    /**
     * When the identity proof was last updated.
     * 
     * @param string $updatedAt (ISO 8601 Datetime)
     */
    protected string $updatedAt;
    
    /**
     * A link to a statement of identity proof, hosted by the identity provider.
     * 
     * @param string $proofUrl (URL)
     */
    protected string $proofUrl;
    
    /**
     * The account owner's profile URL on the identity provider.
     * 
     * @param string $profileUrl (URL)
     */
    protected string $profileUrl;
    
}
