<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade" id="wpmsf-content-8" role="tabpanel" aria-labelledby="wpmsf-tab-8">

  <h2>Accident Information</h2>
  <h3>Location of Accident</h3>

  <div class="form-group">
    <label>Street/s: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required">
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Suburb: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required">
    <div class="ms-required-error">This field is required.</div>
  </div>

  <label>Is your car Drivable: <span class="ms-required">*</span></label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="drivable" id="isDrivable" value="me">
    <label class="form-check-label" for="isDrivable">
      yes
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="drivable" id="isNotDrivable" value="notme" checked>
    <label class="form-check-label" for="isNotDrivable">
      no
    </label>
  </div>


  <div class="form-group">
    <label>Location of damage to your vehicle: <span class="ms-required">*</span></label>
    <input type="text" class="form-control" data-validate="required">
    <div class="ms-required-error">This field is required.</div>
  </div>

  <div class="form-group">
    <label>Draw a diagram of the accident using street names and signals <span class="ms-required">*</span></label>
    <button type="button" id="clear-canvas">Clear</button>
    <canvas id="ms-canvas" width="800" height="450" style="border: 1px solid #666;"></canvas>
  </div>


  <div class="form-group">
    <label>Description of Accident: <span class="ms-required">*</span></label>
    <textarea class="form-control" data-validate="required"></textarea>
    <div class="ms-required-error">This field is required.</div>
  </div>



  <label>Did any party admit liability at the scene? <span class="ms-required">*</span></label>
  <div class="form-check">
    <input class="form-check-input ms_cond_show_btn" type="radio" name="liable_party" id="isLiableParty" value="me" data-target="2">
    <label class="form-check-label" for="isLiableParty">
      yes
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input ms_cond_hide_btn" type="radio" name="liable_party" id="isNotLiableParty" value="notme" data-target="2" checked>
    <label class="form-check-label" for="isNotLiableParty">
      no
    </label>
  </div>
  <div class="ms_cond_content" id="ms-cond-content-2">
    <div class="form-group">
      <label>Details if yes</label>
      <input type="text" class="form-control">
    </div>
  </div>

  <label>Did the police attend? <span class="ms-required">*</span></label>
  <div class="form-check">
    <input class="form-check-input ms_cond_show_btn" type="radio" name="police_attend" id="isPoliceAttend" value="me" data-target="3">
    <label class="form-check-label" for="isPoliceAttend">
      yes
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input ms_cond_hide_btn" type="radio" name="police_attend" id="isNotPoliceAttend" value="notme" data-target="3" checked>
    <label class="form-check-label" for="isNotPoliceAttend">
      no
    </label>
  </div>
  <div class="ms_cond_content" id="ms-cond-content-3">
      <h2>If yes displays below info</h2>
      <div class="form-group">
        <label>From which station did they come from?</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <label>Officers’ Names:</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <label>Police Report Number:</label>
        <input type="text" class="form-control">
      </div>
  </div>

  <label>Were there any witnesses? <span class="ms-required">*</span></label>
  <div class="form-check">
    <input class="form-check-input ms_cond_show_btn" type="radio" name="witness" id="isWitness" value="me" data-target="4">
    <label class="form-check-label" for="isWitness">
      yes
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input ms_cond_hide_btn" type="radio" name="witness" id="isNotWitness" value="notme" data-target="4" checked>
    <label class="form-check-label" for="isNotWitness">
      no
    </label>
  </div>

  <div class="ms_cond_content" id="ms-cond-content-4">
    <div class="form-group">
      <label>If yes how many witnesses:</label>
      <input type="text" class="form-control">
    </div>

    <label>Were there any passengers aged 15 or over in your car that were also witnesses?</label>

    <div class="form-check">
      <input class="form-check-input ms_cond_show_btn" type="radio" name="passengers" id="isPassengers" value="me" data-target="5">
      <label class="form-check-label" for="isPassengers">
        yes
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input ms_cond_hide_btn" type="radio" name="passengers" id="isNotPassengers" value="notme" data-target="5" checked>
      <label class="form-check-label" for="isNotPassengers">
        no
      </label>
    </div>

    <div class="ms_cond_content" id="ms-cond-content-5">

      <div class="form-group">
        <label>If yes how many passengers:</label>
        <input type="text" class="form-control">
      </div>

      <h2>How many witnesses/Passenger overall?</h2>

      <div class="form-group">
        <label>Select number of witnesses: <span class="ms-required">*</span></label>
        <select class="form-control ms-fields-generator" data-target="2">
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
                <label>Age</label>
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

            </div>

        </div>

      </div><!--ws_cond_single_fields_main_2-->

    </div><!--ms-cond-content-5-->
  </div><!--ms-cond-content-4-->

</div>
