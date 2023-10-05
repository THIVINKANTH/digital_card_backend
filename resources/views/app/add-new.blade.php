<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Cards</title>
    <link rel="stylesheet" href="resources\css\nav.css" />
    <link rel="stylesheet" href="resources\css\sidebar.css" />
    <link rel="stylesheet" href="resources\css\add-new.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" />
    <style>
        .form-control
        {
            width: 329px;
        }
    </style>
</head>
<body >
    <!-- navbar -->
    @include('layouts.header');
    <!-- sidebar -->
    @include('layouts.sidebar');

    <!-- home -->
    <div class="container">
        <div class="row justify-content-center mt-5 ms-5">
            <div class="ms-lg-5 ms-0 ps-lg-5 ps-0">
                <label for="names" id="name-label" class="form-label">Label this Card</label>
                <input type="text" id="names" class="form-control" >
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 mt-5">
                <div class="conatiner ms-lg-5 ms-md-0 ms-0" >
                    <div id="add-new">
                        <img src="public/image/add-new-img/add-new.png" alt="add" style="width: 370px;
                        height: 250px;
                        margin-left: -26px;">
                    </div>
                    <div class="mt-3">
                       <ul class="d-flex" style="overflow-x: scroll; overflow-y: hidden; width: 340px;">
                        <div class="col mx-2" >
                            <p id="color"></p>
                        </div>
                        <div class="col mx-2">
                            <p id="colors" style="background-color: #d06189;"></p>
                        </div>
                        <div class="col mx-2">
                            <p id="colors" style="background-color: #c42626;"></p>
                        </div>
                        <div class="col mx-2">
                            <p id="colors" style="background-color: #9d6f4e;"></p>
                        </div>
                        <div class="col mx-2">
                            <p id="colors" style="background-color: #c0962b;"></p>
                        </div>
                        <div class="col mx-2">
                            <p id="colors" style="background-color: #32c22f;"></p>
                        </div>
                        <div class="col mx-2">
                            <p id="colors" style="background-color: #1cc2c2;"></p>
                        </div>
                        <div class="col mx-2">
                            <p id="colors" style="background-color: #418ace;"></p>
                        </div>
                        <div class="col mx-2">
                            <p id="colors" style="background-color: #272dc0;"></p>
                        </div>
                        <div class="col mx-2">
                            <p id="colors" style="background-color: #b440dd;"></p>
                        </div>
                        <div class="col mx-2">
                            <p id="colors" style="background-color: #2b2b2b;"></p>
                        </div>
                       </ul>
                    </div>
                    <div class="row mt-4 ">
                        <p id="name">Full name</p>
                        <form action="">
                            <div class="mx-2">
                                <label for="fullname" class="form-label">First name</label>
                                <input type="text" class="form-control" id="fullname">
                            </div>
                            <button type="submit" id="save" class="mt-4">SAVE</button>
                            <div class="mx-2 mt-3">
                                <label for="lastname" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastname">
                            </div>
                            <div class="mx-2 mt-3">
                                <label for="desgination" class="form-label">Desgination</label>
                                <input type="text" class="form-control" id="desgination">
                            </div>
                            <div class="mx-2 mt-3">
                                <label for="department" class="form-label">Department</label>
                                <input type="text" class="form-control" id="department">
                            </div>
                            <div class="mx-2 mt-3">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" id="company">
                            </div>
                            <div class="mx-2 mt-3">
                                <label for="headline" class="form-label">Headline</label>
                                <input type="text" class="form-control" id="headline">
                            </div>
                            <div class="mx-2 mt-3 mb-5">
                                <p id="socials">Social Media Links</p>
                                <button id="badge">Add Badge</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7 mt-5">
                <div class="row ms-xl-2 ms-lg-5 ms-md-2 ms-0">
                    <p id="first-card">Create your First Card</p>
                    <p id="ready">Ready to design your card ?  Pick a field below to get started !.</p>
                </div>
                <div class="row ms-xl-2 ms-lg-5 ms-md-2 ms-0 mt-3" id="img-card">
                    <div class="col mt-2">
                         <p id="img-head">Add Images</p>
                    </div>
                    <div class="col text-end me-3 mt-2">
                         <button id="change-btn">Change Layout</button>
                    </div>
                    <div class="row justify-content-evenly ">
                         <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3" id="change-img">
                             <i class="bi bi-plus-lg"></i>
                             <p id="change-img-head">Company Logo</p>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3" id="change-img">
                             <i class="bi bi-plus-lg"></i>
                             <p id="change-img-head">Company Logo</p>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3" id="change-img">
                             <i class="bi bi-plus-lg"></i>
                             <p id="change-img-head">Company Logo</p>
                         </div>
                    </div>
                </div>
                <div class="row ms-xl-2 ms-lg-5 ms-md-2 ms-0 mt-3" id="add-body">
                    <p id="add-more" class="mt-3">Add more information:</p>
                    <p id="gen">General</p>
                    <div class="row justify-content-evenly mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="add-details">
                            <i class="bi bi-buildings" id="add-icon"></i>
                            <p id="add-text">Company</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="add-details">
                            <i class="bi bi-browser-chrome" id="add-icon"></i>
                            <p id="add-text">Website</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="add-details">
                            <i class="bi bi-telephone-fill" id="add-icon"></i>
                            <p id="add-text">Phone</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="add-details">
                            <i class="bi bi-envelope-at" id="add-icon"></i>
                            <p id="add-text">E mail</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="add-details">
                            <i class="bi bi-geo-alt-fill" id="add-icon"></i>
                            <p id="add-text">Address</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="add-details">
                            <i class="bi bi-link-45deg" id="add-icon"></i>
                            <p id="add-text">Link</p>
                        </div>
                   </div>
                </div>
                <div class="row ms-xl-2 ms-lg-5 ms-md-2 ms-0 mt-3" id="social-body">
                    <p id="add-more" class="mt-3">Social Links</p>
                    <p id="links-head">Add a link to let people connect with you</p>
                    <div class="row justify-content-evenly mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <img src="public/image/add-new-img/insta.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/x.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/fb.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/whatsapp.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/telegram.png" alt="insta" id="link-img">
                        </div>
                   </div>
                   <!-- row-2 -->
                   <div class="row justify-content-evenly mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                        <img src="public/image/add-new-img/youtub.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/Group1.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/v.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/g2.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/linked-in.png" alt="insta" id="link-img">
                        </div>
                    </div>
                    <!-- row-3 -->
                   <div class="row justify-content-evenly mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                        <img src="public/image/add-new-img/git.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/paytm.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/gpay.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/day.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/google.png" alt="insta" id="link-img">
                        </div>
                    </div>
                     <!-- row-4 -->
                   <div class="row justify-content-evenly mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                        <img src="public/image/add-new-img/be.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/ball.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/skype.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/pdf.png" alt="insta" id="link-img">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                            <img src="public/image/add-new-img/k.png" alt="insta" id="link-img">
                        </div>
                    </div>
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
