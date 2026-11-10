<?php
// English copy. Same keys as inc/lang/lt.php.

$AO_SERVICES = [
    ['id' => 'pokalbis', 'name' => 'Call and live walkthrough', 'note' => 'A 30-min call with a look at working systems',
     'desc' => 'We find out whether help is needed and possible. During the call I show you live how similar work looks in a system.', 'price' => 'Free', 'free' => true],
    ['id' => 'auditas', 'name' => 'Process audit', 'note' => 'Process map, numbers, priorities and a clear build price.',
     'desc' => 'I look at how work moves, calculate what the disorder costs and tell you what to change first.', 'price' => 'Fixed, agreed in advance'],
    ['id' => 'idiegimas', 'name' => 'System build', 'note' => 'From a few hours of work to a system built over a few weeks',
     'desc' => 'I build only what your work needs, not a template for everyone. We build larger systems in stages, so you can use the first parts before the whole project is finished.', 'price' => 'One-time, agreed in advance'],
    ['id' => 'prieziura', 'name' => 'Support', 'note' => 'Changes, questions, one contact',
     'desc' => 'Your business changes, so the system changes too. Support is optional. It is paid monthly.', 'price' => 'Optional, monthly'],
];

$AO_JOBS = [
    ['From inquiry to invoice', 'The inquiry, quote, order and invoice sit in one row. Information does not get lost between emails.'],
    ['Quotes and estimates', 'The system takes prices from your price list and calculates the total itself. You prepare a quote in a few minutes.'],
    ['Stock and inventory', 'An order deducts the goods from stock by itself. The system warns you when stock runs low.'],
    ['Clients', 'Each client\'s contacts, inquiries and orders are visible in one place.'],
    ['Tasks and deadlines', 'Every person sees what to do next and by when.'],
    ['Management dashboard', 'Key numbers update by themselves. You do not wait for a report.'],
];

$AO_EXTRAS = [
    ['PDF documents', 'invoices, quotes and work reports in a minute'],
    ['Superhuman Go AI assistant', 'an option: you turn it on yourself in your account'],
    ['Websites', 'they do not cost thousands, and you maintain them yourself: if you can use Word, you can use this'],
];

$AO_CASES = [
    [
        'tag' => 'Order management · manufacturing, print, trade',
        'title' => 'Every order is visible from inquiry to delivery.',
        'rows' => [
            ['Before', 'Inquiries, prices and statuses are scattered across emails, files and messages.'],
            ['Solution', 'One order row connects the price, stage, deadline and the person in charge.'],
            ['After', 'Every employee sees what to do next, without calls or retyping.'],
        ],
        'demo' => '',
    ],
    [
        'tag' => 'Booking and schedules · clinics, salons, service shops',
        'title' => 'Clients see only slots that are really free.',
        'rows' => [
            ['Before', 'Visits are arranged by phone, and specialists keep their schedules separately.'],
            ['Solution', 'The system builds free slots from work schedules. Bookings go into one shared list.'],
            ['After', 'The workload of every specialist is visible in one view.'],
        ],
        'demo' => '',
    ],
    [
        'tag' => 'Services → work reports → invoices',
        'title' => 'From finished work to an issued invoice in a few clicks.',
        'rows' => [
            ['Before', 'Work reports and invoices are filled in by hand, and client details are retyped every time.'],
            ['Solution', 'Work is entered once. The total is calculated automatically, and the report and invoice fill in from the selected client.'],
            ['After', 'You always know what is invoiced, what is paid and which invoice is late.'],
        ],
        'demo' => 'https://docs.superhuman.com/@artifexordinis/3-paslaugos-aktai-saskaitos',
    ],
    [
        'tag' => 'Estimates and calculators · construction, landscaping, manufacturing',
        'title' => 'An estimate comes from the price list, not from memory.',
        'rows' => [
            ['Before', 'Estimates are calculated in Excel, and prices are copied by hand.'],
            ['Solution', 'You pick goods and services from the price list. The system calculates the total and prepares a document for the client.'],
            ['After', 'An estimate is ready in a few minutes, and prices are always the same.'],
        ],
        'demo' => '',
    ],
    [
        'tag' => 'Service shop · repair and maintenance',
        'title' => 'Client, job, parts and invoice in one place.',
        'rows' => [
            ['Before', 'Jobs, used parts and client contacts are written down in different places.'],
            ['Solution', 'The job calendar is linked to clients, finished work and used parts.'],
            ['After', 'The manager sees the day\'s jobs and the month\'s revenue without separate reports.'],
        ],
        'demo' => 'https://docs.superhuman.com/@artifexordinis/servisas',
    ],
];

$AO_PRICING = [
    ['System build', 'You pay once. We agree on the price in advance. We calculate it from how much the system will save you each month.'],
    ['Platform license', 'You pay Superhuman only for the people who build the structure. Employees who use the system pay nothing.'],
    ['Support', 'It is optional. It is paid monthly.'],
];

$AO_PRICING_WHY = [
    ['Why not an hourly rate?', 'When work is paid by the hour, longer work brings more money. I want to build something that works, fast.'],
    ['Why not a fee for every person?', 'Such a fee grows with your team. Your bill for the system should not grow just because you hired someone.'],
];

$AO_FAQ = [
    ['Do you work only with small companies?',
     'No. Size and legal form matter less than repeating work: inquiries, calculations, quotes, orders, reports. I work both with a single person and with companies of several hundred employees.'],
    ['Can you only advise, without building a system?',
     'Yes. The process audit ends with a clear list of what to change. Sometimes simple changes you can make yourself are enough — then I will say so.'],
    ['Will we have to replace the programs we already use?',
     'Usually not. The system connects what you already have: email, calendar, spreadsheets. We change only what really gets in the way.'],
    ['Whose account will the system be in?',
     'Yours. Superhuman Docs is not my platform: I build a system in it that fits your work. While I build, I hold a builder (Doc Maker) license in your account, and you can switch it off when the work is done. You can switch the Doc Maker license on and off at any time, so if you need changes in six months or a year, you pay only for the time I work. If it suits you better, I can build the system in my account and hand it over to you, paid for.'],
    ['Who is responsible for our data?',
     'You are the data controller, I am the data processor, and the platform (Superhuman Docs) stores the data under its own agreement with you. I process data only on your written instructions, report any security incident within 24 hours, and return or delete the data within 30 days after the work ends. All of this goes into a data processing agreement under GDPR Article 28.'],
    ['How much does it cost?',
     'We agree on the build price in advance. We calculate it from how much the system will save you each month, not from hours. The first call is free. You get the support price in a personal proposal.',
     ['/en/pricing/', 'How the price is calculated →']],
    ['Can I see what the system would look like before I pay?',
     'Yes. I build one of your main processes in my account with sample data, free of charge, and show it to you. We agree on this during the call.'],
    ['How much do Superhuman Docs licenses cost?',
     'You pay only for builders (Doc Makers), the people who create new documents. Employees who only use and fill in the system pay nothing. We will choose the right plan during the call.',
     ['https://superhuman.com/plans', 'Superhuman plans and pricing →']],
    ['Will the price change when we hire new people?',
     'No. People who use the system pay no license. A license is needed only for those who build the structure: new tables, pages and rules.'],
    ['Why is this often cheaper than popular platforms?',
     'Every program has its own meter, called a value metric. Many platforms count every person who logs in, every record or every automation step. When the business grows, that bill grows by itself. Superhuman Docs counts only those who build (Doc Makers). Employees who use the system pay nothing. Over a few years the difference is often several times. I show the exact comparison with your headcount during the call.'],
    ['Will the system have artificial intelligence (AI)?',
     'It is an option. Superhuman Go is the AI assistant in the Superhuman suite. You can turn it on yourself in your account; you do not need my help for that. Go uses your plan\'s credits, so it is worth using where it pays off.'],
    ['Do you help with other Superhuman tools too?',
     'Yes. Superhuman Docs is part of the Superhuman suite. The suite also includes Superhuman Mail for email, Grammarly for writing and the Superhuman Go AI assistant. I can help you set them up so that email, documents and the system work together.'],
    ['Is our data safe?',
     'The data is stored in your Superhuman Docs account, not on my computer. The platform sends it over an encrypted connection (TLS) and stores it encrypted (AES-256). Only those who need access for their work get it. More in the privacy policy.'],
    ['How long does it all take?',
     'It depends on the scope, team size and requirements. A simple system can sometimes be built in a few hours, a larger one in a few weeks. We agree on deadlines for each project: an audit usually takes 1–2 weeks, and we build larger systems in stages.'],
    ['Where do you work?',
     'Remotely, with clients across Lithuania: over video calls and a shared document where you see the system being built. Showing the result is faster than describing it. I work in Lithuanian and English.'],
];

$AO_SECTORS = ['Manufacturing', 'Cafés and kebab shops', 'Clinics and salons', 'Events', 'Construction and renovation',
               'Service shops', 'Trade and warehouse', 'Consultants'];

$AO_T = [
    'html_lang' => 'en', 'og_locale' => 'en_GB',
    'skip' => 'Skip to content',
    'brand_home' => 'Artifex Ordinis — home',
    'nav_label' => 'Main navigation',
    'nav_jobs' => 'What it does', 'nav_cases' => 'Examples', 'nav_prices' => 'Pricing', 'nav_about' => 'About', 'nav_cta' => 'Book a call',
    'lang_other' => 'LT', 'lang_other_label' => 'Lietuviška versija',
    'md_title' => 'Summary for AI agents',

    'home_title' => 'Artifex Ordinis — one place for your business',
    'home_desc' => 'Orders, quotes, stock, clients and reports in one live system, built around how you work. The price depends on the benefit. The first call is free.',
    'hero_eyebrow' => 'Architect of order',
    'hero_h1' => 'Order that works for you.',
    'hero_lead' => 'One place for your business that grows with you. Orders, quotes, stock, clients and reports are joined into one live system. I build it around how work already moves in your business.',
    'hero_cta' => 'Book a 30-min call',
    'hero_cases' => 'See examples',
    'hero_note' => 'The first call is free. During it I show you working systems live.',
    'hero_fig' => 'Artifex Ordinis mark: an arch of five stones with a copper keystone',

    'pain_label' => 'Sound familiar?',
    'pain_h2' => 'Disorder rarely looks like disorder.',
    'pain_p' => 'Most of the time it looks like “that is just how we do it”.',
    'pain_items' => [
        'Information is scattered: Excel, email, Messenger and somebody\'s memory.',
        '“Ask Rasa, only she knows.”',
        'You enter the same thing two or three times — sometimes with a mistake.',
        'One avoidable mistake turns into redone work, delays and an unhappy client.',
        'The client reports the problem first, not your system.',
    ],

    'jobs_label' => 'What the system does',
    'jobs_h2' => 'Every task has its place.',
    'jobs_p' => 'The system joins what is scattered across files and emails today. You enter data once, and it shows up everywhere it is needed.',
    'extras_h3' => 'Also',

    'sectors_label' => 'Who it is for',
    'sectors_h2' => 'Any business that calculates, prepares quotes and fulfils orders.',
    'sectors_aria' => 'Example sectors',
    'sectors_note' => 'From a single person to a company of several hundred employees. Size matters less than repeating work.',
    'sectors_aside' => 'This is not a template for everyone. We start from how you work and build only what you need.',

    'stmt_label' => 'Live, not on slides',
    'stmt_quote' => 'No PowerPoint decks. The manager, the team and the investor see <em>the same numbers</em> at the same moment.',
    'stmt_p' => 'The goal is always the same: less manual work, a faster process and more time for what really matters.',

    'cases_label' => 'Examples',
    'cases_h2' => 'What I can show you.',
    'cases_p' => 'These are not templates. Every system is built for specific work, and the examples show the direction.',
    'case_try' => 'Try the system →',
    'case_call' => 'See it during the call →',
    'process_h3' => 'How the build works',
    'process_p1' => 'We build the system in stages. After each stage you test it, and I make corrections.',
    'process_p2' => 'This takes time from both me and your team. You appoint a person who answers questions and tests the solutions.',
    'demo_note' => 'Public previews use sample data, so feel free to click around. The demos are in Lithuanian. I show other examples live during the call.',

    'how_label' => 'How I work',
    'how_h2' => 'Understand first, build second.',
    'how_aside' => 'This is joint work. I talk to several of your people, not only the manager. Each of them shows how they actually do their work. This is how I find the places where work gets stuck or repeats. You appoint a responsible person and set aside time. The system is not a one-off purchase: it grows with your business.',

    'price_label' => 'Pricing',
    'price_h2' => 'The price depends on the benefit, not on hours.',
    'price_more' => 'Why it works this way, and what it would cost you →',
    'price_note' => 'Superhuman Docs is the platform I build on. The system stays in your account.',
    'price_plans' => 'Superhuman plans and pricing →',

    'about_label' => 'About me',
    'about_p1' => 'I have worked in construction, logistics, manufacturing and technical maintenance, in Lithuania and abroad. In many companies I saw the same thing: work is slow and manual, everything lives in Excel sheets, and a proper system looks like a project worth tens of thousands of euros. Usually it is not.',
    'about_p2' => 'That is why I build systems with no-code tools that are easy to understand and, with a little learning, easy to adjust yourself. My goal is not to tie you to me, but to teach you and put the tool in your hands, if you want to learn.',
    'about_link' => 'My story →',
    'portrait_alt' => 'Saulius Elinskas',

    'faq_label' => 'FAQ',
    'faq_h2' => 'What people ask most.',

    'contact_label' => 'Contact',
    'contact_h2' => 'Where does your work get stuck?',
    'contact_p' => 'Tell me about it. I will prepare a demo that solves that problem. During a 30-min call you will try the demo live.',
    'c_email' => 'Email', 'c_phone' => 'Phone', 'c_work' => 'Work', 'c_work_val' => 'Remotely, across Lithuania',

    'pr_title' => 'Pricing — Artifex Ordinis',
    'pr_desc' => 'How the system price is calculated: a one-time build based on the benefit, a license only for the people who build, and optional support.',
    'pr_label' => 'Pricing',
    'pr_h1' => 'The price depends on the benefit, not on hours.',
    'pr_lead' => 'You pay for three clearly separate things. You know each of them in advance.',
    'pr_why_label' => 'Why',
    'pr_why_h2' => 'The price should not grow without a reason.',
    'pr_calc_label' => 'Calculator',
    'pr_calc_h2' => 'What would it cost you?',
    'pr_calc_p' => 'Enter your numbers: how many people work, how much time manual work takes and how many people will build the system. The calculator shows what your current way of working costs and a three-year comparison.',
    'pr_calc_frame' => 'Order calculator',
    'pr_calc_lang' => 'The calculator is in Lithuanian. During the call we fill it in together, in English.',
    'pr_calc_none' => 'We fill in the calculator together during the call, with your numbers.',
    'pr_calc_open' => 'Open the calculator in a new window →',
    'pr_faq_h2' => 'Questions about price',
    'pr_cta_h2' => 'Want to see your own numbers?',
    'pr_cta_p' => 'The first call is free. During it we calculate together what your current way of working costs you.',
    'pr_faq_ids' => [7, 8, 9, 3],

    'foot_label' => 'Footer navigation',
    'f_about' => 'About', 'f_contacts' => 'Contact', 'f_privacy' => 'Privacy policy',

    'form_frame' => 'Inquiry form',
    'form_toolname' => 'book_call',
    'form_tool' => 'Book a free 30-minute call with a live walkthrough of working systems with Artifex Ordinis (Saulius, remote) about business process order. Requires a name, an email address and a short description of the problem to solve.',
    'form_ok' => 'Thank you! I received your inquiry and will reply within one business day.',
    'form_err' => 'Sending failed. Please write directly to',
    'form_missing' => 'Please fill in your name, email and message.',
    'form_name' => 'Name', 'form_email' => 'Email', 'form_company' => 'Company', 'form_optional' => '(optional)',
    'form_msg' => 'Where does your work get stuck?', 'form_site' => 'Website',
    'form_submit' => 'Book the call',
    'form_privacy' => 'I will use your data only to reply to your inquiry. More in the',
    'form_privacy_link' => 'privacy policy',
    'form_agent' => '<b>Have an AI assistant?</b> This form is marked as the WebMCP tool <code>book_call</code>, so an assistant in your browser can fill it in for you.',
];
