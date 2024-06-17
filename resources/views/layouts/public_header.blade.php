<nav class="navbar navbar-expand-lg navbar-light sticky-top"> <!--mobileheader-->
        <div class="container-fluid">
            <div class="d-flex">
                <!-- Toggle button -->
                <button class="navbar-toggler btn me-2" data-mdb-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="fas fa-bars text-dark"></i>
                </button>

                <!-- Navbar brand -->
                <a class="navbar-brand" href="index.php">
                    <img src="{{ asset('front/img/logo-2.png') }}" alt="ticketkart" loading="lazy" />
                </a>
                
            </div>

            <!-- Collapsible wrapper -->

            <!-- Left links -->
            <div class="right-mobile-dropdown position-relative d-sm-block d-md-none">
                <button class="rightLocation btn d-flex align-items-center dropdown-toggle navbar-type-btn extra-round px-3"
                    type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-location-dot me-2"></i>London</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="d-flex px-2 flex-column gap-2">
                        <a href="" class="b-e-h w-100 my-1">
                            <div
                                class="ps-3 py-2 w-100 rounded browse-events d-flex gap-2 justify-content-start align-items-center px-2 pt-2">
                                <div>
                                <i class="fas fa-play-circle"></i>
                                </div>
                                <div class="browse-events-content">
                                    <h6 class="mb-0">Browse Online Events</h6>
                                </div>
                                <div>
                                </div>
                            </div>
                        </a>
                        <div class="p-2">
                            <div class="position-relative pe-4 search_parent-loc mb-2">
                                <input type="search" name="" id="countrySearch" class="w-100 search-loc px-2 py-2"
                                    placeholder="Search Location.." />
                                    <i class="fas fa-search me-2 loc-search "></i>
                            </div>
                            <div class="all-countr">
                                <ul id="countryList" class="p-0">
                                    <li><a href="">India</a></li>
                                    <li><a href="">USA</a></li>
                                    <li><a href="">Canada</a></li>
                                    <li><a href="">United Kingdom</a></li>
                                    <li><a href="">Australia</a></li>
                                    <li><a href="">Germany</a></li>
                                    <li><a href="">Germany</a></li>
                                    <li><a href="">Germany</a></li>
                                    <li><a href="">Germany</a></li>
                                    <!-- Add more countries as needed -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-none d-lg-block">
                <a class="navbar-type-btn extra-round px-3 d-flex justify-content-between align-items-center ">
                    <i class="fa-solid fa-location-dot me-2"></i> London</a>
                
            </div>

           


            <!-- Left links -->

            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="collapse navbar-collapse d-none d-lg-block" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link navbar-type-btn extra-round px-3" href="#">Create an event</a></li>
                            <li class="nav-item"><a class="nav-link nav-search navbar-type-btn p-2 me-0" style="border-radius: 50%; line-height: 10px;" href="#" id="search-icon"><i
                                class="fa-sharp fa-solid fa-magnifying-glass"></i></a></li>
                                <div class="right-mobile-dropdown position-relative">
                <button class="rightLocation btn d-flex justify-content-start align-items-center dropdown-toggle navbar-type-btn extra-round px-3"
                    type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-location-dot me-1"></i>
                    <span class="searchEventsContent d-none d-md-block">London</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="d-flex px-2 flex-column gap-2">
                        <a href="" class="b-e-h w-100 my-1">
                            <div
                                class="ps-3 py-2 w-100 rounded browse-events d-flex gap-2 justify-content-start align-items-center px-2 pt-2">
                                <div>
                                <i class="fas fa-play-circle"></i>
                                </div>
                                <div class="browse-events-content">
                                    <h6 class="mb-0">Browse Online Events</h6>
                                </div>
                                <div>
                                </div>
                            </div>
                        </a>
                        <div class="p-2">
                            <div class="position-relative pe-4 search_parent-loc mb-2">
                                <input type="search" name="" id="countrySearch" class="w-100 search-loc px-2 py-2"
                                    placeholder="Search Location.." />
                                    <i class="fas fa-search me-2 loc-search "></i>
                            </div>
                            <div class="all-countr">
                                <ul id="countryList" class="p-0">
                                    <li><a href="">India</a></li>
                                    <li><a href="">USA</a></li>
                                    <li><a href="">Canada</a></li>
                                    <li><a href="">United Kingdom</a></li>
                                    <li><a href="">Australia</a></li>
                                    <li><a href="">Germany</a></li>
                                    <li><a href="">Germany</a></li>
                                    <li><a href="">Germany</a></li>
                                    <li><a href="">Germany</a></li>
                                    <!-- Add more countries as needed -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                 
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle extra-round dropdown-toggle-1n navbar-type-btn p-2" href="#" style=" line-height: 10px;"
                            id="navbarDropdownMenuLink1" role="button" data-mdb-toggle="dropdown" aria-expanded="true">
                            <i class="fa-solid fa-user"></i> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(15px, 42px);"
                            data-popper-placement="bottom-start">
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user me-2"></i> Profile</a>
                            </li>
                            <li><a class="dropdown-item" href=""><i class="fa-solid fa-gear me-2"></i> Setting</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="fa-solid fa-right-from-bracket me-2"></i>Logout</a></li>
                            <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-right-to-bracket me-2"></i>Log
                                    in</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user-plus me-2"></i>Create
                                    account</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div id="mega-menu" class="mega-menu" style="max-height:600px; overflow-y: scroll;">
                <!-- Your mega menu content goes here -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <input type="search" id="mySearch"
                                placeholder="Find your next concert, comedy show, cricket match, football game..."
                                class="form-control searchinputform py-2 ps-5">
                            <i class="fa-solid fa-magnifying-glass search-icon"></i>
                        </div>
                        <div class="col-md-8 pt-4">
                            <h4 class="mb-3">Trending Events</h4>
                            <div class="mb-3">
                                <button type="button"
                                    class="btn btn-prinary-theme py-1 px-3 extra-round active">All</button>
                                <button type="button" class="btn btn-prinary-theme py-1 px-3 extra-round">Music</button>
                                <button type="button"
                                    class="btn btn-prinary-theme py-1 px-3 extra-round">Comedy</button>
                                <button type="button" class="btn btn-prinary-theme py-1 px-3 extra-round">This
                                    Weekend</button>
                            </div>
                            <div class="card w-100 rounded shadow d-flex justify-content-between mb-3">
                                <div class="d-flex justify-content-between px-3 py-3">
                                    <p class="">Souldout & MVM Presents - Levi Live in Bombay</p>
                                    <p class="">Jun 8•Sat</p>
                                    <p class=""><i class="fa-solid fa-music me-2"></i> Music</p>
                                </div>
                            </div>
                            <div class="card w-100 rounded shadow d-flex justify-content-between mb-3">
                                <div class="d-flex justify-content-between px-3 py-3">
                                    <p class="">Souldout & MVM Presents - Levi Live in Bombay</p>
                                    <p class="">Jun 8•Sat</p>
                                    <p class=""><i class="fa-solid fa-music me-2"></i> Music</p>
                                </div>
                            </div>
                            <div class="card w-100 rounded shadow d-flex justify-content-between mb-3">
                                <div class="d-flex justify-content-between px-3 py-3">
                                    <p class="">Souldout & MVM Presents - Levi Live in Bombay</p>
                                    <p class="">Jun 8•Sat</p>
                                    <p class=""><i class="fa-solid fa-music me-2"></i> Music</p>
                                </div>
                            </div>
                            <div class="card w-100 rounded shadow d-flex justify-content-between mb-3">
                                <div class="d-flex justify-content-between px-3 py-3">
                                    <p class="">Souldout & MVM Presents - Levi Live in Bombay</p>
                                    <p class="">Jun 8•Sat</p>
                                    <p class=""><i class="fa-solid fa-music me-2"></i> Music</p>
                                </div>
                            </div>
                            <div class="card w-100 rounded shadow d-flex justify-content-between mb-3">
                                <div class="d-flex justify-content-between px-3 py-3">
                                    <p class="">Souldout & MVM Presents - Levi Live in Bombay</p>
                                    <p class="">Jun 8•Sat</p>
                                    <p class=""><i class="fa-solid fa-music me-2"></i> Music</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
    </nav>

    <!-- left side menu for header -->
    <div class="offcanvas offcanvas-w offcanvas-start" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"><a class="navbar-brand" href="index.php">
                    <img src="{{ asset('front/img/logo-2.png') }}" alt="ticketkart" loading="lazy" />
                </a></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <ul>
        <li class="nav-item py-2">
            <a class="nav-link nav-search navbar-type-btn m-0" style="border-radius: 30px;" href="#" id="search-icon">
                <i class="fa-sharp fa-solid fa-magnifying-glass ms-2"></i>
            </a>
        </li>
        <li class="nav-item py-2"><a href="#"><i class="fa-solid fa-user me-2"></i> Profile</a></li>
        <li class="nav-item py-2"><a  href=""><i class="fa-solid fa-gear me-2"></i> Setting</a></li>
        <li class="nav-item py-2"><a href="#"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a></li>
        <li class="nav-item py-2"><a href="#"> <i class="fa-solid fa-right-to-bracket me-2"></i>Log in</a></li>
        <li class="nav-item py-2"><a href="#"><i class="fa-solid fa-user-plus me-2"></i>Create account</a></li>
    </ul>
             
        </div>
    </div>
    <!-- left side menu for header end  -->