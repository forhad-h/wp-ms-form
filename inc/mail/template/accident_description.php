<?php

$ad_all_items = '';


for( $i = 0; $i < (int) $ad_witness_num; $i++) {
  $witness_amount = $i + 1;
  $ad_all_items .= <<<ADSINGLE
      <div class="single_item">
          <tr>
              <td class="col1"><strong>Witness {$witness_amount}:</strong></td>
              <td class="col2"></td>
          </tr>\r\n

          <tr>
              <td class="col1">Title: </td>
              <td class="col2"><strong class="blue_dark">{$ad_title[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">First name: </td>
              <td class="col2"><strong class="blue_dark">{$ad_first_name[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Middle Name: </td>
              <td class="col2"><strong class="blue_dark">{$ad_middle_name[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Last Name: </td>
              <td class="col2"><strong class="blue_dark">{$ad_last_name[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Age: </td>
              <td class="col2"><strong class="blue_dark">{$ad_age[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Address: </td>
              <td class="col2"><strong class="blue_dark">{$ad_address[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Postcode: </td>
              <td class="col2"><strong class="blue_dark">{$ad_postcode[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Mobile: </td>
              <td class="col2"><strong class="blue_dark">{$ad_mobile[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Home Phone: </td>
              <td class="col2"><strong class="blue_dark">{$ad_home_phone[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Work Phone: </td>
              <td class="col2"><strong class="blue_dark">{$ad_work_phone[$i]}</strong></td>
          </tr>\r\n
          <tr>
              <td class="col1">Email: </td>
              <td class="col2"><strong class="blue_dark">{$ad_email[$i]}</strong></td>
          </tr>\r\n
      </div>
ADSINGLE;
}

$accident_description = <<<ACCIDENTDESCRIPTION
    <div class="single_info">
        <h4 style="margin-bottom: 30px;">Accident Information</h4>\r\n
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
                    <td class="col1"><h5>Location of Accident</h5></td>
                    <td class="col2"></td>
                </tr>\r\n

                <tr>
                    <td class="col1">Street/s: </td>
                    <td class="col2"><strong class="blue_dark">{$ad_street}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Suburb: </td>
                    <td class="col2"><strong class="blue_dark">{$ad_suburb}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Is your car Drivable: </td>
                    <td class="col2"><strong class="blue_dark">{$ad_drivable}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Location of damage to your vehicle: </td>
                    <td class="col2"><strong class="blue_dark">{$ad_location}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Diagram of the accident using street names and signals: </td>
                    <td class="col2"><strong class="blue_dark">diagram.png</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Description of Accident: </td>
                    <td class="col2"><strong class="blue_dark">{$ad_description}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Description of Accident: </td>
                    <td class="col2"><strong class="blue_dark">{$ad_description}</strong></td>
                </tr>\r\n

                <tr>
                    <td class="col1">Did any party admit liability at the scene? </td>
                    <td class="col2"><strong class="blue_dark">{$ad_liable_party}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Details if yes: </td>
                    <td class="col2"><strong class="blue_dark">{$ad_liable_party_details}</strong></td>
                </tr>\r\n

                <tr>
                    <td class="col1">Did the police attend? </td>
                    <td class="col2"><strong class="blue_dark">{$ad_police_attend}</strong></td>
                </tr>\r\n

                <tr>
                    <td class="col1"><h5>If yes displays below info</h5></td>
                    <td class="col2"></td>
                </tr>\r\n

                <tr>
                    <td class="col1">From which station did they come from? </td>
                    <td class="col2"><strong class="blue_dark">{$ad_station}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Officers’ Names: </td>
                    <td class="col2"><strong class="blue_dark">{$ad_officer_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Police Report Number: </td>
                    <td class="col2"><strong class="blue_dark">{$ad_report_number}</strong></td>
                </tr>\r\n


                <tr>
                    <td class="col1">Were there any witnesses? </td>
                    <td class="col2"><strong class="blue_dark">{$ad_witness}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">If yes how many witnesses: </td>
                    <td class="col2"><strong class="blue_dark">{$ad_witness_num}</strong></td>
                </tr>\r\n

                <tr>
                    <td class="col1">Were there any passengers aged 15 or over in your car that were also witnesses? </td>
                    <td class="col2"><strong class="blue_dark">{$ad_passengers}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">If yes how many passengers: </td>
                    <td class="col2"><strong class="blue_dark">{$ad_passengers_num}</strong></td>
                </tr>\r\n

                <tr>
                    <td class="col1"><h5>How many witnesses/Passenger overall?</h5></td>
                    <td class="col2"></td>
                </tr>\r\n

                <tr>
                    <td class="col1"><h5>Number of witnesses:</h5></td>
                    <td class="col2"><strong class="blue_dark">{$ad_witness_num}</strong></td>
                </tr>\r\n
                {$ad_all_items}
            </tbody>
        </table>
    </div>\r\n
ACCIDENTDESCRIPTION;
