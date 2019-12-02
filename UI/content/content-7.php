<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade" id="wpmsf-content-7" role="tabpanel" aria-labelledby="wpmsf-tab-7">

  <h2>Number of other Cars Involved:</h2>

  <div class="form-group">
    <label>Select number of cars involved: <span class="ms-required">*</span></label>
    <select class="form-control" data-validate="required">
        <?php
          for($i = 0; $i <= 15; $i++) {
        ?>
          <option value="<?= $i;?>"><?= $i; ?></option>
        <?php
          }
        ?>
    </select>
    <div class="ms-required-error">This field is required.</div>
  </div>

  // each involved vehicle information

  <div id="ws-single-involved-vehicle">

     <h2>Driver of the Vehicle</h2>

      <div class="form-group">
        <label>Title:</label>
        <select class="form-control">
          <option>Mr</option>
          <option>Mrs</option>
          <option>Ms</option>
          <option>Miss</option>
        </select>
      </div>

      <div class="form-group">
        <label>First name</label>
        <input type="text" class="form-control">
      </div>

      <div class="form-group">
        <label>Middle Name</label>
        <input type="text" class="form-control">
      </div>

      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control">
      </div>

      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control">
      </div>

      <div class="form-group">
        <label>Postcode</label>
        <input type="number" class="form-control">
      </div>

      <div class="form-group">
        <label>Mobile</label>
        <input type="number" class="form-control">
      </div>

      <div class="form-group">
        <label>Home Phone</label>
        <input type="number" class="form-control">
      </div>

      <div class="form-group">
        <label>Work Phone</label>
        <input type="number" class="form-control">
      </div>

      <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control">
      </div>

      <div class="form-group">
        <label>Drivers License Number and Type:</label>
        <input type="text" class="form-control">
      </div>

      <h2>Vehicle Details</h2>

      <div class="form-group">
        <label>Registration Number: <span class="ms-required">*</span></label>
        <input type="text" class="form-control">
      </div>

      <div class="form-group">
        <label>Make: <span class="ms-required">*</span></label>
        <input type="text" class="form-control">
      </div>

      <div class="form-group">
        <label>Model: <span class="ms-required">*</span></label>
        <input type="text" class="form-control">
      </div>


      <div class="form-group">
        <label>Year <span class="ms-required">*</span></label>
        <input type="text" class="form-control">
      </div>

      <div class="form-group">
        <label>Colour <span class="ms-required">*</span></label>
        <input type="text" class="form-control">
      </div>


      <h2>Insurance Details for the Vehicle</h2>

      <div class="form-group">
        <label>Insurance Company Name: </label>
        <input type="text" class="form-control">
      </div>

      <div class="form-group">
        <label>Type of Cover: </label>
        <select class="form-control">
          <option>Comprehensive</option>
          <option>Third Party</option>
        </select>
      </div>

      <div class="form-group">
        <label>Policy Number: </label>
        <input type="number" class="form-control">
      </div>

      <div class="form-group">
        <label>Claim Number: </label>
        <input type="number" class="form-control">
      </div>
  </div> <!--ms-single-involved_vehicle-->

</div>
