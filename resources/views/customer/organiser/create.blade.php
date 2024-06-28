@extends('layouts/customer_layout')
@section('organiser_select','active')
@section('content')

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
                                    <div class="even-list-p">
                                        <h4 class="mb-3">Add Organiser</h4>

                                        @if($message = Session::get('message'))
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-hidden="true">×</button>
                                            {{ $message }}
                                        </div>
                                        @endif

                                        <form action="{{route('organiser.store')}}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="fancy-box position-relative mb-4">
                                                <div class="fancy-title">Profile</div>
                                                <h6 class="form-h6">Organiser Profile Logo <span
                                                        style="color: red;">*</span></h6>
                                                <p class="form-p color-999">
                                                    Upload your organization's logo, attendees will see at the top
                                                    of your profile. Use a high quality square image.
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
                                                                    fill="black"></path>
                                                            </svg>
                                                        </div>
                                                        Choose or Drop images Files
                                                    </div>

                                                    <input class="form__file" id="upload-files" type="file"
                                                        name="image">
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
                                                @error('image')
                                                <span style="color:red;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="fancy-box position-relative mb-4">
                                                <div class="fancy-title">About The Organiser</div>
                                                <p class="form-p color-999">
                                                    Let attendees know who is hosting events.
                                                    <a href="">Learn more</a>
                                                </p>
                                                <div class="in-box-component mb-3">
                                                    <h6 class="form-h6">Organiser Name <span
                                                            style="color: red;">*</span></h6>
                                                    <p class="form-p-text">
                                                        This name will be displayed on all your event pages,
                                                        bookings and tickets
                                                    </p>
                                                    <div class="form-group mt-2 position-relative">

                                                        <input class="form-control"
                                                            placeholder="e.g. Ticketkart Entertainment" name="name"
                                                            id="organiserName" value="{{old('name')}}">
                                                        <span class="position-absolute limit-letter"
                                                            id="charCount">0/75</span>
                                                    </div>
                                                    @error('name')
                                                    <span style="color:red;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="in-box-component mb-3">
                                                    <h6 class="form-h6">Email Address <span style="color: red;">*</span>
                                                    </h6>

                                                    <div class="form-group mt-2">
                                                        <input class="form-control" placeholder="e.g. abc@gmail.com"
                                                            type="email" name="email" value="{{old('email')}}">
                                                    </div>
                                                    @error('email')
                                                    <span style="color:red;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="in-box-component mb-3">
                                                    <h6 class="form-h6">Phone No <span style="color: red;">*</span></h6>

                                                    <div class="form-group mt-2">
                                                        <input class="form-control" placeholder="e.g. +447812345678"
                                                            name="phone" value="{{old('phone')}}">
                                                    </div>
                                                    @error('phone')
                                                    <span style="color:red;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="in-box-component mb-3">
                                                    <h6 class="form-h6">Organiser page URL</h6>
                                                    <p class="form-p color-999">
                                                        Customize your URL to help attendees find your events easily. It
                                                        can include letters, numbers and dashes. </p>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <h6 class="form-h6 fs-6">https://</h6>
                                                        <div class="form-group position-relative">
                                                            <input type="text" class="form-control"
                                                                placeholder="your-domain" name="page_url" id="page_url"
                                                                value="{{old('page_url')}}">

                                                            <span class="position-absolute limit-letter"
                                                                id="pageUrlCount">0/30</span>

                                                        </div>
                                                        <h6 class="form-h6 fs-6">.ticketkart.com</h6>
                                                    </div>
                                                    @error('page_url')
                                                    <span style="color:red;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="in-box-component mb-3">
                                                    <h6 class="form-h6 mb-2">Website link</h6>
                                                    <div class="form-group position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="e.g. https://www.ticketkart.com"
                                                            name="website_link" id="website_link"
                                                            value="{{old('website_link')}}">
                                                        <span class="position-absolute limit-letter"
                                                            id="website_linkCount">0/140</span>
                                                    </div>
                                                    @error('website_link')
                                                    <span style="color:red;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="in-box-component mb-3">
                                                    <h6 class="form-h6">Organiser Bio</h6>
                                                    <p class="form-p color-999">
                                                        Introduce yourself, your hosted event types, or your mission.
                                                        This biography is visible on your organiser profile.
                                                    </p>
                                                    <div class="mb-4 mt-2">
                                                        <textarea id="editor4" class=" summernote" name="organiser_bio"
                                                            value="{{old('organiser_bio')}}"></textarea>
                                                    </div>
                                                </div>
                                                <div class="in-box-component mb-3">
                                                    <h6 class="form-h6">Description for event pages</h6>
                                                    <p class="form-p color-999">
                                                        Share details about this organiser to be shown on all your event
                                                        page under organiser profile.
                                                    </p>
                                                    <div class="mb-4 mt-2">
                                                        <textarea id="editor5" class=" summernote" name="description"
                                                            value="{{old('description')}}"></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="fancy-box position-relative mb-4">
                                                <div class="fancy-title">Social media and marketing</div>
                                                <div class="in-box-component mb-3">
                                                    <h6 class="form-h6 mb-2">Facebook Page</h6>
                                                    <div class="form-group position-relative">
                                                        <input type="text" class="form-control ps-4"
                                                            placeholder="Add your Facebook page full url"
                                                            name="facebook_link" value="{{old('facebook_link')}}">
                                                        <i class="fa-brands fa-facebook-f face-l"></i>
                                                    </div>
                                                </div>
                                                <div class="in-box-component mb-3">
                                                    <h6 class="form-h6 mb-2">Twitter Page</h6>
                                                    <div class="form-group position-relative">
                                                        <input type="text" class="form-control ps-4"
                                                            placeholder="Add your Twitter page full url"
                                                            name="twitter_link" value="{{old('twitter_link')}}">
                                                        <i class="fa-brands fa-twitter face-l"></i>
                                                    </div>
                                                </div>
                                                <div class="in-box-component mb-3">
                                                    <h6 class="form-h6 mb-2">Instagram Page</h6>
                                                    <div class="form-group position-relative">
                                                        <input type="text" class="form-control ps-4"
                                                            placeholder="Add your Instagram page full url"
                                                            name="insta_link" value="{{old('insta_link')}}">
                                                        <i class="fa-brands fa-instagram face-l"></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-end gap-2 mt-3">
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


@endsection

@section('customjs')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

<script type="text/javascript">
function registerSummernote(element, placeholder, max, callbackMax) {
    $(element).summernote({
        placeholder,
        callbacks: {
            onKeydown: function(e) {
                var t = e.currentTarget.innerText;
                if (t.length >= max) {
                    //delete key
                    if (e.keyCode != 8)
                        e.preventDefault();
                    // add other keys ...
                }
            },
            onKeyup: function(e) {
                var t = e.currentTarget.innerText;
                if (typeof callbackMax == 'function') {
                    callbackMax(max - t.length);
                }
            },
            onPaste: function(e) {
                var t = e.currentTarget.innerText;
                var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData(
                    'Text');
                e.preventDefault();
                var all = t + bufferText;
                document.execCommand('insertText', false, all.trim().substring(0, 300));
                if (typeof callbackMax == 'function') {
                    callbackMax(max - t.length);
                }
            }
        }
    });
}

function registerSummernote1(element, placeholder, max, callbackMax) {
    $(element).summernote({
        placeholder,
        callbacks: {
            onKeydown: function(e) {
                var t = e.currentTarget.innerText;
                if (t.length >= max) {
                    //delete key
                    if (e.keyCode != 8)
                        e.preventDefault();
                    // add other keys ...
                }
            },
            onKeyup: function(e) {
                var t = e.currentTarget.innerText;
                if (typeof callbackMax == 'function') {
                    callbackMax(max - t.length);
                }
            },
            onPaste: function(e) {
                var t = e.currentTarget.innerText;
                var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData(
                    'Text');
                e.preventDefault();
                var all = t + bufferText;
                document.execCommand('insertText', false, all.trim().substring(0, 300));
                if (typeof callbackMax == 'function') {
                    callbackMax(max - t.length);
                }
            }
        }
    });
}

$(function() {
    registerSummernote('.summernote', 'Leave a comment', 300, function(max) {
        $('.maxContentPost').text(max)
    });

    registerSummernote1('.summernote1', 'Leave a comment', 300, function(max) {
        $('.maxContentPost1').text(max)
    });
});
</script>


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
characterLimit('organiserName', 75, 'charCount');
characterLimit('website_link', 140, 'website_linkCount');
characterLimit('page_url', 30, 'pageUrlCount');


//URL Validation rules
function validateAndSanitizeInput(showAlert = false) {
    const input = document.getElementById('page_url');
    //This line retrieves the HTML input element with the ID page_url and stores it in the input variable

    const charCount = document.getElementById('pageUrlCount');

    const validPattern = /^[a-zA-Z0-9-.]*$/;

    // Update character count
    charCount.textContent = `${input.value.length} / 30 characters`;

    // Sanitize input value
    let sanitizedValue = input.value.replace(/^https:\/\//ig, ''); // Remove leading 'https://'
    sanitizedValue = sanitizedValue.replace(/[^a-zA-Z0-9-.]/g, '');
    //These lines define sanitizedValue by taking the current value of the input and using the replace method with a regular expression to remove any character that is not a letter, number, dash, or period

    if (sanitizedValue !== input.value) {
        if (showAlert) {
            alert('Invalid characters removed. Only letters, numbers, and dashes are allowed.');
        }
        input.value = sanitizedValue;
    }

    // Validate input value
    if (!validPattern.test(sanitizedValue)) {
        if (showAlert) {
            alert('Invalid URL. Please use only letters, numbers, and dashes.');
        }
        input.classList.add('is-invalid');
    } else {
        input.classList.remove('is-invalid');
    }

}
</script>

@endsection