<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Cards</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="resources\css\nav.css" />
    <link rel="stylesheet" href="resources\css\sidebar.css" />
    <link rel="stylesheet" href="resources\css\cards.css" />
</head>
<body >
    <!-- navbar -->
    @include('layouts.header');
    <!-- sidebar -->
    @include('layouts.sidebar');
    <!-- home -->
    <div class="container-fluid home-section">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-10">
                <div id="borr" class="mt-4 py-2">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <div class="justify-content-start my-2 d-flex">
                                <a href="{{url('home')}}"><img src="public\image\add\ph_arrow-left-bold.png" alt="" class="ms-2"></a>
                                <a class="mx-2 " href="{{url('edit')}}"><i class="bi bi-pencil-square fs-5 p-2 rounded-circle ms-2"></i></a>
                                <a class="mx-2" data-bs-toggle="modal" data-bs-target="#myModal"><i class="card-del bi bi-trash fs-5 p-2 rounded-circle ms-2"></i></a>
                                <a class="mx-2" href="{{url('setting')}}"><i class="bi bi-gear fs-5 p-2 rounded-circle ms-2"></i></a>
                            </div>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 mt-4">
                                                <img src="public\image\settings\amico.png" alt="">
                                            </div>
                                            <p style="text-align: center;">Are you sure you want to delete this card?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="row justify-content-center">
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <button class="no me-5">No</button>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <button class="no">Yes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                            <div class="text-center my-2">
                                <button type="button" href="" class="wel-4 btn-btn py-1 mt-xs-4 add-card-parent ms-3"><h6 class="mx-3 my-1" style="color: white;">Add Card</h6>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card my-2 text-center" id="card-1">
                    <div class="card-title mx-auto d-flex mt-3">
                        <h5 class="card-tit mt-1">Cards</h5><a href=""><i class="bi bi-plus-circle fs-3 mx-2" style="color:black"></i></a>
                    </div>
                    @foreach ($list as $lists)
                        <a href="cardname/{{ $lists->id  }}" class="card-bp my-3 map-point-sm" style="text-decoration: none">{{ $lists->card_name }}</a>
                        {{-- <h6 class="card-bp my-3 map-point-sm" data-bs-toggle="tab" data-show=".personal">{{ $lists->card_name }}</h6> --}}
                    @endforeach
                    {{-- <div class="" >
                        <h6 class="card-bp my-3" data-bs-toggle="tab">list</h6>
                    </div>
                    <div class="map-point-sm" data-show=".work">
                        <h6 class="card-bw my-2 me-4 mb-5">Work</h6>
                    </div> --}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-6 text-center">
                <div class="card my-4" id="card-2">
                    <div class="map-container">
                        <div class="inner-basic division-map div-toggle" data-target=".division-details" id="divisiondetail">
                            <div class="row justify-content-start">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                    <div class="map-point-sm" data-show=".darwin">
                                        <div class="content">
                                            <div class="centered-y">
                                                <p class="card-t1">Card View</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                    <div class="map-point-sm" data-show=".ptown">
                                        <div class="content">
                                            <div class="centered-y">
                                                <p class="card-t1">Send Card</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map-container ">
                        <div class="personal">
                        <div class="row justify-content-start my-4 darwin  initialmsg">
                                <div class="col-xs-5 col-sm-5 col-md-7 col-lg-7">
                                    <div class="card ms-5" id="card-3">
                                        @foreach ($list as $lists)
                                        <img src="public\image\cards\Rectangle 2010.png" alt="">
                                        <div class="text-start ms-4 my-3">
                                            <h5 class="nme">{{ $lists->first_name }} {{ $lists->middle_name }} .{{ $lists->last_name }}</h5>
                                            <h6 class="rle">{{ $lists->desgination }}</h6>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                <div class="wp-num d-flex mx-1">
                                                    <div class="row">
                                                        <div class="col-4"><i class="bi bi-whatsapp text-light ms-3 my-1 "></i></div>
                                                        <div class="col-8"><h6 class="num mt-3">{{ $lists->social_media_links }}</h6></div>
                                                    </div>
                                                </div>
                                                <div class="wp-num d-flex mx-1 my-3">
                                                    <div class="row">
                                                        <div class="col-3"><i class="bi bi-envelope text-light ms-3 my-1"></i></div>
                                                        <div class="col-9"><h6 class="num mt-3">praveen3@gmail.com</h6></div>
                                                    </div>
                                                </div>
                                                <div class="wp-num d-flex mx-1 mb-3">
                                                    <div class="row">
                                                        <div class="col-4"><i class="bi bi-telephone text-light ms-3 my-1"></i></div>
                                                        <div class="col-8"><h6 class="num mt-3">Make a call</h6></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-start my-4 ptown hide">
                                <div class="col-xs-5 col-sm-5 col-md-7 col-lg-7">
                                    <div class="card ms-5" id="card-3">
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
                        <div class="inner-basic division-details work hide">
                            <div class="row justify-content-start my-4 darwin  initialmsg">
                                <div class="col-xs-5 col-sm-5 col-md-7 col-lg-7">
                                    <div class="card ms-5" id="card-3">
                                        <img src="public\image\cards\Rectangle 2010.png" alt="">
                                        <div class="text-start ms-4 my-3">
                                            <h5 class="nme">Praveen</h5>
                                            <h6 class="rle">Sales Manager</h6>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                <div class="wp-num d-flex mx-1">
                                                    <div class="row">
                                                        <div class="col-4"><i class="bi bi-whatsapp text-light ms-3 my-1 "></i></div>
                                                        <div class="col-8"><h6 class="num mt-3">7010805798</h6></div>
                                                    </div>
                                                </div>
                                                <div class="wp-num d-flex mx-1 my-3">
                                                    <div class="row">
                                                        <div class="col-3"><i class="bi bi-whatsapp text-light ms-3 my-1"></i></div>
                                                        <div class="col-9"><h6 class="num mt-3">thivinn3@gmail.com</h6></div>
                                                    </div>
                                                </div>
                                                <div class="wp-num d-flex mx-1 mb-3">
                                                    <div class="row">
                                                        <div class="col-4"><i class="bi bi-telephone text-light ms-3 my-1"></i></div>
                                                        <div class="col-8"><h6 class="num mt-3">Make a call</h6></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-start my-4 ptown hide">
                                <div class="col-xs-5 col-sm-5 col-md-7 col-lg-7">
                                    <div class="card ms-5" id="card-3">
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
    <script>
           $(document).on('click', '.map-point-sm', function() {
            var show = $(this).data('show');
            $(show).removeClass("hide").siblings().addClass("hide");
            });

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
