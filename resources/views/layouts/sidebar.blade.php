<div class="sidebar">
    <div class="logo-details">
    <img
        class="bx bxl-c-plus-plus icon"
        alt=""
        src="public\image\home\Group 368.png"
    />

    <img
        class="bx bx-menu"
        id="btn"
        alt=""
        src="public\image\home\Group 250.png"
    />
    </div>
    <ul class="nav-list">

    <li class="h">
        <a href="{{ url('cards') }}" id="card" onclick="myFunction()">
        <img src="public\image\home\Component44.png" alt="">
        <span class="links_name cards">Cards</span>
        </a>
        <span class="tooltip">Cards</span>
    </li>
    <li class="h">
        <a href="#" id="card1" onclick="draw()">
        <img
            class="bx bx-user"
            alt=""
            src="public\image\home\Component45.png"
        />
        <span class="links_name contact">Contacts</span>
        </a>
        <span class="tooltip">Contacts</span>
    </li>
    <li class="h">
        <a href="{{ url('back') }}" id="card2" onclick="draw1()">
        <img
            class="bx bx-chat"
            alt=""
            src="public\image\home\Component46.png"
        />
        <span class="links_name background">Backgrounds</span>
        </a>
        <span class="tooltip">Backgrounds</span>
    </li>
    <li class="h">
        <a href="#" id="card3" onclick="draw2()">
        <img
            class="bx bx-chat"
            alt=""
            src="public\image\home\Component51.png"
        />
        <span class="links_name background">Email Signature</span>
        </a>
        <span class="tooltip">Email Signature</span>
    </li>

    <li class="h">
        <a href="#" id="card4" onclick="draw3()">
        <img
            class="bx bx-folder"
            alt=""
            src="public\image\home\Component48.png"
        />
        <span class="links_name setting">Settings</span>
        </a>
        <span class="tooltip">Settings</span>
    </li>
    <li>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" id="card5" onclick="draw4()" >
        <img
            class="bx bx-cart-alt"
            alt=""
            src="public\image\home\Component49.png"
        />
        <span class="links_name logout">Log out</span>
        <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
            @csrf
        </form>
        </a>
        <span class="tooltip">Log out</span>
    </li>
    <div class="now myDiv">
        <li>
        <a href="#" id="card6" onclick="draw5()">
            <div class="up">
            <img
                class="bx bx-cog up"
                alt=""
                src="public\image\home\Component50.png"
            />
            </div>
            <span class="links_name upgrade">Upgrade Now</span>
        </a>
        <span class="tooltip myDIV">Upgrade Now</span>
        </li>
        <div class="hide">
        I am shown when someone hovers over the div above.
        </div>
    </div>
    </ul>
</div>
