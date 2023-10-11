<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" />
    <link rel="stylesheet" href="resources\css\nav.css" />
    <link rel="stylesheet" href="resources\css\sidebar.css" />
    <link rel="stylesheet" href="resources\css\cards.css" />
</head>
<body style=" background-color: #f4eeeb;">
     <!-- navbar -->
     @include('layouts.header');
     <!-- sidebar -->
     @include('layouts.sidebar');
     <!-- home -->
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <section class="home-section">
                    <div class="container" id="borr">
                        <div class="row py-2" style="border: 0.4px solid rgba(157, 111, 78, 0.30);
                            border-radius: 12px;margin-left: 66px;">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="justify-content-center my-2 d-flex">
                                    <a class="mx-4" href="{{url('edit')}}"><i class="bi bi-pencil-square fs-5 p-2 rounded-circle"></i></a>
                                    <a class="mx-4" href=""><i class="card-del bi bi-trash fs-5 p-2 rounded-circle"></i></a>
                                    <a class="mx-4" href="{{url('setting')}}"><i class="bi bi-gear fs-5 p-2 rounded-circle"></i></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="text-center my-2">
                                    <button type="button" href="" class="wel-4 btn-btn py-1 mt-xs-4 add-card-parent"><h6 class="mx-3 my-1" style="color: white;">Add Card</h6>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="card mt-4 ms-3" id="card-1">
                                    <div class="card-title mx-auto d-flex mt-3">
                                        <h5 class="card-tit mt-1">Cards</h5><a href=""><i class="bi bi-plus-circle fs-3 mx-2"></i></a>
                                    </div>
                                    <h6 class="card-bp ms-5 my-3" data-bs-toggle="tab">Personal</h6>
                                    <h6 class="card-bw ms-5 my-2 mb-5">Work</h6>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <div class="card my-4" id="card-2">
                                    <div class="nav flex-row justify-content-start mt-4" id="card-ti2">
                                        <a href="" data-bs-toggle="tab" data-bs-target="#profile-overview"><h5 class="card-t1 mx-4">Card View</h5></a>
                                        <a href="" data-bs-toggle="tab" data-bs-target="#profile-vv"><h5 class="card-t2">Send Card</h5></a>
                                    </div>
                                    <div class="tab-content pt-2 w-75 mx-auto">
                                        <div class="tab-pane fade show active w-100" id="profile-overview">
                                            <div class="row my-4">
                                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                                                    <div class="card" id="card-3">
                                                        <img src="public\image\cards\Rectangle 2010.png" alt="">
                                                        <div class="ms-3">
                                                            <h5 class="nme">Praveen</h5>
                                                            <h6 class="rle">Sales Manager</h6>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                                    <div class="wp-num d-flex mx-1">
                                                                        <div class="row">
                                                                            <div class="col-4"><i class="bi bi-whatsapp text-light ms-2 my-1"></i></div>
                                                                            <div class="col-8"><h6 class="num mt-3">7010805798</h6></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wp-num d-flex mx-1 my-3">
                                                                        <div class="row">
                                                                            <div class="col-3"><i class="bi bi-whatsapp text-light ms-2 my-1"></i></div>
                                                                            <div class="col-9"><h6 class="num mt-3">thivinn3@gmail.com</h6></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wp-num d-flex mx-1 mb-3">
                                                                        <div class="row">
                                                                            <div class="col-4"><i class="bi bi-telephone text-light ms-2 my-1"></i></div>
                                                                            <div class="col-8"><h6 class="num mt-3">Make a call</h6></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade profile-edit w-100" id="profile-vv">
                                            <div class="row my-4">
                                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                                                    <div class="card" id="card-3">
                                                        <!-- Tab panes -->
                                                        <div class="tab-content">
                                                            <div id="home" class="container tab-pane active">
                                                                <div class="card" style="border: none;">
                                                                    <div class="card-title text-center">
                                                                        <h3 class="nme mt-4">Send Card</h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="text-center my-1">
                                                                            <div class="row justify-content-center">
                                                                                <img class="img-thumbnail w-75 border-0" src="public\image\cards\qr-code.png" alt="">
                                                                            </div>
                                                                            <div class="row justify-content-center text-dark mt-2">Scan or Click to preview</div>
                                                                            <div class="btn" type="button"          style="border: 0.7px solid #D06189;     color:#D06189;">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy mx-2" viewBox="0 0 16 16">
                                                                                    <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6ZM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1H2Z"/>
                                                                                </svg>Copy Link
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="menu1" class="container tab-pane fade w-100">
                                                                <div class="card" style="border: none">
                                                                    <div class="card-title text-center">
                                                                        <h3 class="nme mt-4">Send Card</h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="text-start">
                                                                            <h6 class="per-card">Email your Personal card to:</h6>
                                                                            <div class="form-group">
                                                                                <label for="usr" class="int-con">Name:</label>
                                                                                <input type="text" id="inpt" class="form-control border-bottom" id="usr">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="usr" class="int-con">Email:</label>
                                                                                <input type="text" id="inpt" class="form-control border-bottom" id="usr">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="usr" class="int-con">Message:</label>
                                                                                <input type="textarea" id="inpt" class="form-control border-bottom" id="usr">
                                                                            </div>
                                                                            <div class="btn w-100 mt-5" id="send-btn" type="button">SEND</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <div id="menu2" class="container tab-pane fade w-100"><br>
                                                            <div class="card" style="border: none">
                                                                <div class="card-title text-center">
                                                                    <h3 class="nme mt-4">Send Card</h3>
                                                                    <h6 class="per-card mx-5">You’ll need a text message application in your Pc to send Messages.</h6>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="text-start">
                                                                        <h6 class="text-dark">Email your Personal card to:</h6>
                                                                        <div class="form-group">
                                                                            <label for="usr" class="int-con">Name:</label>
                                                                            <input type="text" id="inpt" class="form-control border-bottom" id="usr">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="usr" class="int-con"> <img src="public\image\cards\🦆 icon _India_.png" alt=""> Phone Number:</label>
                                                                            <input type="text" id="inpt" class="form-control border-bottom" id="usr">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="usr" class="int-con">Message:</label>
                                                                            <input type="textarea" id="inpt" class="form-control border-bottom" id="usr">
                                                                        </div>
                                                                        <div class="btn w-100 mt-5" id="send-btn" type="button">SEND</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <!-- Nav pills -->
                                                        <ul class="nav flex-row mx-auto justify-content-center scan my-3" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-bs-toggle="pill" href="#home">
                                                                    <div class="text-center"><i class="bi bi-qr-code-scan"></i></div>
                                                                    <div>CODE</div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-bs-toggle="pill" href="#menu1">
                                                                    <div class="text-center"><i class="bi bi-envelope-fill"></i></div>
                                                                    <div>EMAIL</div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-bs-toggle="pill" href="#menu2">
                                                                    <div class="text-center"><i class="bi bi-chat-right-text-fill"></i></div>
                                                                    <div>TEXT</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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
