<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade" id="wpmsf-content-7" role="tabpanel" aria-labelledby="wpmsf-tab-7">

  <h2>Number of other Cars Involved:</h2>

  <div class="form-group">
    <label>Select number of cars involved: <span class="ms-required">*</span></label>
    <select class="form-control ms-fields-generator" data-validate="required" data-target="1" name="ci_cars_num" >
        <option value=''>- Select -</options>
        <option value=''>None</options>
        <?php
          for($i = 1; $i <= 15; $i++) {
        ?>
          <option value="<?= $i ? $i : '';?>"><?= $i; ?></option>
        <?php
          }
        ?>
    </select>
    <div class="ms-required-error">This field is required.</div>
  </div>

  <!--each involved vehicle information  goes here-->
  <div id="ws-cond-select-wrapper-1"></div>


    <div class="ws_cond_single_fields_main_1">

       <h2>Driver of the Vehicle</h2>

       <div class="row">
           <div class="col-md-2">
             <strong>Car <span class="ms_car_no">1</span>:</strong>
           </div>
           <div class="col-md-10">
              <div class="form-group">
                <label>Title:</label>
                <select class="form-control" name="cisi_title" >
                  <option>Mr</option>
                  <option>Mrs</option>
                  <option>Ms</option>
                  <option>Miss</option>
                </select>
              </div>

              <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control" name="cisi_first_name[]" >
              </div>

              <div class="form-group">
                <label>Middle Name</label>
                <input type="text" class="form-control" name="cisi_middle_name[]" >
              </div>

              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="cisi_last_name[]" >
              </div>

              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="cisi_address[]" >
              </div>

              <div class="form-group">
                <label>Postcode</label>
                <input type="number" class="form-control" name="cisi_postcode[]" >
              </div>

              <div class="form-group">
                <label>Mobile</label>
                <input type="number" class="form-control" name="cisi_mobile[]" >
              </div>

              <div class="form-group">
                <label>Home Phone</label>
                <input type="number" class="form-control" name="cisi_home_phone[]" >
              </div>

              <div class="form-group">
                <label>Work Phone</label>
                <input type="number" class="form-control" name="cisi_work_phone[]" >
              </div>

              <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="cisi_email[]" >
              </div>

              <div class="form-group">
                <label>Drivers License Number and Type:</label>
                <input type="text" class="form-control" name="cisi_driver_license[]" >
              </div>

              <h2>Vehicle Details</h2>

              <div class="form-group">
                <label>Registration Number:</label>
                <input type="text" class="form-control" name="cisi_reg_num[]" >
              </div>

              <div class="form-group">
                <label>Make:</label>
                <input type="text" class="form-control" name="cisi_make[]" >
              </div>

              <div class="form-group">
                <label>Model: </label>
                <input type="text" class="form-control" name="cisi_model[]" >
              </div>


              <div class="form-group">
                <label>Year </label>
                <input type="text" class="form-control" name="cisi_year[]" >
              </div>

              <div class="form-group">
                <label>Colour </label>
                <input type="text" class="form-control" name="cisi_colour[]" >
              </div>


              <h2>Insurance Details for the Vehicle</h2>

              <div class="form-group">
                <label>Insurance Company Name: </label>
                <input type="text" class="form-control" name="cisi_company_name[]" >
              </div>

              <div class="form-group">
                <label>Type of Cover: </label>
                <select class="form-control" name="cisi_cover_type[]" >
                  <option>Comprehensive</option>
                  <option>Third Party</option>
                </select>
              </div>

              <div class="form-group">
                <label>Policy Number: </label>
                <input type="number" class="form-control" name="cisi_policy_num[]" >
              </div>

              <div class="form-group">
                <label>Claim Number: </label>
                <input type="number" class="form-control" name="cisi_claim_num[]" >
              </div>
           </div>
       </div>
    </div> <!--ws_cond_single_fields_main_1-->

</div>
