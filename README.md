![license](https://img.shields.io/github/license/pattern-lab/plugin-php-reload.svg?maxAge=2592000)
[![Packagist](https://img.shields.io/packagist/v/pattern-lab/plugin-reload.svg?maxAge=2592000)](https://packagist.org/packages/pattern-lab/plugin-reload) [![Gitter](https://img.shields.io/gitter/room/pattern-lab/php.svg?maxAge=2592000)](https://gitter.im/pattern-lab/php)

# Reload Plugin for Pattern Lab

The Reload Plugin adds Web Socket-based automatic browser reload support to Pattern Lab. The Reload Plugin will automatically reload your browser window if you're using the `--watch` flag.

## Installation

To add the Reload Plugin to your project using [Composer](https://getcomposer.org/) type:

    composer require pattern-lab/plugin-reload

See Packagist for [information on the latest release](https://packagist.org/packages/pattern-lab/plugin-reload).

## Usage

The Reload Plugin is automatically turned on when you install it. Simply "watch" your project using the following command:

    php core/console --watch

## Disabling the Plugin

To disable the Reload Plugin you can either directly edit `./config/config.yml` or use the command line option:

    php core/console --config --set reload.on=false
