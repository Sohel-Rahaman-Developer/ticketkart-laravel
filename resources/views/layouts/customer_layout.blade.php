<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ticket - publish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
        integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

        <!-- Flatpickr CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
   
        <!-- Date Range Picker CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
        <!-- select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- summernote -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
       
        <link rel="stylesheet" href="{{asset('css/all.css')}}" />
        <link rel="stylesheet" href="{{asset('css/media.css')}}" />
      
    @livewireStyles
</head>

<body>
  @include('layouts/customer_header')
  
  @yield('content')
  <!-- middile section end -->
  <script src="{{ asset('js/all.js') }}"></script>
<script src="{{ asset('js/ticket.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('#editor').summernote({
        height: 200,
        toolbar: [
            ['undo', 'redo'],
            ['bold', 'italic', 'underline', 'strikethrough', 'clear'],
            ['superscript', 'subscript'],
            ['fontsize', ['10']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['color', ['color']],
            ['insert', ['picture', 'link', 'video']],
            ['view', ['fullscreen', 'codeview']]
        ],
        callbacks: {
            onImageUpload: function(files) {
                uploadFile(files[0], 'image');
            },
            onMediaDelete: function($target, editor, $editable) {
                // Handle media deletion if required
            }
        }
    });
    $('#editor2').summernote({
        height: 200,
        toolbar: [
            ['undo', 'redo'],
            ['bold', 'italic', 'underline', 'strikethrough', 'clear'],
            ['superscript', 'subscript'],
            ['fontsize', ['10']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['color', ['color']],
            ['insert', ['picture', 'link', 'video']],
            ['view', ['fullscreen', 'codeview']]
        ],
        callbacks: {
            onImageUpload: function(files) {
                uploadFile(files[0], 'image');
            },
            onMediaDelete: function($target, editor, $editable) {
                // Handle media deletion if required
            }
        }
    });

});
</script>
<script>
$(document).ready(function() {
    flatpickr("#datetimepicker", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
    flatpickr("#datetimepicker2", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
});
</script>
<!-- picker -->
<script>
// Initialize Flatpickr for Datepicker
flatpickr("#datepicker", {
    enableTime: false,
    dateFormat: "Y-m-d",
});
$('.focus-date').on('click', function () {
         $('#datepicker').focus();
      });
flatpickr("#startScheduledDateTime", {
    enableTime: true,
    dateFormat: "Y-m-d",
});
$('.focus-date').on('click', function() {
    $('#startScheduledDateTime').focus();
});
flatpickr("#endScheduledDateTime", {
    enableTime: true,
    dateFormat: "Y-m-d",
});
$('.focus-date2').on('click', function() {
    $('#endScheduledDateTime').focus();
});
$('.focus-date3').on('click', function() {
    $('#datetimepicker').focus();
});
$('.focus-date4').on('click', function() {
    $('#datetimepicker2').focus();
});
// Initialize Flatpickr for Timepicker
flatpickr("#timeInput", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    defaultHour: 12, // default hour value
    defaultMinute: 0, // default minute value
    minuteIncrement: 1, // minute increment
    locale: "in", // Japanese locale
    clickOpens: true, // enable click to open
    allowInput: false, // allow manual input
});

// Initialize Flatpickr for Timepicker
flatpickr("#timeInput2", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    defaultHour: 12, // default hour value
    defaultMinute: 0, // default minute value
    minuteIncrement: 1, // minute increment
    locale: "in", // Japanese locale
    clickOpens: true, // enable click to open
    allowInput: false, // allow manual input
});
flatpickr("#timeInput3", {
         enableTime: true,
         noCalendar: true,
         dateFormat: "H:i",
         defaultHour: 12, // default hour value
         defaultMinute: 0, // default minute value
         minuteIncrement: 1, // minute increment
         locale: "in", // Japanese locale
         clickOpens: true, // enable click to open
         allowInput: false, // allow manual input
      });
      flatpickr("#timeInputLastEntry", {
         enableTime: true,
         noCalendar: true,
         dateFormat: "H:i",
         defaultHour: 12, // default hour value
         defaultMinute: 0, // default minute value
         minuteIncrement: 1, // minute increment
         locale: "in", // Japanese locale
         clickOpens: true, // enable click to open
         allowInput: false, // allow manual input
      });
      $('.fa-clock').on('click', function () {
         $('#timeInput').focus();
      });
      $('.fa-clock').on('click', function () {
         $('#timeInput2').focus();
      });
      $('.fa-clock').on('click', function () {
         $('#timeInput3').focus();
      });
      $('.fa-clock').on('click', function () {
         $('#timeInputLastEntry').focus();
      });
</script>
<!-- picker end -->

<script>
$(document).ready(function() {
    $("#mySelect-publish").select2({
        tags: true,
        tokenSeparators: [",", " "],
    });
});

$(".toggle-offcanvas").click(function() {
    var offcanvas = $(".offcanvas");
    if (offcanvas.hasClass("show")) {
        offcanvas.slideUp().removeClass("show");
        $("body").removeClass("offcanvas-open");
    } else {
        offcanvas.slideDown().addClass("show");
        $("body").addClass("offcanvas-open");
    }
});

$(".close-offcanvas").click(function() {
    $(".offcanvas").slideUp().removeClass("show");
    $("body").removeClass("offcanvas-open");
});

$(document).on("click", function(e) {
    if (
        !$(e.target).closest(".offcanvas").length &&
        !$(e.target).closest(".toggle-offcanvas").length
    ) {
        $(".offcanvas").slideUp().removeClass("show");
        $("body").removeClass("offcanvas-open");
    }
});
</script>
<!-- add-organiser -->

<script>
      $(document).ready(function () {
         // Show modal when .timezone is clicked
         $(".timezone").click(function () {
            $(".modal-overlay").fadeIn();
            $(".timezone-modal").fadeIn();
         });

         // Close modal when overlay or close button is clicked
         $(".modal-overlay, .close-modal").click(function () {
            $(".modal-overlay").fadeOut();
            $(".timezone-modal").fadeOut();
         });
      });
   </script>


<script>
    $(document).ready(function () {
    $('#event-filter').select2({
        placeholder: "Filter by Event"
    });
    $('#editor4').summernote({
    height: 200,
    toolbar: [
       ['undo', 'redo'],
       ['bold', 'italic', 'underline', 'strikethrough', 'clear'],
       ['superscript', 'subscript'],
       ['fontsize', ['10']],
       ['para', ['ul', 'ol', 'paragraph']],
       ['color', ['color']],
       ['insert', ['picture', 'link', 'video']],
       ['view', ['fullscreen', 'codeview']]
    ],
    callbacks: {
       onImageUpload: function (files) {
          uploadFile(files[0], 'image');
       },
       onMediaDelete: function ($target, editor, $editable) {
          // Handle media deletion if required
       }
    }
 });
 $('#editor5').summernote({
    height: 200,
    toolbar: [
       ['undo', 'redo'],
       ['bold', 'italic', 'underline', 'strikethrough', 'clear'],
       ['superscript', 'subscript'],
       ['fontsize', ['10']],
       ['para', ['ul', 'ol', 'paragraph']],
       ['color', ['color']],
       ['insert', ['picture', 'link', 'video']],
       ['view', ['fullscreen', 'codeview']]
    ],
    callbacks: {
       onImageUpload: function (files) {
          uploadFile(files[0], 'image');
       },
       onMediaDelete: function ($target, editor, $editable) {
          // Handle media deletion if required
       }
    }
 });
});
</script>

<script>
       $(document).ready(function () {
    $(".ul-tb-switch li").click(function () {
       $(this).addClass("tab-active").siblings().removeClass("tab-active");
       const index = $(this).index();
       $(".tab-content")
          .children()
          .eq(index)
          .addClass("active")
          .siblings()
          .removeClass("active");
    });
 });
 $(document).ready(function () {
    $(".ul-tb-venu-switch li").click(function () {
       $(this)
          .addClass("tab-venu-active")
          .siblings()
          .removeClass("tab-venu-active");
       const index = $(this).index();
       $(".tab-venu-content").children().removeClass("tab-venu-li-active");
       $(".tab-venu-content")
          .children()
          .eq(index)
          .addClass("tab-venu-li-active");
    });
 });
       //  <!-- choose file start -->

   const fileUpload = () => {
       const INPUT_FILE =
          document.querySelector("#upload-files");
       const INPUT_CONTAINER =
          document.querySelector("#upload-container");
       const FILES_LIST_CONTAINER =
          document.querySelector("#files-list-container");
       const PREVIEW =
          document.querySelector("#preview");

       INPUT_FILE.addEventListener(
          "change",
          handleFileSelect
       );
       INPUT_CONTAINER.addEventListener(
          "dragover",
          handleDragOver
       );
       INPUT_CONTAINER.addEventListener(
          "dragleave",
          handleDragLeave
       );
       INPUT_CONTAINER.addEventListener(
          "drop",
          handleFileDrop
       );

       function handleFileSelect(event) {
          const files = event.target.files;
          handleFiles(files);
       }

       function handleDragOver(event) {
          event.preventDefault();
          INPUT_CONTAINER.classList.add("active");
       }

       function handleDragLeave(event) {
          event.preventDefault();
          INPUT_CONTAINER.classList.remove("active");
       }

       function handleFileDrop(event) {
          event.preventDefault();
          INPUT_CONTAINER.classList.remove("active");
          const files = event.dataTransfer.files;
          handleFiles(files);
       }

       function handleFiles(files) {
          // Clear previous selections
          FILES_LIST_CONTAINER.innerHTML = "";

          Array.from(files).forEach((file) => {
             const fileURL = URL.createObjectURL(file);
             const fileName = file.name;

             // Display file in the list container
             const content = `
                      <div class="form__files-container d-flex gap-3">
                         <span class="form__text">${fileName}</span>
                         <div>
                            <a class="form__icon" href="${fileURL}" target="_blank" title="Preview">&#128065;</a>
                            <a class="form__icon" href="${fileURL}" title="Download" download>&#11123;</a>
                         </div>
                      </div>
                      `;
             FILES_LIST_CONTAINER.insertAdjacentHTML(
                "beforeEnd",
                content
             );
          });
       }

       function displayPreview(file) {
          if (file && file.type.startsWith("image/")) {
             const reader = new FileReader();
             reader.onload = function (e) {
                PREVIEW.innerHTML = `<img src="${e.target.result}" alt="Preview" height="100%" />`;
                PREVIEW.style.display = "block";
             };
             reader.readAsDataURL(file);
          } else {
             PREVIEW.style.display = "none";
          }
       }

       // Display preview when file is dropped
       INPUT_CONTAINER.addEventListener(
          "drop",
          (event) => {
             event.preventDefault();
             const file = event.dataTransfer.files[0];
             displayPreview(file);
          }
       );

       // Display preview when file is selected
       INPUT_FILE.addEventListener("change", (event) => {
          const file = event.target.files[0];
          displayPreview(file);
       });
    };

    fileUpload();

//  <!-- choose file end -->
</script>
  @livewireScripts
  @yield('customjs')
</body>

</html>