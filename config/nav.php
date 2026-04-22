<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Main Navigation Menu
    |--------------------------------------------------------------------------
    |
    | Each item is either a simple link or a dropdown group with children.
    | - 'label': Display text
    | - 'route': Named route (for simple links)
    | - 'active': Route pattern(s) for active state highlighting
    | - 'children': Array of child items (makes it a dropdown)
    | - 'heading': Optional section heading within a dropdown
    | - 'indent': Whether to indent the item (sub-item)
    | - 'divider': Set to true for a horizontal rule separator
    |
    */

    'items' => [
        [
            'label' => 'Services',
            'active' => 'services.*',
            'children' => [
                ['heading' => 'Education'],
                ['label' => 'Education Overview', 'route' => 'services.education.index'],
                ['label' => 'School Programs', 'route' => 'services.education.school', 'indent' => true],
                ['label' => 'English & Foundation', 'route' => 'services.education.english', 'indent' => true],
                ['label' => 'VET & TAFE', 'route' => 'services.education.vet-tafe', 'indent' => true],
                ['label' => 'Undergraduate & Postgraduate', 'route' => 'services.education.degrees', 'indent' => true],
                ['divider' => true],
                ['heading' => 'Migration'],
                ['label' => 'Migration Overview', 'route' => 'services.migration.index'],
                ['label' => 'Student Visas', 'route' => 'services.migration.student-visas', 'indent' => true],
                ['label' => 'Graduate & Work Visas', 'route' => 'services.migration.graduate-work', 'indent' => true],
                ['label' => 'Permanent Residence', 'route' => 'services.migration.permanent-residence', 'indent' => true],
                ['divider' => true],
                ['label' => 'Career Services', 'route' => 'services.career'],
                ['label' => 'Student Support', 'route' => 'services.student-support'],
            ],
        ],
        [
            'label' => 'Programs',
            'active' => 'programs.*',
            'children' => [
                ['label' => 'Programs Overview', 'route' => 'programs.index'],
                ['divider' => true],
                ['label' => 'Buddy Programme', 'route' => 'programs.buddy-programme', 'indent' => true],
                ['label' => 'Study Tours', 'route' => 'programs.study-tours', 'indent' => true],
                ['label' => 'Executive Internship', 'route' => 'programs.executive-internship', 'indent' => true],
            ],
        ],
        [
            'label' => 'Why Australia',
            'route' => 'why-australia',
            'active' => 'why-australia',
        ],
        [
            'label' => 'About',
            'active' => 'about.*',
            'children' => [
                ['label' => 'About Us', 'route' => 'about.index'],
                ['label' => 'Our Team', 'route' => 'about.team'],
                ['label' => 'Our Partners', 'route' => 'about.partners'],
                ['label' => 'SCSA Partnership', 'route' => 'about.scsa-partnership'],
            ],
        ],
        [
            'label' => 'Resources',
            'active' => ['blog.*', 'faq', 'admission-requirements'],
            'children' => [
                ['label' => 'Blog', 'route' => 'blog.index', 'active' => 'blog.*'],
                ['label' => 'FAQ', 'route' => 'faq'],
                ['label' => 'Admission Requirements', 'route' => 'admission-requirements'],
            ],
        ],
        [
            'label' => 'Fees',
            'route' => 'fees',
            'active' => 'fees',
        ],
        [
            'label' => 'Contact',
            'route' => 'contact',
            'active' => 'contact',
        ],
    ],

];
