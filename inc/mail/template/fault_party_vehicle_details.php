<?php


$fault_party_vehicle_details = <<<FAULTPARTYVEHICLEDETAILS
    <div class="single_info">
        <h4 style="margin-bottom: 30px;">At Fault Party’s Vehicle Detail</h4>\r\n
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
                    <td class="col2"><strong class="blue_dark">{$fpvd_make}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Model: </td>
                    <td class="col2"><strong class="blue_dark">{$fpvd_model}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Registration Number: </td>
                    <td class="col2"><strong class="blue_dark">{$fpvd_reg_number}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Year: </td>
                    <td class="col2"><strong class="blue_dark">{$fpvd_year}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Colour: </td>
                    <td class="col2"><strong class="blue_dark">{$fpvd_colour}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1"><h5>Insurance Details for Vehicle at Fault</h5></td>
                    <td class="col2"></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Insurance Company Name: </td>
                    <td class="col2"><strong class="blue_dark">{$fpvd_company_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Type of Cover: </td>
                    <td class="col2"><strong class="blue_dark">{$fpvd_cover_type}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Policy Number: </td>
                    <td class="col2"><strong class="blue_dark">{$fpvd_policy_number}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Claim Numbe: </td>
                    <td class="col2"><strong class="blue_dark">{$fpvd_claim_number}</strong></td>
                </tr>\r\n
            </tbody>
        </table>
    </div>\r\n
FAULTPARTYVEHICLEDETAILS;
