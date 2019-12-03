!(function($) {

  /**
   * Low quality code to make fast delivery
   */

  // date and time picker
  $('#dateOfAccident').datetimepicker({
    format: 'L'
  });
  $('#timeOfAccident').datetimepicker({
    format: 'LT'
  });

  // initial date and time value
  $('.ms_date_input').val(moment().format('MM/DD/YYYY'));
  $('.ms_time_input').val(moment().format('hh:mm A'));

  // initialize variables
  var isShowError = false;
  var isValid = true;
  var items = [];
  var step = 1;

  // disable original tabs
  $("#WPMSFormTab").find('.nav-link').css('cursor', 'initial');

  // hide or show step buttons in specic state
  hideShowStepBtns(step);

  // back button implementation
  $("#backBtn").on("click", function() {
    // reset previous active tab, panel
    $("#wpmsf-tab-" + step).attr('aria-selected', 'false');
    $("#wpmsf-tab-" + step).removeClass('active');
    $("#wpmsf-content-" + step).removeClass('show');
    // to animate the content used setTimeOut
    setTimeout(function() {
      $("#wpmsf-content-" + step).removeClass('active');
    }, 200)


    // active next active tab, panel
    $("#wpmsf-tab-" + (step - 1)).attr('aria-selected', 'true');
    $("#wpmsf-tab-" + (step - 1)).addClass('active');
    $("#wpmsf-content-" + (step - 1)).addClass('show');
    // to animate the content used setTimeOut
    setTimeout(function() {
      $("#wpmsf-content-" + (step - 1)).addClass('active');

      // drecrease step variable
      step--;
      hideShowStepBtns(step);
    }, 200)

  });


  // next button implementation
  $("#nextBtn").on("click", function() {
    if (validateFields(step)) {
      // reset previous active tab, panel
      $("#wpmsf-tab-" + step).attr('aria-selected', 'false');
      $("#wpmsf-tab-" + step).removeClass('active');
      $("#wpmsf-content-" + step).removeClass('show');
      // to animate the content used setTimeOut
      setTimeout(function() {
        $("#wpmsf-content-" + step).removeClass('active');
      }, 200)

      // active next active tab, panel
      $("#wpmsf-tab-" + (step + 1)).attr('aria-selected', 'true');
      $("#wpmsf-tab-" + (step + 1)).addClass('active');
      $("#wpmsf-content-" + (step + 1)).addClass('show');
      // to animate the content used setTimeOut
      setTimeout(function() {
        $("#wpmsf-content-" + (step + 1)).addClass('active');

        // increase step variable
        step++;
        hideShowStepBtns(step);
      }, 200)
    }
  });

  /* manage conditional fields */

  // show conditional fields content
  $('.ms_cond_show_btn').each(function() {
    $(this).on('click', function() {
      if ($(this).is(':checked')) {
        $('#ms-cond-content-' + $(this).attr('data-target')).css('display', 'block');
      }
    })
  })

  // hide conditional fields content
  $('.ms_cond_hide_btn').each(function() {
    $(this).on('click', function() {
      if ($(this).is(':checked')) {
        $('#ms-cond-content-' + $(this).attr('data-target')).css('display', 'none');
      }
    })
  })

  // genrate dynamic fields
  $('.ms-fields-generator').on('change', function() {
    var id = $(this).attr('data-target');
    console.log(id);
    if (Number($(this).val())) {
      items = []
      for (var i = 0; i < +$(this).val(); i++) {
        var item = $('.ws_cond_single_fields_main_' + id).first().clone()
          .removeClass('ws_cond_single_fields_main_' + id)
          .addClass('ws_cond_single_fields');

        item.find('.ms_car_no').text(i + 1)
        items.push(item);
      }
      $('#ws-cond-select-wrapper-' + id).empty();
      console.log('Items', items)
      for (var i = 0; i < items.length; i++) {
        console.log('single items', items[i])
        items[i].appendTo('#ws-cond-select-wrapper-' + id);
      }
    } else {
      $('#ws-cond-select-wrapper-' + id).empty();
    }
  });

  // function to hide or show step buttons in specific state
  function hideShowStepBtns(stepm) {
    var minItem = 1;
    var maxItem = 8;

    if (step === minItem) {
      $("#backBtn").css('display', 'none');
    } else {
      $("#backBtn").css('display', 'inline-block');
    }
    if (step === maxItem) {
      $("#nextBtn").css('display', 'none');
      $("#submitBtn").css('display', 'inline-block');
    } else {
      $("#nextBtn").css('display', 'inline-block');
      $("#submitBtn").css('display', 'none');
    }
  }

  // field validation
  function validateFields(step) {
    isValid = true
    isShowError = false
    if ($("[data-validate]").length) {
      $("#wpmsf-content-" + step).find("[data-validate]").each(function() {
        if (!$(this).val()) {
          $(this).next('.ms-required-error').css('display', 'block');
          isValid = false;
          isShowError = true;
        }
      })
    }
    return isValid
  }
  // validation on key up
  $("[data-validate]").on('keyup', function() {
    if (isShowError) {
      if (!$(this).val()) {
        $(this).next('.ms-required-error').css('display', 'block');
      } else {
        $(this).next('.ms-required-error').css('display', 'none');
      }
    }
  });
})(jQuery);

// Fabric js implementation for free hand drawing
(function() {

  var canvas = new fabric.Canvas('ms-canvas', {
    isDrawingMode: true
  });
  var clearEl = document.getElementById('clear-canvas');

  fabric.Object.prototype.transparentCorners = true;

  clearEl.onclick = function() {
    canvas.clear();
  };

  if (canvas.freeDrawingBrush) {
    canvas.freeDrawingBrush.color = '#135294';
    canvas.freeDrawingBrush.width = 2;
  }

})();






// end