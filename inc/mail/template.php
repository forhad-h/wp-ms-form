<?php

if(!function_exists('emailMessage')) {
  function emailMessage() {
    require_once dirname(__FILE__)."/data.php";
    $emailMessage = <<<TEMPLATE
        <html>
            <head>
                <style>\r\n
                    body {
                        padding-left: 20px;
                        padding-right: 20px;
                    }
                    h3 {
                        color: #103465;
                        font-size: 18px;
                    }\r\n
                    .blue_dark {
                        color: #103465;
                    }
                    .template_header {
                        border-bottom: 1px solid #ddd;
                    }\r\n
                    .main_table {
                        width: 100%;
                    }
                    .col1 {
                        width: 80%;
                    }\r\n
                    .col2 {
                        width: 20%;
                        text-align: right;
                    }
                    .info {
                        color: #444;
                    }
                </style>\r\n
            </head>
            <body>

                <div class="template_header">
                    <img src='http://reservecar.technowand.biz/wp-content/uploads/elementor/thumbs/Wilson-Auto-accident-management-SMALLER-1-ogy1yng5lo107uo2k8lasaphpc8h59z54agpnxwh58.png' alt='logo' width='200px;margin-top: 20px;'/>\r\n
                    <h2 style='text-align: center;'>Accident Management & Replacement Vehicles</h2>\r\n
                </div>\r\n

                <div class="template_body">
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
                                    <td class="col2"><strong class="blue_dark">{$id_reg_papers}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Driver's License Scan Number: </td>
                                    <td class="col2"><strong class="blue_dark">{$id_licencse_scan}</strong></td>
                                </tr>\r\n
                            </tbody>
                        </table>
                    </div>\r\n

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
                                <tr>
                                    <td class="col1"><h5>Driver of the Vehicle</h5></td>
                                    <td class="col2"></td>
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

                </div>
            </body>
        </html>

TEMPLATE;

    return $emailMessage;
  }
}
