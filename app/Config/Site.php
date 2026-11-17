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
        'mail'          => 'info@radhikathakrepackersmovers.com',
        'mailhtml'      => 'mailto:info@radhikathakrepackersmovers.com',
        'replyToMail'   => 'info@radhikathakrepackersmovers.com',
        'whatsapp'      => '919826125421',
        'whatsapphtml'  => 'https://wa.me/919826125421',
        'address'       => 'Shop No. 100, Katariya Complex, Near Audi Showroom, Dewas Naka, Lasudia Mori, Indore, Madhya Pradesh - 452010',
        'address1'      => 'Shop No. 100, Katariya Complex, Near Audi Showroom, Dewas Naka',
        'address2'      => 'Lasudia Mori, Indore - 452010, Madhya Pradesh, India',
        'addressRegion' => 'Indore',
        'postalCode'    => '452010',
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
        'workingHours'  => '24x7 Customer Support (All Days)',
        'facebookhtml'  => '#',
        'twitterhtml'   => '#',
        'instagramhtml' => '#',
        'linkedinhtml'  => '#',
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
