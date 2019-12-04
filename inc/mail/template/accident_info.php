<?php

$accident_info = <<<ACCIDENTINFO
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
                    <td class="col1">Driver of Your Vehicle (if vehicle was being driven at the time of the incident): </td>
                    <td class="col2"><strong class="blue_dark">{$ai_me_or_not}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Title: </td>
                    <td class="col2"><strong class="blue_dark">{$ai_title}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">First name: </td>
                    <td class="col2"><strong class="blue_dark">{$ai_first_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Middle Name: </td>
                    <td class="col2"><strong class="blue_dark">{$ai_middle_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Last Name: </td>
                    <td class="col2"><strong class="blue_dark">{$ai_last_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Address: </td>
                    <td class="col2"><strong class="blue_dark">{$ai_address}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Postcode: </td>
                    <td class="col2"><strong class="blue_dark">{$ai_postcode}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Mobile: </td>
                    <td class="col2"><strong class="blue_dark">{$ai_mobile}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Home Phone: </td>
                    <td class="col2"><strong class="blue_dark">{$ai_home_phone}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Work Phone: </td>
                    <td class="col2"><strong class="blue_dark">{$ai_work_phone}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Email: </td>
                    <td class="col2"><strong class="blue_dark">{$ai_email}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Drivers License Number and Type: </td>
                    <td class="col2"><strong class="blue_dark">{$ai_driver_license}</strong></td>
                </tr>\r\n

            </tbody>
        </table>
    </div>\r\n
ACCIDENTINFO;
