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

use Flarum\Forum\Auth\Registration;
use Flarum\Foundation\Application;
use FoF\OAuth\Provider;
use League\OAuth2\Client\Provider\AbstractProvider;

class Reddit extends Provider
{
    /**
     * @var RedditProvider
     */
    protected $provider;

    public function name(): string
    {
        return 'reddit';
    }

    public function link(): string
    {
        return 'https://www.reddit.com/prefs/apps';
    }

    public function fields(): array
    {
        return [
            'client_id'     => 'required',
            'client_secret' => 'required',
        ];
    }

    public function provider(string $redirectUri): AbstractProvider
    {
        return $this->provider = new RedditProvider([
            'clientId'     => $this->getSetting('client_id'),
            'clientSecret' => $this->getSetting('client_secret'),
            'redirectUri'  => $redirectUri,
            'userAgent'     => 'Flarum:FoF-OAuth:'.Application::VERSION.' (by /u/Background_Stress252)',
        ]);
    }

    public function options(): array
    {
        return [
            'scope' => ['identity'],
        ];
    }

    public function suggestions(Registration $registration, $user, string $token)
    {
        /** @var RedditResourceOwner $user */
        $registration
            ->suggestUsername($user->getName())
            ->setPayload($user->toArray());

        if ($picture = $user->getProfileImageUrl()) {
            $registration->provideAvatar($picture);
        }
    }
}
