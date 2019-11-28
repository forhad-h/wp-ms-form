<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div class="tab-pane fade show active" id="wpmsf-content-1" role="tabpanel" aria-labelledby="wpmsf-tab-1">

  <h2>Your Contact Details</h2>

  <div class="form-group">
    <label>Title: <span>*</span></label>
    <select class="form-control">
      <option>Mr</option>
      <option>Mrs</option>
      <option>Ms</option>
      <option>Miss</option>
    </select>
  </div>

  <div class="form-group">
    <label>First name <span>*</span></label>
    <input type="text" class="form-control">
  </div>

  <div class="form-group">
    <label>Middle Name</label>
    <input type="text" class="form-control">
  </div>

  <div class="form-group">
    <label>Last Name <span>*</span></label>
    <input type="text" class="form-control">
  </div>

  <div class="form-group">
    <label>Home Address <span>*</span></label>
    <input type="text" class="form-control">
  </div>

  <div class="form-group">
    <label>State <span>*</span></label>
    <input type="text" class="form-control">
  </div>

  <div class="form-group">
    <label>Postcode <span>*</span></label>
    <input type="number" class="form-control">
  </div>

  <div class="form-group">
    <label>Mobile Phone <span>*</span></label>
    <input type="number" class="form-control">
  </div>

  <div class="form-group">
    <label>Home Phone <span>*</span></label>
    <input type="number" class="form-control">
  </div>

  <div class="form-group">
    <label>Work Phone <span>*</span></label>
    <input type="number" class="form-control">
  </div>

  <div class="form-group">
    <label>Email: <span>*</span></label>
    <input type="email" class="form-control">
  </div>

  <div class="form-group">
    <label>Drivers License Number and Type: <span>*</span></label>
    <input type="text" class="form-control">
  </div>

  <hr />

  <h2>Time of Accident</h2>
  
  <div class="form-group">
    <label>Date of Accident: <span>*</span></label>
    <div class="input-group date" id="dateOfAccident" data-target-input="nearest">
      <input type="text" class="form-control datetimepicker-input" data-target="#dateOfAccident"/>
      <div class="input-group-append" data-target="#dateOfAccident" data-toggle="datetimepicker">
        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Day of Accident: <span>*</span></label>
    <select class="form-control">
      <option value="Monday">Monday</option>
      <option value="Thursday">Thursday</option>
      <option value="Wednesday">Wednesday</option>
      <option value="Thursday">Thursday</option>
      <option value="Friday">Friday</option>
      <option value="Saturday">Saturday</option>
      <option value="Sunday">Sunday</option>
    </select>
  </div>

  <div class="form-group">
    <label>Approximate Time of Accident: <span>*</span></label>
    <div class="input-group date" id="timeOfAccident" data-target-input="nearest">
        <input type="text" class="form-control datetimepicker-input" data-target="#timeOfAccident"/>
        <div class="input-group-append" data-target="#timeOfAccident" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
        </div>
    </div>
  </div>


</div>
