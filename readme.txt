=== FLoC Away ===
Contributors: ayeshrajans
Tags: privacy, headers, security
Requires at least: 2.8
Tested up to: 5.7
Stable tag: 1.0
Requires PHP: 5.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A tiny plugin to disable FLoC by setting/amending `Permissions-Policy` header.

== Description ==

FLoC (Federated Learning of Cohorts) is a new proposed feature Google is rolling out in its Google Chrome browser. This
feature is downright [https://www.eff.org/deeplinks/2021/03/googles-floc-terrible-idea terrible step against the privacy]
 of users, and this tiny plugin tries to help mitigate it by setting a `Permssions-Policy: interest-cohort=()` header
 to ask Google Chrome to FLoc Away.

== Installation ==

1. Upload the downloaded plugin directory to `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin from the 'Plugins' screen in WordPress.
3. You are all set! There is nothing to configure. Your site will emit necessary headers to FLoC Away.


== Frequently Asked Questions ==

= Does this block all ads on my site? =

No. This plugin only sets a `Permisssions-Policy` header to specifically disable FLoC feature. It does not block anything.

= Impact on other browsers =

All browsers that do not support FLoC will simply skip the `interest-cohort` clause in the header. Older browsers that
do not recognize the `Permisssions-Policy` will simply the header algother.

== Changelog ==

= 1.0 =
* Initial release.

