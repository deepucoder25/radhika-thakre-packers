<?php
if (!defined('APPPATH') && !defined('BASEPATH')) {
    exit('No direct script access allowed');
}

$city = !empty($cityName) ? $cityName : (!empty($city) ? $city : 'Your City');
$company3 = !empty($company3) ? $company3 : 'Radhika Thakre Packers and Movers';
$experience = !empty($experience) ? $experience : '8+';

$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';
$htmlcontent3 = '';
$whyChoosePoints = [];

// City Specific or General Shifting Content
if (strtolower($city) == "") {
    $htmlcontent = "";
    $htmlcontent1 = "";
    $htmlcontent2 = "";
    $htmlcontent3 = "";
} else {
     $htmlcontent = "
     <h2 class='fw-bolder mb-3'>
                   Reliable Moving Services for Homes and Businesses
                </h2>

                <p class='text-muted mb-3'>
                    <strong>$company3</strong> offers packing and moving services to families, working professionals and corporate clients in $city. Located in Indore, Madhya Pradesh, the company has $experience years of experience in the moving industry and has helped over 25,000 families and corporate offices relocate.
                </p>

                <p class='text-muted mb-4'>
                    Shifting a house or office involves many aspects of consideration. Proper packaging and shifting of furniture, appliances, kitchen and other goods require attention. We guide the customers in the entire process ranging from packing to selecting a suitable mode of transportation.
                </p>

                <p class='mb-4'>
                    We arrange various vehicles as per the volume of the cargo, road accessibility and the distance between pick-up and drop-off points. Small trucks may suit small cargo; however, large trucks and container vehicles are used for transporting goods in case of household or corporate shifting. GPS tracking facilities are provided for monitoring vehicles during transportation.
                </p>

                <p class='mb-4'>
                    The crew includes packing workers, loaders, drivers and supervisors. Every individual has a particular role in the process of moving which may range from packaging and protection of furniture, organizing the cartons within the vehicle, driving on the selected route and coordination with customers.
                </p>
                <p class='mb-3'>
                    In case of planning moving from $city, we consider the distance between the destinations, the available highways, road connectivity, traffic flow, toll gates and the feasibility of access to the destination points. While moving within the city, residential roads need consideration while planning. In the case of intercity moving, we take into account the highways and other roads connecting the destination points while planning.
                </p> 

                <div class='p-3 bg-white rounded-3 border small text-muted'>
                    <i class='bi bi-info-circle-fill text-danger me-2'></i>
                    We make it convenient for the customers by understanding the entire process of moving and offering our services as per the requirements of the customers.
                </div>
     ";
    $htmlcontent1 = "";
    $htmlcontent2 = "";
    $htmlcontent3 = "";
}
