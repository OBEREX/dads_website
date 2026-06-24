<?php
/**
 * Site-wide values — the WordPress version of the old js/config.js.
 * THIS IS THE ONE PLACE TO EDIT links, phone numbers, and stat numbers.
 * (Non-technical edit: change the text between the quotes, save, re-upload.)
 */
if (!defined('ABSPATH')) exit;

function mko_config() {
    return [
        'site' => [
            'name'    => 'Dr. MKO Balogun',
            'tagline' => 'Engineer. Entrepreneur. Mentor. Nation Builder.',
            'email'   => 'mko.balogun@mkobalogun.com',
            'phone1'  => '+2348058840888',
            'phone2'  => '+2348033327649',
            'address' => '80 Norman Williams Street, Off Awolowo Road, Ikoyi, Lagos, Nigeria',
        ],
        'social' => [
            'linkedin'  => 'https://linkedin.com/in/mkobalogun',
            'twitter'   => 'https://twitter.com/mkobalogun',
            'facebook'  => 'https://www.facebook.com/mko.balogun.5',
            'instagram' => 'https://instagram.com/mkobalogun',
            'youtube'   => 'https://youtube.com/@mkobalogun',
            'pinterest' => 'https://pinterest.com/mkobalogun',
        ],
        // Manually-maintained stats. (LinkedIn/Twitter cannot be fetched live; update by hand.)
        'stats' => [
            'total_followers'       => '175,000',
            'awards'                => '69',
            'companies'             => '4',
            'years_experience'      => '30',
            'linkedin_connections'  => '50K+',
            'youtube_subscribers'   => '45K+',
            'facebook_followers'    => '40K+',
            'twitter_followers'     => '20K+',
            'instagram_followers'   => '20K+',
        ],
        // Contact form. Formspree works now; or paste a WPForms shortcode in page-contact.php instead.
        'forms' => [
            'formspree_id' => 'xwvjjnkw',
        ],
        // Top navigation. href values are relative to the site root.
        'nav' => [
            ['label' => 'Home',                'href' => '/'],
            ['label' => 'About',               'href' => '/about/'],
            ['label' => 'Work & Ventures',     'href' => '/work-ventures/'],
            ['label' => 'Publications & Blog', 'href' => '/publications-blog/'],
            ['label' => 'Media',               'href' => '/media/'],
            ['label' => 'Connect',             'href' => '/connect/'],
        ],
    ];
}
