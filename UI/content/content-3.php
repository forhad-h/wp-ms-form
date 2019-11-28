<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade" id="wpmsf-content-3" role="tabpanel" aria-labelledby="wpmsf-tab-3">
  <h2>Accident Information</h2>
  <p>Driver of Your Vehicle (if vehicle was being driven at the time of the incident):</p>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="accident_info_radio" id="AIitWasMe" value="me" checked>
    <label class="form-check-label" for="AIitWasMe">
      It was me
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="accident_info_radio" id="AIitWasntMe" value="notme">
    <label class="form-check-label" for="AIitWasntMe">
      It wasn't me
    </label>
  </div>


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

</div>
