
var userIp = null;
var timeZone = null;
var selectedDate = new Date();

document.addEventListener("DOMContentLoaded", function () {
    var scriptTag = document.querySelector('script[src*="schedule-call.js"]');
    scheduleCallUrl = scriptTag.getAttribute("data-param");
    timeZoneUrl = scriptTag.getAttribute("data-param2");
    meetingDuration = scriptTag.getAttribute("data-param3");
    getAvailableSlots();
});

function getUserTimezoneFromIP() {
    const apiUrl = `https://ipapi.co/${userIp}/json/`;

    return fetch(apiUrl)
        .then(response => response.json())
        .then(data => data)
        .catch(error => {
            // console.error('Error fetching user timezone:', error);
            return null
        });
}


function getUserIpAddress() {
    return fetch('https://api.ipify.org/?format=json')
        .then(response => response.json())
        .then(data => data.ip);
}


getUserIpAddress()
    .then(ipAddress => {
        userIp = ipAddress;
        // Use the IP address as needed

        getUserTimezoneFromIP().then(userInfo => {
            if (userInfo) {
                localTimezone = userInfo.timezone;
                localTimezoneVal = 'GMT' + userInfo.utc_offset.replace(/(\d{2})(\d{2})/, '$1:$2') + ' - ' + userInfo.timezone;
            }
            else {
                localTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone; // if api failed to get timezone then set this by default
                localTimezoneVal = localTimezone;
            }

            countryCode = userInfo ? userInfo.country_code : 'pk';

        }).catch(error => {
            // phoneInfo = initializeCountry('pk', document.querySelector(".country-select")) // set pk by default if api fail to get countryCode
            // let input = document.querySelector(".country-select-mobile");
            // if(input){
            //     phoneInfoMobileView = initializeCountry('pk', input);
            // }
        });

    })
    .catch(error => {
        console.error('Error:', error);
    });


$('body').on('click', '.calendar-body .day', function () {

    let dateString = $('#calendar .month-year').text().trim() + ' ' + $(this).find('span').text(); // Combine month-year header and day
    selectedDate = new Date(Date.parse(dateString)); // Parse the date string and initialize selectedDate
    getAvailableSlots();
});


function generateHiddenFields(hiddenFields) {

    $.each(hiddenFields, function (fieldName, fieldValue) {
        const existingField = $('#bookconsultform input[name="' + fieldName + '"]');
        if (existingField.length > 0) {
            existingField.val(fieldValue);
        } else {
            $('#bookconsultform').append('<input type="hidden" name="' + fieldName +
                '" value="' + fieldValue + '">');
        }
    });
}

$('#openScheduleModal').click(function (e) {
    $('#bookconsultform')[0].reset();
    $('.slot').removeClass('active');
    $('#calendar .calender-body.current-date').addClass('selected');
    $('.calendar-body .day.current.selected').removeClass('selected');
    $('.calendar-body .day.current.current-date').addClass('selected');
    selectedDate = new Date();
    getAvailableSlots();
    backToSecond();
})


async function getAvailableSlots() {
    var formattedDate = selectedDate.getFullYear() + '-' +
        ('0' + (selectedDate.getMonth() + 1)).slice(-2) + '-' +
        ('0' + selectedDate.getDate()).slice(-2) + ' ' +
        ('0' + selectedDate.getHours()).slice(-2) + ':' +
        ('0' + selectedDate.getMinutes()).slice(-2) + ':' +
        ('0' + selectedDate.getSeconds()).slice(-2);
    console.log(formattedDate);

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            'Accept': 'application/json'
        },
        method: "POST",
        url: scheduleCallUrl,
        data: {
            timezone: 'Asia/Karachi',
            ip: userIp,
            date: formattedDate

        },
        beforeSend: function () {
            var slotsContainer = $('.' + 'availableslot');
            if (slotsContainer) $('.availableslot').addClass('section-load');
        },
        //****** Ajax call success function *******
        success: function (data) {
            if (data.status == true && data.statusCode == 200) {
                availableSlots = data.data;
                $('.time_slot-error').hide();
                var html = '';
                var htmlForMobile = '';
                if (availableSlots.length > 0) {
                    $.each(availableSlots, function (key, value) {
                        html += `<div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                        style="width: 164px;height: 50px;padding: 0 !important;">
                        ${value}
                    </div>`;
                    });
                    $(".scheduleNextBtn").removeClass('disabled');
                } else {
                    const options = {
                        weekday: 'long',
                        month: 'long',
                        day: 'numeric',
                        year: 'numeric'
                    };
                    html += `<p style="color:white">No Slots Available at ${selectedDate.toLocaleDateString('en-US', options)}</p>`;
                    $(".scheduleNextBtn").addClass('disabled');
                }
                $(".slot-container.web-version").html(html);


            } else {
                var html = '';
                var htmlForMobile = '';
                $(".slot-container.web-version").html(html);
                $(".slot-container.mobile-version").html(htmlForMobile);
            }

            $('.availableslot').removeClass('section-load');


        },
        //****** Ajax call error function *******

        error: function (request, status, error) {
            errorResponse = JSON.parse(request.responseText);
            var firstError;
            if (errorResponse.statusCode == 422) {
                $.each(errorResponse.errors, function (field_name, error) {
                    if (!firstError) {
                        firstError = error;
                    }
                });

                if (firstError) {
                    toastr.error(firstError, 'Error');
                }
            }
            $('.availableslot').removeClass('section-load');
        },
    });
}

$(document).on('click', '.slot-container .slot', function () {

    var timeSlotValue = $(this).text().trim();
    console.log('timeslot', timeSlotValue);
    let formattedDate2 = selectedDate.getFullYear() + '-' +
        ('0' + (selectedDate.getMonth() + 1)).slice(-2) + '-' +
        ('0' + selectedDate.getDate()).slice(-2) + ' ' +
        ('0' + selectedDate.getHours()).slice(-2) + ':' +
        ('0' + selectedDate.getMinutes()).slice(-2) + ':' +
        ('0' + selectedDate.getSeconds()).slice(-2);

    $('.slot-container .slot').removeClass('active');
    $(this).addClass('active');
    const hiddenFields = {
        timezone: 'Asia/Karachi',
        user_ip: userIp,
        date: formattedDate2,
        time_slot: timeSlotValue,
    };

    generateHiddenFields(hiddenFields);
})

$('.scheduleNextBtn').on('click', function (event) {
    console.log('clicked');
    var nearestTimeSlotInput = $('.slot-container').find('.slot.active');
    var timeSlotValue = nearestTimeSlotInput.text();

    if (!timeSlotValue || availableSlots.length == 0) {
        console.log("timeSlotValue", timeSlotValue);
        if (availableSlots.length != 0) $('.time_slot-error').show();
        event.preventDefault();
        event.stopPropagation();
        $('.time_slot-error').removeClass('d-none');
        return;
    } else {
        $('.time_slot-error').addClass('d-none');
        showSecondDiv();
    }
})

function showSecondDiv() {
    const div1 = document.getElementById("div1");
    const div3 = document.getElementById("div3");
    div1.style.display = "none";
    div3.style.display = "flex";
}

function backToSecond() {
    const div1 = document.getElementById("div1");
    const div3 = document.getElementById("div3");
    div1.style.display = "flex";
    div3.style.display = "none";
}
