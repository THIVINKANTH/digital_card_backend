<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Cards</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" />
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="{{asset('resources\slick-1.8.1 (1)\slick-1.8.1\slick\slick.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{asset('resources\slick-1.8.1 (1)\slick-1.8.1\slick\slick.css')}}"/>
    <link rel="stylesheet" href="resources\css\nav.css" />
    <link rel="stylesheet" href="resources\css\sidebar.css" />
    <link rel="stylesheet" href="resources\css\edit.css" />
</head>
<body >
    <!-- navbar -->
    @include('layouts.header');
    <!-- sidebar -->
    @include('layouts.sidebar');
    <!-- home -->
    <section class="home-section">
                    <div class="container">
                        <div class="row justify-content-center ">
                        <div id="edit-head" class="mt-3">
                                <div class="row justify-content-center">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="row justify-content-center mb-2">
                                        <div id="icon-back" class="mt-1 me-5">
                                                <a href="{{url('index')}}" class="bi bi-arrow-left" id="head-icon"></a>
                                            </div>
                                            <div id="icon-back" class="mt-1">
                                                <i class="bi bi-trash3" id="head-icon"></i>
                                            </div>
                                            <div id="icon-back" class="ms-4 mt-1">
                                                <i class="bi bi-copy " id="head-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="text-end mt-3">
                                            <button id="head-btn" class="me-lg-3 me-md-3 me-5">Cancel</button>
                                            <button  class="change">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-5">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 mb-5 text-start">
                                    <div class="rectangle-div ms-5">
                                        <div id="big-imagethe">
                                            <img
                                                src="public\image\color\lg-wave-blue.png"
                                                alt=""
                                                class="android-large-18-child wavep"
                                                id="selected"
                                                data-type="wave"
                                                />
                                        </div>
                                        <!-- <img src="public\image\contact\Mask group2.png" alt="" class="mask"/> -->
                                        <img
                                            src="public\image\contact\logo.png"
                                            alt="logo"
                                            class="float-end me-3"
                                            style="margin-top: -16%"
                                        />
                                        <h4 class="ms-4 mt-3">Praveenkumar</h4>
                                        <p id="work" class="ms-4 mt-3">Executive Officer</p>
                                        <p id="sale" class="ms-4 mt-3">Sales Head</p>
                                        <p id="company" class="ms-4 mt-3">ABC Company pvt Ltd</p>
                                        <div class="row justify-content-center " style="padding: 10px 20px;">
                                            <div id="contact" class="d-flex">
                                                <div id="big-imagenot">
                                                    <img
                                                        class="android-large-20-child group-icon"
                                                        alt=""
                                                        src="public\image\color\Group 231.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child group-icon"
                                                        alt=""
                                                        src="public\image\color\whatsapp-pink.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child group-icon"
                                                        alt=""
                                                        src="public\image\color\whatsapp-red.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child group-icon"
                                                        alt=""
                                                        src="public\image\color\whatsapp-brown.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child group-icon"
                                                        alt=""
                                                        src="public\image\color\whatsapp-yellow.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child group-icon"
                                                        alt=""
                                                        src="public\image\color\whatsapp-green.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child group-icon"
                                                        alt=""
                                                        src="public\image\color\whatsapp-lightblue.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child group-icon"
                                                        alt=""
                                                        src="public\image\color\Group 231.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child group-icon"
                                                        alt=""
                                                        src="public\image\color\whatsapp-deepblue.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child group-icon"
                                                        alt=""
                                                        src="public\image\color\whatsapp-purple.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child group-icon"
                                                        alt=""
                                                        src="public\image\color\whatsapp-black.png"
                                                        id="contact-icon"
                                                        />
                                                </div>
                                                <p id="contact-text">7010805798</p>
                                            </div>
                                            <div id="contact" class="d-flex mt-3">
                                                <div id="big-image2">
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\settings\Group 230.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\pinkmap.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 378 (1).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 378 (2).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 378 (3).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 378 (4).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 378 (5).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 233.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 378 (6).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 378 (7).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 378 (8).png"
                                                        id="contact-icon"
                                                        />
                                                </div>
                                                <p id="contact-text">praveen93@gmail.com</p>
                                            </div>
                                            <div id="contact" class="d-flex mt-3">
                                            <div id="big-image8">
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 602.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 606.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 599.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 598.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 604.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 605.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 597.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 602.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 600.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 603.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 601.png"
                                                        id="contact-icon"
                                                        />
                                                </div>
                                                <p id="contact-text">Make a call</p>
                                            </div>
                                            <div id="contact" class="d-flex mt-3 mb-3">
                                                <div id="big-image3">
                                                    <img
                                                        class="android-large-20-child7"
                                                        alt=""
                                                        src="public\image\settings\Group 229.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 454 (1).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 233 (1).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 233 (2).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 233 (3).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 233 (4).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 233 (5).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 378.png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 233 (6).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 233 (7).png"
                                                        id="contact-icon"
                                                        />
                                                    <img
                                                        class="android-large-20-child3"
                                                        alt=""
                                                        src="public\image\color\Group 233 (8).png"
                                                        id="contact-icon"
                                                        />
                                                </div>
                                                <p id="contact-text">Find My Location</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rectangle-div ms-5 mt-4">
                                        <div class="row ">
                                            <form action="" >
                                                <div id="Menu1" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon  mt-3"
                                                        />
                                                        <img
                                                            src="public\image\settings\flag.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="searchsoft.in" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text"
                                                        id="email1"
                                                        name="extension"
                                                        placeholder="Display Text"
                                                        class="in mt-2 mb-3"
                                                    />
                                                </div>
                                                <div id="Menu2" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon  mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\phone.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Phone" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text"
                                                        id="text"
                                                        name="Phone"
                                                        placeholder="Extension"
                                                        class="in mt-2 mb-3"
                                                    />
                                                    <input
                                                        type="text"
                                                        id="text"
                                                        name="Phone"
                                                        placeholder="Label"
                                                        class="in mt-2 mb-3"
                                                    />

                                                </div>
                                                <div id="Menu3" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\eva_email-outline.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Email" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text"
                                                        id="text"
                                                        name="Phone"
                                                        placeholder="No label"
                                                        class="in mt-2  mb-3"
                                                    />
                                                </div>
                                                <div id="Menu4" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\pin.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Address" class="in mt-4"
                                                    />
                                                </div>
                                                <div id="Menu5" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\link.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="searchsoft.in" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in"
                                                    />
                                                </div>
                                                <div id="Menu6" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\mdi_instagram (1).png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="@" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in"
                                                    />
                                                </div>
                                                <div id="Menu7" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\twitter (1).png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="@" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in "
                                                    />
                                                </div>
                                                <div id="Menu8" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\bi_facebook (1).png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="facebook.com/" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in"
                                                    />
                                                </div>
                                                <div id="Menu9" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\whatsapp.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="9876543210" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in"
                                                    />
                                                </div>
                                                <div id="Menu10" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\telegram.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="@" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in"
                                                    />
                                                </div>
                                                <div id="Menu11" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\ri_youtube-line.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="http://youtube.com/" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in"
                                                    />
                                                </div>
                                                <div id="Menu12" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\ri_pinterest-fill.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="pinterest.com/" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in"
                                                    />
                                                </div>
                                                <div id="Menu13" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\mdi_vimeo.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="vimeo.com/" class="in mt-4 "
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in "
                                                    />
                                                </div>
                                                <div id="Menu14" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\ic_baseline-discord.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="discord.gg/" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in"
                                                    />
                                                </div>
                                                <div id="Menu15" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\linkedin.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="linkedin.com/" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in "
                                                    />
                                                </div>
                                                <div id="Menu16" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\github.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Username" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in "
                                                    />
                                                </div>
                                                <div id="Menu17" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\add\paytm.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="paytm.me/" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in"
                                                    />
                                                </div>
                                                <div id="Menu18" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon mt-3"
                                                        />
                                                        <img
                                                            src="public\image\add\google-pay.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="gpay.me/" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in "
                                                    />
                                                </div>
                                                <div id="Menu19" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon  mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\calendar_747310.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="date" id="email" name="phone" value="" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in "
                                                    />
                                                </div>
                                                <div id="Menu20" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon  mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\social_10091758.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="google" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in "
                                                    />
                                                </div>
                                                <div id="Menu21" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon  mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\behance.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="behance.net/" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in "
                                                    />
                                                </div>
                                                <div id="Menu22" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon  mt-3"
                                                        />
                                                        <img
                                                            src="public\image\add\dribbble.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" value="dribble.com/" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in "
                                                    />
                                                </div>
                                                <div id="Menu23" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon  mt-3"
                                                        />
                                                        <img
                                                            src="public\image\add\skype.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="SkypeID" class="in mt-4"
                                                    />
                                                </div>
                                                <div id="Menu24" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon  mt-3"
                                                        />
                                                        <img
                                                            src="public\image\add\pdf-file.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="file" id="myfile" name="filename" value="dribble.com/" class="in mt-4"
                                                    />
                                                    <button type="submit"  class="mt-3 ms-5 mb-2 ">submit</button>
                                                </div>
                                                <div id="Menu25" style="display: none;padding: 0px 33px;">
                                                    <div>
                                                        <img
                                                            src="public\image\edit\material-symbols_menu.png"
                                                            alt=""
                                                            class="menu-icon  mt-3"
                                                        />
                                                        <img
                                                            src="public\image\edit\threads.png"
                                                            alt=""
                                                            class="e-icon mt-3"
                                                        />
                                                    </div>
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="threads" class="in mt-4"
                                                    />
                                                    <input
                                                        type="text" id="email" name="phone" placeholder="Display text" class="in "
                                                    />
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                                    <div class="row ms-xl-2 ms-lg-5 ms-md-2 ms-0" id="label-card">
                                        <form action="" class="label">
                                            <label for="name" class="form-label mt-2 ms-5">Label this Card</label>
                                            <input type="text" class="form-control" />
                                        </form>
                                    </div>
                                    <div class="row ms-xl-2 ms-lg-5 ms-md-2 ms-0 mt-3" id="img-card">
                                        <div class="col mt-2">
                                            <p id="img-head" class=" ms-5">Add Images</p>
                                        </div>
                                        <div class="col mt-3">
                                            <button id="change-btn" class="myBtn_multi multis">Change Layout</button>
                                            <div class="modal modal_multi" id="overlay">
                                                <!-- Modal content -->
                                                <div class="row justify-content-center">
                                                    <div class="col-xs-12 col-md-12 col-lg-4 mt-5">
                                                        <div class="modal-content slid" >
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-12 col-lg-10">
                                                                    <div class="change-layout mt-3 ms-2">Change Layout</div>
                                                                </div>
                                                                <div class="col-xs-12 col-md-12 col-lg-2">
                                                                    <div class="close close_multi mt-2">×</div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="multiple-items classic change-all">
                                                                <div>
                                                                    <img
                                                                        src="public\image\color\wave-blue.png"
                                                                        class="type-sel"
                                                                        alt=""
                                                                        data-type="wave"
                                                                        data-clr="blue"
                                                                    />
                                                                </div>
                                                                <div>
                                                                    <img
                                                                        src="public\image\color\slop-blue.png"
                                                                        class="type-sel"
                                                                        alt=""
                                                                        data-type="slop"
                                                                        data-clr="blue"
                                                                    />
                                                                </div>
                                                                <div>
                                                                    <img
                                                                        src="public\image\color\hexa-blue.png"
                                                                        class="type-sel"
                                                                        alt=""
                                                                        data-type="hexa"
                                                                        data-clr="blue"
                                                                    />
                                                                </div>
                                                                <div>
                                                                    <img
                                                                        src="public\image\color\flat-blue.png"
                                                                        class="type-sel"
                                                                        alt=""
                                                                        data-type="flat"
                                                                        data-clr="blue"
                                                                    />
                                                                </div>
                                                                <div>
                                                                    <img
                                                                        src="public\image\color\side-blue.png"
                                                                        class="type-sel"
                                                                        alt=""
                                                                        data-type="side"
                                                                        data-clr="blue"
                                                                    />
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row justify-content-center">
                                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                                    <button class="cancel-parent ms-5">Cancel</button>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                                                    <button class="save-parent ms-5 mb-3">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-evenly mb-3 mt-3 ">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-2 col-lg-3 card-1 mb-2"
                                                id="change-img"
                                            >
                                                <!-- <i class="bi bi-plus-lg"></i> -->
                                                <a class="modal-button1 plus bi bi-plus-lg" href="#myModal3"> </a>
                                                <p id="change-img-head">Company Logo</p>
                                                <div id="myModal3" class="modal-1">
                                                    <div class="row justify-content-center">
                                                        <div class="col-xs-12 col-md-10 col-lg-4">
                                                    <div class="modal-content-1">
                                                        <div class="modal-header1">
                                                            <span class="close-1">&times;</span>
                                                            <div class="add-company-logo">Add profile photo</div>
                                                        </div>
                                                        <hr class="img">
                                                        <div class="modal-body">
                                                            <div class="rectangle-div-new">
                                                                <div class="drop-your-image-container">
                                                                    <span>Drop your image here, or </span>
                                                                    <button1 id="img-result">browser</button1>
                                                                    <div class="support-jpg-jpeg">Support JPG, JPEG & PNG</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 card-1 mb-2 card-1" id="change-img">
                                                <a class="modal-button1 plus bi bi-plus-lg" href="#myModal3"> </a>
                                                <p id="change-img-head">Profile Picture</p>
                                                <div id="myModal3" class="modal-1">
                                                    <div class="modal-content-1">
                                                        <div class="modal-header1">
                                                            <span class="close-1">&times;</span>
                                                            <div class="add-company-logo">Add profile photo</div>
                                                        </div>
                                                        <hr class="img">
                                                        <div class="modal-body">
                                                            <div class="rectangle-div-new">
                                                                <div class="drop-your-image-container">
                                                                    <span>Drop your image here, or </span>
                                                                    <button1 id="img-result">browser</button1>
                                                                    <div class="support-jpg-jpeg">Support JPG, JPEG & PNG</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 card-1 mb-2 card-1" id="change-img">
                                                <a class="modal-button1 plus bi bi-plus-lg" href="#myModal3"> </a>
                                                <p id="change-img-head">Cover Image</p>
                                                <div id="myModal3" class="modal-1">
                                                    <div class="modal-content-1">
                                                        <div class="modal-header1">
                                                            <span class="close-1">&times;</span>
                                                            <div class="add-company-logo">Add profile photo</div>
                                                        </div>
                                                        <hr class="img">
                                                        <div class="modal-body">
                                                            <div class="rectangle-div-new">
                                                                <div class="drop-your-image-container">
                                                                    <span>Drop your image here, or </span>
                                                                    <button1 id="img-result">browser</button1>
                                                                    <div class="support-jpg-jpeg">Support JPG, JPEG & PNG</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-conter-center ms-xl-2 ms-lg-5 ms-md-2 ms-0 mt-3" id="color-box">
                                        <p id="img-head" class="mt-2 ms-5">Colour</p>

                                        <div id="switcher" class="space classic small-images mb-3 mt-3">
                                            <img src="public\image\color\Ellipse 698.png" alt="" class="ms-5">
                                            <img
                                                src="public\image\add\Property 1=Default (3).png"
                                                data-color="rgb(246 223 231)"
                                                class="bg-change bg-change1 code space"
                                                data-color1="#d06189"
                                                data-clr="pink"
                                            />
                                            <img
                                                src="public\image\add\Property 1=Default (4).png"
                                                data-color="#f0e0e0"
                                                class="bg-change bg-change1 code space"
                                                data-color1="#c42626"
                                                data-clr="red"
                                            />
                                            <img
                                                src="public\image\add\Property 1=Default (7).png"
                                                data-color="#f4e2d6"
                                                class="bg-change bg-change1 code space"
                                                data-color1="#9d6f4e"
                                                data-clr="brown"
                                            />
                                            <img
                                                src="public\image\add\Property 1=Default (5).png"
                                                data-color="#f2e4bf"
                                                class="bg-change bg-change1 code space"
                                                data-color1="#c0962b"
                                                data-clr="yellow"
                                            />
                                            <img
                                                src="public\image\add\Property 1=Default (8).png"
                                                data-color="#c5e7c4"
                                                class="bg-change bg-change1 code space"
                                                data-color1="#32c22f"
                                                data-clr="green"
                                            />
                                            <img
                                                src="public\image\add\Property 1=Default (9).png"
                                                data-color="#c2dcdc"
                                                class="bg-change bg-change1 code space"
                                                data-color1="#1cc2c2"
                                                data-clr="lightblue"
                                            />
                                            <img
                                                src="public\image\add\Property 1=Default (6).png"
                                                data-color="#e1e7ec"
                                                class="bg-change bg-change1 code space"
                                                data-color1="#418ace"
                                                data-clr="blue"
                                            />
                                            <img
                                                src="public\image\add\Property 1=Default (2).png"
                                                data-color="#e1e7ec"
                                                class="bg-change bg-change1 code space"
                                                data-color1="#418ace"
                                                data-clr="deepblue"
                                            />
                                            <img
                                                src="public\image\add\Property 1=Default.png"
                                                data-color="#ede0f2"
                                                class="bg-change bg-change1 code space"
                                                data-color1="#b440dd"
                                                data-clr="purple"
                                            />
                                            <img
                                                src="public\image\add\Property 1=Default (1).png"
                                                data-color="#d7d4d8"
                                                class="bg-change bg-change1 code space"
                                                data-color1="#2b2b2b"
                                                data-clr="black"
                                            />
                                        </div>
                                    </div>
                                    <div class="row justify-conter-center ms-xl-2 ms-lg-5 ms-md-2 ms-0 mt-3" id="label-card1" style="padding: 0px 26px;">
                                        <p id="img-head" class="mt-3 ms-4">Add Your Details</p>
                                        <button class="myBtn_multi multi card  personal ">
                                            <p class="ms-3 mt-2 my-4" >Personal Info</p>
                                            <i class="bi bi-plus-lg plus plus1"></i>
                                        </button>
                                        <button class="myBtn_multi multi card personal mt-3 mb-3">
                                            <p class="ms-3 mt-2 my-4" >Affilation</p>
                                            <i class="bi bi-plus-lg plus plus1"></i>
                                        </button>
                                        <div class="container">
                                            <div class="row  justify-content-center ">
                                                <div class="modal modal_multi" id="overlay">
                                                    <!-- Modal content -->
                                                    <div class="modal-content personal  res mt-5 " >
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6 ">
                                                                <img src="public\image\settings\istockphoto-1036730106-612x612.jpg" alt="" class="bluei">
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                                                                <div class="close close_multi multiple">×</div>
                                                                <p>Personal Info</p>
                                                                <hr>
                                                                <form action="/action_page.php">
                                                                    <div class="form-group">
                                                                        <label for="fname" class="first-name">First Name</label>
                                                                        <input type="text" class="form-control peform" id="fname" placeholder="Enter fname" name="fname">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="mname" class="first-name">Middle Name</label>
                                                                        <input type="text" class="form-control" id="mname" placeholder="Enter mname" name="mname">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="lname" class="first-name">Last Name</label>
                                                                        <input type="text" class="form-control" id="lname" placeholder="Enter lname" name="lname">
                                                                    </div>
                                                                    <div class="btn btn-info btn-md editbt mt-3">Edit</div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row  justify-content-center ">
                                                <div class="modal modal_multi" id="overlay">
                                                    <!-- Modal content -->
                                                    <div class="modal-content personal  res mt-5 " >
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6 ">
                                                                <img src="public\image\settings\preview.png" alt="" class="bluei">
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                                                                <div class="close close_multi multiple">×</div>
                                                                <p>Affilation</p>
                                                                <hr>
                                                                <form action="/action_page.php">
                                                                    <div class="form-group">
                                                                        <label for="company" class="first-name">Company</label>
                                                                        <input type="text" class="form-control peform" id="company" placeholder="Enter company" name="company">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="department" class="first-name">Department</label>
                                                                        <input type="text" class="form-control" id="department" placeholder="Enter department" name="department">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="designation" class="first-name">Designation</label>
                                                                        <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation">
                                                                    </div>
                                                                    <div class="btn btn-info btn-md editbt mt-3">Edit</div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-conter-center ms-xl-2 ms-lg-5 ms-md-2 ms-0 mt-3" id="label-card1">
                                        <p class="mt-3 ms-5">Add More Infomation</p>
                                        <p class="ms-5">General</p>
                                        <div class="row justify-content-around mt-3">
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 card-1 ms-2 mb-3" id="change-img1">
                                            <div onclick="toggleVisibility('Menu1');" >
                                                <img class="group-icon" alt="" src="public\image\add\gg_website.png"/>
                                                <h6 class="mt-3">Website</h6>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 card-1  ms-2" id="change-img1">
                                                <div onclick="toggleVisibility('Menu2');">
                                                    <img class="group-icon" alt="" src="public\image\add\ri_phone-fill.png"/>
                                                    <h6 class="mt-3">Phone</h6>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 card-1  ms-2 mb-3" id="change-img1">
                                                <div onclick="toggleVisibility('Menu3');">
                                                    <img class="group-icon" alt="" src="public\image\add\eva_email-outline.png"/>
                                                    <h6 class="mt-3">E-mail</h6>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 card-1  ms-2" id="change-img1">
                                                <div onclick="toggleVisibility('Menu4');">
                                                    <img class="group-icon" alt="" src="public\image\add\mdi_location.png"/>
                                                    <h6 class="mt-3">Address</h6>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 card-1  ms-2 mb-3"  id="change-img1">
                                                <div onclick="toggleVisibility('Menu5');">
                                                    <img class="group-icon" alt="" src="public\image\add\ph_link-bold.png"/>
                                                    <h6 class="mt-3">Link</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-conter-center ms-xl-2 ms-lg-5 ms-md-2 ms-0 mt-3" id="label-card1">
                                        <p class="mt-3 ms-5">Social Links</p>
                                        <h6 class="ms-5">Add a link to let people connect with you</h6>
                                       <div class="row mt-3 ms-4 ">
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu6');">
                                                    <img src="public\image\add\Frame 1405.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu7');">
                                                    <img src="public\image\add\Frame 1415.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu8');">
                                                    <img src="public\image\add\Frame 1406.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu9');">
                                                    <img src="public\image\add\Frame 1417.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu10');">
                                                    <img src="public\image\add\Frame 1416.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ms-4">
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu11');">
                                                    <img src="public\image\add\Frame 1418.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu12');">
                                                    <img src="public\image\add\Frame 1407.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu13');">
                                                    <img src="public\image\add\Frame 1408.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu14');">
                                                    <img src="public\image\add\Frame 1409.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu15');">
                                                    <img src="public\image\add\Frame 1413.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ms-4">
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu16');">
                                                    <img src="public\image\add\Frame 1421.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu17');">
                                                    <img src="public\image\add\Frame 1419.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu18');">
                                                    <img src="public\image\add\Frame 1420.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu19');">
                                                    <img src="public\image\add\Frame 1422.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu20');">
                                                    <img src="public\image\add\Frame 1412.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ms-4">
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu21');">
                                                    <img src="public\image\add\Frame 1410.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu22');">
                                                    <img src="public\image\add\Frame 1411.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu23');">
                                                    <img src="public\image\add\Frame 1414.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu24');">
                                                    <img src="public\image\add\Frame 1423.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3   ms-2 mb-3" id="change-img2">
                                                <div onclick="toggleVisibility('Menu25');">
                                                    <img src="public\image\add\Frame 1424.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div>
                </section>
                <script>
     $(function () {
           $("#big-image3 img:eq(0)").nextAll().hide();
           $(".small-images img").click(function (e) {
             var index = $(this).index();
             $("#big-image3 img").eq(index).show().siblings().hide();
           });
         });

         $(function () {
           $("#big-image2 img:eq(0)").nextAll().hide();
           $(".small-images img").click(function (e) {
             var index = $(this).index();
             $("#big-image2 img").eq(index).show().siblings().hide();
           });
         });
         $(function () {
           $("#big-image8 img:eq(0)").nextAll().hide();
           $(".small-images img").click(function (e) {
             var index = $(this).index();
             $("#big-image8 img").eq(index).show().siblings().hide();
           });
         });

         $(function () {
           $("#big-imagenot img:eq(0)").nextAll().hide();
           $(".small-images img").click(function (e) {
             var index = $(this).index();
             $("#big-imagenot img").eq(index).show().siblings().hide();
           });
         });

         $(function () {
           $("#big-image img:eq(0)").nextAll().hide();
           $(".classic img").click(function (e) {
             var index = $(this).index();
             $("#big-image img").eq(index).show().siblings().hide();
           });
         });
         var url = "public/image/color/";
         $(".type-sel").on("click", function () {
           var src = $(this).attr("src");
           var typ = $(this).attr("data-type");
           var clr = $(this).attr("data-clr");
           // var url = "image/color/";
           $("#selected")
             .attr("src", url + "lg-" + typ + "-" + clr + ".png")
             .attr("data-type", typ);
         });

         $(".code").on("click", function () {
           var clr = $(this).attr("data-clr");
           var typ = $("#selected").attr("data-type");

           $("#selected").attr("src", url + "lg-" + typ + "-" + clr + ".png");
           $(".change-all")
             .find('[data-type="wave"]')
             .attr("src", url + "wave-" + clr + ".png")
             .attr("data-clr", clr);
           $(".change-all")
             .find('[data-type="slop"]')
             .attr("src", url + "slop-" + clr + ".png")
             .attr("data-clr", clr);
           $(".change-all")
             .find('[data-type="hexa"]')
             .attr("src", url + "hexa-" + clr + ".png")
             .attr("data-clr", clr);
           $(".change-all")
             .find('[data-type="flat"]')
             .attr("src", url + "flat-" + clr + ".png")
             .attr("data-clr", clr);
             $(".change-all")
             .find('[data-type="side"]')
             .attr("src", url + "side-" + clr + ".png")
             .attr("data-clr", clr);
         });


         var divs = ["Menu1", "Menu2", "Menu3", "Menu4","Menu5","Menu6","Menu7","Menu8","Menu9","Menu10","Menu11","Menu12","Menu13","Menu14","Menu15","Menu16","Menu17","Menu18","Menu19","Menu20","Menu21","Menu22","Menu23","Menu24","Menu25","Menu26","Menu27"];
      var visibleDivId = null;
      function toggleVisibility(divId) {
        if (visibleDivId === divId) {
          //visibleDivId = null;
        } else {
          visibleDivId = divId;
        }
        hideNonVisibleDivs();
      }
      function hideNonVisibleDivs() {
        var i, divId, div;
        for (i = 0; i < divs.length; i++) {
          divId = divs[i];
          div = document.getElementById(divId);
          if (visibleDivId === divId) {
            div.style.display = "block";
          } else {
            div.style.display = "none";
          }
        }
      }


         var modalparent = document.getElementsByClassName("modal_multi");

var modal_btn_multi = document.getElementsByClassName("myBtn_multi");
var modal_btn_multi = document.getElementsByClassName("myBtn_multi");
var span_close_multi = document.getElementsByClassName("close_multi");

function setDataIndex() {

for (i = 0; i < modal_btn_multi.length; i++) {
    modal_btn_multi[i].setAttribute("data-index", i);
    modalparent[i].setAttribute("data-index", i);
    span_close_multi[i].setAttribute("data-index", i);
}
}

for (i = 0; i < modal_btn_multi.length; i++) {
modal_btn_multi[i].onclick = function () {
    var ElementIndex = this.getAttribute("data-index");
    modalparent[ElementIndex].style.display = "block";
};

span_close_multi[i].onclick = function () {
    var ElementIndex = this.getAttribute("data-index");
    modalparent[ElementIndex].style.display = "none";
};
}
window.onload = function () {
setDataIndex();
};

window.onclick = function (event) {
if (
 event.target === modalparent[event.target.getAttribute("data-index")]
) {
 modalparent[event.target.getAttribute("data-index")].style.display =
   "none";
}

if (event.target === modal) {
 modal.style.display = "none";
}
};


var btn = document.querySelectorAll("a.modal-button1");
      var modals = document.querySelectorAll(".modal-1");
      var spans = document.getElementsByClassName("close-1");
      for (var i = 0; i < btn.length; i++) {
        btn[i].onclick = function (e) {
          e.preventDefault();
          modal = document.querySelector(e.target.getAttribute("href"));
          modal.style.display = "block";
        };
      }
      for (var i = 0; i < spans.length; i++) {
        spans[i].onclick = function () {
          for (var index in modals) {
            if (typeof modals[index].style !== "undefined")
              modals[index].style.display = "none";
          }
        };
      }
      window.onclick = function (event) {
        if (event.target.classList.contains("modal-1")) {
          for (var index in modals) {
            if (typeof modals[index].style !== "undefined")
              modals[index].style.display = "none";
          }
        }
      };


      (function () {
        var uploader = document.createElement("input"),
          image = document.getElementById("img-result");
        uploader.type = "file";
        uploader.accept = "image/*";
        image.onclick = function () {
          uploader.click();
        };
        uploader.onchange = function () {
          var reader = new FileReader();
          reader.onload = function (evt) {
            image.classList.remove("no-image");
            image.style.backgroundImage = "url(" + evt.target.result + ")";
            var request = {
              itemtype: "test 1",
              brand: "test 2",
              images: [
                {
                  data: evt.target.result,
                },
              ],
            };


            document.querySelector(".show-button").style.display = "block";
            document.querySelector(".upload-result__content").innerHTML =
              JSON.stringify(request, null, "  ");
          };
          reader.readAsDataURL(uploader.files[0]);
        };

        document.querySelector(".hide-button").onclick = function () {
          document.querySelector(".upload-result").style.display = "none";
        };

        document.querySelector(".show-button").onclick = function () {
          document.querySelector(".upload-result").style.display = "block";
        };
      })();






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


      //slick


</script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('resources\slick-1.8.1 (1)\slick-1.8.1\slick\slick.min.js')}}"></script>
<script>
    $('.multiple-items').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});
</script>
</body>
</html>
