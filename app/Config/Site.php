<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Site extends BaseConfig
{
    /**
     * Single Unified Company Configuration (CI3 $comp format)
     * Ab aapko 2 jagah define karne ki bilkul zaroorat nahi hai.
     * Sirf is EK jagah details change kijiye, pure project (Controller, Views, Header, Footer, Schema) me apply ho jayega!
     */
    public $comp = [
        'company3'      => 'Radhika Thakre Packers and Movers',
        'companydomain' => 'radhikathakrepackersmovers.com',
        'phone'         => '+91 98261 25421',
        'phonehtml'     => 'href="tel:+919826125421"',
        'phone1'        => '+91 99931 72221',
        'phonehtml1'    => 'href="tel:+919993172221"',
        'mail'         => 'radhikathakrepackersandmovers@gmail.com',
        'mailhtml'     => 'mailto:radhikathakrepackersandmovers@gmail.com',
        'replyToMail'   => 'info@radhikathakrepackersmovers.com',
        'whatsapp'      => '919826125421',
        'whatsapphtml'  => 'https://wa.me/919826125421',
        'address'       => 'Shop No. 100 first floor Katariya complex Dewas Naka Indore 452001',
        'address1'      => 'Shop No. 100 first floor Katariya complex Dewas Naka',
        'address2'      => 'Indore - 452001, Madhya Pradesh, India',
        'addressRegion' => 'Indore',
        'postalCode'    => '452001',
        'companystate'  => 'Madhya Pradesh',
        'themeColor'    => '#e51a1a',
        'gst'           => '23BMOPT6924P1Z4',

        'experience'    => '8+',
        'startYear'     => '2018',

        // Schema / Rich Snippets (Google SEO)
        'sku'           => 'RTPM2018',
        'mpn'           => 'RTPM452010',
        'ratingValue'   => '4.9',
        'ratingCount'   => '1850',
        'datePublished' => '2026-08-02',
        'reviewBody'    => 'Best Packing and Moving Company in Indore with professional staff and on-time delivery.',
        'reviewperson'  => 'Sunil Sharma',

        'tagline'       => 'Safe, Reliable & Fast Relocation Services Across India',
        'workingHours'  => 'Open 24 hours (24x7 Active)',
        'facebookhtml'  => 'https://www.facebook.com/best.packers.movers.indore?rdid=x1eYEA75M814rGfn&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1GtNEGvPEt%2F#',
        'twitterhtml'   => 'https://x.com/Radhika_Packers?t=6zeG5z1Mh0ntLDBY5gcE9Q&s=09',
        'instagramhtml' => 'https://www.instagram.com/radhika_thakre_packers_movers?igsh=MXdzdWlzOXBqZHoxbQ%3D%3D',
        'linkedinhtml'  => 'https://www.linkedin.com/in/radhika-thakre-packers-and-movers-a44ab02a4/',
        'mediumhtml'    => 'https://medium.com/@radhikathakrepackersandmovers',
        'mapshtml'      => 'https://www.google.com/maps/dir//Radhika+Thakre+Packers+And+Movers+56+Bapu+Gandhi+Nagar,+Pipliya+Kumar+Indore,+Madhya+Pradesh+452010/@22.770231,75.906231,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x39631d4967a98273:0x15d213701ada2484!2m2!1d75.906231!2d22.770231?entry=ttu',
        'truelyverifiedhtml' => 'https://truelyverified.com/dewas/radhika-thakre/profile/7453a8761-791',
        'youtubehtml'   => '#',
    ];

    /**
     * Return exact $comp array
     */
    public function getComp(): array
    {
        return $this->comp;
    }

    /**
     * Dynamic getter: agar koi code $site->name ya $site->phone access kare
     * toh wo bhi isi $this->comp array se dynamically return ho jayega.
     */
    public function __get($key)
    {
        if ($key === 'name') {
            return $this->comp['company3'] ?? '';
        }
        if ($key === 'email') {
            return $this->comp['mail'] ?? '';
        }
        return $this->comp[$key] ?? null;
    }

    public function __isset($key)
    {
        if ($key === 'name') {
            return isset($this->comp['company3']);
        }
        if ($key === 'email') {
            return isset($this->comp['mail']);
        }
        return isset($this->comp[$key]);
    }
}
