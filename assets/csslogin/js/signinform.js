$(document).ready(function () {

  var alert_info = $('#alert_info').val();
  alert_info1 = alert_info ? JSON.parse(alert_info) : [];

  $('#signin-btn').click(function () {
    var submit = '#signin-form';
    if (checkFormsubmit())
      $(submit).submit()
  })
  $('input').keypress(function (e) {
    if (e.which == 13) {
      var submit = '#signin-form';
      if (checkFormsubmit())
        $(submit).submit()
    }
  });
  $(".form-control-input2").change(function () {
    if ($(this).val() != '') {
      $(this).addClass("notEmpty");
    } else {
      $(this).removeClass("notEmpty");
    }
  })
});

function checkFormsubmit() {

  $('label.label_error').prev().remove();
  $('label.label_error').remove();
  if (!notEmpty("account", alert_info1[0])) {
    return false;
  }
  if (!notEmpty("pass", alert_info1[1])) {
    return false;
  }
  else {

  }
  // return false;
  return true;
}
