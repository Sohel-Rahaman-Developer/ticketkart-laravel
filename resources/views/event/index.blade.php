
@extends('layouts/customer_layout')
@section('organiser_select','active')
@section('content')

@php
use Carbon\Carbon;
@endphp

<!-- middile section start -->
<div class="container-fluid">
    <div class="px-0 px-md-2">
        <div class="row-divider d-flex flex-column">
            <div class="upperDivider flex-grow-1">
                <div class="d-flex middle-content">
                    
                @include('customer/sidemenu')
                    <div class="rightSide user-select-none w-100">
                            <div id="style-3" class="">
                                <div class="profile-content">
                                    <!-- event-list -->
                                    <div class="container mx-auto px-0">
                                        <div class="even-list-p">
                                            <h5 class="eventTitle">Manage Events</h5>
                                            <div class="d-flex justify-content-between flex-column flex-md-row ">
                                                <div class="d-flex gap-2 flex-column flex-md-row mb-3">
                                                    <div class="position-relative">
                                                        <input class="listevent-search w-100" type="search" name=""
                                                            id="" placeholder="Search events">
                                                        <i class="las la-search list-search-mag"></i>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="order-select"
                                                            style="margin-bottom: -3px; margin-right:7px">

                                                            <select id="event-filter"
                                                                class="form-control listevent-select px-4">
                                                                <option value="all">All Event</option>
                                                                <option value="dummy1">Dummy 1</option>
                                                                <option value="dummy2">Dummy 2</option>
                                                            </select>
                                                        </div>

                                                        <select class="listevent-select" name="" id="">
                                                            <option value="" selected hidden>All Organisers</option>
                                                            <option value="">dummy</option>
                                                            <option value="">dummy</option>
                                                            <option value="">dummy</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="{{route('events.create')}}"
                                                        class="cr-event btn d-flex justify-content-center align-items-center">Create
                                                        an event</a>
                                                </div>

                                            </div>
                                            <!-- table -->
                                            <div class="mobile-list-event">
                                                <!-- tabbing system -->
                                                <div class="tabs_tabbing_event mt-3">
                                                    <input type="radio" name="tab-btn_tabbing_event"
                                                        id="tab-btn-1_tabbing_event" value="" checked>
                                                    <label for="tab-btn-1_tabbing_event"><i
                                                            class="fa-solid fa-calendar icon-gray-color"></i> Upcoming
                                                        Events</label>
                                                    <input type="radio" name="tab-btn_tabbing_event"
                                                        id="tab-btn-2_tabbing_event" value="">
                                                    <label for="tab-btn-2_tabbing_event"><i
                                                            class="fa-regular fa-calendar-days icon-gray-color"></i> All
                                                        Events</label>
                                                    <input type="radio" name="tab-btn_tabbing_event"
                                                        id="tab-btn-3_tabbing_event" value="">
                                                    <label for="tab-btn-3_tabbing_event"><i
                                                            class="fa-regular fa-calendar-days icon-gray-color"></i>
                                                        Past Events</label>
                                                    <input type="radio" name="tab-btn_tabbing_event"
                                                        id="tab-btn-4_tabbing_event" value="">
                                                    <label for="tab-btn-4_tabbing_event"><i
                                                            class="fa-solid fa-list icon-gray-color"></i> Drafts</label>
                                                    <input type="radio" name="tab-btn_tabbing_event"
                                                        id="tab-btn-5_tabbing_event" value="">
                                                    <label for="tab-btn-5_tabbing_event"><i
                                                            class="fa-solid fa-list icon-gray-color"></i> Cancelled
                                                        Events</label>

                                                    <div id="content-1_tabbing_event" class="tabbingSystem">
                                                        <table width="100%" class="mt-3">
                                                            <thead>
                                                                <tr>
                                                                    <th class="b-r-l">Event</th>
                                                                    <th class="m-th">Sold</th>
                                                                    <th class="m-th">Gross</th>
                                                                    <th>Status</th>
                                                                    <th class="b-r-r"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($events as $event)
                                                                <tr>
                                                                    <td>
                                                                        <div
                                                                            class="mng-events-e d-flex flex align-items-center gap-1">
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center align-items-center me-2">
                                                                                <span class="apr">{{ Carbon::parse($event->created_at)->format('M')}}</span>
                                                                                <div class="apr-dt">{{ Carbon::parse($event->created_at)->format('d')}}</div>
                                                                                <div class="apr">{{ Carbon::parse($event->created_at)->format('D') }}</div>
                                                                            </div>
                                                                            <div>
                                                                                <img src="" alt="" width="100px"
                                                                                    height="70px">
                                                                            </div>
                                                                            <div style="min-width: 200px;">
                                                                                <div class="evnt-name">{{$event->name}}
                                                                                </div>
                                                                                <div class="evnt-time">12:00 AM - 2:30
                                                                                    AM</div>
                                                                                <div class="evnt-place">SEALDAH RAILWAY
                                                                                    STATION
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div id="prog-con" class="my-1"></div>
                                                                        <div class="progress-bar-list_event">
                                                                            <div class="progress-bar-inner-list_event"
                                                                                id="progressBarListEvent"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="">
                                                                        <div class="middle-content- h-100">
                                                                            £ 200.00
                                                                        </div>
                                                                    </td>
                                                                    <td class="">
                                                                        <div
                                                                            class="middle-content- justify-content-start gap-1 h-100">
                                                                            <div class="gr-dot"></div>
                                                                            <div>On Sale</div>
                                                                        </div>
                                                                    </td>
                                                                    <td align="right">
                                                                        <div class="dropdown">
                                                                            <button class="edit-agenda me-0"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i class="fa-solid fa-ellipsis-vertical clickEventList"
                                                                                    style="padding: 3px 6px; font-size: 22px;"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">View</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Edit</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Copy Link</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Change
                                                                                        Status</a></li>
                                                                                <hr class="m-0">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Copy Event</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Delete</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr> 
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                   

                                                </div>
                                                <!-- tabbing system -->

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
@endsection