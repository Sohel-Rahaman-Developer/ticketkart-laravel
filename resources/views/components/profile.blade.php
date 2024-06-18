<div>
    <div class="org-con ">
        <div class="text-center mb-2 mt-2">
          <strong>Customer ID: {{ Auth::user()->customerID }}</strong>
        </div>
        <div class="all-org-list scale-down">
          <div class="d-flex justify-content-between mb-2">
            <div class="">Profile</div>
            <div class="">
              <a href="#" class="text-primary">
                <img src="./images/attandee/profile.svg" alt="" width="25px">
              </a>
            </div>
          </div>
          <div class="d-flex justify-content-between booking-my">
            <div class="">My Booking</div>
            <div class="">
              <a href="">
                <img src="./images/attandee/profile.svg" alt="" width="25px">
              </a>
            </div>
          </div>
          <div class="areYouOrga d-none d-lg-block">
            <a> Are you an organiser ? </a>
          </div>
          <div class="createYevent d-none d-lg-block">
            <a href=""> Create your event </a>
          </div>
        </div>
    </div>
</div>