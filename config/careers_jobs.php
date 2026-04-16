<?php

/**
 * Career job detail pages: keyed by URL slug.
 * "position" must match the value in careers apply form (partials/careers-apply-section).
 */
return [
    'manager' => [
        'hero_title' => 'Manager',
        'position' => 'Manager',
        'location' => 'Madhapur | Hyderabad',
        'summary' => 'A Manager is responsible for handling daily operations and leading the team to achieve business goals. They ensure smooth workflow, monitor performance, and solve problems when needed. This role requires leadership, decision-making, and strong communication skills. Managers also focus on growth, customer satisfaction, and overall business success.',
        'responsibilities' => [
            'Manage branch/department operations',
            'Lead and supervise staff performance',
            'Ensure target achievement and business growth',
            'Handle customer relations and issue resolution',
            'Monitor financial performance and reporting',

        ],
        'skills' => [
            'Leadership & decision-making',
            'Financial & operational knowledge',
            'Communication & team management',
            'Problem-solving mindset',

        ],
        'experience' => [
            'Graduate/Postgraduate in Business/Finance',
            '5–10 years experience in finance/banking sector',
        ],
        'experience_ordered' => true,
        'salary' => '₹6 LPA – ₹18 LPA',
    ],

    'hr' => [
        'hero_title' => 'HR (Human Resources)',
        'position' => 'HR (Human Resources)',
        'location' => 'Madhapur | Hyderabad',
        'summary' => 'An HR Professional manages hiring, employee relations, and company policies. They recruit the right candidates, support employees, and maintain a healthy work environment. HR also handles attendance, payroll coordination, and employee engagement. This role is important for building a strong and happy team.',
        'responsibilities' => [
            'Recruitment & onboarding',
            'Employee engagement & retention',
            'Payroll coordination & compliance',
            'HR policy implementation',
            'Performance management',
        ],
        'skills' => [
            'Communication & interpersonal skills',
            'HR software (HRMS tools)',
            'Knowledge of labor laws',
            'Emotional intelligence',
        ],
        'experience' => [
            '1-5 years (based on role level)',
            'MBA in HR preferred',
        ],
        'experience_ordered' => true,
        'salary' => '₹3.5 LPA – ₹12 LPA',
    ],

    'accountant' => [
        'hero_title' => 'Accountant',
        'position' => 'Accountant',
        'location' => 'Madhapur | Hyderabad',
        'summary' => 'An Accountant manages all financial records and ensures accuracy in transactions. They handle taxes, reports, and daily accounts of the organization. This role requires attention to detail and knowledge of accounting tools. Accountants help the company maintain financial stability and compliance.',
        'responsibilities' => [
            'Bookkeeping & financial reporting',
            'GST, TDS, and tax filing',
            'Bank reconciliation',
            'Audit support',
            'Expense tracking',
        ],
        'skills' => [
            'Tally, Excel, accounting software',
            'Financial analysis',
            'Attention to detail',
        ],
        'experience' => [
            '2–5 years',
            'B.Com / M.Com / CA (preferred)',
        ],
        'experience_ordered' => false,
        'salary' => '₹3 LPA – ₹8 LPA',
    ],

    'jr-accountant' => [
        'hero_title' => 'Jr. Accountant',
        'position' => 'Jr. Accountant',
        'location' => 'Madhapur | Hyderabad',
        'summary' => 'A Junior Accountant supports the accounts team in daily financial tasks. They handle data entry, invoices, and assist in preparing reports. This role is ideal for freshers or beginners in accounting and helps build strong financial and analytical skills.',
        'responsibilities' => [
            'Data entry & invoice processing',
            'Assisting in GST & reports',
            'Maintaining records',
        ],
        'skills' => [
            'Basic accounting knowledge',
            'Excel & Tally',
        ],
        'experience' => [
            '0–2 years',
        ],
        'experience_ordered' => false,
        'salary' => '₹1.8 LPA – ₹3.5 LPA',
    ],

    'cashier' => [
        'hero_title' => 'Cashier',
        'position' => 'Cashier',
        'location' => 'Madhapur | Hyderabad',
        'summary' => 'A Cashier handles daily cash transactions and customer payments. They ensure all transactions are accurate and properly recorded. This role requires honesty, basic math skills, and customer interaction. Cashiers play an important role in maintaining trust and financial accuracy.',
        'responsibilities' => [
            'Accept deposits/payments',
            'Maintain cash records',
            'Ensure accuracy in transactions',
        ],
        'skills' => [
            'Numerical accuracy',
            'Customer handling',
        ],
        'experience' => [
            'Fresher / 1+ year',
        ],
        'experience_ordered' => false,
        'salary' => '₹1.5 LPA – ₹3 LPA',
    ],

    'admin' => [
        'hero_title' => 'Admin (Administration)',
        'position' => 'Admin',
        'location' => 'Madhapur | Hyderabad',
        'summary' => 'An Admin ensures smooth day-to-day office operations. They manage documents, coordinate with staff, and handle office-related tasks. This role requires organization and multitasking skills. Admin staff help keep the workplace efficient and well-managed.',
        'responsibilities' => [
            'Office management',
            'Vendor coordination',
            'Documentation handling',
            'Staff support',
        ],
        'skills' => [
            'Organization & multitasking',
            'Communication',
        ],
        'experience' => [
            'Fresher / 1+ year',
        ],
        'experience_ordered' => false,
        'salary' => '₹2 LPA – ₹5 LPA',
    ],

    'ui-ux-designer' => [
        'hero_title' => 'UI/UX Designer',
        'position' => 'UI/UX Designer',
        'location' => 'Madhapur | Hyderabad',
        'summary' => 'A UI/UX Designer creates user-friendly and visually appealing designs for websites and apps. They focus on improving user experience by understanding user needs and designing simple interfaces. They work with developers and teams to build smooth digital products. Their role is crucial in making products easy and enjoyable to use.',
        'responsibilities' => [
            'Wireframing & prototyping',
            'User research & testing',
            'Designing UI layouts',
            'Collaboration with developers',
        ],
        'skills' => [
            'Figma, Adobe XD',
            'UX research & design thinking',
            'Visual design',
        ],
        'experience' => [
            'Fresher / 1–4 years',
        ],
        'experience_ordered' => false,
        'salary' => '₹4 LPA – ₹12 LPA',
    ],

    'web-developer' => [
        'hero_title' => 'Web Developer',
        'position' => 'Web Developer',
        'location' => 'Madhapur | Hyderabad',
        'summary' => 'A Web Developer builds and maintains websites and web applications. They ensure the website works properly, loads fast, and looks good on all devices. This role involves coding, fixing bugs, and improving performance. Developers turn design ideas into real working products.',
        'responsibilities' => [
            'Frontend/backend development',
            'Website optimization',
            'Bug fixing & maintenance',
        ],
        'skills' => [
            'HTML, CSS, JS',
            'React / WordPress / PHP',
            'API integration',
        ],
        'experience' => [
            '0–5 years',
        ],
        'experience_ordered' => false,
        'salary' => '₹3.5 LPA – ₹12 LPA',
    ],

    'office-assistant' => [
        'hero_title' => 'Office Assistant',
        'position' => 'Office Assistant',
        'location' => 'Madhapur | Hyderabad',
        'summary' => 'An Office Assistant supports daily office activities and helps staff with basic tasks. They handle files, data entry, and general office work. This role requires basic computer knowledge and organization skills. It is a supportive role that keeps operations running smoothly.',
        'responsibilities' => [
            'File handling',
            'Data entry',
            'Office support tasks',
        ],
        'skills' => [
            'Basic computer knowledge',
            'Organization',
        ],
        'experience' => [
            '0–1 years',
        ],
        'experience_ordered' => false,
        'salary' => '₹1.5 LPA – ₹3 LPA',
    ],

    'marketing-executive' => [
        'hero_title' => 'Marketing Executive',
        'position' => 'Marketing Executive',
        'location' => 'Madhapur | Hyderabad',
        'summary' => 'A Marketing Executive promotes company products and services to attract customers. They work on campaigns, social media, and lead generation. This role requires communication, creativity, and a sales mindset. Their goal is to increase business growth and brand awareness.',
        'responsibilities' => [
            'Campaign execution',
            'Lead generation',
            'Social media marketing',
            'Customer outreach',
        ],
        'skills' => [
            'Digital marketing',
            'Communication',
            'Sales mindset',
        ],
        'experience' => [
            '0–1 years',
        ],
        'experience_ordered' => false,
        'timing' => 'Full-time (01:00 PM – 09:00 PM)',
        'salary' => '₹2.5 LPA – ₹8 LPA',
    ],

    'field-executive' => [
        'hero_title' => 'Field Executive',
        'position' => 'Field Executive',
        'location' => 'Madhapur | Hyderabad',
        'summary' => 'A Field Executive works outside the office and interacts directly with customers. They handle visits, collections, and document verification. This role requires good communication and local area knowledge. Field executives help in expanding business and maintaining customer relationships.',
        'responsibilities' => [
            'Field visits & collections',
            'Customer onboarding',
            'Document verification',
            'Daily reporting',
        ],
        'skills' => [
            'Communication',
            'Local area knowledge',
            'Relationship building',
        ],
        'experience' => [
            'Fresher / 1–3 years',
        ],
        'experience_ordered' => false,
        'timing' => 'Full-time (01:00 PM – 9:00 PM)',
        'salary' => '₹2 LPA – ₹6 LPA',
    ],
];
