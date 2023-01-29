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

use InvalidArgumentException;
use League\OAuth2\Client\Grant\AbstractGrant;

/**
 * @see https://github.com/reddit/reddit/wiki/OAuth2
 */
class InstalledClient extends AbstractGrant
{
    public function getName()
    {
        return 'https://oauth.reddit.com/grants/installed_client';
    }

    public function getRequiredRequestParameters(): array
    {
        return ['device_id'];
    }

    public function prepareRequestParameters(array $defaults, array $options)
    {
        if (! isset($options['device_id']) || empty($options['device_id'])) {
            throw new InvalidArgumentException('Missing device_id');
        }

        // device_id has to be a 20-30 character ASCII string
        if (! preg_match('/^[[:ascii:]]{20,30}$/', $options['device_id'])) {
            throw new InvalidArgumentException('Invalid device_id');
        }

        return parent::prepareRequestParameters($defaults, $options);
    }
}
