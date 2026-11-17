<?php

namespace Modules\Services\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected array $services = [
        [
            'slug'     => 'household-moving',
            'title'    => 'Home & Household Shifting',
            'icon'     => 'fa-house-chimney',
            'b_icon'   => 'bi-house-check',
            'badge'    => 'Residential',
            'desc'     => 'Safe and dependable home relocation with premium multi-layer bubble wrap packaging, custom cartons, and careful furniture handling.',
            'features' => ['Zero damage guarantee', 'Custom crating for fragile items', 'Doorstep unpacking & rearranging', 'Experienced and courteous crew']
        ],
        [
            'slug'     => 'office-relocation',
            'title'    => 'Office & Corporate Shifting',
            'icon'     => 'fa-briefcase',
            'b_icon'   => 'bi-buildings',
            'badge'    => 'Corporate',
            'desc'     => 'Seamless workplace relocation designed for zero business downtime, safe IT equipment moving, server shifting, and document management.',
            'features' => ['Weekend & night shifting options', 'Server & workstation protection', 'Organized cable & desk labelling', 'Dedicated relocation coordinator']
        ],
        [
            'slug'     => 'car-transportation',
            'title'    => 'Car Carrier & Transportation',
            'icon'     => 'fa-car-side',
            'b_icon'   => 'bi-car-front',
            'badge'    => 'Vehicle Logistics',
            'desc'     => 'Dedicated enclosed car carriers ensuring scratch-free, door-to-door vehicle delivery across India with pre-transit condition inspection.',
            'features' => ['Enclosed hydraulic car trailers', 'Full transit insurance coverage', 'Doorstep car pickup & drop', 'Live GPS location tracking']
        ],
        [
            'slug'     => 'bike-transportation',
            'title'    => 'Bike & Two-Wheeler Shifting',
            'icon'     => 'fa-motorcycle',
            'b_icon'   => 'bi-bicycle',
            'badge'    => 'Two-Wheeler',
            'desc'     => 'Specialized wooden crating and bubble-foam wrapped packing for motorcycles, scooters, and premium sports bikes for total protection.',
            'features' => ['Customized wooden frame crating', 'Mirror & indicator safe packing', 'Fast transit between major cities', 'Door-to-door delivery']
        ],
        [
            'slug'     => 'packing-moving',
            'title'    => 'Packing & Unpacking Services',
            'icon'     => 'fa-boxes-packing',
            'b_icon'   => 'bi-box-seam',
            'badge'    => 'Packing Experts',
            'desc'     => '5-layer protective packing using heavy-duty corrugated sheets, bubble wrap, stretch film, shrink wrap, and specialized wardrobe boxes.',
            'features' => ['Highest quality packaging materials', 'Systematic itemized labeling', 'Fragile item extra cushioning', 'Fast & neat unpacking assistance']
        ],
        [
            'slug'     => 'loading-unloading',
            'title'    => 'Loading & Unloading Services',
            'icon'     => 'fa-truck-ramp-box',
            'b_icon'   => 'bi-truck',
            'badge'    => 'Labor & Handling',
            'desc'     => 'Trained ground professionals equipped with modern hydraulic lifts, ramps, hand trucks, dollies, and safety gear for heavy cargo.',
            'features' => ['Modern loading tools & lifters', 'Floor, wall & door frame protection', 'Trained & physically fit crew', 'Careful placement in new home']
        ],
        [
            'slug'     => 'warehouse-storage',
            'title'    => 'Warehousing & Safe Storage',
            'icon'     => 'fa-warehouse',
            'b_icon'   => 'bi-archive',
            'badge'    => 'Storage Facility',
            'desc'     => 'CCTV-monitored, 100% moisture and pest-controlled warehouse facilities for short-term and long-term storage of household or business goods.',
            'features' => ['24x7 security & CCTV monitoring', 'Pest and moisture control', 'Fire-safety compliance', 'Flexible weekly & monthly billing']
        ],
        [
            'slug'     => 'transit-insurance',
            'title'    => 'Goods Transit Insurance',
            'icon'     => 'fa-shield-halved',
            'b_icon'   => 'bi-shield-check',
            'badge'    => '100% Protection',
            'desc'     => 'Comprehensive insurance coverage against accidental damages or unforeseen events during transit for total financial peace of mind.',
            'features' => ['All-risk transit coverage', 'Hassle-free fast claim processing', 'Transparent policy terms', 'Peace of mind guaranteed']
        ],
        // Backward compatibility slug for vehicle-transportation
        [
            'slug'     => 'vehicle-transportation',
            'title'    => 'Car & Bike Transportation',
            'icon'     => 'fa-car',
            'b_icon'   => 'bi-car-front',
            'badge'    => 'Vehicles',
            'desc'     => 'Complete automobile shifting with customized car carriers and motorcycle wooden crating solutions nationwide.',
            'features' => ['Covered car trailers', 'Pre-transit scratch inspection', 'Doorstep pickup & drop', 'Complete transit safety']
        ],
    ];

    public function getAll(): array
    {
        return array_values(array_filter($this->services, function ($s) {
            return $s['slug'] !== 'vehicle-transportation';
        }));
    }

    public function getBySlug(string $slug): ?array
    {
        foreach ($this->services as $service) {
            if ($service['slug'] === $slug) {
                return $service;
            }
        }
        return null;
    }
}
