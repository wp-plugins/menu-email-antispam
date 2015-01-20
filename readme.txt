=== Menu Email Antispam ===
Contributors: ruandre
Donate link: https://gratipay.com/ruandre/
Tags: email, spam, menu, links
Requires at least: 3.0.1
Tested up to: 4.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin passes any email addresses used in WordPress menus through an anti-spam function.

== Description ==

A simple, lightweight WordPress plugin to automagically protect email addresses in menus via `antispambot()`

== Installation ==

1. Upload `menu-email-antispam.php` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= How does it work? =

This plugin scans all links added via a WordPress menu for email links (e.g. `mailto:example@email.com`) and passes them through WordPress' built-in email encoding function `antispambot()` to block pesky spam bots for good.

**Note:** Only works on links prefixed with `mailto:`

== Changelog ==

= 1.0.0 =
* Initial release.
