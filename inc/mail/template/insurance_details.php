<?php


$insurance_details = <<<INSURANCEDETAILS
    <div class="single_info">
        <h4 style="margin-bottom: 30px;">Insurance Details for the Vehicle</h4>\r\n
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
                    <td class="col1">Insurance Company Name: </td>
                    <td class="col2"><strong class="blue_dark">{$id_company_name}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Type of Cover: </td>
                    <td class="col2"><strong class="blue_dark">{$id_cover_type}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Policy Number: </td>
                    <td class="col2"><strong class="blue_dark">{$id_policy_num}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Claim Number: </td>
                    <td class="col2"><strong class="blue_dark">{$id_claim_num}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Registration Papers: </td>
                    <td class="col2"><strong class="blue_dark">{$id_reg_papers['name']}</strong></td>
                </tr>\r\n
                <tr>
                    <td class="col1">Driver's License Scan Number: </td>
                    <td class="col2"><strong class="blue_dark">{$id_licencse_scan['name']}</strong></td>
                </tr>\r\n
            </tbody>
        </table>
    </div>\r\n
INSURANCEDETAILS;
