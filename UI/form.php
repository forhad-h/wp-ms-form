<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="wp_ms_form_container">
  <form id="WPMSForm" name="wp_ms_form" method="post" action="<?= MSF_PLUGIN_URL.'inc/mail/SendMail.php'; ?>" enctype="multipart/form-data">
    <?php include_once MSF_PLUGIN_PATH."UI/tabs.php"; ?>
    <div class="tab-content" id="WPMSFormContent">
      <?php include_once MSF_PLUGIN_PATH."UI/content/contact_details.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/vehicle_details.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/accident_info.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/insurance_details.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/fault_party_details.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/fault_party_vehicle_details.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/involved_cars.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/accident_description.php"; ?>
    </div>
    <div class="ms_change_btn_group">
      <button type="button" class="btn btn-sm btn-primary" id="backBtn">Back</button>
      <button type="button" class="btn btn-sm btn-primary" id="nextBtn">Next</button>
      <button type="submit" class="btn btn-sm btn-primary" id="submitBtn">Submit</button>
    <div>
  </form>
</div>
