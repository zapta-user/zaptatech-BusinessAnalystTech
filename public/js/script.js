var formClass;

$('.moreless-button').click(function () {
  $('.moretext').slideToggle();
  if ($('.moreless-button').text() == "Read more") {
    $(this).text("Show less")
  } else {
    $(this).text("")
  }
});

$.validator.addMethod("atLeastOneCheckbox", function (value, element) {
  return $('input[name="domains"]:checked').length > 0;
}, "Please select at least one domain");

$(".becomepartform").validate({
  rules: {
    company_name: {
      required: true,
    },
    sponser_name: {
      required: true,
    },
    user_name: {
      required: true,
    },
    email: {
      required: true,
      email: true,
    },
    domains: {
      atLeastOneCheckbox: true,
    },
  },
  messages: {
    company_name: {
      required: "Enter company name",
    },
    sponser_name: {
      required: "Enter sponser name",
    },
    user_name: {
      required: "Enter user name",
    },
    email: {
      required: "Enter email",
    },
    domains: {
      atLeastOneCheckbox: "Please select at least one domain",
    },
  },
  submitHandler: function (form) {
    formClass = form;
    $(form).closest(".modal").modal("hide");
    $("#succesmodel").modal("show");

  },
});

// Contact form footer section
$("#contactUs").validate({
  rules: {
    name: {
      required: true,
    },
    email: {
      required: true,
      email: true,
    },
  },
  messages: {
    name: {
      required: "Please enter your full name",
    },
    email: {
      required: "Please enter your email address",
      email: "Please enter a valid email address",
    },
  },
  submitHandler: function (form) {
    $("#contactUs").attr('check_validate', 'true');
    $(form).closest(".modal").modal("hide");
  },
});

$("#contactUsModal").validate({
  rules: {
    name: {
      required: true,
    },
    email: {
      required: true,
      email: true,
    },
  },
  messages: {
    name: {
      required: "Please enter your full name",
    },
    email: {
      required: "Please enter your email address",
      email: "Please enter a valid email address",
    },
  },
  submitHandler: function (form) {
    $("#contactUsModal").attr('check_validate', 'true');
    $(form).closest(".modal").modal("hide");
  },
});
//   Contact us form header
$("#myForm2").validate({
  rules: {
    contactname: {
      required: true,
    },
    contactemail: {
      required: true,
      email: true,
    },
  },
  messages: {
    contactname: {
      required: "Please enter your full name",
    },
    contactemail: {
      required: "Please enter your email address",
      email: "Please enter a valid email address",
    },
  },
  submitHandler: function (form) {
    formClass = form;
    $(form).closest(".modal").modal("hide");
    $("#succesmodel").modal("show");
  },
});

$(".submit-form").click(function () {
  formClass.submit();
});

// bookconsultform form section
$("#bookconsultform").validate({
  rules: {
    name: {
      required: true,
    },
    email: {
      required: true,
      email: true,
    },
  },
  messages: {
    name: {
      required: "Please enter your full name",
    },
    email: {
      required: "Please enter your email address",
      email: "Please enter a valid email address",
    },
  },
  submitHandler: function (form) {
    formClass = form;
    $(form).closest(".modal").modal("hide");
    $("#succesmodel").modal("show");
  },
});

// Assuming you have multiple elements with the class "userPhoneNumber"
function positionDropdown(element) {
  var field = $(element);
  var fieldPos = field.offset();
  var fieldWidth = field.outerWidth();
  var fieldHeight = field.outerHeight();

  $(".iti--container").css({
    position: "absolute",
    top: fieldPos.top + fieldHeight,
    left: fieldPos.left,
    width: fieldWidth,
    height: 200,
  });
}

$("#phoneNumber").on("open:countrydropdown", function () {
  positionDropdown("#phoneNumber");
});

$("#contactphoneNum2").on("open:countrydropdown", function () {
  positionDropdown("#contactphoneNum2");
});

$("#phnumber").on("open:countrydropdown", function () {
  positionDropdown("#phnumber");
});

