<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Attendee Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/media.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/organiser.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/media_responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('css/event.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/event-list.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/event-order.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/view-order.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/addOrganiser.css') }}" />
  
    @livewireStyles
</head>

<body>
  @include('layouts/customer_header')
  
  @yield('content')
  <!-- middile section end -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    // Attach a click event listener to the element with the class 'menuParent'
    $(".left-menu-icon-dashboard").click(function () {
      $(".left-menu-icon-dashboard").toggleClass("activeMenuItem inactiveMenuItem");
      // Toggle the 'deActive-menucon' class on all '.menuCon' elements
      $(".menuCon").toggleClass("deActive-menucon");
      $(".log-out-btn").toggleClass("ex-padding");
      $(".log-out-btn2").toggleClass("ex-padding2");
      $(".logOutBtnJs").toggleClass("deActive-menucon");
      // Toggle the 'deActive' class on the '.menuParent' itself
      $(".menuParent").toggleClass("deActive");
    });
    // $(".megamenuBtn").click(function () {
    //    $(".megaHeader").slideToggle(500); // Toggle megaHeader with sliding animation
    // });
    $(".megamenuBtn").click(function (e) {
      e.stopPropagation(); // Prevent the click event from propagating to the document
      $(".megaHeader").slideToggle(500); // Toggle megaHeader with sliding animation
    });
    $(document).click(function (e) {
      if (!$(e.target).closest('.megaHeader').length && !$(e.target).closest('.megamenuBtn').length) {
        // If the click occurred outside megaHeader and megamenuBtn, hide megaHeader
        $(".megaHeader").slideUp(500);
      }
    });
    // Opening animation
    $(".leftSearch").click(function () {
      $(".headerSupParent").removeClass("close").addClass("open");
      $("#mySearch").focus();
    });
    // Closing animation
    $(".closeSearchBar").click(function () {
      $(".headerSupParent").removeClass("open").addClass("close");
    });
  </script>
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $("#imagePreview").css("background-image", "url(" + e.target.result + ")");
          $("#imagePreview").hide();
          $("#imagePreview").fadeIn(650);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#imageUpload").change(function () {
      readURL(this);
    });
  </script>
  <script>
    document.getElementById("countrySearch").addEventListener("input", function () {
      var searchQuery = this.value.toLowerCase();
      var countryListItems = document.getElementById("countryList").getElementsByTagName("li");
      for (var i = 0; i < countryListItems.length; i++) {
        var currentCountry = countryListItems[i].textContent || countryListItems[i].innerText;
        if (currentCountry.toLowerCase().indexOf(searchQuery) > -1) {
          countryListItems[i].style.display = "";
        } else {
          countryListItems[i].style.display = "none";
        }
      }
    });
    $("#imagePreview").click(function () {
      var imageUrl = $(this).css("background-image").replace("url(", "").replace(")", "").replace(/\"/gi, "");
      $("#cus_lightboxImage").attr("src", imageUrl);
      $("#cus_lightbox").fadeIn();
    });
    $("#cus_lightbox").click(function (e) {
      if (e.target === this) {
        $(this).fadeOut();
      }
    });
    $(".cus_close").click(function () {
      $("#cus_lightbox").fadeOut();
    });
  </script>
  <!-- organiser dashboard -->
  <script>
    $(".manage-items").click(function () {
      $(".all-manage-item").slideToggle();
      $(".manage-visibility").toggleClass("rotate");
      $(".manage-visibility").text(function (i, text) {
        return text === "+" ? "-" : "+";
      });
    });
    // $(".svg-container").on({
    //    mouseenter: function () {
    //       $(this).find('.menu-overview-organ').show();
    //    },
    //    mouseleave: function () {
    //       $(this).find('.menu-overview-organ').hide();
    //    }
    // });
    // $(document).on('click', function (event) {
    //    if (!$(event.target).closest('.svg-container').length && !$(event.target).hasClass('svg-container')) {
    //       $('.menu-overview-organ').hide();
    //    }
    // });
    $(".svg-container").on("click", function (event) {
      var $menu = $(this).find(".menu-overview-organ");
      if ($menu.is(":visible")) {
        $menu.hide();
      } else {
        $menu.show();
      }
      event.stopPropagation(); // Prevent the click event from bubbling up to the document
    });
    $(document).on("click", function (event) {
      if (!$(event.target).closest(".svg-container").length && !$(event.target).hasClass("menu-overview-organ")) {
        $(".menu-overview-organ").hide();
      }
    });
  </script>
  <script>
    $('.downArrow').click(function () {
      // Check if the screen width is less than or equal to 767px (typical mobile screen width)
      if ($(window).width() <= 500) {
        $('.righside-parent-div').toggleClass('expanded');
        $('.all-org-list').toggleClass('scale-down');
      }
    });
  </script>
  <script>
    $('.downArrow2').click(function () {
      // Check if the screen width is less than or equal to 767px (typical mobile screen width)
      if ($(window).width() <= 500) {
        $('.righside-parent-div-attendee').toggleClass('expanded');
        $('.all-org-list').toggleClass('scale-down');
      }
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

  @livewireScripts
</body>

</html>