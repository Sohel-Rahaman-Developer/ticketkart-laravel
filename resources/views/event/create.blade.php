@extends('layouts/customer_layout')
@section('organiser_select','active')
@section('content')

<!-- middile section start -->
<div class="container-fluid">
    <div class="px-0 px-md-2">
        <div class="row-divider d-flex flex-column">
            <div class="upperDivider flex-grow-1">
                <div class="d-flex middle-content">
                @include('customer/sidemenu')
                    <div class="rightSide">
                     <div id="style-3" class="">
                        <div class="profile-content">
                           <div class="form-create-event">
                              <h4 class="mb-3" style="padding-left: 30px;">Event Page</h4>
                              <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
                              @csrf 
                                 <div class="fancy-box position-relative mb-4">
                                    <div class="fancy-title">Media Gallery</div>
                                    <h6 class="form-h6">Add event images and video</h6>
                                    <p class="form-p color-999">
                                       You can upload up to 5 images.
                                       <a href="">See examples</a>
                                    </p>
                                    <!-- choose file start -->
                                    <!-- choose file start -->

                                    <label class="form__container" id="upload-container">
                                       <div>
                                          <div class="text-center">
                                             <svg width="56" height="34" viewBox="0 0 56 34" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                   d="M46.6598 14.6526C47.0114 13.8469 47.2087 12.966 47.2087 12.0474C47.2087 8.05668 43.5213 4.81895 38.9765 4.81895C37.2871 4.81895 35.7093 5.27072 34.4059 6.03874C32.0306 2.42453 27.5972 0 22.5121 0C14.9316 0 8.79176 5.3912 8.79176 12.0474C8.79176 12.2507 8.80034 12.454 8.80891 12.6573C4.0068 14.1406 0.55957 18.1614 0.55957 22.89C0.55957 28.876 6.09057 33.7326 12.9079 33.7326H44.4646C50.5273 33.7326 55.4408 29.4182 55.4408 24.0947C55.4408 19.4339 51.6678 15.5411 46.6598 14.6526ZM34.2944 19.2758H28.6862V27.7089C28.6862 28.3715 28.0688 28.9137 27.3142 28.9137H23.1981C22.4435 28.9137 21.8261 28.3715 21.8261 27.7089V19.2758H16.2179C14.9916 19.2758 14.3828 17.9807 15.2489 17.2202L24.2871 9.284C24.8188 8.81717 25.6935 8.81717 26.2251 9.284L35.2634 17.2202C36.1295 17.9807 35.5121 19.2758 34.2944 19.2758Z"
                                                   fill="black" />
                                             </svg>
                                          </div>

                                          Choose or Drop images Files
                                       </div>

                                       <input class="form__file" id="upload-files" type="file" multiple="multiple" />
                                       <div id="preview"></div>
                                    </label>
                                    <div class="text-center">
                                       <ul class="d-flex justify-content-center flex-wrap p-0 m-0">
                                          <li class="font-s-rules">
                                             Recommended image size: 2160 x 1080px
                                          </li>
                                          <li class="font-s-rules">
                                             Maximum file size: 5MBx
                                          </li>
                                          <li class="font-s-rules">
                                             Supported image files: JPEG or PNG
                                          </li>
                                       </ul>
                                    </div>
                                    <div id="files-list-container"></div>
                                    <div class="images-given pb-3">
                                       <div class="img-pre-given">
                                          <img src="" alt="" width="132" height="65" />
                                          <img src="" alt="" width="132" height="65" />
                                       </div>
                                    </div>
                                    <h6 class="form-h6">Video</h6>
                                    <p class="form-p-text">
                                       Add a video link from Youtube or Vimeo to show your
                                       event's vibe. The video will appear with your event
                                       images.
                                    </p>
                                    <div class="form-group mt-2">
                                       <input type="text" class="form-control" placeholder="Video Link" />
                                    </div>
                                 </div>
                                 <div class="fancy-box position-relative mb-4">
                                    <div class="fancy-title">About Event</div>
                                    <div class="in-box-component mb-3">
                                       <h6 class="form-h6">Event Title <span style="color: red;">*</span></h6>
                                       <p class="form-p-text">
                                          Give a title that clearly explains your event in
                                          easy-to-understand words.
                                       </p>
                                       <div class="form-group mt-2 position-relative">
                                          <input id="eventTitle" class="form-control" placeholder="Event Title" name="name" value="{{ old('name') }}">
                                          @if($errors->has('name')) <span class="error invalid-feedback" style="display:block">{{ $errors->first('name') }}</span> @endif
                                          <span id="eventCount" class="text-muted position-absolute limit-letter">0/75</span>
                                       </div>
                                    </div>
                                    <div class="in-box-component mb-3">
                                       <h6 class="form-h6">Summary <span style="color: red;">*</span></h6>
                                       <p class="form-p-text">
                                          Grab people's attention with a short description
                                          about your event.
                                       </p>
                                       <div class="form-group mt-2 position-relative">
                                          <input id="summary" class="form-control" placeholder="Summary" name="summary" />
                                          @if($errors->has('summary')) <span class="error invalid-feedback" style="display:block">{{ $errors->first('summary') }}</span> @endif
                                          <span id="summaryCount" class="position-absolute limit-letter">0/140</span>

                                       </div>
                                    </div>

                                    <div class="in-box-component mb-3">
                                       <div class="row">
                                          <div class="col-md-4">
                                             <div class="mb-3">
                                                <h6 class="form-h6">Event Type <span style="color: red;">*</span></h6>
                                                <div class="form-group position-relative mt-2">
                                                <select class="form-select select2" name="type_id" id="type_id">
                                                   <option value="" disabled selected hidden>Select Event Type</option>
                                                      @foreach($event_types as $type)
                                                         <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                      @endforeach
                                                   </select>
                                                   @if($errors->has('type_id'))
                                                      <span class="error invalid-feedback" style="display:block">{{ $errors->first('type_id') }}</span>
                                                   @endif
                                                   <!-- <img class="img-downArrow" src="../images/downArrow.png" alt=""> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-4">
                                             <div class="mb-3">
                                                <h6 class="form-h6">Category <span style="color: red;">*</span></h6>
                                                <div class="form-group position-relative mt-2">
                                                 <select class="form-select select2" name="category_id" id="category_id">
                                                   <option value="" disabled selected hidden>Select Category</option>
                                                   @foreach($categories as $category)
                                                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                   @endforeach
                                                   </select>
                                                   @if($errors->has('category_id'))
                                                      <span class="error invalid-feedback" style="display:block">{{ $errors->first('category_id') }}</span>
                                                   @endif
                                                   <!-- <img class="img-downArrow" src="../images/downArrow.png" alt=""> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-4">
                                             <div class="mb-2">
                                                <h6 class="form-h6 ">Sub-Category</h6>
                                                <div class="form-group position-relative mt-2">
                                                <select class="form-select select2" name="subcategory_id" id="subcategory_id">
                                                   <option value="" disabled selected hidden>Select Subcategory</option>
                                                   @foreach($subcategories as $subcat)
                                                         <option value="{{ $subcat->id }}">{{ $subcat->name }}</option>
                                                   @endforeach
                                                   </select>
                                                   @if($errors->has('subcategory_id'))
                                                      <span class="error invalid-feedback" style="display:block">{{ $errors->first('subcategory_id') }}</span>
                                                   @endif
                                                   <!-- <img class="img-downArrow" src="../images/downArrow.png" alt=""> -->
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fancy-box position-relative mb-4">
                                    <div class="fancy-title">Event Basics</div>
                                    <h6 class="form-h6">Event Frequency</h6>
                                    <div class="tabbing-system mt-3">
                                       <div class="tab-switches">
                                          <ul class="ul-tb-switch ps-0">
                                             <li class="tab-active">Single Day Event</li>
                                             <li>Multi Day Event</li>
                                             <li>Recurring Event</li>
                                          </ul>
                                       </div>

                                       <div class="tab-content">
                                          <div class="tab-pane tab1 active">
                                             <div class="">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label for="date">Event Start Date <span
                                                               style="color: red;">*</span></label>
                                                         <div class="position-relative">
                                                            <input type="text" name="starts_date" class="form-control" id="datepicker"
                                                               placeholder="Choose Event Date"  value="{{ old('starts_date') }}"/>
                                                            <img class="img-downArrow focus-date"
                                                               src="{{asset('images/calender.png')}}" alt="">
                                                         </div>

                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group date mb-3" id="timepicker"
                                                         data-target-input="nearest">
                                                         <label for="timepicker" class=" pr-2">Start Time <span
                                                               style="color: red;">*</span></label>
                                                         <div class="position-relative">
                                                            <input type="text" class="form-control" name="starts_time" id="timeInput"
                                                               style="background: white" placeholder="Start Time" />
                                                            <span class="input-group-text" data-toggle>
                                                               <i class="far fa-clock"></i>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group date mb-3" id="timepicker1"
                                                         data-target-input="nearest">
                                                         <label for="timepicker1" class=" pr-2">End Time <span
                                                               style="color: red;">*</span></label>
                                                         <div class="position-relative">
                                                            <input type="text" name="ends_time" class="form-control" id="timeInput9" value="{{ old('ends_time') }}"
                                                               style="background: white" placeholder="End Time" />
                                                            <span class="input-group-text" data-toggle>
                                                               <i class="far fa-clock"></i>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- time zone -->
                                             <div class="timezone">
                                                Time Zone and Language
                                             </div>
                                             <div class="timezoneArea">
                                                BST,Display start and time,English (UK)
                                             </div>
                                             <!-- time zone end -->
                                             <div class="tab-switches mt-3">
                                                <ul class="ul-tb-venu-switch ps-0">
                                                   <li class="tab-venu-active">Venue</li>
                                                   <li>Online</li>
                                                   <li>To be announced</li>
                                                </ul>
                                             </div>
                                             <div class="tab-venu-content">
                                                <div class="tab-venu tab-venu1 tab-venu-li-active">
                                                   <h6 class="form-h6">Address <span style="color: red;">*</span></h6>
                                                   <div class="form-group position-relative mt-2">
                                                      <input type="search" name="" id=""
                                                         class="form-control search-form-"
                                                         placeholder="Lookup address" />

                                                      <svg class="search-element" width="20" height="20"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                         <rect width="24" height="24" fill="url(#pattern0_530_592)" />
                                                         <defs>
                                                            <pattern id="pattern0_530_592"
                                                               patternContentUnits="objectBoundingBox" width="1"
                                                               height="1">
                                                               <use xlink:href="#image0_530_592"
                                                                  transform="scale(0.01)" />
                                                            </pattern>
                                                            <image id="image0_530_592" width="100" height="100"
                                                               xlink:href="data:image/png;base64,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" />
                                                         </defs>
                                                      </svg>
                                                   </div>

                                                   <div class="addLocation my-2">
                                                      <i class="fa-solid fa-house"></i>
                                                      <span>Add location manually</span>
                                                   </div>
                                                </div>
                                                <div class="tab-venu tab-venu2 ">
                                                   <div class="mb-3">
                                                      <h6 class="form-h6 mb-2">Online Platform</h6>

                                                      <div class="form-group position-relative">
                                                         <select class="form-select" name="" id="">
                                                            <option value="" disabled selected hidden>
                                                               Please Select Platform *
                                                            </option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                         </select>
                                                         <!-- <img class="img-downArrow" src="../images/downArrow.png" alt=""> -->
                                                      </div>
                                                   </div>
                                                   <div class="mb-3">
                                                      <h6 class="form-h6">Platform URL</h6>
                                                      <p style="font-size: 12px;" class="my-0 py-0 color-999">
                                                         Platform url will be shared along with
                                                         booking confirmation
                                                      </p>
                                                      <div class="form-group mt-2">
                                                         <input type="text" class="form-control"
                                                            placeholder="Video Link" />
                                                      </div>
                                                   </div>
                                                   <div class="mb-3">
                                                      <h6 class="form-h6">
                                                         Instruction: How to Join
                                                      </h6>
                                                      <p style="font-size: 12px" class="my-0 py-0 color-999">
                                                         Instructions on how to join will be shared
                                                         with attendees who book your event.
                                                      </p>
                                                      <div class="form-group mt-2">
                                                         <textarea class="form-control" name="" id="" cols="30" rows="5"
                                                            placeholder="Instructions on how to join will be shared with attendees who book your event. *"></textarea>
                                                      </div>
                                                   </div>

                                                </div>
                                                <div class="tab-venu tab-venu3">
                                                   <div class="row">
                                                      <div class="col-lg-12">
                                                         <div class="t-b-announced">
                                                            <span>
                                                               <img src="{{asset('images/ghanta.png')}}" width="20px" alt=""
                                                                  class="me-2">
                                                            </span>
                                                            <span>In the next step, you can set up dates and times for
                                                               recurring events</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tab-pane tab2">
                                             <div class="">
                                                <div class="row">
                                                   <div class="col-6 col-md-4">
                                                      <div class="form-group">
                                                         <label for="date">Event Start Date  <span
                                                         style="color: red;">*</span></label>
                                                         <div class="position-relative">
                                                            <input name="multi_event_starts_date" type="text" class="form-control" id="eventstartdatepicker"
                                                               placeholder="Choose Event Date " value="{{ old('multi_event_starts_date') }}"/>
                                                            <img class="img-downArrow focus-date"
                                                               src="{{asset('images/calender.png')}}" alt="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-6 col-md-4">
                                                      <div class="form-group date mb-3" id="timepicker2"
                                                         data-target-input="nearest">
                                                         <label for="timepicker2" class=" pr-2">Start Time  <span
                                                         style="color: red;">*</span></label>
                                                         <div class="position-relative">
                                                            <input type="text" name="multi_event_starts_time" value="{{ old('multi_event_starts_time') }}" class="form-control" id="timeInput2"
                                                               style="background: white" placeholder="Start Time" />
                                                            <span class="input-group-text" data-toggle>
                                                               <i class="far fa-clock"></i>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-6 col-md-4">
                                                      <div class="form-group">
                                                         <label for="date">Event End Date  <span
                                                         style="color: red;">*</span></label>
                                                         <div class="position-relative">
                                                            <input type="text" class="form-control" id="datepicker"
                                                               placeholder="Choose Event End Date *" name="multi_event_ends_date" value="{{ old('multi_event_ends_date') }}"/>
                                                            <img class="img-downArrow focus-date"
                                                               src="{{asset('images/calender.png')}}" alt="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-6 col-md-4">
                                                      <div class="form-group date mb-3" id="timepicker2"
                                                         data-target-input="nearest">
                                                         <label for="timepicker2" class=" pr-2">End Time  <span
                                                         style="color: red;">*</span></label>
                                                         <div class="position-relative">
                                                            <input type="text" class="form-control" id="timeInput2"
                                                               style="background: white" placeholder="End Time" name="multi_event_ends_time" value="{{ old('multi_event_ends_time') }}"/>
                                                            <span class="input-group-text" data-toggle>
                                                               <i class="far fa-clock"></i>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- time zone -->
                                             <div class="timezone">
                                                Time Zone and Language
                                             </div>
                                             <div class="timezoneArea">
                                                BST,Display start and time,English (UK)
                                             </div>
                                             <!-- time zone end -->
                                             <div class="tab-switches mt-3">
                                                <ul class="ul-tb-venu-switch ps-0">
                                                   <li class="tab-venu-active">Venu</li>
                                                   <li>Online</li>
                                                   <li>To be announced</li>
                                                </ul>
                                             </div>
                                             <div class="tab-venu-content">
                                                <div class="tab-venu tab-venu1">
                                                   <h6 class="form-h6">Address</h6>
                                                   <!-- <div class="form-group">
                                                      <fieldset class="custom-textfield textfield--light">
                                                         <input type="search" id="custom-id-search" class="ps-5 custom-textfield__input" required>
                                                         <label for="custom-id-search"1
                                                            class="custom-textfield__label custom-textfield__label--required">Lookup address</label>
                                                      </fieldset>
                                                   </div> -->

                                                   <div class="form-group position-relative">
                                                      <input type="search" name="" id=""
                                                         class="form-control search-form-"
                                                         placeholder="Lookup address *" />
                                                      <svg class="search-element" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                         <rect width="24" height="24" fill="url(#pattern0_530_592)" />
                                                         <defs>
                                                            <pattern id="pattern0_530_592"
                                                               patternContentUnits="objectBoundingBox" width="1"
                                                               height="1">
                                                               <use xlink:href="#image0_530_592"
                                                                  transform="scale(0.01)" />
                                                            </pattern>
                                                            <image id="image0_530_592" width="100" height="100"
                                                               xlink:href="data:image/png;base64,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" />
                                                         </defs>
                                                      </svg>
                                                   </div>

                                                   <div class="addLocation my-2">
                                                      <i class="fa-solid fa-house"></i>
                                                      <span>Add location manually</span>
                                                   </div>
                                                </div>
                                                <div class="tab-venu tab-venu2 tab-venu-li-active">
                                                   <div class="mb-3">
                                                      <h6 class="form-h6 mb-2">Online Platform</h6>

                                                      <div class="form-group position-relative">
                                                         <select class="form-select" name="" id="">
                                                            <option value="" disabled selected hidden>
                                                               Please Select Platform *
                                                            </option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                         </select>
                                                         <!-- <img class="img-downArrow" src="../images/downArrow.png" alt=""> -->
                                                      </div>
                                                   </div>
                                                   <div class="mb-3">
                                                      <h6 class="form-h6">Platform URL</h6>
                                                      <p style="font-size: 12px" class="my-0 py-0">
                                                         Platform url will be shared along with
                                                         booking confirmation
                                                      </p>
                                                      <div class="form-group">
                                                         <input type="text" class="form-control"
                                                            placeholder="Video Link" />
                                                      </div>
                                                   </div>
                                                   <div class="mb-3">
                                                      <h6 class="form-h6">
                                                         Instruction: How to Join
                                                      </h6>
                                                      <p style="font-size: 12px" class="my-0 py-0">
                                                         Instructions on how to join will be shared
                                                         with attendees who book your event.
                                                      </p>
                                                      <div class="form-group">
                                                         <textarea class="form-control" name="" id="" cols="30"
                                                            rows="10"
                                                            placeholder="Instructions on how to join will be shared with attendees who book your event. *"></textarea>
                                                      </div>
                                                   </div>

                                                </div>
                                                <div class="tab-venu tab-venu3">
                                                   Recurring Event Content
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tab-pane tab3">
                                             <div>
                                                <h6 class="form-h6 mb-2">Schedule Event</h6>
                                                <div class="row">
                                                   <div class="col-md-12 mb-2">
                                                      <div class="form-group ">
                                                         <label for="date">Schedule Event Start Date  <span
                                                         style="color: red;">*</span></label>
                                                         <div class="position-relative">
                                                            <input type="text" class="form-control" id="datepicker"
                                                               placeholder="Choose Event Date " name="recurring_event_start_date" value="{{ old('schedule_event_start_date') }}" />
                                                            <img class="img-downArrow focus-date"
                                                               src="{{asset('images/calender.png')}}" alt="">
                                                         </div>

                                                      </div>
                                                   </div>
                                                   <div class="col-6 col-md-6">
                                                      <div class="form-group date mb-3" id="timepicker2"
                                                         data-target-input="nearest">
                                                         <label for="timepicker2" class=" pr-2">Start Time  <span
                                                         style="color: red;">*</span></label>
                                                         <div class="position-relative">
                                                            <input type="text" class="form-control" id="timeInput2"
                                                               style="background: white" placeholder="Start Time " name="recurring_event_starts_time" value="{{ old('recurring_event_starts_time') }}"/>
                                                            <span class="input-group-text" data-toggle>
                                                               <i class="far fa-clock"></i>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-6 col-md-6">
                                                      <div class="form-group date mb-3" id="timepicker2"
                                                         data-target-input="nearest">
                                                         <label for="timepicker2" class=" pr-2">End Time  <span
                                                         style="color: red;">*</span></label>
                                                         <div class="position-relative">
                                                            <input type="text" class="form-control" id="timeInput2"
                                                               style="background: white" placeholder="End Time " name="recurring_event_ends_time" value="{{ old('recurring_event_ends_time') }}"/>
                                                            <span class="input-group-text" data-toggle>
                                                               <i class="far fa-clock"></i>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-12 col-md-12 ">
                                                      <div class=" pr-2">Recurrence</div>
                                                      <div class="position-relative">
                                                         <select class="form-select" name="" id="">
                                                            <option value="" disabled selected hidden>
                                                               Daily
                                                            </option>
                                                            <option value="1">Weekly</option>
                                                            <option value="2">Monthly</option>
                                                            <option value="2">Yearly</option>
                                                         </select>
                                                         <!-- <img class="img-downArrow" src="../images/downArrow.png" alt=""> -->
                                                      </div>

                                                   </div>
                                                   <div class="col-12 col-md-12 mt-2 ">
                                                      <div class=" pr-2">Starts On</div>
                                                      <div class="position-relative">
                                                         <select class="form-select" name="" id="">
                                                            <option value="" disabled selected hidden>
                                                               On the 24th of each month
                                                            </option>
                                                            <option value="1">Weekly</option>
                                                            <option value="2">Monthly</option>
                                                            <option value="2">Yearly</option>
                                                         </select>
                                                         <!-- <img class="img-downArrow" src="../images/downArrow.png" alt=""> -->
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class=" pr-2">During these days</div>
                                                <div class="mt-2">
                                                   <input class="check-d-n" type="checkbox" id="mondayCheckbox"
                                                      name="day" value="monday">
                                                   <label for="mondayCheckbox" class="circle-label">Mo</label>

                                                   <input class="check-d-n" type="checkbox" id="tuesdayCheckbox"
                                                      name="day" value="tuesday">
                                                   <label for="tuesdayCheckbox" class="circle-label">Tu</label>

                                                   <input class="check-d-n" type="checkbox" id="wednesdayCheckbox"
                                                      name="day" value="wednesday">
                                                   <label for="wednesdayCheckbox" class="circle-label">We</label>

                                                   <input class="check-d-n" type="checkbox" id="thursdayCheckbox"
                                                      name="day" value="thursday">
                                                   <label for="thursdayCheckbox" class="circle-label">Th</label>

                                                   <input class="check-d-n" type="checkbox" id="fridayCheckbox"
                                                      name="day" value="friday">
                                                   <label for="fridayCheckbox" class="circle-label">Fri</label>

                                                   <input class="check-d-n" type="checkbox" id="saturdayCheckbox"
                                                      name="day" value="saturday">
                                                   <label for="saturdayCheckbox" class="circle-label">SA</label>

                                                   <input class="check-d-n" type="checkbox" id="sundayCheckbox"
                                                      name="day" value="sunday">
                                                   <label for="sundayCheckbox" class="circle-label">Sun</label>

                                                </div>
                                                <hr>
                                                <h6 class="form-h6 mb-2">Ending</h6>

                                                <div class="radio-container mb-2">
                                                   <div class="w-in-bl">
                                                      <input type="radio" id="beforeRadio" name="dateRange"
                                                         value="before">
                                                      <label for="beforeRadio">On</label>
                                                   </div>
                                                   <div style="display: inline-block;" class="position-relative">
                                                      <input type="text" class="endDate" id="ondatepicker"
                                                         placeholder="End Date" />
                                                      <img class="img-downArrow focus-date" src="{{asset('images/calender.png')}}"
                                                         alt="">
                                                   </div>

                                                </div>
                                                <div class="radio-container mb-2">
                                                   <input type="radio" id="afterRadio" name="dateRange" value="after">
                                                   <label for="afterRadio">After</label>
                                                   <input type="text" class="endDate" id="afterDateInput">
                                                </div>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fancy-box position-relative mb-4">
                                    <div class="fancy-title">Event Info & Policy</div>
                                    <div class="mb-3">
                                       <h6 class="form-h6">Event Description</h6>
                                       <p class="form-p-text">
                                          Add more details to your event like your schedule,
                                          sponsors, or featured guests.
                                       </p>
                                       <div class="mb-4 mt-2">
                                          <textarea id="editor" name="summernote"></textarea>
                                       </div>
                                       <h6 class="form-h6">Refund Policy <span style="color: red;">*</span></h6>
                                       <p class="form-p-text">
                                          Set up your refund policy for attendees, specifying
                                          terms and conditions for refunds. Remember,
                                          TicketKart fees can't be refunded.
                                       </p>
                                       <div class="mb-4 mt-2 position-relative">
                                          <textarea id="summernote" name="summernote"></textarea>
                                          <span id="characterCount" class="position-absolute fs-12"
                                             style="bottom:20px; right:7px; color: #959595;">0/500</span>
                                       </div>

                                       <div>
                                          <div class="form-group date mb-3" id="timeInputLastEntry"
                                             data-target-input="nearest">
                                             <label for="" class="pr-2">Last Entry Time</label>
                                             <p class="form-p-text">
                                                Set the latest entry time for your event. This will be shown on the
                                                event page.
                                             </p>
                                             <div class="col-12 col-md-4">
                                                <div class="position-relative">
                                                   <input type="text" class="form-control" id="timeInputLastEntry"
                                                      style="background: white" placeholder="Last Entry Time" />
                                                   <span class="input-group-text" data-toggle>
                                                      <i class="far fa-clock"></i>
                                                   </span>
                                                </div>
                                             </div>

                                          </div>
                                       </div>

                                    </div>
                                 </div>
                                 <div>
                                    <div class="fancy-box position-relative mb-4 mt-5">
                                       <div class="fancy-title">More About Event</div>
                                       <h6 class="form-h6">Agenda</h6>
                                       <p class="form-p-text">
                                          Create an event itinerary with times, descriptions,
                                          and hosts/performers.
                                       </p>

                                       <div style="padding: 5px;">
                                          <div class="row">
                                             <div class="col-3">
                                                <div class="agenda-table-row">Title</div>
                                             </div>
                                             <div class="col-3">
                                                <div class="agenda-table-row">Schedule</div>
                                             </div>
                                             <div class="col-3">
                                                <div class="agenda-table-row">Duration</div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="agenda-row">
                                          <div class="row">
                                             <div class="col-3 ">
                                                <div class="agenda-table-font d-flex h-100 align-items-center ">
                                                   Title of Agenda
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="agenda-table-font d-flex h-100 align-items-center ">12:00 -
                                                   15:00</div>
                                             </div>
                                             <div class="col-3">
                                                <div class="agenda-table-font d-flex h-100 align-items-center ">2 hr
                                                </div>
                                             </div>
                                             <div class="col-3 text-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                   <button class="edit-agenda">
                                                      <i class="fa-solid fa-pen-to-square"></i></button><button
                                                      class="delete-agenda">
                                                      <i class="fa-solid fa-trash-can"></i>
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center justify-content-end">
                                          <a class="btn add-agenda-btn" id="openModalBtn"><i
                                                class="fa-solid fa-plus"></i>
                                             <span>Add Agenda</span></a>
                                       </div>
                                       <h6 class="form-h6 mt-3">FAQ</h6>
                                       <p class="form-p-text">
                                          Provide answers to common attendee questions such as parking details, venue
                                          rules..
                                       </p>
                                       <div class="agenda-row mt-2">
                                          <div class="row">
                                             <div class="col-5 ">
                                                <div class="agenda-table-font d-flex h-100 align-items-center ">
                                                   Title of Question ......
                                                </div>
                                             </div>

                                             <div class="col-5">
                                                <div class="agenda-table-font d-flex h-100 align-items-center ">Answer
                                                   .....</div>
                                             </div>
                                             <div class="col-2 text-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                   <button class="edit-agenda">
                                                      <i class="fa-solid fa-pen-to-square"></i></button><button
                                                      class="delete-agenda">
                                                      <i class="fa-solid fa-trash-can"></i>
                                                   </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center justify-content-end">
                                          <a class="btn add-agenda-btn" id="openFaqModalBtn"><i
                                                class="fa-solid fa-plus"></i>
                                             <span>Add FAQ</span>
                                          </a>
                                       </div>
                                    </div>
                            
                                 <div class="row py-3">
                                    <div class="col-lg-3 col-md-6">
                                       <div class="ou-agenda-plus mb-3">
                                          <div
                                             class="d-flex justify-content-center align-items-center flex-column agenda-box-">
                                             <div class="text-center">
                                                <svg width="64" height="65" viewBox="0 0 64 65" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                   <path
                                                      d="M56 24.375H40V8.125C40 5.97012 39.1571 3.90349 37.6569 2.37976C36.1566 0.856024 34.1217 0 32 0C29.8783 0 27.8434 0.856024 26.3431 2.37976C24.8429 3.90349 24 5.97012 24 8.125L24.284 24.375H8C5.87827 24.375 3.84344 25.231 2.34315 26.7548C0.842854 28.2785 0 30.3451 0 32.5C0 34.6549 0.842854 36.7215 2.34315 38.2452C3.84344 39.769 5.87827 40.625 8 40.625L24.284 40.3366L24 56.875C24 59.0299 24.8429 61.0965 26.3431 62.6202C27.8434 64.144 29.8783 65 32 65C34.1217 65 36.1566 64.144 37.6569 62.6202C39.1571 61.0965 40 59.0299 40 56.875V40.3366L56 40.625C58.1217 40.625 60.1566 39.769 61.6569 38.2452C63.1571 36.7215 64 34.6549 64 32.5C64 30.3451 63.1571 28.2785 61.6569 26.7548C60.1566 25.231 58.1217 24.375 56 24.375Z"
                                                      fill="#F1664B" />
                                                </svg>
                                             </div>
                                             <div>
                                                <h4 class="text-center">Add Agenda</h4>
                                                <p class="text-center m-dev-f">Create an event itinerary<br> with times,
                                                   descriptions,
                                                   and <br> hosts/performers.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                       <div class="ou-agenda-plus mb-3">
                                          <div
                                             class="d-flex justify-content-center align-items-center flex-column agenda-box-">
                                             <div class="text-center">
                                                <svg width="64" height="65" viewBox="0 0 64 65" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                   <path
                                                      d="M56 24.375H40V8.125C40 5.97012 39.1571 3.90349 37.6569 2.37976C36.1566 0.856024 34.1217 0 32 0C29.8783 0 27.8434 0.856024 26.3431 2.37976C24.8429 3.90349 24 5.97012 24 8.125L24.284 24.375H8C5.87827 24.375 3.84344 25.231 2.34315 26.7548C0.842854 28.2785 0 30.3451 0 32.5C0 34.6549 0.842854 36.7215 2.34315 38.2452C3.84344 39.769 5.87827 40.625 8 40.625L24.284 40.3366L24 56.875C24 59.0299 24.8429 61.0965 26.3431 62.6202C27.8434 64.144 29.8783 65 32 65C34.1217 65 36.1566 64.144 37.6569 62.6202C39.1571 61.0965 40 59.0299 40 56.875V40.3366L56 40.625C58.1217 40.625 60.1566 39.769 61.6569 38.2452C63.1571 36.7215 64 34.6549 64 32.5C64 30.3451 63.1571 28.2785 61.6569 26.7548C60.1566 25.231 58.1217 24.375 56 24.375Z"
                                                      fill="#F1664B" />
                                                </svg>
                                             </div>
                                             <div>
                                                <h4 class="text-center">Add FAQ</h4>
                                                <p class="text-center m-dev-f">Provide answers to common <br> attendee
                                                   questions such as <br>parking details, venue
                                                   rules..</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div class="ticket-publish d-flex justify-content-end mt-3" style="margin-right: 22px;">
                           <button type="submit" class="btn save1con">Save and Continue</button>
                        </div>
                        </form>
                     </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
   <!-- agenda modal -->
   <div class="agenda-modal-overlay" id="agendaModalOverlay">
      <div class="agenda-modal" id="agendaModal">
         <button class="close-btn" id="closeModalBtn">&times;</button>
         <!-- Your modal content here -->
         <div>
            <h5 class="text-start">Agenda</h5>
            <div class="in-box-component mb-3">
               <h6 class="form-h6">Event Title <span style="color: red;">*</span></h6>
               <div class="form-group position-relative">
                  <!-- <fieldset class="custom-textfield textfield--light"> -->
                  <input id="custom-id-agenda" class="form-control" required placeholder="Event Title" />
                  <!-- <label for="custom-id-agenda"
                        class="custom-textfield__label custom-textfield__label--required">Event
                        Title</label>
                  </fieldset> -->
                  <span class="position-absolute fs-12" style="top:10px; right:7px; color: #959595;">0/75</span>

               </div>
            </div>
            <div class="row">
               <div class="col-6">
                  <div class="form-group date mb-3" id="timepicker2" data-target-input="nearest">
                     <label for="timepicker2" class=" pr-2">Start Time <span style="color: red;">*</span></label>
                     <div class="position-relative">
                        <input type="text" class="form-control" id="timeInput" style="background: white"
                           placeholder="Start Time " />
                        <span class="input-group-text" data-toggle>
                           <i class="far fa-clock"></i>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-group date mb-3" id="timepicker2" data-target-input="nearest">
                     <label for="timepicker2" class=" pr-2">End Time <span style="color: red;">*</span></label>
                     <div class="position-relative">
                        <input type="text" class="form-control" id="timeInput2" style="background: white"
                           placeholder="End Time" />
                        <span class="input-group-text" data-toggle>
                           <i class="far fa-clock"></i>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="col-12">
                  <label for="timepicker" class=" pr-2">Description</label>
                  <div class="position-relative">
                     <textarea type="text" rows="4" class="form-control" style="background: white"
                        placeholder="Write Description"></textarea>
                     <span class="position-absolute fs-12" style="bottom:10px; right:7px; color: #959595;">0/300</span>
                  </div>
               </div>
               <div class="col-12 mt-2">
                  <label for="timepicker" class=" pr-2">Host</label>
                  <div class="position-relative">
                     <input type="text" class="form-control" style="background: white" placeholder="Host Name" />
                     <span class="position-absolute fs-12" style="top:10px; right:7px; color: #959595;">0/30</span>

                  </div>
               </div>
            </div>
            <div class="d-flex align-items-center justify-content-end gap-2 mt-3"><button
                  class="tim-zn-btn close-modal">Cancel</button><button class="tim-zn-btn2">Add</button></div>
         </div>
      </div>
   </div>
   <!-- agenda modal end -->
   <!-- faq modal start -->
   <div class="faq-modal-overlay" id="faqModalOverlay">
      <div class="faq-modal" id="faqModal">
         <button class="close-btn" id="closeFaqModalBtn">&times;</button>
         <!-- Your FAQ modal content here -->
         <div>
            <h5 class="text-start">FAQ</h5>
            <div class="in-box-component mb-3">
               <h6 class="form-h6">Question <span style="color: red;">*</span></h6>
               <div class="form-group position-relative">
                  <!-- <fieldset class="custom-textfield textfield--light"> -->
                  <input id="custom-id-faq" class="form-control" required placeholder="Question Title" />
                  <!-- <label for="custom-id-faq" class="custom-textfield__label custom-textfield__label--required">Question
                     Title</label>
                  </fieldset> -->
                  <span class="position-absolute fs-12" style="top:10px; right:7px; color: #959595;">0/75</span>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <label for="timepicker" class=" pr-2">Description <span style="color: red;">*</span></label>
                  <div class="position-relative">
                     <textarea type="text" class="form-control" rows="5" style="resize: none;" style="background: white"
                        placeholder="Write Answer"></textarea>
                     <span class="position-absolute fs-12" style="bottom:10px; right:7px; color: #959595;">0/300</span>

                  </div>
                  <div class="d-flex align-items-center justify-content-end gap-2 mt-3"><button
                        class="tim-zn-btn close-modal">Cancel</button><button class="tim-zn-btn2">Add</button></div>

               </div>
            </div>

         </div>
         <!-- Additional content -->
      </div>
   </div>
   <!-- faq modal end -->
   <!-- Modal Overlay -->
   <div class="modal-overlay"></div>

   <!-- Modal Content -->
   <div class="timezone-modal">
      <button type="button" class="btn-close close-modal" aria-label="Close" style="float: right;"></button>
      <!-- Modal content goes here -->
      <div>
         <h6 class="text-center">Time Zone and Language</h6>
      </div>
      <hr>
      <div>
         <h6 class="mb-4">Display Times</h6>
         <div class="ms-3">
            <label class="d-flex gap-1 align-items-center mb-3">
               <input type="checkbox" name="checkbox1" value="value1" class="ch-timezone" />
               <span>
                  <div class="display-time">Display Start Time </div>
                  <div class="display-time">The event start time will be shown to attendees</div>
               </span>
            </label>
            <label class="d-flex gap-1 align-items-center mb-4">
               <input type="checkbox" name="checkbox2" value="value1" class="ch-timezone" />
               <span>
                  <div class="display-time">Display End Time </div>
                  <div class="display-time">The event end time will be shown to attendees</div>
               </span>
            </label>
         </div>
         <h6 class="mb-3">Event Time Zone</h6>
         <div class="position-relative  mb-3">
            <select class="form-select" name="" id="">
               <option value="" disabled selected hidden>
                  (GMT+0100) United Kingdom Time
               </option>
               <option value="1">1</option>
               <option value="2">2</option>
            </select>
            <div class="tim-zn">Time zone</div>
         </div>
         <h6 class="mb-3">Event Page Language</h6>
         <div class="position-relative mb-4">
            <select class="form-select" name="" id="">
               <option value="" disabled selected hidden>
                  English (UK)
               </option>
               <option value="1">1</option>
               <option value="2">2</option>
            </select>
            <div class="tim-zn">Language</div>
         </div>
         <div class="d-flex align-items-center justify-content-end gap-2"><button
               class="tim-zn-btn close-modal">Cancel</button><button class="tim-zn-btn2">Save</button></div>
      </div>
   </div>
  
   @endsection
   @section('customjs')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
   <!-- Character Limit -->
   <script>
      function characterLimit(inputId, limit, countId) {
      // Get the input field and the element where character count will be displayed
      const inputField = document.getElementById(inputId);
      const charCountElement = document.getElementById(countId);
      // Add an event listener to the input field to track changes in its value
      inputField.addEventListener('input', function() {
         // Get the current text entered into the input field
         const text = this.value;
         // Calculate the length of the text
         const count = text.length;
         // Calculate the number of remaining characters allowed
         const remaining = limit - count;
         // Display the current character count and limit
         if (charCountElement) {
            charCountElement.textContent = count + ' / ' + limit + ' characters';
         }
         // If the number of characters exceeds the limit, truncate the input
         if (remaining < 0) {
            this.value = text.slice(0, limit); // Limit the input to the allowed number of characters
            // Update the character count display to show that the limit has been reached
            if (charCountElement) {
            charCountElement.textContent = limit + ' / ' + limit + ' characters';
            }
         }
      });
      }
      //Usage
      characterLimit('eventTitle', 75, 'eventCount');
      characterLimit('summary', 140, 'summaryCount');
    </script>
     <!-- Character Limit -->
     <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200, 
            callbacks: {
                onKeyup: function(e) {
                    countCharacters();
                },
                onPaste: function(e) {
                    countCharacters();
                }
            }
        });

        function countCharacters() {
            var text = $('#summernote').summernote('code');
            var limit = 500;
            var count = text.length;

            if (count > limit) {
                $('#summernote').summernote('code', text.substring(0, limit));
                count = limit;
            }

            $('#characterCount').text(count + ' / ' + limit + ' characters');
        }
    });
</script>

   @endsection
