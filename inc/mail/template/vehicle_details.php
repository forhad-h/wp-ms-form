<?php

$vehicle_details = <<<VEHICLEDETAILS
    <div class="single_info">
        <h4 style="margin-bottom: 30px;">Vehicle Details</h4>\r\n
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
                    <td class="col1">Make: </td>
                    <td class="col2"><strong class="blue_dark">{$vd_make}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Model: </td>
                    <td class="col2"><strong class="blue_dark">{$vd_model}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Registration Number: </td>
                    <td class="col2"><strong class="blue_dark">{$vd_reg_number}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Year: </td>
                    <td class="col2"><strong class="blue_dark">{$vd_year}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Colour: </td>
                    <td class="col2"><strong class="blue_dark">{$vd_colour}</strong></td>
                </tr>\r\n
            </tbody>
        </table>
    </div>\r\n
VEHICLEDETAILS;
