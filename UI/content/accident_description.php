<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade" id="wpmsf-content-8" role="tabpanel" aria-labelledby="wpmsf-tab-8">

  <h2>Accident Information</h2>
  <h3>Location of Accident</h3>

  <div class="form-group">
    <label>Street/s: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="ad_street" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Suburb: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="ad_suburb" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <label>Is your car Drivable: <span class="ms-required">*</span></label>

  <div class="ms_radio_btn_group">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="isDrivable" value="Yes" name="ad_drivable" >
      <label class="form-check-label" for="isDrivable">
        Yes
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" id="isNotDrivable" value="No" checked name="ad_drivable" >
      <label class="form-check-label" for="isNotDrivable">
        No
      </label>
    </div>
  </div>


  <div class="form-group">
    <label>Location of damage to your vehicle: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required" name="ad_location" >
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Draw a diagram of the accident using street names and signals:</label>
    <div class="ms_canvas_clear_btn">
      <button type="button" id="clear-canvas">Clear</button>
    </div>
    <canvas id="ms-canvas" width="432" height="182" style="border: 1px solid #666;"></canvas>
    <input type="hidden" id="ms-canvas-data-url" name="ad_diagram" />

  </div>


  <div class="form-group">
    <label>Description of Accident: <span class="ms-required">*</span></label>
    <textarea class="form-control" data-validate="required" name="ad_description" ></textarea>
    <div class="ms-required-error">This field is required.</div>
  </div>



  <label>Did any party admit liability at the scene? <span class="ms-required">*</span></label>
  <div class="ms_radio_btn_group">
    <div class="form-check">
      <input class="form-check-input ms_cond_show_btn" type="radio" id="isLiableParty" value="Yes" data-target="2" name="ad_liable_party" >
      <label class="form-check-label" for="isLiableParty">
        Yes
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input ms_cond_hide_btn" type="radio" id="isNotLiableParty" value="No" data-target="2" checked name="ad_liable_party" >
      <label class="form-check-label" for="isNotLiableParty">
        No
      </label>
    </div>
  </div>
  <div class="ms_cond_content" id="ms-cond-content-2">
    <div class="form-group">
      <label>Details if yes</label>
      <input type="text" class="form-control" name="ad_liable_party_details" >
    </div>
  </div>

  <label>Did the police attend? <span class="ms-required">*</span></label>

  <div class="ms_radio_btn_group">
    <div class="form-check">
      <input class="form-check-input ms_cond_show_btn" type="radio" id="isPoliceAttend" value="Yes" data-target="3" name="ad_police_attend" >
      <label class="form-check-label" for="isPoliceAttend">
        Yes
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input ms_cond_hide_btn" type="radio" id="isNotPoliceAttend" value="No" data-target="3" checked name="ad_police_attend" >
      <label class="form-check-label" for="isNotPoliceAttend">
        No
      </label>
    </div>
  </div>

  <div class="ms_cond_content" id="ms-cond-content-3">
      <h2>If yes displays below info</h2>
      <div class="form-group">
        <label>From which station did they come from?</label>
        <input type="text" class="form-control" name="ad_station" >
      </div>
      <div class="form-group">
        <label>Officers’ Names:</label>
        <input type="text" class="form-control" name="ad_officer_name" >
      </div>
      <div class="form-group">
        <label>Police Report Number:</label>
        <input type="text" class="form-control" name="ad_report_number" >
      </div>
  </div>

  <label>Were there any witnesses? <span class="ms-required">*</span></label>

  <div class="ms_radio_btn_group">
    <div class="form-check">
      <input class="form-check-input ms_cond_show_btn" type="radio" id="isWitness" value="Yes" data-target="4" name="ad_witness" >
      <label class="form-check-label" for="isWitness">
        Yes
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input ms_cond_hide_btn" type="radio" id="isNotWitness" value="No" data-target="4" checked name="ad_witness" >
      <label class="form-check-label" for="isNotWitness">
        No
      </label>
    </div>
  </div>

  <div class="ms_cond_content" id="ms-cond-content-4">
    <div class="form-group">
      <label>If yes how many witnesses:</label>
      <input type="text" class="form-control" name="ad_witness_num" >
    </div>

    <label>Were there any passengers aged 15 or over in your car that were also witnesses?</label>

    <div class="ms_radio_btn_group">
      <div class="form-check">
        <input class="form-check-input ms_cond_show_btn" type="radio" id="isPassengers" value="Yes" data-target="5" name="ad_passengers" >
        <label class="form-check-label" for="isPassengers">
          Yes
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input ms_cond_hide_btn" type="radio" id="isNotPassengers" value="No" data-target="5" checked name="ad_passengers" >
        <label class="form-check-label" for="isNotPassengers">
          No
        </label>
      </div>
    </div>

    <div class="ms_cond_content" id="ms-cond-content-5">

      <div class="form-group">
        <label>If yes how many passengers:</label>
        <input type="text" class="form-control" name="ad_passengers_num" >
      </div>

      <h2>How many witnesses/Passenger overall?</h2>

      <div class="form-group">
        <label>Select number of witnesses: <span class="ms-required">*</span></label>
        <select class="form-control ms-fields-generator" data-target="2" name="ad_witness_num" >
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
      </div>

      <!--each witness information goes here-->
      <div id="ws-cond-select-wrapper-2"></div>

      <div class="ws_cond_single_fields_main_2">

        <div class="row">

            <div class="col-md-2">

              <strong>Witness <span class="ms_car_no">1</span>:</strong>

            </div>

            <div class="col-md-10">

               <div class="form-group">
                 <label>Title:</label>
                 <select class="form-control" name="ad_title[]" >
                   <option>Mr</option>
                   <option>Mrs</option>
                   <option>Ms</option>
                   <option>Miss</option>
                 </select>
               </div>

               <div class="form-group">
                 <label>First name</label>
                 <input type="text" class="form-control" name="ad_first_name[]" >
               </div>

               <div class="form-group">
                 <label>Middle Name</label>
                 <input type="text" class="form-control" name="ad_middle_name[]" >
               </div>

               <div class="form-group">
                 <label>Last Name</label>
                 <input type="text" class="form-control" name="ad_last_name[]" >
               </div>

              <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" name="ad_age[]" >
              </div>

               <div class="form-group">
                 <label>Address</label>
                 <input type="text" class="form-control" name="ad_address[]" >
               </div>

               <div class="form-group">
                 <label>Postcode</label>
                 <input type="number" class="form-control" name="ad_postcode[]" >
               </div>

               <div class="form-group">
                 <label>Mobile</label>
                 <input type="number" class="form-control" name="ad_mobile[]" >
               </div>

               <div class="form-group">
                 <label>Home Phone</label>
                 <input type="number" class="form-control" name="ad_home_phone[]" >
               </div>

               <div class="form-group">
                 <label>Work Phone</label>
                 <input type="number" class="form-control" name="ad_work_phone[]" >
               </div>

               <div class="form-group">
                 <label>Email:</label>
                 <input type="email" class="form-control" name="ad_email[]" >
               </div>

            </div>

        </div>

      </div><!--ws_cond_single_fields_main_2-->

    </div><!--ms-cond-content-5-->
  </div><!--ms-cond-content-4-->

</div>
