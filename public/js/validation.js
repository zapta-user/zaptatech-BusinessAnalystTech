
$(document).ready(function() {
    // Function to validate email format
    function validateEmail(email) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[A-Za-z]+$/;
        return emailPattern.test(email);
    }
// Function to validate phone number format
function validatePhoneNumber(phoneNumber) {
    // Use a regular expression to validate phone number format (adjust as needed)
    const phonePattern = /^\d{10}$/; // Assumes a 10-digit phone number format
    return phonePattern.test(phoneNumber);
}

    // Function to update error messages
    function updateErrorMessages() {
        // Reset previous error messages
        $('#nameError').text('');
        $('#emailError').text('');
        $('#phonenumError').text('');

        // Get form values
        const name = $('#name').val();
        const email = $('#email').val();
        const phoneNumber = $('#phnumber').val();

        // Validate each field
        let isValid = true;

        if (name.trim() === '') {
            $('#nameError').text('Full Name is required');
            isValid = false;
        } else if (name.trim().length < 3) {
            $('#nameError').text('');
            isValid = false;
        } else if (!/^[a-zA-Z\s]+$/.test(name)) {
            $('#nameError').text('Name should only contain letters and spaces');
            isValid = false;
        }

        if (email.trim() === '') {
            $('#emailError').text('Email is required');
            isValid = false;
        } else {
            // Validate email format with case-insensitivity in the domain part
            if (!validateEmail(email)) {
                $('#emailError').text('Email is not in the correct format');
                isValid = false;
            }
        }
 // Validate phone number to allow only digits or display an error
 if (/[^0-9]/.test(phoneNumber)) {
    $('#phonenumError').text('Phone Number should contain only digits');
    isValid = false;
}

        // Add similar validation for other fields (e.g., message)

        return isValid;
    }

    // Add event listeners to input fields for real-time validation
    $('#name').on('input', updateErrorMessages);
    $('#email').on('input', updateErrorMessages);
    $('#phnumber').on('input', updateErrorMessages);

    $('#bookconsultform').on('submit', function(e) {
        e.preventDefault(); // Prevent form submission for now
        const form = this; 
        $('#schedule').prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Loading...');


        if (updateErrorMessages()) {
            // Simulate an asynchronous operation (e.g., AJAX) for demonstration purposes
            setTimeout(function () {
                // Re-enable the submit button
                $('#submit-button').prop('disabled', false).html('Submit');

                // Show the SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Thank you',
                    text: 'Meeting request has been forwarded',
                    showConfirmButton: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    customClass: {
                        content: 'text-color-212529 sweet-alert-with-padding fade-in',
                        icon: 'icon-color-fb7a00',
                        title: 'sweet-alert-title text-color-fb7a00',
                    },
                    showClass: {
                        popup: 'animated fadeIn',
                    },
                    hideClass: {
                        popup: 'animated fadeOut',
                    }
                }).then(function () {
                    // After the SweetAlert is closed, clear the form fields
                    form.reset();

                    // Close the modal if needed
                    $('#bookapp').modal('hide');
                });
            }, 1000); // Simulate a 2-second delay, you can replace this with your actual submission logic
        }

    });
  
});

$(document).ready(function () {
  // Function to handle radio button changes
  $("input[name='partnertype']").change(function () {
    if (this.id === "company") {
        // Show the company field and hide the name field
        $("#companyNameselect").show();
        $("#nameselect").hide();
    } else if (this.id === "individual") {
        // Show the name field and hide the company field
        $("#companyNameselect").hide();
        $("#nameselect").show();
    }
});


// Event listener to validate phone number format when the user enters input
$("#phoneNumber").on("input", function () {
    const phoneNumber = $(this).val().trim();
    const errorElement = $("#phoneNumber-error");

    if (phoneNumber !== "" && !isValidPhoneNumber(phoneNumber)) {
        errorElement.text("");
    } else {
        errorElement.text(""); // Clear the error message
    }
});
// Function to validate phone number format (only digits)
function isValidPhoneNumber(phoneNumber) {
    const phonePattern = /^[0-9]+$/; // Allow only digits (0-9)
    return phonePattern.test(phoneNumber);
}
 // Initialize the visibility based on the default selection
 if ($("#company").is(":checked")) {
    $("#companyNameselect").show();
    $("#nameselect").hide();
} else if ($("#individual").is(":checked")) {
    $("#companyNameselect").hide();
    $("#nameselect").show();
}

  // Function to validate name format (only alphabets)
  function isValidName(name) {
      const namePattern = /^[a-zA-Z ]+$/; // Allow alphabets and spaces
      return namePattern.test(name);
  }

  
  // Email format validation function
  function isValidEmail(email) {
      // Use a regular expression pattern to validate email format
      const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      return emailPattern.test(email);
  }
  

  // Event listener to validate company name format and minimum size as the user types
  $("#companyName").on("input", function () {
      const companyName = $(this).val().trim();
      const errorElement = $("#companyName-error");

      if (companyName === "") {
          errorElement.text("Company Name is required.");
      } else if (!isValidName(companyName)) {
          errorElement.text("Company Name must contain only alphabets and spaces.");
      } else if (companyName.length < 3) {
          errorElement.text("");
      } else {
          errorElement.text(""); // Clear the error message if valid
      }
  });

  // Event listener to validate name format and minimum size as the user types
  $("#Name").on("input", function () {
      const name = $(this).val().trim();
      const errorElement = $("#Name-error");

      if (name === "") {
          errorElement.text("Name is required.");
      } else if (!isValidName(name)) {
          errorElement.text("Name must contain only alphabets and spaces.");
      } else if (name.length < 3) {
          errorElement.text("");
      } else {
          errorElement.text(""); // Clear the error message if valid
      }
  });

  // Event listener to validate representative name format and minimum size as the user types
  $("#representativeName").on("input", function () {
      const representativeName = $(this).val().trim();
      const errorElement = $("#representativeName-error");

      if (representativeName === "") {
          errorElement.text("Representative Name is required.");
      } else if (!isValidName(representativeName)) {
          errorElement.text("Representative Name must contain only alphabets and spaces.");
      } else if (representativeName.length < 3) {
          errorElement.text("");
      } else {
          errorElement.text(""); // Clear the error message if valid
      }
  });

  // Event listener to validate email format as the user types
  $("#Email").on("input", function () {
      const email = $(this).val().trim();
      const errorElement = $("#Email-error");

      if (email === "") {
          errorElement.text("Email is required.");
      } else if (!isValidEmail(email)) {
          errorElement.text("Email is not in a valid format.");
      } else {
          errorElement.text(""); // Clear the error message
      }
  });

  // Event listener to remove domain error when the user selects a domain
  $("input[name='domains']").change(function () {
      if ($("#domainSection-error").text() !== "") {
          $("#domainSection-error").text("");
      }
  });

  // Event listener to remove service error when the user selects a service
  $("#partner").change(function () {
      if ($("#partner-error").text() !== "") {
          $("#partner-error").text("");
      }
  });

  // Function to display a success alert
  function showAlert(message) {
      alert(message);
  }

  // Form submission and validation
// Form submission and validation
$(".becomepartform").submit(function (event) {
    // Reset error messages
    $(".error-message").text("");

    // Validate fields
    let isValid = true;

    if ($("#company").is(":checked")) {
        const companyName = $("#companyName").val().trim();
        const representativeName = $("#representativeName").val().trim();
    } else if ($("#individual").is(":checked")) {
        // ... Validation logic for individual fields ...
    }

    // Validate partner selection
    if ($("#partner").val() === "type") {
        isValid = false;
        $("#partner-error").text("Please select a service.");
    }
    if ($("#Name").val() == "") {
      isValid = false;
      $("#representativeName-error").text("Please enter name.");
    }
    if ($("#companyName").val() == "") {
      isValid = false;
      $("#companyName-error").text("Please enter company name.");
    }

    // Check at least one domain is selected
    if ($("input[name='domains']:checked").length === 0) {
        isValid = false;
        $("#domainSection-error").text("Please select at least one domain.");
    }


    // Validate email format if an email is entered
    const email = $("#Email").val().trim();
    if (email === "") {
        isValid = false;
        $("#Email-error").text("Email is required.");
    } else if (!isValidEmail(email)) {
        isValid = false;
        $("#Email-error").text("Email is not in a valid format.");
    }
    // Validate phone number format if a phone number is entered
const phoneNumber = $("#phoneNumber").val().trim();
if (phoneNumber !== "" && !isValidPhoneNumber(phoneNumber)) {
    isValid = false;
    $("#phoneNumber-error").text("");
}

    if (!isValid) {
        event.preventDefault();
    }

    if (isValid) {
        // Show SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'Thank You',
            text: 'Our Team will get back to you soon.',
            showConfirmButton: true,
            timer: 5000, // 5 seconds
            allowOutsideClick: false,
            allowEscapeKey: false,
            customClass: {
                content: 'text-color-212529 sweet-alert-with-padding fade-in',
                icon: 'icon-color-fb7a00',
                title: 'sweet-alert-title text-color-fb7a00',
            },
            showClass: {
                popup: 'animated fadeIn',
            },
            hideClass: {
                popup: 'animated fadeOut',
            },
        }).then(function () {
            // Reset the form after showing the success message
            $(".becomepartform")[0].reset();
            // Hide the modal
            $("#staticBackdrop").modal("hide");
        });

        event.preventDefault(); // Prevent the default form submission
    }
});

});


// $(document).ready(function () {
//     // jQuery for form validation
//     const contactform = $("#myForm");
//     const contactphoneNumInput = $("#contactphoneNum");
//     const contactphoneNumError = $("#contactphoneNumError");
//     const contactnameInput = $("#contactname");
//     const contactnameError = $("#contactnameError");
//     const contactemailInput = $("#contactemail");
//     const contactemailError = $("#contactemailError");
//     let previousCountry = null;

//     // Function to validate Full Name
//     function validateFullName() {
//       const contactname = contactnameInput.val().trim();
//       if (contactname === "") {
//         contactnameError.text("Full Name is required.");
//         return false;
//       } else {
//         const namePattern = /^[a-zA-Z\s]+$/;
//         if (namePattern.test(contactname)) {
//           // If the input contains only alphabetic characters, check the length
//           if (contactname.length < 3) {
//             contactnameError.text("");
//             return false;
//           } else {
//             contactnameError.text(""); // Clear the error message if valid
//             return true;
//           }
//         } else {
//           contactnameError.text("Only alphabets and spaces are allowed in the name.");
//           return false;
//         }
//       }
//     }
//     // Function to validate Email
//     function validateEmail() {
//       const contactemail = contactemailInput.val().trim();
//       const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
//       if (contactemail === "") {
//         contactemailError.text("Email is required.");
//         return false;
//       } else if (!emailPattern.test(contactemail)) {
//         contactemailError.text("Invalid Email Format.");
//         return false;
//       }
//       contactemailError.text(""); // Clear the error message if valid
//       return true;
//     }

//     // Function to validate Phone Number using intlTelInput
//     function validatePhoneNumber() {
//       // You may need to initialize the intlTelInput here as per your actual setup
//       const iti = window.iti;

//       const selectedCountry = iti.getSelectedCountryData();
//       if (selectedCountry.iso2 !== previousCountry) {
//         // User selected a different country, clear the phone number field
//         contactphoneNumInput.val("");
//         previousCountry = selectedCountry.iso2;
//       }

//       if (contactphoneNumInput.val().trim() !== "") {
//         if (iti.isValidNumber()) {
//           // Phone number is valid
//           contactphoneNumError.text("");
//           return true;
//         } else {
//           // Phone number is invalid
//           contactphoneNumError.text("");
//           return false;
//         }
//       }

//       return true; // No phone number entered is also considered valid
//     }

//     // Add event listeners to form fields to validate as the user types
//     contactnameInput.on("input", validateFullName);
//     contactemailInput.on("input", validateEmail);
//     contactphoneNumInput.on("input", validatePhoneNumber);

 

 
//     contactform.on("submit", function (event) {
//       // Validate all fields before form submission
//       const isFullNameValid = validateFullName();
//       const isEmailValid = validateEmail();
//       const isPhoneNumberValid = validatePhoneNumber();
  
//       if (!isFullNameValid || !isEmailValid || !isPhoneNumberValid) {
//         event.preventDefault(); // Prevent form submission if any field is invalid
//       } else {
//         // Prevent the default form submission behavior
//         event.preventDefault();
  
//         // If all validations pass, show a SweetAlert confirmation with custom animations
//         Swal.fire({
//           icon: 'success',
//           title: 'Thank you',
//           text: 'Our Team will get back you soon.',
//           showConfirmButton: true, // Hide the default "OK" button
//           timer: 300500, // Auto close the alert after 5 seconds (adjust as needed)
//           allowOutsideClick: false, // Prevent closing by clicking outside
//           allowEscapeKey: false, // Prevent closing by pressing Esc key
//           customClass: {
//             content: 'text-color-212529 sweet-alert-with-padding fade-in', // Apply custom CSS class for text color, content padding, and fade-in animation
//             icon: 'icon-color-fb7a00', // Apply custom CSS class for icon color
//             title: 'sweet-alert-title text-color-fb7a00', // Apply custom CSS class for title padding
//           },
//           showClass: {
//             popup: 'animated fadeIn', // Add a fade-in animation when the SweetAlert opens
//           },
//           hideClass: {
//             popup: 'animated fadeOut', // Add a fade-out animation when the SweetAlert closes
//           },
//         }).then(function () {
//           // Reset the form after showing the success message
//           contactform[0].reset();
//         });
//       }
//     });
    
//   });


// document.addEventListener("DOMContentLoaded", function () {
//   var form = document.getElementById("myForm2");
//   form.addEventListener("submit", function (e) {
//     e.preventDefault();

//     var hasErrors = false;


//     var name = document.getElementById("contactname2").value;
//     var nameError = document.getElementById("contactnameError2");
//     if (name.trim() === "") {
    
//       nameError.textContent = "Please enter your full name.";
//       hasErrors = true;
//     } else {
  
//       nameError.textContent = "";
//     }

   
//     var email = document.getElementById("contactemail2").value;
//     var emailError = document.getElementById("contactemailError2");
//     if (email.trim() === "") {
   
//       emailError.textContent = "Please enter your email address.";
//       hasErrors = true;
//     } else {

//       emailError.textContent = "";
//     }



//     if (!hasErrors) {
      
//       Swal.fire({
//         icon: "success",
//         title: "Thank You",
//         text: "Form submitted successfully.",
//       });

    
//       fetch("your-submit-url.php", {
//         method: "POST",
//         body: new FormData(form),
//       })
//         .then(function (response) {
//           if (response.ok) {
         
//             Swal.fire({
//               icon: "success",
//               title: "Congratulations!",
//               text: "Form submitted successfully.",
//             });
//           } else {
          
//             console.error("Form submission failed");
//           }
//         })
//         .catch(function (error) {
//           console.error("Error:", error);
//         });
//     }
//   });
// });


document.addEventListener("DOMContentLoaded", function () {
 
  // var form = document.getElementById("myForm2");


  // var hasErrors2 = false;
  // form.addEventListener("submit", function (e) {
  
  //   e.preventDefault();
  //   if (!hasErrors2) {
     
  //   }

  //   // Flag to check if there are any validation errors
  //   validateForm();
  // });

  // $("#contactname2, #contactemail2").on("keyup", function(){
  //   validateForm();
  // });

  // function validateForm(){
  //   hasErrors2 = false;
  //   // Validation for the name input
  //   var name = document.getElementById("contactname2").value;
  //   var nameError = document.getElementById("contactnameError2");
  //   if (name.trim() === "") {
  //     // Show an error message for the name input
  //     nameError.textContent = "Please enter your full name.";
  //     hasErrors2 = true;
  //   } else {
  //     // Clear the error message when the input is valid
  //     nameError.textContent = "";
  //   }

  //   // Validation for the email input
    
  //   var email = document.getElementById("contactemail2").value;
  //   var emailError = document.getElementById("contactemailError2");
  //   if (email.trim() === "") {
  //     // Show an error message for the email input
  //     emailError.textContent = "Please enter your email address.";
  //     hasErrors2 = true;
  //   } else if (!isValidEmail(email)) {
  //     // Check if the email format is valid
  //     emailError.textContent = "Please enter a valid email address.";
  //     hasErrors2 = true;
  //   } else {
  //     // Clear the error message when the input is valid
  //     emailError.textContent = "";
  //   }

  //   // Add more input validations and error messages as needed

    
  // }

  // Function to validate email format
  function isValidEmail(email) {
    var emailRegex = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;
    return emailRegex.test(email);
  }


  var input = document.querySelector("#phoneNumber2");
var iti = window.intlTelInput(input, {
  separateDialCode: true,
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/js/utils.js",
  initialCountry: "US", // Set the default country to United States
});
// store the instance variable so we can access it in the console e.g. window.iti.getNumber()
window.iti = iti;

// Get the input element
var phoneNumberInput = document.querySelector("#phnumber2");

// // Set the default USA phone number as the placeholder (adjust as needed)
phoneNumberInput.placeholder = "201-555-0123";
});


document.addEventListener("DOMContentLoaded", function () {
    var loader = document.querySelector('.loader');
    var html = document.querySelector('html');

    // Add 'loading' class to the html element to set the background color to red
    html.classList.add('loading');

    // Show the loader
    loader.style.display = 'block';

    // Set a timeout to hide the loader after 3 seconds
    setTimeout(function () {
      loader.style.display = 'none';

      // Remove 'loading' class from the html element to revert to the original background color
      html.classList.remove('loading');
    }, 1000); // 3000 milliseconds = 3 seconds
  });