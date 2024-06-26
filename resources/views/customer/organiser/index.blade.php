@extends('layouts/customer_layout')
@section('organiser_select','active')
@section('content')
 <!-- middile section start -->
 <div class="container-fluid">
        <div class="px-0 px-md-2">
            <div class="row-divider d-flex flex-column">
                <div class="upperDivider flex-grow-1">
                    <div class="d-flex middle-content w-100">

                    @include('customer/sidemenu')

                        <div class="rightSide user-select-none w-100">
                            <div id="style-3" class="">
                                <div class="profile-content">
                                    <!-- event-list -->
                                    <div class="container mx-auto px-0">
                                        <div class="even-list-p mx-auto px-lg-4 py-lg-4" style="max-width: 1000px;">
                                            <div>
                                                <h5 class="m-0">Sarat Enterprise</h5>
                                            </div>
                                            <div>
                                                <h4><strong>Organization Settings</strong></h4>
                                            </div>
                                            <div class="fancy-box position-relative mb-4">
                                                 <div>
                                                    <h6>Organiser profiles</h6>
                                                </div>
                                                <div class="d-block d-lg-flex flex-column flex-lg-row gap-2 align-items-end align-items-lg-center justify-content-between">
                                                    <p class="form-p color-999">
                                                        Profiles feature organizers and their events. Complete yours for
                                                        more followers.
                                                        <a href="">Learn more</a>
                                                    </p>
                                                    <div class="text-end">
                                                       <button type="button" class="btn btn-primary fs-12" style="width: 152px;">Add Organiser
                                                        Profile</button>  
                                                    </div>
                                                   
                                                </div>
                                                <div class="settings-container d-flex justify-content-between align-content-center px-3 py-1 border border-2 rounded-3 mt-4">
                                                    <div class="enterp-name d-flex gap-2 align-items-center">
                                                        <div class="entp-img border border-2 rounded-circle">img</div>
                                                        <div class="name-entr"><h5 class="m-0 fs-6">Sarat Enterprise</h5></div>
                                                    </div>
                                                    <div>
                                                        <div class="dropdown">
                                                            <button class="edit-agenda2 me-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical clickEventList" style="padding: 3px 6px; font-size: 22px;"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">View</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                <li><a class="dropdown-item" href="#">Team Managment</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="settings-container d-flex justify-content-between align-content-center px-3 py-1 border border-2 rounded-3 mt-4">
                                                    <div class="enterp-name d-flex gap-2 align-items-center">
                                                        <div class="entp-img border border-2 rounded-circle">img</div>
                                                        <div class="name-entr"><h5 class="m-0 fs-6">Sarat Enterprise</h5></div>
                                                    </div>
                                                    <div>
                                                        <div class="dropdown">
                                                            <button class="edit-agenda2 me-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical clickEventList" style="padding: 3px 6px; font-size: 22px;"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">View</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                <li><a class="dropdown-item" href="#">Team Managment</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="settings-container d-flex justify-content-between align-content-center px-3 py-1 border border-2 rounded-3 mt-4">
                                                    <div class="enterp-name d-flex gap-2 align-items-center">
                                                        <div class="entp-img border border-2 rounded-circle">img</div>
                                                        <div class="name-entr"><h5 class="m-0 fs-6">Sarat Enterprise</h5></div>
                                                    </div>
                                                    <div>
                                                        <div class="dropdown">
                                                            <button class="edit-agenda2 me-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical clickEventList" style="padding: 3px 6px; font-size: 22px;"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">View</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                <li><a class="dropdown-item" href="#">Team Managment</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="settings-container d-flex justify-content-between align-content-center px-3 py-1 border border-2 rounded-3 mt-4">
                                                    <div class="enterp-name d-flex gap-2 align-items-center">
                                                        <div class="entp-img border border-2 rounded-circle">img</div>
                                                        <div class="name-entr"><h5 class="m-0 fs-6">Sarat Enterprise</h5></div>
                                                    </div>
                                                    <div>
                                                        <div class="dropdown">
                                                            <button class="edit-agenda2 me-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical clickEventList" style="padding: 3px 6px; font-size: 22px;"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">View</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                <li><a class="dropdown-item" href="#">Team Managment</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

    <!-- middile section end -->

@endsection