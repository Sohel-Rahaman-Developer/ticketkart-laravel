<div class="menuSide d-none d-lg-block">
                     <div class="menuParent attendeeMenuParent d-flex flex-column" style="padding-bottom: 120px">
                        <div class="d-none d-lg-block pt-1 pe-1 arrow-sticky">
                           <div class="d-flex justify-content-end align-items-center">
                              <i
                                 class="icon-color las la-chevron-circle-left left-menu-icon-dashboard activeMenuItem fs-2"></i>
                           </div>
                        </div>

                        <ul class="menuUl pt-0 ps-0">
                           <li class="menuLi d-flex align-items-center leftMenuActive">
                              <i class=" las la-home fs-2 menuIcon" data-tooltip="home"></i>
                              <span
                                 class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Home</span></span>
                           </li>
                           <li class="menuLi d-flex align-items-center">

                              <i class="icon-color menuIcon las la-calendar-plus fs-2" data-tooltip="Events"></i>

                              <a href="{{route('events.index')}}"
                                 class="menuCon d-flex justify-content-between align-items-center gap-2"><span>Events</span></a>
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

                                 <i class="icon-color menuIcon las la-user-check fs-2"
                                    data-tooltip="Check-in Users"></i>

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
                           <a href="" class="d-flex gap-2 justify-content-center align-items-center log-out-btn2">
                              <img src="./../images/attandee/switch.svg" alt="switch">
                              <span class="logOutBtnJs log-o">Switch to Attendees</span>
                           </a>
                        </div>
                        <div class="logoutBtn pe-3 d-flex align-items-end">
                           <a href="" class="d-flex gap-2 justify-content-center align-items-center log-out-btn">
                              <i class="icon-color fa-solid fa-right-from-bracket fs-3"></i>
                              <span class="logOutBtnJs log-o">Logout</span>
                           </a>
                        </div>
                     </div>
                  </div>