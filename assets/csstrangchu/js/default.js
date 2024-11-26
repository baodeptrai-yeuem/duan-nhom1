$(document).ready(function () {
  var alert_info = $('#alert_info').val();
  alert_info1 = alert_info ? JSON.parse(alert_info) : [];

  $("#bannerPopup").owlCarousel({
    autoplay: false, //Set AutoPlay to 3 seconds
    // autoplaySpeed: 1000,
    loop: true,
    margin: 0,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    nav: false,
    dots: true,
    items: 1,
  });

  $("#slide_popup").owlCarousel({
    autoplay: false, //Set AutoPlay to 3 seconds
    autoplaySpeed: 1000,
    loop: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 2,
        margin: 10,
      },
      450: {
        items: 2,
        margin: 10,
      },
      768: {
        items: 3,
        margin: 10,
      },
      1000: {
        items: 4,
        margin: 10,
      },
      1701: {
        items: 4,
        margin: 10,
      }
    }
  });



  function showPopupAfterDelay(delay) {
    setTimeout(function () {
      $('#popup_prd').modal('show');
    }, delay);
  }

  // Kiểm tra số lần popup đã bị tắt
  let popupCloseCount = localStorage.getItem('popupCloseCount');
  if (!popupCloseCount) {
    popupCloseCount = 0;
  } else {
    popupCloseCount = parseInt(popupCloseCount);
  }

  // Nếu popup chưa bị tắt lần nào hoặc chỉ bị tắt một lần, hiển thị popup sau 5 giây
  if (popupCloseCount < 2) {
    showPopupAfterDelay(5000);
  }

  // Sự kiện khi modal bị ẩn (người dùng tắt modal)
  $('#popup_prd').on('hidden.bs.modal', function () {
    popupCloseCount++;
    localStorage.setItem('popupCloseCount', popupCloseCount);

    if (popupCloseCount < 2) {
      // Nếu popup chỉ bị tắt một lần, hiển thị lại popup sau 30 giây
      showPopupAfterDelay(30000);
    }
  });





  $('#close_popup').click(function () {
    $('#popup_prd').modal('hide');
  });



  $(".btn-modal").click(function () {
    if (validate()) {
      $("#form-modal").submit()
      $("#formModal").modal('hide');
      const currentTime = new Date().getTime();
      localStorage.setItem("accepted", currentTime);
    }
  })

  $(".close-btn").click(function () {
    $("#formModal").modal('hide');
    const currentTime = new Date().getTime();
    localStorage.setItem("accepted", currentTime);
  })

  $(".close-btn-image").click(function () {
    $("#imageModal").modal('hide');
    const currentTime = new Date().getTime();
    localStorage.setItem("accepted", currentTime);
  })

  $("#imageModal").on('hide.bs.modal', function () {
    const currentTime = new Date().getTime();
    localStorage.setItem("accepted", currentTime);
  });

})

function validate() {
  $('label.label_error').prev().remove();
  $('label.label_error').remove();

  if (!notEmpty("mfullname", alert_info1[1])) {
    return false;
  }

  if (!isPhone("mphone", alert_info1[2])) {
    return false;
  }
  else {

  }
  // return false;
  return true;
}