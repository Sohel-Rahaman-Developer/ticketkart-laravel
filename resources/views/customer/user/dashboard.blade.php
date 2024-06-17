@extends('layouts/customer_layout')
@section('dashboard_select','active')
@section('content')

<!-- middile section start -->
  <div class="container-fluid">
    <div class="px-0 px-md-2">
      <div class="row-divider d-flex flex-column">
        <div class="upperDivider flex-grow-1">
          <div class="d-flex middle-content">
            <div class="menuSide d-none d-lg-block">
              <div class="menuParent d-flex flex-column" style="padding-bottom: 120px">
                <div class="d-none d-lg-block pt-1 pe-1 arrow-sticky">
                  <div class="d-flex justify-content-end align-items-center">
                    <i class="las icon-color la-chevron-circle-left left-menu-icon-dashboard activeMenuItem fs-2"></i>
                  </div>
                </div>
                <ul class="menuUl pt-0 ps-0">
                  <li class="menuLi menuLiHoverEffect d-flex align-items-center leftMenuActive">
                    <span class="menuIcon">
                      <i class="las icon-color la-home fs-2"></i>
                    </span>
                    <span class="menuCon d-flex justify-content-between align-items-center gap-2">
                      <span>Home</span>
                    </span>
                  </li>
                  <li class="menuLi menuLiHoverEffect d-flex align-items-center">
                    <span class="menuIcon">
                      <i class="las icon-color la-calendar-check fs-2"></i>
                    </span>
                    <span class="menuCon d-flex justify-content-between align-items-center gap-2">
                      <span>My Tickets (45) </span>
                    </span>
                  </li>
                  <li class="menuLi menuLiHoverEffect  d-flex align-items-center">
                    <span class="menuIcon">
                      <i class="las icon-color la-calculator fs-2"></i>
                    </span>
                    <span class="menuCon d-flex justify-content-between align-items-center gap-2">
                      <span>Liked</span>
                    </span>
                  </li>
                  <li class="menuLi menuLiHoverEffect d-flex align-items-center">
                    <span class="menuIcon">
                      <i class="lab la-wpforms fs-2"></i>
                    </span>
                    <span class="menuCon d-flex justify-content-between align-items-center gap-2">
                      <span>Following</span>
                    </span>
                  </li>
                  <li class="menuLi menuLiHoverEffect d-flex align-items-center">
                    <span class="menuIcon">
                      <i class="las icon-color la-bullhorn fs-2"></i>
                    </span>
                    <span class="menuCon d-flex justify-content-between align-items-center gap-2">
                      <span>Manage Events</span>
                    </span>
                  </li>
                </ul>
                <div class="logoutBtn2 pe-3 d-flex align-items-end">
                  <a href="" class="d-flex gap-2 justify-content-center align-items-center log-out-btn2">
                    <img src="./images/attandee/switch.svg" alt="">
                    <span class="logOutBtnJs log-o">Switch to Attendees</span>
                  </a>
                </div>
                <div class="logoutBtn pe-3 d-flex align-items-end">
                  <a href="" class="d-flex gap-2 justify-content-center align-items-center log-out-btn">
                    <i class="fa-solid fa-right-from-bracket fs-3"></i>
                    <span class="logOutBtnJs log-o">Logout</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="rightSide user-select-none">
              <div id="style-3" class="">
                <div class="profile-content">
                  <div class="d-flex flex-column flex-md-row gap-4 container px-0 pt-lg-4">
                    <div class="flex-grow-1 order-2 order-md-1">
                      <div class="leftAside">
                        <div class="d-flex flex-column gap-4">
                          <div>
                            <h5 class="d-none d-md-block user-select-none fw-bold"> Hi, Pratik Entertainment </h5>
                            <div class="eventBoxes pb-5">
                              <div class="eventBoxHeading pb-2 user-select-none"> Your upcoming event in <span
                                  style="color: #3265fe">15 days</span>
                              </div>
                              <div class="festBox d-flex justify-content-between align-items-center">
                                <div class="conSide user-select-none">
                                  <h4 class="cardHead"> Unreal Film Fest 2023 </h4>
                                  <p class="cardDesc"> Croydon CRO 1RZ, UK, Croydon, CRO 1RZ </p>
                                  <div class="cardTime">
                                    <a href="" class="t-dec" style="color: #f1664b"> Sun, 19th May 2023, 9.30 PM</a>
                                  </div>
                                  <div class="d-flex flex-wrap gap-2 mt-1">
                                    <div class="btn cardEventBtn-org">
                                      Download Ticket
                                 </div>
                                 <div class="btn cardEventBtn-org2">
                                  Add to Wallet
                                 </div>
                                 <div class="btn cardEventBtn-org2">
                                  Share Event
                                 </div>
                                 </div>
                                 
                                </div>
                                <div class="imageSide user-select-none">
                                  <!-- <img src="images/partynight.jpg" style="border-radius: 10px" alt="" /> -->
                                  <img src="images/ticketkart-sample.jpg" style="border-radius: 10px 10px 10px 10px" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="eventBoxes">
                            <div class="eventBoxHeading pb-2"> You don't have any upcoming events <a href=""
                                class="ms-2 text-block-response" style="font-size: 12px">Learn more <span>
                                  <i class="las la-external-link-alt fs-6"></i>
                                </span>
                              </a>
                            </div>
                            <div class="festBox2 d-flex justify-content-center align-items-center">
                              <div class="conSide d-flex justify-content-center align-items-center gap-2">
                                <i class="las icon-color la-calendar-week fs-2 h-startBrowsing"></i>
                                <span class="startBrowsing h-startBrowsing">Start Browsing</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="order-1 order-md-1 ">
                      <h5 class=" ms-3 pt-3 d-block d-md-none user-select-none fw-bold"> Hi, Pratik Entertainment </h5>
                      <div class="righside-parent-div-attendee expanded">
                        <div class="rightAside position-relative">
                          <div class="d-flex flex-column justify-content-center align-items-center proFile">
                            <div class="">
                              <div class="avatar-upload">
                                <div class="avatar-edit">
                                  <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                  <label for="imageUpload">
                                    <img src="images/profileicon.png" width="100%" class="p-1" alt="" />
                                  </label>
                                </div>
                                <div class="avatar-preview">
                                  <div id="imagePreview" class="proFile-hov cus_proFile-hov" style="
                                                                                    background-image: url('http://i.pravatar.cc/500?img=7');
                                                                                "></div>
                                </div>
                              </div>
                            </div>
                            <!-- light box start -->
                            <div id="cus_lightbox" class="cus_lightbox">
                              <span class="cus_close" onclick="closeLightbox()">&times;</span>
                              <img src="" id="cus_lightboxImage" class="cus_lightbox-content" />
                            </div>
                            <!-- light box end -->
                            <!-- hellop -->
                          </div>
                          <div class="org-con ">
                            <div class="text-center mb-2 mt-2">
                              <strong>Customer ID: TK-123456</strong>
                            </div>
                            <div class="all-org-list scale-down">
                              <div class="d-flex justify-content-between mb-2">
                                <div class="">Profile</div>
                                <div class="">
                                  <a href="#" class="text-primary">
                                    <img src="./images/attandee/profile.svg" alt="" width="25px">
                                  </a>
                                </div>
                              </div>
                              <div class="d-flex justify-content-between booking-my">
                                <div class="">My Booking</div>
                                <div class="">
                                  <a href="">
                                    <img src="./images/attandee/profile.svg" alt="" width="25px">
                                  </a>
                                </div>
                              </div>
                              <div class="areYouOrga d-none d-lg-block">
                                <a> Are you an organiser ? </a>
                              </div>
                              <div class="createYevent d-none d-lg-block">
                                <a href=""> Create your event </a>
                              </div>
                            </div>
                          </div>
                          <svg class="downArrow2" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="40px" width="40px"
                            version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
                            <path id="XMLID_225_"
                              d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-column flex-md-row gap-4 container px-0 ">
                    <div class="flex-grow-1 order-2 order-md-1 mt-4">

                      <div class="eventBoxes hideMiddleScreen mb-4">
                        <div class="eventBoxHeading pb-3">
                          <strong>TicketKart:</strong> Do More! <a href="" class="ms-2 text-block-response"
                            style="font-size: 12px">Learn more <span>
                              <i class="las la-external-link-alt fs-6"></i>
                            </span>
                          </a>
                        </div>
                        <div class="row">
                          <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-6">
                            <div class="festBox3 mb-3 d-flex flex-column justify-content-center align-items-center">
                              <div class="iconCir d-flex justify-content-center align-items-center">
                                <img src="./images/attandee/browse.svg" alt="browse">
                              </div>
                              <span class="startBrowsingHelp">Browse Event</span>
                            </div>
                          </div>
                          <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-6">
                            <div class="festBox3 mb-3 d-flex flex-column justify-content-center align-items-center">
                              <div class="iconCir d-flex justify-content-center align-items-center">
                                <img src="./images/attandee/tickets.svg" alt="tickets">
                              </div>
                              <span class="startBrowsingHelp d-flex justify-content-center align-items-center gap-1">
                                <span>Tickets (45) </span>
                              </span>
                            </div>
                          </div>
                          <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-6">
                            <div class="festBox3 mb-3 d-flex flex-column justify-content-center align-items-center">
                              <div class="iconCir d-flex justify-content-center align-items-center">
                                <img src="./images/attandee/inbox.svg" alt="inbox">
                              </div>
                              <span class="startBrowsingHelp d-flex justify-content-center align-items-center gap-1">
                                <span>Inbox </span> (10) </span>
                            </div>
                          </div>
                          <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-6">
                            <div class="festBox3 mb-3 d-flex flex-column justify-content-center align-items-center">
                              <div class="iconCir d-flex justify-content-center align-items-center">
                                <img src="./images/attandee/manage_event.svg" alt="manage events">
                              </div>
                              <span class="startBrowsingHelp d-flex justify-content-center align-items-center gap-1">
                                <span>Manage my events</span>
                              </span>
                            </div>
                          </div>
                          <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-6">
                            <div class="festBox3 mb-3 d-flex flex-column justify-content-center align-items-center">
                              <div class="iconCir d-flex justify-content-center align-items-center">
                                <img src="./images/attandee/need.svg" alt="need help">
                              </div>
                              <span class="startBrowsingHelp d-flex justify-content-center align-items-center gap-1">
                                <span>Need Help? </span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="order-1 order-md-2 d-none d-lg-block">
                      <div class="righside-parent-div d-none d-lg-block">
                        <div class="rightAside" style="width:257px ; border:none;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection