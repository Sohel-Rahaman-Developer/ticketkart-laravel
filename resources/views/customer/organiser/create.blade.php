@extends('layouts/customer_layout')
@section('organiser_select','active')
@section('content')

<div class="container-fluid">
        <div class="px-0 px-md-2">
            <div class="row-divider d-flex flex-column">
                <div class="upperDivider flex-grow-1">
                    <div class="d-flex middle-content w-100">
                        <div class="menuSide d-none d-lg-block">
                            <div class="menuParent attendeeMenuParent d-flex flex-column" style="padding-bottom: 120px">
                                <div class="d-none d-lg-block pt-1 pe-1 arrow-sticky">
                                    <div class="d-flex justify-content-end align-items-center">
                                        <i
                                            class=" icon-color las la-chevron-circle-left left-menu-icon-dashboard activeMenuItem fs-2"></i>
                                    </div>
                                </div>

                                <ul class="menuUl pt-0 ps-0">
                                    <li class="menuLi d-flex align-items-center leftMenuActive">
                                       <!-- <span class="menuIcon" tooltip="Home" flow="right" class="show-tooltip"> -->
                                          <i class=" las la-home fs-2 menuIcon" data-tooltip="home"></i>
                                       <!-- </span> -->
                                       <span
                                          class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Home</span></span>
                                    </li>
                                    <li class="menuLi d-flex align-items-center">
                                     
                                          <i class="icon-color menuIcon las la-calendar-plus fs-2" data-tooltip="Events"></i>
                                    
                                       <span
                                          class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Events</span></span>
                                    </li>
         
                                    <li class="menuLi d-flex align-items-center">
                                    
                                          <i class="icon-color menuIcon las la-calendar-check fs-2" data-tooltip="Orders"></i>
                                       
                                       <span
                                          class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Orders</span></span>
                                    </li>
                                    <li class="menuLi d-flex align-items-center">
                                       
                                          <i class="icon-color menuIcon las la-chart-bar fs-2" data-tooltip="Reports"></i>

                                       <span
                                          class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Reporting</span></span>
                                    </li>
         
                                    <li class="menuLi d-flex align-items-center">
                                       
                                          <i class="icon-color menuIcon las la-bullhorn fs-2" data-tooltip="Orders"></i>
         
                                  
                                       <span
                                          class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Marketing</span></span>
                                    </li>
         
                                    <li class="menuLi d-flex align-items-center">
                                      
                                          <i class="icon-color menuIcon las la-university fs-2" data-tooltip="Finance"></i>
         
                                   
                                       <span
                                          class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Finance</span></span>
                                    </li>
                                    <li class="menuLi d-flex align-items-center">
                                    
                                          <i class="icon-color menuIcon las la-envelope fs-2" data-tooltip="Inbox(10)"></i>
                                    
                                       <span
                                          class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Inbox</span>(10)</span>
                                    </li>
                                 </ul>
         
                                 <div class="manage">
                                    <div class="d-flex justify-content-between align-items-center pe-3 manage-items">
                                       <div class=""><strong class="leftManage">Manage</strong></div>
                                       <div class="me-3 fs-4 manage-visibility">+</div>
                                    </div>
                                    <ul class="m-0 p-0 all-manage-item">
                                       <li class="menuLi d-flex align-items-center justify-content-start">
                                       
                                             <i class="icon-color menuIcon las la-chair fs-2" data-tooltip="Seating Charts"></i>
         
                                        
                                          <span class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Seating
                                                Charts</span></span>
                                       </li>
                                       <li class="menuLi d-flex align-items-center justify-content-start">
                                       
                                             <i class="icon-color menuIcon las la-users fs-2" data-tooltip="Team Access"></i>
         
                                         
                                          <span class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Team
                                                Access</span></span>
                                       </li>
                                       <li class="menuLi d-flex align-items-center justify-content-start">
                                          
                                             <i class="icon-color menuIcon las la-user-check fs-2" data-tooltip="Check-in Users"></i>
                                        
                                          <span class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Check-in
                                                Users</span></span>
                                       </li>
                                       <li class="menuLi d-flex align-items-center justify-content-start">
                                     
                                             <i class="icon-color menuIcon las la-cog fs-2" data-tooltip="Organiser Settings"></i>
                                       
                                          <span class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Organiser
                                                Settings</span></span>
                                       </li>
                                    </ul>
                                 </div>
                                <div class="logoutBtn2 pe-3 d-flex align-items-end">
                                    <a href=""
                                        class="d-flex gap-2 justify-content-center align-items-center log-out-btn2">
                                        <img src="./images/attandee/switch.svg" alt="switch">

                                        <span class="logOutBtnJs log-o">Switch to Attendees</span>
                                    </a>
                                </div>
                                <div class="logoutBtn pe-3 d-flex align-items-end">
                                    <a href=""
                                        class="d-flex gap-2 justify-content-center align-items-center log-out-btn">

                                        <i class=" icon-color fa-solid fa-right-from-bracket fs-3"></i>
                                        <span class="logOutBtnJs log-o">Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="rightSide user-select-none w-100">
                            <div id="style-3" class="">
                                <div class="profile-content">
                                    <!-- event-list -->
                                    <div class="container mx-auto px-0">
                                        <div class="even-list-p">
                                            <h4 class="mb-3">Add Organiser</h4>
                                            <form action="">
                                                <div class="fancy-box position-relative mb-4">
                                                    <div class="fancy-title">Profile</div>
                                                    <h6 class="form-h6">Organiser Profile Logo</h6>
                                                    <p class="form-p color-999">
                                                        Upload your organization's logo, attendees will see at the top
                                                        of your profile. Use a high quality square image.
                                                    </p>
                                                    <!-- choose file start -->
                                                    <!-- choose file start -->

                                                    <label class="form__container" id="upload-container">
                                                        <div>
                                                            <div class="text-center">
                                                                <svg width="56" height="34" viewBox="0 0 56 34"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M46.6598 14.6526C47.0114 13.8469 47.2087 12.966 47.2087 12.0474C47.2087 8.05668 43.5213 4.81895 38.9765 4.81895C37.2871 4.81895 35.7093 5.27072 34.4059 6.03874C32.0306 2.42453 27.5972 0 22.5121 0C14.9316 0 8.79176 5.3912 8.79176 12.0474C8.79176 12.2507 8.80034 12.454 8.80891 12.6573C4.0068 14.1406 0.55957 18.1614 0.55957 22.89C0.55957 28.876 6.09057 33.7326 12.9079 33.7326H44.4646C50.5273 33.7326 55.4408 29.4182 55.4408 24.0947C55.4408 19.4339 51.6678 15.5411 46.6598 14.6526ZM34.2944 19.2758H28.6862V27.7089C28.6862 28.3715 28.0688 28.9137 27.3142 28.9137H23.1981C22.4435 28.9137 21.8261 28.3715 21.8261 27.7089V19.2758H16.2179C14.9916 19.2758 14.3828 17.9807 15.2489 17.2202L24.2871 9.284C24.8188 8.81717 25.6935 8.81717 26.2251 9.284L35.2634 17.2202C36.1295 17.9807 35.5121 19.2758 34.2944 19.2758Z"
                                                                        fill="black"></path>
                                                                </svg>
                                                            </div>
                                                            Choose or Drop images Files
                                                        </div>

                                                        <input class="form__file" id="upload-files" type="file"
                                                            multiple="multiple">
                                                        <div id="preview"></div>
                                                    </label>
                                                    <div class="text-center">
                                                        <ul class="d-flex justify-content-center flex-wrap p-0 m-0">
                                                            
                                                            <li class="font-s-rules">
                                                                Maximum file size: 5MB
                                                            </li>
                                                            <li class="font-s-rules">
                                                                Supported image files: JPEG or PNG
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div id="files-list-container"></div>
                                                </div>
                                                <div class="fancy-box position-relative mb-4">
                                                    <div class="fancy-title">About The Organiser</div>
                                                    <p class="form-p color-999">
                                                        Let attendees know who is hosting events.
                                                        <a href="">Learn more</a>
                                                    </p>
                                                    <div class="in-box-component mb-3">
                                                        <h6 class="form-h6">Organiser Name <span style="color: red;">*</span></h6>
                                                        <p class="form-p-text">
                                                            This name will be displayed on all your event pages,
                                                            bookings and tickets
                                                        </p>
                                                        <div class="form-group mt-2 position-relative">

                                                                <input class="form-control"
                                                                    required="" placeholder="e.g. Ticketkart Entertainment">
                                                                    <span class="position-absolute limit-letter">0/75</span>
                                                        </div>
                                                    </div>
                                                    <div class="in-box-component mb-3">
                                                        <h6 class="form-h6">Phone No <span style="color: red;">*</span></h6>

                                                        <div class="form-group mt-2">
                                                                <input class="form-control" placeholder="e.g. +447812345678"
                                                                    required="">
                                                        </div>
                                                    </div>
                                                    <div class="in-box-component mb-3">
                                                        <h6 class="form-h6">Organiser page URL</h6>
                                                        <p class="form-p color-999">
                                                            Customize your URL to help attendees find your events easily. It can include letters, numbers and dashes. </p>
                                                        <div class="d-flex align-items-center gap-1">
                                                            <h6 class="form-h6 fs-6">https://</h6>
                                                            <div class="form-group position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="your-domain">
                                                                    <span class="position-absolute limit-letter d-none d-lg-block">0/30</span>

                                                            </div>
                                                            <h6 class="form-h6 fs-6">.ticketkart.com</h6>
                                                        </div>
                                                    </div>
                                                    <div class="in-box-component mb-3">
                                                        <h6 class="form-h6 mb-2">Website link</h6>
                                                        <div class="form-group position-relative">
                                                            <input type="text" class="form-control"
                                                                placeholder="e.g. https://www.ticketkart.com">
                                                                <span class="position-absolute limit-letter">0/140</span>
                                                        </div>
                                                    </div>
                                                    <div class="in-box-component mb-3">
                                                        <h6 class="form-h6">Organiser Bio</h6>
                                                        <p class="form-p color-999">
                                                            Introduce yourself, your hosted event types, or your mission. This biography is visible on your organiser profile.
                                                        </p>
                                                        <div class="mb-4 mt-2">
                                                            <textarea id="editor4" name="summernote"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="in-box-component mb-3">
                                                        <h6 class="form-h6">Description for event pages</h6>
                                                        <p class="form-p color-999">
                                                            Share details about this organiser to be shown on all your event page under organiser profile.
                                                        </p>
                                                        <div class="mb-4 mt-2">
                                                            <textarea id="editor5" name="summernote"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="fancy-box position-relative mb-4">
                                                    <div class="fancy-title">Social media and marketing</div>
                                                    <div class="in-box-component mb-3">
                                                        <h6 class="form-h6 mb-2">Facebook  Page</h6>
                                                        <div class="form-group position-relative">
                                                            <input type="text" class="form-control ps-4"
                                                                placeholder="Add your Facebook page full url">
                                                                <i class="fa-brands fa-facebook-f face-l"></i>
                                                        </div>
                                                    </div>
                                                    <div class="in-box-component mb-3">
                                                        <h6 class="form-h6 mb-2">Twitter Page</h6>
                                                        <div class="form-group position-relative">
                                                            <input type="text" class="form-control ps-4"
                                                                placeholder="Add your Twitter page full url">
                                                                <i class="fa-brands fa-twitter face-l"></i>
                                                        </div>
                                                    </div>
                                                    <div class="in-box-component mb-3">
                                                        <h6 class="form-h6 mb-2">Instagram Page</h6>
                                                        <div class="form-group position-relative">
                                                            <input type="text" class="form-control ps-4"
                                                                placeholder="Add your Instagram page full url">
                                                                <i class="fa-brands fa-instagram face-l"></i>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-end gap-2 mt-3">
                                                        <button class="btn tim-zn-btn close-modal">Cancel</button><button
                                                            class="btn tim-zn-btn2">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- event-list end -->

                                    <script>
                                        // Close the dropdown menu if clicked outside of it
                                        window.onclick = function (event) {
                                            if (!event.target.matches('.edit-agenda')) {
                                                var dropdowns = document.getElementsByClassName("dropdown-content-list_event");
                                                for (var i = 0; i < dropdowns.length; i++) {
                                                    var openDropdown = dropdowns[i];
                                                    if (openDropdown.style.display === "block") {
                                                        openDropdown.style.display = "none";
                                                    }
                                                }
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection