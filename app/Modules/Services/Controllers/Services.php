<?php

namespace Modules\Services\Controllers;

use App\Controllers\BaseController;
use Modules\Template\Controllers\Template;
use Modules\Services\Models\ServiceModel;

class Services extends BaseController
{
    protected ServiceModel $serviceModel;

    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
    }

    public function index()
    {
        return redirect()->to(site_url('household-moving'));
    }

    public function homeShifting(): string
    {
        $data['title']       = "Home Shifting | " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers');
        $data['description'] = "Top-rated home shifting services by " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers') . ". 100% IBA-approved household relocation with 5-layer bubble packing.";
        $data['page']        = 'services';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\home_shifting';
        $data['services']    = $this->serviceModel->getAll();

        return Template::layout2($data);
    }

    public function officeShifting(): string
    {
        $data['title']       = "Office Shifting | " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers');
        $data['description'] = "Professional office relocation services by " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers') . ". IBA-approved corporate moving with zero business downtime.";
        $data['page']        = 'services';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\office_shifting';
        $data['services']    = $this->serviceModel->getAll();

        return Template::layout2($data);
    }

    public function carShifting(): string
    {
        $data['title']       = "Car Shifting | " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers');
        $data['description'] = "Reliable car carrier and vehicle transportation by " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers') . ". Enclosed hydraulic car trailers, scratch-free transit.";
        $data['page']        = 'services';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\car_shifting';
        $data['services']    = $this->serviceModel->getAll();

        return Template::layout2($data);
    }

    public function bikeShifting(): string
    {
        $data['title']       = "Bike Shifting | " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers');
        $data['description'] = "Safe and dependable two-wheeler & motorcycle transportation by " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers') . ". Customized wooden crate packaging.";
        $data['page']        = 'services';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\bike_shifting';
        $data['services']    = $this->serviceModel->getAll();

        return Template::layout2($data);
    }

    public function corporateRelocation()
    {
        return redirect()->to(site_url('office-relocation'), 301);
    }

    public function packingUnpacking(): string
    {
        $data['title']       = "Packing and Unpacking | " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers');
        $data['description'] = "Professional packing and unpacking services by " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers') . ". 5-layer heavy-duty corrugated cartons and bubble wrap.";
        $data['page']        = 'services';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\packing_unpacking';
        $data['services']    = $this->serviceModel->getAll();

        return Template::layout2($data);
    }

    public function loadingUnloading(): string
    {
        $data['title']       = "Loading and Unloading | " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers');
        $data['description'] = "Professional loading and unloading services by " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers') . ". Trained handling crew, modern hydraulic ramps, dollies.";
        $data['page']        = 'services';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\loading_unloading';
        $data['services']    = $this->serviceModel->getAll();

        return Template::layout2($data);
    }

    public function storageWarehouse(): string
    {
        $data['title']       = "Storage & Warehouse | " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers');
        $data['description'] = "Secure household and commercial warehouse storage services by " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers') . ". 24x7 CCTV surveillance, fire-safety.";
        $data['page']        = 'services';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\storage_warehouse';
        $data['services']    = $this->serviceModel->getAll();

        return Template::layout2($data);
    }

    public function transitInsurance(): string
    {
        $data['title']       = "Goods Transit Insurance | " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers');
        $data['description'] = "100% comprehensive goods transit insurance for household shifting, vehicle transport, and corporate cargo by " . ($this->comp['company3'] ?? 'Radhika Thakre Packers and Movers') . ".";
        $data['page']        = 'services';
        $data['module']      = 'services';
        $data['view_file']   = 'Modules\Services\Views\transit_insurance';
        $data['services']    = $this->serviceModel->getAll();

        return Template::layout2($data);
    }

    /**
     * Slug Router mapping dynamic /services/(:segment) to the dedicated page
     */
    public function detail(string $slug): string
    {
        switch ($slug) {
            case 'household-moving':
            case 'home-relocation':
            case 'home-shifting':
            case 'home-shifting-in-indore':
                return $this->homeShifting();

            case 'office-relocation':
            case 'office-shifting':
            case 'office-shifting-in-indore':
                return $this->officeShifting();

            case 'car-transportation':
            case 'car-shifting':
            case 'car-shifting-in-indore':
                return $this->carShifting();

            case 'bike-transportation':
            case 'bike-shifting':
            case 'bike-shifting-in-indore':
                return $this->bikeShifting();

            case 'vehicle-transportation':
                return $this->carShifting();

            case 'corporate-relocation':
            case 'corporate-relocation-in-indore':
                return $this->corporateRelocation();

            case 'packing-moving':
            case 'packing-and-moving':
            case 'packing-unpacking':
            case 'indore-packing-unpacking':
                return $this->packingUnpacking();

            case 'loading-unloading':
            case 'loading-and-unloading':
            case 'indore-loading-unloading':
                return $this->loadingUnloading();

            case 'warehouse-storage':
            case 'storage-services':
            case 'storage-warehouse':
            case 'warehouse':
            case 'indore-warehouse':
                return $this->storageWarehouse();

            case 'transit-insurance':
            case 'goods-insurance':
                return $this->transitInsurance();

            default:
                return $this->homeShifting();
        }
    }

    // CI3 method backward compatibility aliases
    public function office(): string { return $this->officeShifting(); }
    public function bike(): string { return $this->bikeShifting(); }
    public function car(): string { return $this->carShifting(); }
    public function packingMoving(): string { return $this->packingUnpacking(); }
    public function storage(): string { return $this->storageWarehouse(); }
}
