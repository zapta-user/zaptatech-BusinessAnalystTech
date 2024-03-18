<?php
return [
    'schedule_call' => [
        'duration' => 30, // 30 minutes
        'timezone' => 'Asia/karachi',
        'office_start_hour' => '10:0',   // 09 AM
        'office_end_hour' => '24:00',    // 04:30 PM   always minus duration time form end time
        'weekend_off_days' => [],
        // 'weekend_off_days' => ['saturday', 'sunday'],
        'other_off_days' => ['2023-10-09', '2023-10-13'],
    ],
    'website_url' => 'www.zaptatech.com',
    'telephone' => '042-37888403',
    'address' => '144/2, Block B, Bankers Society Near DHA Phase 4, Lahore, Pakistan',
    'social' => [
        'instagram' => 'https://www.instagram.com/zaptatech',
        'twitter' => 'https://www.twitter.com/zaptatech',
        'facebook' => 'https://www.facebook.com/zaptatech',
        'linkedin' => 'https://www.linkedin.com/company/zaptatech/mycompany/',
    ],
    'hr' => [
        'name' => 'Aliya Batool',
        'email' => 'zaptatest2@gmail.com'
    ],
    'admin' => [
        'email' => 'zaptatest2@gmail.com',
        'calendar' => [
            'zaptatest2@gmail.com',
            'ateeqasif1168@gmail.com'
        ],
    ],
    'executive_emails' => env('EXECUTIVE_EMAILS', []),
    'javascript' => [
        'log' => env('JAVASCRIPT_LOG_TRUE', false)
    ],
    'qa' => [
        'is_qa' => env('IS_QA_ENV', false),
        'email' => 'integrations.zapta@gmail.com'
    ],
];
