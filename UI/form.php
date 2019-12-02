<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="wp_ms_form_container">
  <form>
    <?php include_once MSF_PLUGIN_PATH."UI/tabs.php"; ?>
    <div class="tab-content" id="WPMSFormContent">
      <?php include_once MSF_PLUGIN_PATH."UI/content/content-1.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/content-2.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/content-3.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/content-4.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/content-5.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/content-6.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/content-7.php"; ?>
      <?php include_once MSF_PLUGIN_PATH."UI/content/content-8.php"; ?>
    </div>
    <div class="ms_change_btn_group">
      <button type="button" class="btn btn-sm btn-primary" id="backBtn">Back</button>
      <button type="button" class="btn btn-sm btn-primary" id="nextBtn">Next</button>
    <div>
  </form>
</div>
