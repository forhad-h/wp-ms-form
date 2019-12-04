<?php

if(!function_exists('emailMessage')) {
  function emailMessage() {

    // load all variables which fetch post data
    require_once dirname(__FILE__)."/../data.php";

    // include all parts of template
    include_once dirname(__FILE__)."/styles.php";
    include_once dirname(__FILE__)."/contact_details.php";
    include_once dirname(__FILE__)."/vehicle_details.php";
    include_once dirname(__FILE__)."/accident_info.php";
    include_once dirname(__FILE__)."/insurance_details.php";
    include_once dirname(__FILE__)."/fault_party_details.php";
    include_once dirname(__FILE__)."/fault_party_vehicle_details.php";
    include_once dirname(__FILE__)."/involved_cars.php";
    include_once dirname(__FILE__)."/accident_description.php";


    $emailMessage = <<<TEMPLATE
        <html>
            <head>
              {$styles}
            </head>
            <body>

                <div class="template_header">
                    <h2 style='text-align: center;'>All information about the accident</h2>\r\n
                </div>\r\n

                <div class="template_body">
                    {$contact_details}
                    {$vehicle_details}
                    {$accident_info}
                    {$insurance_details}
                    {$fault_party_details}
                    {$fault_party_vehicle_details}
                    {$involved_cars}
                    {$accident_description}
                </div>
            </body>
        </html>

TEMPLATE;

    return $emailMessage;
  }
}
