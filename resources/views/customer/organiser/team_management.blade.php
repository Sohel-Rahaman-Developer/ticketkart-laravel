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
                                            <h5 class="m-0">{{Auth::user()->name}}</h5>
                                        </div>
                                        <div class="mb-3">
                                            <h4><strong>Team Management</strong></h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="d-flex gap-3 flex-lg-column w-100 mb-3">
                                                    <a href="">
                                                        <div class="left-btn-team btn btn-primary rounded-pill"><i
                                                                class="fa-solid fa-users `"></i> Users</div>
                                                    </a>
                                                    <a href="">
                                                        <div
                                                            class="left-btn-team btn btn-primary rounded-pill left-btn-team-inactive">
                                                            <i class="fa-solid fa-user-tie"></i></i> Roles
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <!-- right things -->
                                                <div class="fancy-box position-relative mb-4">
                                                    <!-- <div class="fancy-title">Organization Settings</div> -->

                                                    <div
                                                        class="d-flex flex-column flex-lg-row gap-2 align-items-end align-items-lg-center justify-content-between">
                                                        <div class="position-relative w-100">
                                                            <input class="listevent-search2 w-100" type="search" name=""
                                                                id=""
                                                                placeholder="Search by Order Number, Email, or Name">
                                                            <i class="las la-search list-search-mag2"></i>
                                                        </div>

                                                        <a href="{{route('organiser.teaminvite',$organiser->slug)}}" class="btn btn-primary fs-10 py-2"
                                                            style="width: 132px;">Invite Users</a>
                                                    </div>
                                                    <div>


                                                    </div>

                                                    <div>
                                                        <div class="mobile-list-event team-tbl-management">
                                                            <table width="100%" class="mt-3">

                                                                <tbody class="team-tbl">
                                                                 
                                                                    <tr>
                                                                        <td>
                                                                            <div
                                                                                class="settings-container team-con d-flex gap-3 justify-content-between align-content-center px-3 py-1 border border-2 rounded-3 mt-2 W-100">
                                                                                <div
                                                                                    class="enterp-name d-flex gap-2 align-items-center">
                                                                                    <div
                                                                                        class="entp-img border border-2 rounded-circle">
                                                                                        <img src="{{asset('uploads/logo/'.$organiser->logo)}}" alt="" width="20"  >

                                                                                    </div>
                                                                                    <div class="name-entr">
                                                                                        <h5 class="m-0 tbl-s-team-h5">
                                                                                           {{$organiser->name}}
                                                                                        </h5>
                                                                                        <p
                                                                                            class="fs-12 m-0 tbl-s-team-p">
                                                                                            {{$organiser->email}}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <div
                                                                                        class="m-0 fw-bold tbl-s-team-h5">
                                                                                        Role</div>
                                                                                    <div class="tbl-s-team-p">
                                                                                    {{$organiser->organiserusers->first()->role->name}}
                                                                                    </div>
                                                                                </div>
                                                                                <div style="min-width: 100px;">

                                                                                </div>
                                                                                <div style="min-width: 34px;">

                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                 
                                                                </tbody>

                                                            </table>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- event-list end -->


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