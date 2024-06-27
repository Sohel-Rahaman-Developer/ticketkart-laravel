$(".ul-tb-switch-ticket li").click(function(){
    $(".ul-tb-switch-ticket li").removeClass("tab-active-ticket");
    $(this).addClass("tab-active-ticket");
    var tabIndex = $(this).index();
    $(".tickets-tab-ticket, .promo-tab-ticket").removeClass("active-ticket");
    if(tabIndex === 0) {
        $(".tickets-tab-ticket").addClass("active-ticket");
    } else if (tabIndex === 1) {
        $(".promo-tab-ticket").addClass("active-ticket");
    }
});

function toggleDateTimeSelector(type, show) {
    var datetimeSelectorId = type === 'start' ? 'startDatetimeSelector' : 'endDatetimeSelector';
    var datetimeSelector = document.getElementById(datetimeSelectorId);
    if (show) {
        datetimeSelector.style.display = 'block';
    } else {
        datetimeSelector.style.display = 'none';
    }
}


// add ticket modal 

const addTicketBtn = document.getElementById("add-ticket-btn");
        const ticketModal = document.getElementById("ticketModal");

        // Function to open the modal
        function openTicketModal() {
            ticketModal.style.display = "block";
        }

        // Function to close the modal
        function closeTicketModal() {
            ticketModal.style.display = "none";
        }

        // Event listener for clicking on the "Add Ticket" button
        addTicketBtn.addEventListener("click", function () {
            openTicketModal();
        });

        // Event listener to close the modal when clicking on the close button
        document.querySelector(".add_tick-modal-content .add_tick-close").addEventListener("click", function () {
            closeTicketModal();
        });

        // Event listener to close the modal when clicking outside of it
        window.addEventListener("click", function (event) {
            if (event.target === ticketModal) {
                closeTicketModal();
            }
        });
        if(window.location.href === 'https://dev.hostdaddy.net.in/ticketkartorganiserfinal/ticket.html' || window.location.href === "http://127.0.0.1:5500/ticket.html" || window.location.href === "http://127.0.0.1:5500/ticket-publish.html") {
            // Add class 'deActive-menucon' to elements with class 'menuCon'
            $(".menuCon").addClass("deActive-menucon");
            // Hide elements with class 'left-menu-icon-dashboard'
            $(".left-menu-icon-dashboard").hide();
            $('.menuLi').removeClass('leftMenuActive');

                        $(".leftManage").toggleClass("show-manage");
                        // $(".log-out-btn").toggleClass("ex-padding");
                        // $(".log-out-btn2").toggleClass("ex-padding2");
                        // $(".logOutBtnJs").toggleClass("deActive-menucon");
            
                        // Toggle the 'deActive' class on the '.menuParent' itself
                        // $(".menuParent").addClass("deActive");
        }


        function toggleDateTimeSelectorb(type, show) {
            var datetimeSelectorId = type === 'start' ? 'startDatetimeSelectorb' : 'endDatetimeSelectorb';
            var datetimeSelector = document.getElementById(datetimeSelectorId);
            if (show) {
                datetimeSelector.style.display = 'block';
            } else {
                datetimeSelector.style.display = 'none';
            }
        }
        

        $(".advance-settings").hide();
    
        // Toggle the advance settings when .settings-ad-t is clicked
        $(".settings-ad-t").click(function(){
            $(".advance-settings").slideToggle("slow");
        });


        
        $('.toggle-offcanvas').click(function(){
            var offcanvas = $('.offcanvas');
            if (offcanvas.hasClass('show')) {
                offcanvas.slideUp().removeClass('show');
                $('body').removeClass('offcanvas-open');
            } else {
                offcanvas.slideDown().addClass('show');
                $('body').addClass('offcanvas-open');
            }
        });
        
        $('.close-offcanvas').click(function(){
            $('.offcanvas').slideUp().removeClass('show');
            $('body').removeClass('offcanvas-open');
        });
        
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.offcanvas').length && !$(e.target).closest('.toggle-offcanvas').length) {
                $('.offcanvas').slideUp().removeClass('show');
                $('body').removeClass('offcanvas-open');
            }
        });
    
        $(document).ready(function(){
            $('.after-pub-menu').click(function(){
                $(this).next('.after-pub-ul').slideToggle('slow');
                $(this).find('i').toggleClass('rotate-publish');
            });
        });
