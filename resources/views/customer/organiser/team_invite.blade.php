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
                                    <div class="even-list-p mx-auto" style="max-width: 800px;">
                                        <div class="fancy-box position-relative mb-4">
                                            <div class="fancy-title-team">Invite users</div>
                                            <div
                                                class="d-flex gap-3 justify-content-center align-items-center flex-column">

                                                <form action="{{route('organiser.teaminvite.submit',$slug)}}" class="w-100 mx-auto" method="post">
                                                    @csrf
                                                    <div class="mx-auto" style="max-width: 552px;">
                                                        <div class="in-box-component mb-3 w-100">
                                                            <h6 class="form-h6 mb-2">Email <span
                                                                    class="text-danger">*</span></h6>
                                                            <div class="form-group w-100">
                                                                <input type="text" class="form-control w-100"
                                                                    placeholder="Enter mail address" name="email">
                                                            </div>
                                                            @error('email')
                                                            <span style="color:red;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="in-box-component mb-3 w-100">
                                                            <h6 class="form-h6 mb-2">Role <span
                                                                    class="text-danger">*</span></h6>
                                                            <div class="form-group w-100">
                                                                <select class="form-select" name="role_id" id="">
                                                                    <option value="" selected disabled>Select a Role
                                                                    </option>
                                                                    @foreach($role as $role)
                                                                    <option value="{{$role->id}}">{{$role->name}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            @error('role_id')
                                                            <span style="color:red;">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="in-box-component mb-3 w-100">
                                                                    <h6 class="form-h6 mb-2">Access Start Date</h6>
                                                                    <div id="endDatetimeSelectorb"
                                                                        class="position-relative">
                                                                        <!-- <input class="d-t-schedule" type="datetime-local" id="endScheduledDateTimeb"> -->
                                                                        <input class="d-t-schedule form-control"
                                                                            type="text" id="datetimepicker-team"
                                                                            placeholder="Date and Time *"
                                                                            name="access_startdate">
                                                                        <img class="img-downArrow focus-date7"
                                                                            src="{{asset('images/calender.png')}}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="in-box-component mb-3 w-100">
                                                                    <h6 class="form-h6 mb-2">Access End Date</h6>
                                                                    <div id="endDatetimeSelectorb"
                                                                        class="position-relative">
                                                                        <!-- <input class="d-t-schedule" type="datetime-local" id="endScheduledDateTimeb"> -->
                                                                        <input class="d-t-schedule form-control"
                                                                            type="text" id="datetimepicker-team2"
                                                                            placeholder="Date and Time *"
                                                                            name="access_enddate">
                                                                        <img class="img-downArrow focus-date8"
                                                                            src="{{asset('images/calender.png')}}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="team-invite-bell"><i
                                                                class="fa-solid fa-bell me-2"></i>Access granted
                                                            indefinitely if no dates set.</div>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-end gap-2 mt-3">
                                                        <button class="btn tim-zn-btn close-modal">Cancel</button>
                                                        <button type="submit" class="btn tim-zn-btn2">Add</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- event-list end -->

                                <script>
                                // Close the dropdown menu if clicked outside of it
                                window.onclick = function(event) {
                                    if (!event.target.matches('.edit-agenda')) {
                                        var dropdowns = document.getElementsByClassName(
                                            "dropdown-content-list_event");
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

@section('customjs')

<script>
$(document).ready(function() {
    flatpickr("#datetimepicker-team", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
    flatpickr("#datetimepicker-team2", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
    $('.focus-date7').on('click', function() {
        $('#datetimepicker-team').focus();
    });
    $('.focus-date8').on('click', function() {
        $('#datetimepicker-team2').focus();
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

@endsection