 // Attach a click event listener to the element with the class 'menuParent'
 $(".left-menu-icon-dashboard").click(function () {
    $(".left-menu-icon-dashboard").toggleClass("activeMenuItem inactiveMenuItem");
    // Toggle the 'deActive-menucon' class on all '.menuCon' elements
    $(".menuCon").toggleClass("deActive-menucon");
    $(".leftManage").toggleClass("show-manage");
    $(".log-out-btn").toggleClass("ex-padding");
    $(".log-out-btn2").toggleClass("ex-padding2");
    $(".logOutBtnJs").toggleClass("deActive-menucon");
    // Toggle the 'deActive' class on the '.menuParent' itself
    $(".menuParent").toggleClass("deActive");
  });
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
//   <!-- organiser dashboard -->
  $(".manage-items").click(function () {
    $(".all-manage-item").slideToggle();
    $(".manage-visibility").toggleClass("rotate");
    $(".manage-visibility").text(function (i, text) {
      return text === "+" ? "-" : "+";
    });
  });
  
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
  $('.downArrow').click(function () {
    // Check if the screen width is less than or equal to 767px (typical mobile screen width)
    if ($(window).width() <= 500) {
      $('.righside-parent-div').toggleClass('expanded');
      $('.all-org-list').toggleClass('scale-down');
    }
  });
  $('.downArrow2').click(function () {
    // Check if the screen width is less than or equal to 767px (typical mobile screen width)
    if ($(window).width() <= 500) {
      $('.righside-parent-div-attendee').toggleClass('expanded');
      $('.all-org-list').toggleClass('scale-down');
    }
  });
//   <!-- tooltip custom js start -->

     document.addEventListener('DOMContentLoaded', function () {
        const tooltipElements = document.querySelectorAll('[data-tooltip]');
        tooltipElements.forEach(elem => {
           const tooltipText = elem.getAttribute('data-tooltip');
           const tooltip = document.createElement('div');
           tooltip.className = 'tooltip-custom';
           tooltip.innerText = tooltipText;
           document.body.appendChild(tooltip);

           elem.addEventListener('mouseenter', function (e) {
              tooltip.style.display = 'block';
              positionTooltip(e, tooltip, elem);
           });

           elem.addEventListener('mouseleave', function () {
              tooltip.style.display = 'none';
           });

           elem.addEventListener('mousemove', function (e) {
              positionTooltip(e, tooltip, elem);
           });
        });

        function positionTooltip(e, tooltip, elem) {
           const rect = elem.getBoundingClientRect();
           const tooltipWidth = tooltip.offsetWidth;
           const tooltipHeight = tooltip.offsetHeight;
           const screenWidth = window.innerWidth;

           let left = e.pageX - tooltipWidth / 2;
           let top = e.pageY - tooltipHeight - 10;

           if (left < 0) {
              left = 0;
           }

           if (left + tooltipWidth > screenWidth) {
              left = screenWidth - tooltipWidth;
           }

           tooltip.style.left = `${left}px`;
           tooltip.style.top = `${top}px`;
        }
     });

//   <!-- tooltip custom js end -->

// add-organiser
  // Update progress function
  function updateProgress(current, total) {
    var progressBar = document.getElementById("progressBarListEvent");
    var progCon = document.getElementById("prog-con");
    var progressPercent = (current / total) * 100;
    progressBar.style.width = progressPercent + "%";
    progCon.innerText = current + " / " + total;
}

// Example usage:
// Update progress to 5 out of 20
updateProgress(0, 20);

$(function () {
    $('#daterange').daterangepicker({
        opens: 'left',
        autoUpdateInput: false, // Ensure the input is empty initially
        maxSpan: {
            "months": 36
        },
        locale: {
            cancelLabel: 'Clear' // Label for the cancel button
        }
    });

    $('#daterange').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
    });

    $('#daterange').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });
});
$('.focus-date').on('click', function () {
    $('#daterange').focus();
});

// after-publish-dashboard
document.addEventListener("DOMContentLoaded", function () {
    const openModalBtn = document.getElementById("openModalBtn");
    const closeModalBtn = document.getElementById("closeModalBtn");
    const modalOverlay = document.getElementById("agendaModalOverlay");

    const openFaqModalBtn = document.getElementById("openFaqModalBtn");
    const closeFaqModalBtn = document.getElementById("closeFaqModalBtn");
    const faqModalOverlay = document.getElementById("faqModalOverlay");

    openModalBtn.addEventListener("click", function () {
        modalOverlay.style.display = "block";
    });

    closeModalBtn.addEventListener("click", function () {
        modalOverlay.style.display = "none";
    });

    modalOverlay.addEventListener("click", function (event) {
        if (event.target === modalOverlay) {
            modalOverlay.style.display = "none";
        }
    });

    openFaqModalBtn.addEventListener("click", function () {
        faqModalOverlay.style.display = "block";
    });

    closeFaqModalBtn.addEventListener("click", function () {
        faqModalOverlay.style.display = "none";
    });

    faqModalOverlay.addEventListener("click", function (event) {
        if (event.target === faqModalOverlay) {
            faqModalOverlay.style.display = "none";
        }
    });
});
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
document.getElementById('availableQuantity').addEventListener('input', function (e) {
    let value = e.target.value;
    // Remove non-numeric characters
    value = value.replace(/[^0-9]/g, '');
    // Convert to number
    let numericValue = parseInt(value, 10);
    // Check if numericValue is a valid number
    if (isNaN(numericValue)) {
        e.target.value = '';
    } else {
        // Enforce min and max
        if (numericValue < 1) {
            numericValue = 1;
        } else if (numericValue > 50000) {
            numericValue = 50000;
        }
        // Set the validated value back to the input
        e.target.value = numericValue;
    }
});
// <!-- icrement and decriment -->

document.addEventListener("DOMContentLoaded", function () {
    const decrementBtn = document.getElementById('decrement-btn');
    const incrementBtn = document.getElementById('increment-btn');
    const counter = document.getElementById('counter');

    decrementBtn.addEventListener('click', function () {
        let currentValue = parseInt(counter.textContent);
        if (currentValue > 1) {
            counter.textContent = currentValue - 1;
        }
    });

    incrementBtn.addEventListener('click', function () {
        let currentValue = parseInt(counter.textContent);
        counter.textContent = currentValue + 1;
    });
});
$(document).ready(function(){
    $('.after-pub-menu').click(function(){
        $(this).next('.after-pub-ul').slideToggle('slow');
        $(this).find('i').toggleClass('rotate-publish');
    });
});


    $('.report-shedule-btn').click(function () {
        $('.dynamic-box').slideToggle('slow');
    });

    $('.close-modal').click(function () {
        $('.dynamic-box').slideUp('slow');
    });


// create role

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

    function toggleVisibility(elementId) {
        var element = document.getElementById(elementId);
        if (element.style.display === "none") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }