<?php
/**
 * Plugin Name: FLoC Away
 * Version:     1.0
 * Description: A tiny plugin to disable FLoC by setting/amending Permissions-Policy header.
 * Licence:     GPLv2 or later
 * Author:      Ayesh Karunaratne
 * Author URI:  https://ayesh.me/open-source
 */

/**
 * Add Permissions-Policy header to all requests using @see wp_headers hook.
 * This accounts for case-sensitive array looks, and does not modify if a interest-cohort
 * Permissions-Policy header clause is set. If the Permissions-Policy header is present, but
 * does not contain a interest-cohort, this function appends a interest-cohort clause.
 */
\add_filter('wp_headers', function(array $headers) {
    if (!isset($headers['Permissions-Policy']) && !isset($headers['permissions-policy'])) {
        $headers['Permissions-Policy'] = 'interest-cohort=()';
        return $headers;
    }

    if (isset($headers['permissions-policy'])) {
        $headers['Permissions-Policy'] = $headers['permissions-policy'];
        unset($headers['permissions-policy']);
    }

    if (\stripos($headers['Permissions-Policy'], 'interest-cohort') !== false) {
        return $headers; // Do not overwrite existing policies.
    }

    $headers['Permissions-Policy'] = \rtrim($headers['Permissions-Policy'], ' \0,') . ',interest-cohort=()';
    return $headers;
});

