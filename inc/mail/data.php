<?php
  // Contact Details
  $cd_title = $_POST['cd_title'];
  $cd_first_name = $_POST['cd_first_name'];
  $cd_middle_name = $_POST['cd_middle_name'];
  $cd_last_name = $_POST['cd_last_name'];
  $cd_home_address = $_POST['cd_home_address'];
  $cd_state = $_POST['cd_state'];
  $cd_postcode = $_POST['cd_postcode'];
  $cd_mobile_phone = $_POST['cd_mobile_phone'];
  $cd_home_phone = $_POST['cd_home_phone'];
  $cd_work_phone = $_POST['cd_work_phone'];
  $cd_email = $_POST['cd_email'];
  $cd_driver_license = $_POST['cd_driver_license'];
  $cd_accident_date = $_POST['cd_accident_date'];
  $cd_accident_day = $_POST['cd_accident_day'];
  $cd_accident_time = $_POST['cd_accident_time'];

  // Vehicle Details
  $vd_make = $_POST['vd_make'];
  $vd_model = $_POST['vd_model'];
  $vd_reg_number = $_POST['vd_reg_number'];
  $vd_year = $_POST['vd_year'];
  $vd_colour = $_POST['vd_colour'];

  // Accident Information
  $ai_me_or_not = $_POST['ai_me_or_not'];
  $ai_title = $_POST['ai_title'];
  $ai_first_name = $_POST['ai_first_name'];
  $ai_middle_name = $_POST['ai_middle_name'];
  $ai_last_name = $_POST['ai_last_name'];
  $ai_address = $_POST['ai_address'];
  $ai_postcode = $_POST['ai_postcode'];
  $ai_mobile = $_POST['ai_mobile'];
  $ai_home_phone = $_POST['ai_home_phone'];
  $ai_work_phone = $_POST['ai_work_phone'];
  $ai_email = $_POST['ai_email'];
  $ai_driver_license = $_POST['ai_driver_license'];

  // Insurance Details
  $id_company_name = $_POST['id_company_name'];
  $id_cover_type = $_POST['id_cover_type'];
  $id_policy_num = $_POST['id_policy_num'];
  $id_claim_num = $_POST['id_claim_num'];
  $id_reg_papers = $_FILES['id_reg_papers'];
  $id_licencse_scan = $_FILES['id_licencse_scan'];

  // Fault Party's Details
  $fp_title = $_POST['fp_title'];
  $fp_first_name = $_POST['fp_first_name'];
  $fp_middle_name = $_POST['fp_middle_name'];
  $fp_last_name = $_POST['fp_last_name'];
  $fp_address = $_POST['fp_address'];
  $fp_postcode = $_POST['fp_postcode'];
  $fp_mobile = $_POST['fp_mobile'];
  $fp_home_phone = $_POST['fp_home_phone'];
  $fp_work_phone = $_POST['fp_work_phone'];
  $fp_email = $_POST['fp_email'];
  $fp_driver_license = $_POST['fp_driver_license'];

  // Fault Party's Vehicle Details
  $fpvd_make = $_POST['fpvd_make'];
  $fpvd_model = $_POST['fpvd_model'];
  $fpvd_reg_number = $_POST['fpvd_reg_number'];
  $fpvd_year = $_POST['fpvd_year'];
  $fpvd_colour = $_POST['fpvd_colour'];
  $fpvd_company_name = $_POST['fpvd_company_name'];
  $fpvd_cover_type = $_POST['fpvd_cover_type'];
  $fpvd_policy_number = $_POST['fpvd_policy_number'];
  $fpvd_claim_number = $_POST['fpvd_claim_number'];

  // Cars Invoved
  $ci_cars_num = $_POST['ci_cars_num'];
  $cisi_title = $_POST['cisi_title'];
  $cisi_first_name = $_POST['cisi_first_name'];
  $cisi_middle_name = $_POST['cisi_middle_name'];
  $cisi_last_name = $_POST['cisi_last_name'];
  $cisi_address = $_POST['cisi_address'];
  $cisi_postcode = $_POST['cisi_postcode'];
  $cisi_mobile = $_POST['cisi_mobile'];
  $cisi_home_phone = $_POST['cisi_home_phone'];
  $cisi_work_phone = $_POST['cisi_work_phone'];
  $cisi_email = $_POST['cisi_email'];
  $cisi_driver_license = $_POST['cisi_driver_license'];
  $cisi_reg_num = $_POST['cisi_reg_num'];
  $cisi_make = $_POST['cisi_make'];
  $cisi_model = $_POST['cisi_model'];
  $cisi_year = $_POST['cisi_year'];
  $cisi_colour = $_POST['cisi_colour'];
  $cisi_company_name = $_POST['cisi_company_name'];
  $cisi_cover_type = $_POST['cisi_cover_type'];
  $cisi_policy_num = $_POST['cisi_policy_num'];
  $cisi_claim_num = $_POST['cisi_claim_num'];

  // Details Description of Accident
  $ad_street = $_POST['ad_street'];
  $ad_suburb = $_POST['ad_suburb'];
  $ad_drivable = $_POST['ad_drivable'];
  $ad_location = $_POST['ad_location'];
  $ad_diagram = $_POST['ad_diagram'];
  $ad_description = $_POST['ad_description'];
  $ad_liable_party = $_POST['ad_liable_party'];
  $ad_liable_party_details = $_POST['ad_liable_party_details'];
  $ad_police_attend = $_POST['ad_police_attend'];
  $ad_station = $_POST['ad_station'];
  $ad_officer_name = $_POST['ad_officer_name'];
  $ad_report_number = $_POST['ad_report_number'];
  $ad_witness = $_POST['ad_witness'];
  $ad_witness_num = $_POST['ad_witness_num'];
  $ad_passengers = $_POST['ad_passengers'];
  $ad_passengers_num = $_POST['ad_passengers_num'];
  $ad_witness_num = $_POST['ad_witness_num'];
  $ad_title = $_POST['ad_title'];
  $ad_first_name = $_POST['ad_first_name'];
  $ad_middle_name = $_POST['ad_middle_name'];
  $ad_last_name = $_POST['ad_last_name'];
  $ad_age = $_POST['ad_age'];
  $ad_address = $_POST['ad_address'];
  $ad_postcode = $_POST['ad_postcode'];
  $ad_mobile = $_POST['ad_mobile'];
  $ad_home_phone = $_POST['ad_home_phone'];
  $ad_work_phone = $_POST['ad_work_phone'];
  $ad_email = $_POST['ad_email'];
