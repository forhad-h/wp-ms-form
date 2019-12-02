<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade" id="wpmsf-content-8" role="tabpanel" aria-labelledby="wpmsf-tab-8">

  <h2>Accident Information</h2>
  <h3>Location of Accident</h3>

  <div class="form-group">
    <label>Street/s: <span class="ms-required">*</span></label>
    <input type="text" class="form-control">
  </div>

  <div class="form-group">
    <label>Suburb: <span class="ms-required">*</span></label>
    <input type="text" class="form-control">
  </div>

  <label>Is your car Drivable: <span class="ms-required">*</span></label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="is_drivable" id="isDrivable" value="me" checked>
    <label class="form-check-label" for="AIitWasMe">
      yes
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="is_drivable" id="isNotDrivable" value="notme">
    <label class="form-check-label" for="AIitWasntMe">
      no
    </label>
  </div>


  <div class="form-group">
    <label>Location of damage to your vehicle: <span class="ms-required">*</span></label>
    <input type="text" class="form-control">
  </div>

  <div class="form-group">
    <label>Draw a diagram of the accident using street names and signals <span class="ms-required">*</span></label>
    <button id="MSFormClearBtn"></button>
    <textarea class="form-control"></textarea>
  </div>


  <div class="form-group">
    <label>Description of Accident: <span class="ms-required">*</span></label>
    <textarea class="form-control"></textarea>
  </div>



  <label>Did any party admit liability at the scene? <span class="ms-required">*</span></label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="is_drivable" id="isDrivable" value="me" checked>
    <label class="form-check-label" for="AIitWasMe">
      yes
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="is_drivable" id="isNotDrivable" value="notme">
    <label class="form-check-label" for="AIitWasntMe">
      no
    </label>
  </div>


  <label>Did the police attend? <span class="ms-required">*</span></label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="is_drivable" id="isDrivable" value="me" checked>
    <label class="form-check-label" for="AIitWasMe">
      yes
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="is_drivable" id="isNotDrivable" value="notme">
    <label class="form-check-label" for="AIitWasntMe">
      no
    </label>
  </div>

  <label>Were there any witnesses? <span class="ms-required">*</span></label>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="is_drivable" id="isDrivable" value="me" checked>
    <label class="form-check-label" for="AIitWasMe">
      yes
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="is_drivable" id="isNotDrivable" value="notme">
    <label class="form-check-label" for="AIitWasntMe">
      no
    </label>
  </div>



</div>
