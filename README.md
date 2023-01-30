# Log in With Reddit

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/ianm/oauth-reddit.svg)](https://packagist.org/packages/ianm/oauth-reddit) [![Total Downloads](https://img.shields.io/packagist/dt/ianm/oauth-reddit.svg)](https://packagist.org/packages/ianm/oauth-reddit)

A [Flarum](http://flarum.org) extension. Reddit oauth provider for Flarum

![](https://extiverse.com/extension/ianm/oauth-reddit/open-graph-image)

## Features

Adds a `Reddit` provider to [FoF OAuth](https://github.com/FriendsOfFlarum/oauth) to enable `Login with Reddit` functionality.

**Note that Reddit does not provide the user's email address via it's API. New users signing up to your Flarum forum will be asked to enter their email address as part of the first login**

You must register your forum as an application and obtain a client ID and secret before users can login using their Reddit crdntials. See [Reddit Docs](https://www.reddit.com/prefs/apps) for more information.

## Installation

Install with composer:

```sh
composer require ianm/oauth-reddit
```

## Updating

```sh
composer update ianm/oauth-reddit
php flarum cache:clear
```

## Links

- [Packagist](https://packagist.org/packages/ianm/oauth-reddit)
- [GitHub](https://github.com/imorland/flarum-ext-oauth-reddit)
- [Discuss](https://discuss.flarum.org/d/32342-login-with-reddit)
