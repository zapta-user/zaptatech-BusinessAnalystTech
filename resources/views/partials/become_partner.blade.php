<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div
        class="modal-dialog modal-dialog-centered modal-lg modal-dialog-centered d-flex justify-content-center align-items-center">
        <div class="flex-column modal-content scrollable-modal-content partnerForm px-lg-5 px-md-4 px-3 py-5 gap-3">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <h3 style="display: flex; justify-content: center;margin: 0 auto 16px;color:#FB7A00;">
                    Tell Us About Yourself!
                </h3>
                <svg data-bs-dismiss="modal" class="cancelform" xmlns="http://www.w3.org/2000/svg" width="27"
                    height="27" viewBox="0 0 27 27" fill="none"
                    style="cursor: pointer;position: absolute;top: 0;right: 0;margin: 20px !important;">
                    <circle cx="13.5" cy="13.5" r="13.5" fill="#E2E2E2" />
                    <path
                        d="M14.6022 13.483L20.8197 7.28213C20.9425 7.13904 21.0067 6.95497 20.9994 6.76672C20.9921 6.57847 20.9139 6.3999 20.7803 6.26668C20.6468 6.13347 20.4677 6.05543 20.2789 6.04816C20.0902 6.04088 19.9056 6.10492 19.7622 6.22746L13.5447 12.4283L7.32716 6.21998C7.18593 6.07913 6.99438 6 6.79466 6C6.59493 6 6.40339 6.07913 6.26216 6.21998C6.12093 6.36083 6.04159 6.55186 6.04159 6.75105C6.04159 6.95025 6.12093 7.14128 6.26216 7.28213L12.4872 13.483L6.26216 19.6839C6.18365 19.7509 6.11988 19.8334 6.07486 19.9262C6.02985 20.019 6.00455 20.1201 6.00056 20.2231C5.99657 20.3261 6.01397 20.4289 6.05168 20.5249C6.08939 20.6208 6.14658 20.708 6.21967 20.7809C6.29276 20.8538 6.38017 20.9109 6.47642 20.9485C6.57266 20.9861 6.67566 21.0034 6.77895 20.9994C6.88224 20.9955 6.98359 20.9702 7.07664 20.9253C7.16968 20.8804 7.25242 20.8168 7.31966 20.7385L13.5447 14.5377L19.7622 20.7385C19.9056 20.8611 20.0902 20.9251 20.2789 20.9178C20.4677 20.9106 20.6468 20.8325 20.7803 20.6993C20.9139 20.5661 20.9921 20.3875 20.9994 20.1993C21.0067 20.011 20.9425 19.827 20.8197 19.6839L14.6022 13.483Z"
                        fill="#8A8A8A" />
                </svg>
            </div>
            <form id="becomepartform" action="{{ route('frontend.partners.store') }}"
                class="ajax-submit becomepartform text-start d-flex flex-column gap-xl-4 gap-3 w-100 ex-respon"
                check_validate="false" method="POST" data-success-fn="partnerFormSuccess" form-reset="true">
                <div class="flex-column gap-1">
                    <label for="Partner"
                        style="font-size: 18px !important;color: #5F5F5F !important;font-weight: 800 !important;">
                        Partnership as</label>
                    <div class="d-flex gap-5 mt-4 align-items-center">
                        <div class="d-flex gap-2 radio-partner" style="display: flex;gap: 50px;">
                            <label class="radio-container">
                                <input type="radio" name="type" checked="checked" id="individual"
                                    value="individual" style="box-shadow: none;" />
                                <span class="radio-checkmark"></span>
                                <span>Individual</span>
                            </label>
                        </div>
                        <div class="d-flex gap-2 radio-partner">
                            <label class="radio-container">
                                <input type="radio" name="type" id="company" value="company"
                                    style="box-shadow: none;" />
                                <span class="radio-checkmark"></span>
                                <span>Company</span>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="flex-column gap-2 pos-rev" id="companyNameselect">
                    <label for="companyName">Company Name <span class="text-orange">*</span>
                    </label>

                    <div class="position-relative">
                        <input style="color: #acacac;width: 100%;" type="text" id="companyName" name="company_name"
                            class="border-0" placeholder="Enter Company Name" />
                    </div>
                </div>
                <div class="flex-column gap-1 pos-rev" id="nameselect">
                    <label for="Name">Full Name <span class="text-orange">*</span>
                    </label>
                    <div class="position-relative">
                        <input style="color: #acacac; width: 100%;" type="text" id="Name" name="name"
                            class="border-0" placeholder="Enter Name" />
                    </div>
                </div>

                <div class="flex-column gap-2 pos-rev" id="repnameselect">
                    <label for="repnameselect"
                        style="padding-bottom: 20px !important;font-size: 18px !important; font-weight: 800 !important;">Spokesperson
                        Details</label>
                    <label for="representativeName">Full Name
                        <span class="text-orange">*</span>
                    </label>
                    <div class="position-relative">
                        <input style="color: #acacac;width: 100%;" type="text" id="representativeName"
                            name="user_name" class="border-0" placeholder="Spokesperson Name" />
                    </div>
                </div>
                <script>
                    // Function to handle radio button changes
                    $("input[name='type']").change(function() {
                        if (this.id === "company") {
                            // Show the company field and hide the name field
                            $("#companyNameselect").show();
                            $("#nameselect").hide();
                            $("#repnameselect").show();
                        } else if (this.id === "individual") {
                            // Show the name field and hide the company field
                            $("#companyNameselect").hide();
                            $("#nameselect").show();
                            $("#repnameselect").hide();
                        }
                    });
                    // Initialize the visibility based on the default selection
                    if ($("#company").is(":checked")) {
                        $("#companyNameselect").show();
                        $("#nameselect").hide();
                    } else if ($("#individual").is(":checked")) {
                        $("#companyNameselect").hide();
                        $("#nameselect").show();
                        $("#repnameselect").hide();
                    }
                </script>
                <div
                    class="w-100 gap-lg-5 gap-3 d-flex justify-content-md-between flex-md-row flex-column align-items-center justify-content-center pos-rev">
                    <div class="w-100 d-flex flex-column gap-2">
                        <label for="PhoneNumber" style="">Phone
                            Number</label>
                        <div class="d-flex flex-column">
                            <input type="tel" name="phone_no" placeholder="" id="phoneNumber"
                                class="form-control ps-5 py-2 rounded-0;"
                                style="
                  padding-left: 500px !important;
                  border-radius: 0px !important;
                " />
                            <div id="phoneNumber-error" class="error-message pos-abs"></div>
                            <!-- <div class="error-message" id="PhoneNumber-error"></div> -->
                        </div>
                    </div>
                    <div class="w-100 d-flex flex-column gap-2">
                        <label style="" for="Email">Email <span class="text-orange">*</span>
                        </label>
                        <div class="position-relative">
                            <input type="email" style="color: #acacac; width: 100%;" id="Email" name="email"
                                class="border-0" placeholder="abc@example.com" />
                        </div>
                        <!-- <div class="error-message pos-abs" id="Email-error"></div> -->
                    </div>
                </div>
                <div class="d-flex flex-column gap-1 partnertable pos-rev" id="domainSection">
                    <label for="Domain" class="mb-3"
                        style="color: #5F5F5F !important;font-size: 18px !important;font-weight: 600 !important;padding-top: 10px !important;">Business
                        Domain</label>
                    <div class="table-responsive">
                        <table id="domainsListing">

                        </table>
                    </div>

                    <div class="error-message pos-abs" id="domainSection-error"></div>
                </div>
                <div class="d-flex flex-column gap-1">
                    <label for="Partner" style="padding-top: 10px !important;">Which Service you need from
                        us?</label>
                    <select name="service" id="partner" class="w-100 border-0 align-self-stretch serviceListing">
                    </select>
                    <div class="error-message" id="partner-error"></div>
                </div>
                <button type="submit"
                    class="btn navButton rounded-0 cardsButton button-color d-flex justify-content-center align-items-center gap-3">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>
