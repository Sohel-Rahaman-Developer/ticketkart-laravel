  <!-- header section start -->
  <header class="sticky-top bg-white">
    <div class="container-fluid px-0 position-relative">
      <div class="px-2 pe-3 header">
        <div class="d-flex justify-content-between align-items-center header-gap position-relative">
          <div class="logoItem d-flex justify-content-center align-items-center">
            <a href="dashboard.html">
              <img src="{{ asset('images/ticketkart.png') }}" alt="logo" />
            </a>
            <div class="d-block d-lg-none me-2">
              <img class="megamenuBtn" src="./images/attandee/megamenu.svg" alt="toggle">
            </div>
          </div>
          <!--Search box-->
          <div
            class="search-location d-flex gap-1 flex-grow-1 justify-content-center align-items-center rounded-pill border me-0 me-lg-3">
            <a class="leftSearch position-relative">
              <!-- <input type="text" class="searchEvents" name="" id="" placeholder="Search Events"> -->
              <img class="me-2" src="./images/attandee/search.svg" alt="search">
              <span class="searchEventsContent d-none d-md-block">Search Events</span>
            </a>
            <button
              class="rightLocation btn btn-secondary d-flex justify-content-start align-items-center dropdown-toggle rounded-pill"
              type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="me-2" src="./images/attandee/location.svg" alt="">
              <span class="searchEventsContent d-none d-md-block">London</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <div class="d-flex px-2 flex-column gap-2">
                <a href="" class="b-e-h w-100 my-1">
                  <div
                    class="ps-3 py-2 w-100 rounded browse-events d-flex gap-2 justify-content-start align-items-center px-2 pt-2">
                    <div>
                      <img src="images/gps.png" alt="" width="20" class="b-e-img" />
                    </div>
                    <div class="browse-events-content">
                      <h6 class="mb-0">Use my current location</h6>
                    </div>
                    <div></div>
                  </div>
                </a>
                <a href="" class="b-e-h w-100 my-1">
                  <div
                    class="ps-3 py-2 w-100 rounded browse-events d-flex gap-2 justify-content-start align-items-center px-2 pt-2">
                    <div>
                      <img src="images/playButton.png" class="b-e-img" alt="" width="20" />
                    </div>
                    <div class="browse-events-content">
                      <h6 class="mb-0">Browse Online Events</h6>
                    </div>
                    <div></div>
                  </div>
                </a>
                <div class="px-3 py-3">
                  <div class="position-relative pe-4 search_parent-loc mb-2">
                    <input type="search" name="" id="countrySearch" class="w-100 search-loc px-2 py-2"
                      placeholder="Search Location.." />
                    <svg width="18" height="18" class="me-2 loc-search" viewBox="0 0 18 18" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13.893 13.92L16.973 17M16.084 8.581C16.084 12.768 12.701 16.162 8.52902 16.162C4.35602 16.162 0.973022 12.768 0.973022 8.582C0.973022 4.393 4.35602 1 8.52802 1C12.701 1 16.084 4.394 16.084 8.581Z"
                        stroke="#8E7474" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                  <div class="all-countr">
                    <ul id="countryList" class="p-0">
                      <li>
                        <a href="">India</a>
                      </li>
                      <li>
                        <a href="">USA</a>
                      </li>
                      <li>
                        <a href="">Canada</a>
                      </li>
                      <li>
                        <a href="">United Kingdom</a>
                      </li>
                      <li>
                        <a href="">Australia</a>
                      </li>
                      <li>
                        <a href="">Germany</a>
                      </li>
                      <!-- Add more countries as needed -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End search box-->
          <div class="menuItems d-flex justify-content-center align-items-center">
            <!-- event create -->
            <div class="ms-1 d-none d-md-block">
              <a href="" class="createEvent btn d-flex justify-content-center align-items-center"><span
                  class="fontEventSize ">+</span><span class="createYoEvent">Create an Event</span></a>
            </div>
            <!-- drop down switch -->
            <div class="dropdown menuCustom">
              <img class="notificationIcon" src="{{ asset('images/BwGMKBNKRu.gif') }}" alt="" />
              <div class="notificationIconCount">5+</div>
            </div>
            <!-- drop down switch -->
            <!-- profile -->
            <div class="dropdown ms-2 ms-md-0">
              <button
                class="btn btn-secondary d-flex justify-content-between align-items-center dropdown-toggle dropdownBtn rounded-pill"
                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="profiletk d-flex justify-content-center align-items-center"> {{ Auth::user()->initials }} </div>
                <svg width="46" height="52" viewBox="0 0 46 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M23 32.5L14.8676 23.309L17.5796 20.2453L23 26.3727L28.4203 20.2453L31.1324 23.309L23 32.5Z"
                    fill="#3265FE" />
                </svg>
              </button>
              <ul class="dropdown-menu" id="profileMenuH" aria-labelledby="dropdownMenuButton">
                <li>
                  <a class="dropdown-item py-3" href="#">
                    <div>Manage my events</div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex justify-content-start align-items-center py-3" href="#">
                    <div>Orders (45)</div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item py-3" href="#">
                    <div>Check-in Users</div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item py-3" href="#">
                    <div>Followers</div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item py-3" href="#">
                    <div>Account Settings</div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item py-3" href="{{ route('logout') }}">
                    <div>Logout</div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- search bar start-->
      <div class="container-fluid px-0 headerSupParent mb-3 py-0">
        <div class="py-3 mt-5">
          <div class="searchHeader container d-flex align-items-center">
            <div class="position-relative p-2 inputParent flex-grow-1">
              <div class="d-flex">
                <input type="search" id="mySearch" placeholder="Search your next event ticket"
                  class="inputSearchDrop flex-grow-1 w-100" />
                <button class="modal-locat d-flex justify-content-between align-items-center dropdown-toggle"
                  type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="location-modal px-3 d-flex align-items-center justify-content-start">
                    <div>
                      <svg width="14" height="18" class="me-2" viewBox="0 0 14 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M6.98472 16.999L7.61411 16.2898C8.32828 15.4719 8.97064 14.6959 9.54217 13.9578L10.014 13.3354C11.9839 10.6812 12.9694 8.57459 12.9694 7.01758C12.9694 3.6941 10.2903 1 6.98472 1C3.6792 1 1.00006 3.6941 1.00006 7.01758C1.00006 8.57459 1.98554 10.6812 3.95549 13.3354L4.42728 13.9578C5.24263 15.0025 6.09567 16.0162 6.98472 16.999Z"
                          stroke="#545454" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M6.98469 9.47816C8.36187 9.47816 9.4783 8.36173 9.4783 6.98455C9.4783 5.60736 8.36187 4.49094 6.98469 4.49094C5.60751 4.49094 4.49108 5.60736 4.49108 6.98455C4.49108 8.36173 5.60751 9.47816 6.98469 9.47816Z"
                          stroke="#545454" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="d-none d-lg-block">Kolkata</div>
                  </div>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <div class="d-flex px-2 flex-column gap-2">
                    <a href="" class="b-e-h">
                      <div
                        class="ps-3 py-2 rounded browse-events d-flex gap-2 justify-content-start align-items-center px-2 pt-2">
                        <div>
                          <img src="images/gps.png" alt="" width="20" class="b-e-img" />
                        </div>
                        <div class="browse-events-content">
                          <h6 class="mb-0">Use my current location</h6>
                        </div>
                        <div>
                          <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
																		xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10.1464 5.64645C10.3417 5.45118 10.6583 5.45118 10.8536 5.64645L16.1464 10.9393C16.7322 11.5251 16.7322 12.4749 16.1464 13.0607L10.8536 18.3536C10.6583 18.5488 10.3417 18.5488 10.1464 18.3536C9.95118 18.1583 9.95118 17.8417 10.1464 17.6464L15.4393 12.3536C15.6346 12.1583 15.6346 11.8417 15.4393 11.6464L10.1464 6.35355C9.95118 6.15829 9.95118 5.84171 10.1464 5.64645Z"
                                          fill="#ec1066" stroke="#ec1066" stroke-width="0"></path></svg> -->
                        </div>
                      </div>
                    </a>
                    <a href="" class="b-e-h">
                      <div
                        class="ps-3 py-2 rounded browse-events d-flex gap-2 justify-content-start align-items-center px-2 pt-2">
                        <div>
                          <img src="images/playButton.png" class="b-e-img" alt="" width="20" />
                        </div>
                        <div class="browse-events-content">
                          <h6 class="mb-0">Browse Online Events</h6>
                        </div>
                        <div>
                          <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
																		xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10.1464 5.64645C10.3417 5.45118 10.6583 5.45118 10.8536 5.64645L16.1464 10.9393C16.7322 11.5251 16.7322 12.4749 16.1464 13.0607L10.8536 18.3536C10.6583 18.5488 10.3417 18.5488 10.1464 18.3536C9.95118 18.1583 9.95118 17.8417 10.1464 17.6464L15.4393 12.3536C15.6346 12.1583 15.6346 11.8417 15.4393 11.6464L10.1464 6.35355C9.95118 6.15829 9.95118 5.84171 10.1464 5.64645Z"
                                          fill="#ec1066" stroke="#ec1066" stroke-width="0"></path></svg> -->
                        </div>
                      </div>
                    </a>
                    <div class="px-3 py-3">
                      <div class="position-relative pe-4 search_parent-loc mb-2">
                        <input type="search" name="" id="countrySearch" class="w-100 search-loc px-2 py-2"
                          placeholder="Search Location ..." />
                        <svg width="18" height="18" class="me-2 loc-search" viewBox="0 0 18 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M13.893 13.92L16.973 17M16.084 8.581C16.084 12.768 12.701 16.162 8.52902 16.162C4.35602 16.162 0.973022 12.768 0.973022 8.582C0.973022 4.393 4.35602 1 8.52802 1C12.701 1 16.084 4.394 16.084 8.581Z"
                            stroke="#8E7474" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                      </div>
                      <div class="all-countr">
                        <ul id="countryList" class="p-0">
                          <li>
                            <a href="">India</a>
                          </li>
                          <li>
                            <a href="">USA</a>
                          </li>
                          <li>
                            <a href="">Canada</a>
                          </li>
                          <li>
                            <a href="">United Kingdom</a>
                          </li>
                          <li>
                            <a href="">Australia</a>
                          </li>
                          <li>
                            <a href="">Germany</a>
                          </li>
                          <li>
                            <a href="">United Kingdom</a>
                          </li>
                          <li>
                            <a href="">Australia</a>
                          </li>
                          <li>
                            <a href="">Germany</a>
                          </li>
                          <!-- Add more countries as needed -->
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <span style="font-size: 20px"
                  class="closeSearchBar mobile-cross-search d-block d-lg-none">&#10006;</span>
              </div>
              <svg class="headerSearch" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" fill="" />
                <path
                  d="M16.893 16.92L19.973 20M19.084 11.581C19.084 15.768 15.701 19.162 11.529 19.162C7.35602 19.162 3.97302 15.768 3.97302 11.582C3.97302 7.393 7.35602 4 11.528 4C15.701 4 19.084 7.394 19.084 11.581Z"
                  stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <span style="font-size: 20px" class="closeSearchBar d-none d-lg-block">&#10006;</span>
          </div>
          <div class="container d-flex">
            <div class="tagsHeaderSearch flex-grow-1">
              <div class="d-flex gap-2 align-items-center">
                <span>Trending events</span>
                <div style="
                      padding: 1px;
                      height: 0px;
                      background-color: #eaeaeaa3;
                    " class="flex-grow-1"></div>
              </div>
              <div>
                <ul class="d-flex py-2 gap-3 flex-wrap ps-0">
                  <li class="trendingTopics trendingTopicsActive">
                    <a href="" class="activeEvents">
                      <p class="trendsT">All</p>
                    </a>
                  </li>
                  <li class="trendingTopics">
                    <a href="" class="">
                      <p class="trendsT">Today</p>
                    </a>
                  </li>
                  <li class="trendingTopics">
                    <a href="" class="">
                      <p class="trendsT">This Weekend</p>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- suggestions start -->
              <div>
                <div class="history mb-2">
                  <div class="row">
                    <div class="col-lg-6">
                      <div> Rangleela'24 ft. Jacqueline Fernandes | HOLI 2024 </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex justify-content-between align-items-center">
                        <div> Mar 25 <span style="
                                color: greenyellow;
                                font-size: 55px;
                                line-height: 0px;
                              ">.</span>Mon </div>
                        <div class="rightCS">Holi Party</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="history mb-2">
                  <div class="row">
                    <div class="col-lg-6">
                      <div> Rangleela'24 ft. Jacqueline Fernandes | HOLI 2024 </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex justify-content-between align-items-center">
                        <div> Mar 25 <span style="
                                color: greenyellow;
                                font-size: 55px;
                                line-height: 0px;
                              ">.</span>Mon </div>
                        <div class="rightCS">Holi Party</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="history mb-2">
                  <div class="row">
                    <div class="col-lg-6">
                      <div> Rangleela'24 ft. Jacqueline Fernandes | HOLI 2024 </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex justify-content-between align-items-center">
                        <div> Mar 25 <span style="
                                color: greenyellow;
                                font-size: 55px;
                                line-height: 0px;
                              ">.</span>Mon </div>
                        <div class="rightCS">Holi Party</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- suggestions end -->
              <!-- Recent searches start -->
              <div class="recent-serches">
                <h4>Recent and popular searches</h4>
                <div class="row">
                  <div class="col-12">
                    <div>
                      <ul class="recent-s-ul ps-1">
                        <li>
                          <a href="" class="recent-s-a d-flex align-items-center gap-3">
                            <img src="images/time.png" alt="" class="rounded-circle" width="20" />
                            <div class="srch-key">diwali festival</div>
                          </a>
                        </li>
                        <li>
                          <a href="" class="recent-s-a d-flex align-items-center gap-3">
                            <img src="images/time.png" alt="" class="rounded-circle" width="20" />
                            <div class="srch-key">eel</div>
                          </a>
                        </li>
                        <li>
                          <a href="" class="recent-s-a d-flex align-items-center gap-3">
                            <img src="images/time.png" alt="" class="rounded-circle" width="20" />
                            <div class="srch-key">music concert</div>
                          </a>
                        </li>
                        <li>
                          <a href="" class="recent-s-a d-flex align-items-center gap-3">
                            <img src="images/grow.png" alt="" class="rounded-circle" width="20" />
                            <div class="srch-key">free event in kolkata</div>
                          </a>
                        </li>
                        <li>
                          <a href="" class="recent-s-a d-flex align-items-center gap-3">
                            <img src="images/grow.png" alt="" class="rounded-circle" width="20" />
                            <div class="srch-key">tech events</div>
                          </a>
                        </li>
                        <li>
                          <a href="" class="recent-s-a d-flex align-items-center gap-3">
                            <img src="images/grow.png" alt="" class="rounded-circle" width="20" />
                            <div class="srch-key">events</div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Recent searches end -->
            </div>
            <span style="opacity: 0" class="pe-3 d-none d-lg-block">&#10006;</span>
          </div>
        </div>
      </div>
      <!-- search bar end-->
    </div>
    <div class="px-0">
      <div class="megaHeader">
        <div class="px-2">
          <div class="allConMegaMenu">
            <div class="row">
              <div class="col-4 px-1">
                <div class="megaMenuSingle d-flex flex-column justify-content-center align-items-center gap-2 mb-2">
                  <i class="las icon-color la-home fs-2"></i>
                  <p class="megaHeaderOverview" style="color: #F05537;">Home</p>
                </div>
              </div>
              <div class="col-4 px-1">
                <div class="megaMenuSingle d-flex flex-column justify-content-center align-items-center gap-2 mb-2">
                  <i class="las icon-color la-landmark fs-1"></i>
                  <p class="megaHeaderOverview">Finance</p>
                </div>
              </div>
              <div class="col-4 px-1">
                <div class="megaMenuSingle d-flex flex-column justify-content-center align-items-center gap-2 mb-2">
                  <i class="las icon-color la-chair fs-2"></i>
                  <p class="megaHeaderOverview"> Seating Charts </p>
                </div>
              </div>
              <div class="col-4 px-1">
                <div class="megaMenuSingle d-flex flex-column justify-content-center align-items-center gap-2 mb-2">
                  <i class="las icon-color la-users fs-2"></i>
                  <p class="megaHeaderOverview">Team Access</p>
                </div>
              </div>
              <div class="col-4 px-1">
                <div class="megaMenuSingle d-flex flex-column justify-content-center align-items-center gap-2 mb-2">
                  <i class="las icon-color la-user-check fs-2"></i>
                  <p class="megaHeaderOverview"> Check-in Users </p>
                </div>
              </div>
              <div class="col-4 px-1">
                <div class="megaMenuSingle d-flex flex-column justify-content-center align-items-center gap-2 mb-2">
                  <i class="las icon-color la-cog fs-2"></i>
                  <p class="megaHeaderOverview"> Org. Settings </p>
                </div>
              </div>
              <div class="col-4 px-1">
                <div class="megaMenuSingle d-flex flex-column justify-content-center align-items-center gap-2 mb-2">
                  <img src="./images/attandee/switch.svg" alt="">
                  <p class="megaHeaderOverview"> Switch to Attendees </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header section end -->