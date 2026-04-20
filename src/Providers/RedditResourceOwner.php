<?php

/*
 * This file is part of ianm/oauth-reddit.
 *
 * Copyright (c) 2023 IanM.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace IanM\OauthReddit\Providers;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;

class RedditResourceOwner implements ResourceOwnerInterface
{
    use ArrayAccessorTrait;

    /**
     * Creates new resource owner.
     *
    
    public function __construct(protected array $response)
    {
    }

    /**
     * Get resource owner id.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->getValueByKey($this->response, 'id');
    }

    /**
     * Get resource owner name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getValueByKey($this->response, 'name');
    }

    /**
     * Get resource owner picture url.
     *
     * @return string|null
     */
    public function getProfileImageUrl()
    {
        return $this->getValueByKey($this->response, 'icon_img');
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
