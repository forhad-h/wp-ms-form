<?php

$ci_all_items = '';

for( $i = 0; $i < (int) $ci_cars_num; $i++) {
  $car_amount = $i + 1;
  $ci_all_items .= <<<CISINGLE
      <div class="single_item">
          <tr>
              <td class="col1"><strong>Car {$car_amount}:</strong></td>
              <td class="col2"></td>
          </tr>\r\n

          <tr>
              <td class="col1"><h5>Driver of the Vehicle</h5></td>
              <td class="col2"></td>
          </tr>\r\n

          <tr>
              <td class="col1">Title: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_title[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">First name: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_first_name[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Middle Name: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_middle_name[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Last Name: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_last_name[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Address: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_address[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Postcode: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_postcode[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Mobile: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_mobile[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Home Phone: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_home_phone[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Work Phone: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_work_phone[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Email: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_email[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Drivers License Number and Type: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_driver_license[$i]}</strong></td>
          </tr>\r\n

          <tr>
              <td class="col1"><h5>Vehicle Details</h5></td>
              <td class="col2"></td>
          </tr>\r\n

          <tr>
              <td class="col1">Registration Number: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_reg_num[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Make: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_make[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Model: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_model[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Year: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_year[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Colour: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_colour[$i]}</strong></td>
          </tr>\r\n

          <tr>
              <td class="col1"><h5>Insurance Details for the Vehicle</h5></td>
              <td class="col2"></td>
          </tr>\r\n

          <tr>
              <td class="col1">Insurance Company Name: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_company_name[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Type of Cover: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_cover_type[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Policy Number: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_policy_num[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Claim Number: </td>
              <td class="col2"><strong class="blue_dark">{$cisi_claim_num[$i]}</strong></td>
          </tr>\r\n
      </div>
CISINGLE;
}


$involved_cars = <<<INVOLVEDCARS
    <div class="single_info">
        <h4 style="margin-bottom: 30px;">Number of other Cars Involved</h4>\r\n
        <table class="main_table">
            <thead>
                <tr>
                    <td class="col1"><strong style="text-decoration: underline">Name</strong></td>
                    <td class="col2"><strong style="text-decoration: underline">Value</strong></td>
                </tr>\r\n
                <tr><td><br/></td><td></td></tr>\r\n
            </thead>
            <tbody>
                <tr>
                    <td class="col1">Number of cars involved: </td>
                    <td class="col2"><strong class="blue_dark">{$ci_cars_num}</strong></td>
                </tr>\r\n
                {$ci_all_items}
            </tbody>
        </table>
    </div>\r\n
INVOLVEDCARS;
