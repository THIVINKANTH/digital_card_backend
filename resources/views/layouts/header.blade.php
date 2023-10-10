<nav class="navbar navbar-expand-sm " style="border-bottom: 1px solid gray;">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav mx-5 " >
            <li class="nav-item ms-xl-5 ms-lg-4 ms-md-1 ms-5 me-xl-5 me-lg-0 me-md-0 me-0">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item ms-xl-5 ms-lg-4 ms-md-1 ms-5 me-xl-5 me-lg-0 me-md-0 me-0">
                <a class="nav-link" href="#">Solutions</a>
            </li>
            <li class="nav-item ms-xl-5 ms-lg-4 ms-md-1 ms-5 me-xl-5 me-lg-0 me-md-0 me-0">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item ms-xl-5 ms-lg-4 ms-md-1 ms-5 me-xl-5 me-lg-0 me-md-0 me-0">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item ms-xl-5 ms-lg-4 ms-md-1 ms-5 " >
                <a class="nav-link" href="#"><i class="bi bi-chat-square-dots" style="font-size: 22px;"></i></a>
            </li>
            <li class="nav-item ms-xl-5 ms-lg-4 ms-md-1 ms-5" >
                <a class="nav-link" href="#"><i class="bi bi-bell" style="font-size: 22px;"></i></a>
            </li>
            <li class="nav-item dropdown ms-xl-5 ms-lg-4 ms-md-1 ms-5 d-flex">
                <img src="public\image\home\Ellipse 668.png" alt="profile" style="width: 36px;height: 36px;">
                <a class="nav-link dropdown-toggle mx-2" href="#" role="button" data-bs-toggle="dropdown">{{ Auth::user()->name; }}</a>
                <ul class="dropdown-menu mt-3 me-lg-0 me-md-0 me-5" style="position: absolute;">
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-3"></i>Settings</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-headset me-3"></i>Help center</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-3"></i>Contact & suport</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-chat-left-dots me-3"></i>Send Feedback</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-shield-lock me-3"></i>Privacy policy</a></li>
                </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>
