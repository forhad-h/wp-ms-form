<?php

$contact_details = <<<CONTACTDETAILS
    <div class="single_info">
        <h4 style="margin-bottom: 30px;">Contact Details</h4>\r\n
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
                    <td class="col1">Title: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_title}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">First name: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_first_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Middle Name: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_middle_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Last Name: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_last_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Home Address: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_home_address}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">State: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_state}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Postcode: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_postcode}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Mobile Phone: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_mobile_phone}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Home Phone: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_home_phone}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Work Phone: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_work_phone}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Email: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_email}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Drivers License Number and Type: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_driver_license}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1"><h5>Time of Accident</h5></td>
                    <td class="col2"></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Date of Accident: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_accident_date}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Day of Accident: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_accident_day}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Approximate Time of Accident: </td>
                    <td class="col2"><strong class="blue_dark">{$cd_accident_time}</strong></td>
                </tr>\r\n

            </tbody>
        </table>
    </div>\r\n
CONTACTDETAILS;
