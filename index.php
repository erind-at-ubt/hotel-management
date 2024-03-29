<?php include 'includes/header.php';?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Management System</title>
    <style>
      .guest-thumbnail{
        width: 50px;
        height: 50px;
        border-radius: 100px;
        object-fit: contain;
      }
    </style>
  </head>
  <body>

    <!-- Preloader -->
          <!-- Add this to the beginning of your HTML file -->
          <!-- Test comment -->
          <div id="preloader">
            <div id="loader"></div>
          </div>

          <!-- Add your website content here -->
          <div id="content" style="display: none;">
                <!-- This is header section -->
    <div class="container-fluid p-4 text-center" style="background-color: #fff;">
      <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
          <h3 class="text-green-200" id="logo">Hotel MS</h3>
        </div>
        <div class="col-6">
          
        </div>
        <div class="col d-flex align-items-center">
          <a href="main/register.php"><i class="fa-solid fa-user" id="username-icon"></i></a>
          <div class="d-flex flex-column align-items-center justify-content-center" id="user-content">
              <h5 id="username-text">username</h5>
              <p id="job-position">Job Position</p>
          </div>
          <i class="fa-solid fa-right-from-bracket" id="logout-icon"></i>
          
        </div>
      </div>
  </div>
  <!-- This is the start of dashboard -->
  <div class="container-fluid">
      <div class="row h-100">
          <div class="col-md-2 vh-100 d-flex flex-column pt-5 align-items-center"  style="background-color: #ECF3F3;">
              <a class="btn btn-primary hotel-menu-nav" href="index.html" role="button"><i class="fa-solid fa-house"></i> Home</a>
              <a class="btn btn-primary hotel-menu-nav" href="room.html" role="button"><i class="fa-solid fa-bed"></i> Rooms</a>
              <a class="btn btn-primary hotel-menu-nav" href="guest.html" role="button"><i class="fa-solid fa-user"></i> Guest</a>
              <a class="btn btn-primary hotel-menu-nav" href="booking.html" role="button"><i class="fa-solid fa-calendar"></i> Booking</a>
              <a class="btn btn-primary hotel-menu-nav" href="messages.html" role="button"><i class="fa-solid fa-envelope"></i> Message</a>
              <a class="btn btn-primary hotel-menu-nav" href="settings.html" role="button"><i class="fa-solid fa-wrench"></i> Settings</a>
              
            
          </div>
          <div class="col-md-10 p-5 vh-100 d-flex flex-column">
              <div class="row pt-3 pb-2" style="background-color: #ECF3F3;">
                  <div class="col-md-2 d-flex flex-column ">
                      <p id="current_day">Today</p>
                      <b><h3 id="current_date">10/12/2023</h3></b>
                  </div>
                  <div class="col-md-10 d-flex flex-row align-items-center justify-content-end">
                      <select name="" id="rooms-select">
                          <option value="">All rooms</option>
                          <option value="">All rooms</option>
                          <option value="">All rooms</option>
                      </select>
                      <a class="btn theme-button" id="dashboard-button" href="#" role="button"><i class="fa-solid fa-plus" style="margin-right: 10px;"></i>Create New Booking</a>
                  </div>
              </div>
              <!--Lateset Booking Content -->
              <div class="row p-3 d-flex dashboard-content">
                  <div class="col d-flex flex-column">
                    <h5>Latest Bookings</h5>
                    <div class="col d-flex flex-row card-container">
                      <div class="col-md-2 booking-cards">
                        <h6 class="card-title">Booking Title</h6>
                        <p class="card-info card-number-persons"><i class="fa-solid fa-bed"></i> Deluxe Room</p>
                        <p class="card-info card-number-persons"><i class="fa-solid fa-person"></i> 3 persons</p>
                        <p class="card-info card-date"><i class="fa-solid fa-calendar-days"></i>28/04/2023</p>
                        <b><p class="card-info card-person">Erind Blinishti</p></b>
                        <a class="btn theme-button" id="dashboard-button" href="#" role="button" style="width: 150px; margin-left: -0px;" >See more</a>
                      </div>
                      <div class="col-md-2 booking-cards">
                        <h6 class="card-title">Booking Title</h6>
                        <p class="card-info card-number-persons"><i class="fa-solid fa-bed"></i> Deluxe Room</p>
                        <p class="card-info card-number-persons"><i class="fa-solid fa-person"></i> 3 persons</p>
                        <p class="card-info card-date"><i class="fa-solid fa-calendar-days"></i>28/04/2023</p>
                        <b><p class="card-info card-person">Erind Blinishti</p></b>
                        <a class="btn theme-button" id="dashboard-button" href="#" role="button" style="width: 150px; margin-left: -0px;" >See more</a>
                      </div>
                    </div> 
                  </div>
              </div>
              <!-- Statistics & others content -->
              <div class="row d-flex flex-row mt-3 justify-content-between">
                <div class="col-md-3 p-3 dashboard-content">
                  <h6>Recent guests</h6>
                  <hr style="color: #999;">
                  <div class="d-flex flex-column clients-container py-2">
                    <!-- Clients -->
                    <div class="client my-2 p-3 d-flex flex-row align-items-center">
                      <div class="col-md-10 d-flex flex-row align-items-center">
                        <img src="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/assets/images/users/9.jpg" alt="" class="guest-thumbnail">
                      <div class="client-info d-flex flex-column justify-content-center">
                            <p class="client-name">Elton Bajraliu</p>
                            <p class="client-id">Client ID: #12345</p>
                      </div>
                      </div>
                      <div class="col-md-2">
                        <div class="client-price d-flex justify-content-center align-items-center">
                          <p class="client-total">$789</p>
                        </div>
                      </div>
                      
                    </div>
                    <div class="client my-2 p-3 d-flex flex-row align-items-center">
                      <div class="col-md-10 d-flex flex-row align-items-center">
                        <img src="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/assets/images/users/9.jpg" alt="" class="guest-thumbnail">
                      <div class="client-info d-flex flex-column justify-content-center">
                            <p class="client-name">Elton Bajraliu</p>
                            <p class="client-id">Client ID: #12345</p>
                      </div>
                      </div>
                      <div class="col-md-2">
                        <div class="client-price d-flex justify-content-center align-items-center">
                          <p class="client-total">$789</p>
                        </div>
                      </div>
                      
                    </div><div class="client my-2 p-3 d-flex flex-row align-items-center">
                      <div class="col-md-10 d-flex flex-row align-items-center">
                        <img src="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/assets/images/users/9.jpg" alt="" class="guest-thumbnail">
                      <div class="client-info d-flex flex-column justify-content-center">
                            <p class="client-name">Elton Bajraliu</p>
                            <p class="client-id">Client ID: #12345</p>
                      </div>
                      </div>
                      <div class="col-md-2">
                        <div class="client-price d-flex justify-content-center align-items-center">
                          <p class="client-total">$789</p>
                        </div>
                      </div>
                      
                    </div>
                    
                    <!-- Clients -->
                  </div>
                </div>
                <div class="col-md-3 p-3 dashboard-content">
                  sd
                </div>
                <div class="col-md-5 dashboard-content">
                  sd
                </div>
              </div>
              
          </div>
        </div>
  </div>







          </div>



    
    

</body>
</html>