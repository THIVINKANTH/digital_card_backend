<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" />
    <link rel="stylesheet" href="resources\css\nav.css" />
    <link rel="stylesheet" href="resources\css\sidebar.css" />
    <link rel="stylesheet" href="resources\css\settings.css" />
    <style>
    </style>
</head>
<body style="background-color: #f4eeeb">
     <!-- navbar -->
     @include('layouts.header');
     <!-- sidebar -->
     @include('layouts.sidebar');

     <!-- home -->
        <div class="container">
            <div class="row justify-content-center mt-3 mx-5" id="set">
                <p id="set-text" class="mt-3"><i class="bi bi-arrow-left me-3"></i>Settings</p>
            </div>
            <div class="row justify-content-center mt-3 mx-5">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mt-5" id="details">
                    <div  class="nav flex-column nav-tabs mb-3" id="v-tabs-tab " role="tablist" aria-orientation="vertical">
                        <a class="nav-link tab active mt-3" id="v-tabs-profile-tab" data-mdb-toggle="tab" href="#v-tabs-profile" role="tab" aria-controls="v-tabs-profile" aria-selected="true"><i class="bi bi-person me-3"></i>Profile</a>
                        <a class="nav-link tab  mt-3" id="v-tabs-account-tab" data-mdb-toggle="tab" href="#v-tabs-account" role="tab" aria-controls="v-tabs-account" aria-selected="false"><i class="bi bi-person-bounding-box me-3"></i>Account</a>
                        <a class="nav-link tab mt-3" id="v-tabs-contacts-tab" data-mdb-toggle="tab" href="#v-tabs-contacts" role="tab" aria-controls="v-tabs-contacts" aria-selected="false"><i class="bi bi-arrow-repeat me-3"></i>Sync Contacts</a>
                        <a class="nav-link tab mt-3" id="v-tabs-advance-tab" data-mdb-toggle="tab" href="#v-tabs-advance" role="tab" aria-controls="v-tabs-advance" aria-selected="false"><i class="bi bi-award me-3"></i>Advanced Features</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 mt-5 " >
                    <div class="tab-content ms-5" id="v-tabs-tabContent">
                        <div  class="tab-pane subscription fade show active " id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
                           <div class="d-flex">
                            <p id="sub" class="ms-3 mt-2 text-start"><i class="bi bi-window-plus me-3"></i>Subscription</p>
                            <button type="submit" class="ms-auto me-3 mt-2" id="upgrade"><i class="bi bi-plus me-3"></i>Upgrade plan</button>
                           </div>
                           <p id="search" class="ms-5 mt-3 mb-3">Search Soft Free</p>
                        </div>
                        <div  class="tab-pane edit fade show active mt-3" id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
                            <p id="sub" class="ms-3 mt-2 text-start"><i class="bi bi-person me-3"></i>My Profile</p>
                            <div class="d-flex ms-5 mt-2 ">
                                <img src="public\image\home\profile-img.png" alt="profile" style="width: 71px;height: 70px;">
                                <div>
                                    <p id="user-name" class="ms-3 ">Praveen kumar</p>
                                    <div class="d-flex">
                                        <p id="free-user" class="ms-3">Free User</p>
                                        <button class="ms-auto" id="edit">Edit<i class="bi bi-pencil-square "></i></button>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>

                    <div
                    class="tab-pane fade"
                    id="v-tabs-account"
                    role="tabpanel"
                    aria-labelledby="v-tabs-account-tab"
                  >
                    Profile content
                  </div>

                </div>
            </div>
        </div>


    <script>
        let sidebar = document.querySelector(".sidebar");
         let closeBtn = document.querySelector("#btn");
         let searchBtn = document.querySelector(".bx-search");

         closeBtn.addEventListener("click", () => {
           sidebar.classList.toggle("open");
           menuBtnChange(); //calling the function(optional)
         });

         searchBtn.addEventListener("click", () => {
           // Sidebar open when you click on the search iocn
           sidebar.classList.toggle("open");
           menuBtnChange(); //calling the function(optional)
         });

         // following are the code to change sidebar button(optional)
         function menuBtnChange() {
           if (sidebar.classList.contains("open")) {
             closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
           } else {
             closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
           }
         }

   </script>
</body>
</html>
