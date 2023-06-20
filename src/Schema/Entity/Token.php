<?php

namespace Healsdata\MastodonApi\Schema\Entity;

/**
 * Represents an OAuth token used for authenticating with the API and performing actions.
 */
class Token
{ 
    /**
     * An OAuth token to be used for authorization.
     * 
     * @param string $accessToken 
     */
    protected string $accessToken;
    
    /**
     * The OAuth token type. Mastodon uses `Bearer` tokens.
     * 
     * @param string $tokenType 
     */
    protected string $tokenType;
    
    /**
     * The OAuth scopes granted by this token, space-separated.
     * 
     * @param string $scope 
     */
    protected string $scope;
    
    /**
     * When the token was generated.
     * 
     * @param int $createdAt (UNIX Timestamp)
     */
    protected int $createdAt;
    
}
