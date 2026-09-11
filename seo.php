<?php

$currentPage = basename($_SERVER['PHP_SELF']);

/*
 |--------------------------------------------------
 | PAGE SEO (STATIC PAGES)
 |--------------------------------------------------
*/

$seoData = [

    "index.php" => [
        "title" => "NU Dental Maestro – Multispeciality Dental Clinic & Implant Centre",
        "description" => "NU Dental Maestro is a multispeciality dental clinic and implant centre offering oral health screening, orthodontics, aligners, root canal treatment, dental implants, and complete smile designing.",
        "keywords" => "NU Dental Maestro, multispeciality dental clinic, implant centre, best dentist",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "about-us.php" => [
        "title" => "About NU Dental Maestro | Multispeciality Dental Clinic & Implant Centre",
        "description" => "Learn about NU Dental Maestro, a multispeciality dental clinic and implant centre committed to advanced technology, expert care, and patient-focused dentistry.",
        "keywords" => "about NU Dental Maestro, dental clinic, implant centre",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "oral-health-screening.php" => [
        "title" => "Oral Health Screening | NU Dental Maestro Dental Clinic",
        "description" => "Comprehensive oral health screening at NU Dental Maestro to detect dental problems early and ensure long-term oral wellness.",
        "keywords" => "oral health screening, dental checkup, preventive dentistry",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "orthodontics.php" => [
        "title" => "Orthodontics Treatment | NU Dental Maestro",
        "description" => "Orthodontic treatments at NU Dental Maestro for teeth alignment, bite correction, and confident smiles using modern techniques.",
        "keywords" => "orthodontics, braces treatment, teeth alignment",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "aligners.php" => [
        "title" => "Clear Aligners | NU Dental Maestro Dental Clinic",
        "description" => "Clear aligner treatment at NU Dental Maestro offers a discreet and comfortable way to straighten teeth without traditional braces.",
        "keywords" => "clear aligners, invisible braces, teeth straightening",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "root-canal-treatment.php" => [
        "title" => "Root Canal Treatment | NU Dental Maestro Implant Centre",
        "description" => "Pain-free root canal treatment at NU Dental Maestro to save infected teeth and restore oral health.",
        "keywords" => "root canal treatment, dental pain, tooth infection",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "dental-implants.php" => [
        "title" => "Dental Implants | NU Dental Maestro Implant Centre",
        "description" => "Dental implants at NU Dental Maestro provide a permanent, natural-looking solution for missing teeth.",
        "keywords" => "dental implants, implant dentist, missing teeth replacement",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "complete-smile-designing.php" => [
        "title" => "Complete Smile Designing | NU Dental Maestro",
        "description" => "Complete smile designing at NU Dental Maestro enhances tooth shape, color, alignment, and overall smile aesthetics.",
        "keywords" => "smile designing, cosmetic dentistry, smile makeover",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "image-gallery.php" => [
        "title" => "Image Gallery | NU Dental Maestro Dental Clinic",
        "description" => "View our image gallery showcasing NU Dental Maestro clinic, dental treatments, advanced equipment, and patient care.",
        "keywords" => "dental clinic gallery, NU Dental Maestro images",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "contact-us.php" => [
        "title" => "Contact NU Dental Maestro | Multispeciality Dental Clinic",
        "description" => "Contact NU Dental Maestro to book appointments, enquire about treatments, or consult our expert dental team.",
        "keywords" => "contact dentist, dental appointment, NU Dental Maestro contact",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "thankyou.php" => [
        "title" => "Thank You | NU Dental Maestro",
        "description" => "Thank you for contacting NU Dental Maestro. Our team will get in touch with you shortly.",
        "keywords" => "thank you dental clinic, enquiry confirmation",
        "canonical" => "",
        "robots" => "noindex, nofollow"
    ],

    "404-error.php" => [
        "title" => "Page Not Found | NU Dental Maestro",
        "description" => "The page you are looking for could not be found. Explore NU Dental Maestro’s dental services.",
        "keywords" => "404 error, page not found",
        "canonical" => "",
        "robots" => "noindex, nofollow"
    ],
];

/*
 |--------------------------------------------------
 | DEFAULT META
 |--------------------------------------------------
*/

$defaultMeta = [
    "title" => "NU Dental Maestro – Multispeciality Dental Clinic & Implant Centre",
    "description" => "NU Dental Maestro is a multispeciality dental clinic and implant centre providing advanced and personalized dental care.",
    "keywords" => "dental clinic, implant centre, dentist near me",
    "canonical" => "",
    "robots" => "index, follow"
];

/*
 |--------------------------------------------------
 | META SELECTOR
 |--------------------------------------------------
*/

$pageMeta = $seoData[$currentPage] ?? $defaultMeta;

?>
