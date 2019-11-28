<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade" id="wpmsf-content-4" role="tabpanel" aria-labelledby="wpmsf-tab-4">
  <h2>Insurance Details for the Vehicle</h2>

  <div class="form-group">
    <label>Insurance Company Name: <span>*</span></label>
    <input type="text" class="form-control">
  </div>

  <div class="form-group">
    <label>Type of Cover: <span>*</span></label>
    <select class="form-control">
      <option>Comprehensive</option>
      <option>Third Party</option>
    </select>
  </div>

  <div class="form-group">
    <label>Policy Number: <span>*</span></label>
    <input type="number" class="form-control">
  </div>

  <div class="form-group">
    <label>Claim Number: <span>*</span></label>
    <input type="number" class="form-control">
  </div>

  <div class="form-group">
    <label>Registration Papers: (allowed file formats: docx, pdf)</label>
    <input type="file">
  </div>

  <div class="form-group">
    <label>Driver's License Scan Number: (allowed file formats: docx, pdf)</label>
    <input type="file">
  </div>

</div>
