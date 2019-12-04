<?php


$fault_party_details = <<<FAULTPARTYDETAILS

    <div class="single_info">
        <h4 style="margin-bottom: 30px;">At Fault Party’s Details</h4>\r\n
        <p>Details of vehicle that collided with your car:</p>\r\n
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
                    <td class="col2"><strong class="blue_dark">{$fp_title}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">First name: </td>
                    <td class="col2"><strong class="blue_dark">{$fp_first_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Middle Name: </td>
                    <td class="col2"><strong class="blue_dark">{$fp_middle_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Last Name: </td>
                    <td class="col2"><strong class="blue_dark">{$fp_last_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Address: </td>
                    <td class="col2"><strong class="blue_dark">{$fp_address}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Postcode: </td>
                    <td class="col2"><strong class="blue_dark">{$fp_postcode}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Mobile: </td>
                    <td class="col2"><strong class="blue_dark">{$fp_mobile}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Home Phone: </td>
                    <td class="col2"><strong class="blue_dark">{$fp_home_phone}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Work Phone: </td>
                    <td class="col2"><strong class="blue_dark">{$fp_work_phone}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Email: </td>
                    <td class="col2"><strong class="blue_dark">{$fp_email}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Drivers License Number and Type: </td>
                    <td class="col2"><strong class="blue_dark">{$fp_driver_license}</strong></td>
                </tr>\r\n
            </tbody>
        </table>
    </div>\r\n

FAULTPARTYDETAILS;
