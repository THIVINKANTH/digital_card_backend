<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="sidebar">
            <div class="logo-details">
                <img
                    class="bx bxl-c-plus-plus icon"
                    alt=""
                    src="public\img\home\Group 368.png"
                />

                <img
                    class="bx bx-menu"
                    id="btn"
                    alt=""
                    src="public\img\home\hamburger.png"
                />
            </div>
            <ul class="nav-list">
                <li class="h">
                    <a href="{{url('card')}}" id="card" onclick="myFunction()">
                    <img
                        class="bx bx-grid-alt img"
                        alt=""
                        src="public\img\home\Mask group.png"
                    />
                    <span class="links_name card">Cards</span>
                    </a>
                    <span class="tooltip">Cards</span>
                </li>
                <li class="h">
                    <a href="{{url('contact')}}" id="card1" onclick="draw()">
                    <img
                        class="bx bx-user"
                        alt=""
                        src="public\img\home\Component 45.png"
                    />
                    <span class="links_name contact">Contacts</span>
                    </a>
                    <span class="tooltip">Contacts</span>
                </li>
                <li class="h">
                    <a href="{{url('virtual')}}" id="card2" onclick="draw1()">
                    <img
                        class="bx bx-chat"
                        alt=""
                        src="public\img\home\Component 46.png"
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
                        src="public\img\home\Component 51.png"
                    />
                    <span class="links_name background">Email Signature</span>
                    </a>
                    <span class="tooltip">Email Signature</span>
                </li>

                <li class="h">
                    <a href="{{url('setting')}}" id="card4" onclick="draw3()">
                    <img
                        class="bx bx-folder"
                        alt=""
                        src="public\img\home\Component 48.png"
                    />
                    <span class="links_name setting">Settings</span>
                    </a>
                    <span class="tooltip">Settings</span>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();" id="card5" onclick="draw4()">
                    <img
                        class="bx bx-cart-alt"
                        alt=""
                        src="public\img\home\Component 49.png"
                    />
                    <span class="links_name logout">Log out</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
                                src="public\img\home\Component 50.png"
                            />
                            </div>
                            <span class="links_name upgrade">Upgrade Now</span>
                        </a>
                        <span class="tooltip">Upgrade Now</span>
                    </li>
                    <div class="hide">
                    I am shown when someone hovers over the div above.
                    </div>
                </div>
            </ul>
        </div>
        <section>
            <div class="about-parent">
                <ul class="d" style="margin-left: 215px">
                    <li class="about">About</li>
                    <li class="solution">Solutions</li>
                    <li class="price">Pricing</li>
                    <li class="contactus">ContactUs</li>
                    <li>
                    <img
                        class="outline-messages-conversati"
                        alt=""
                        src="public\img\home\chat.png"
                    />
                    </li>
                    <li>
                    <img
                        class="outline-notifications-bell"
                        alt=""
                        src="public\img\home\bell.png"
                    />
                    </li>
                    <li>
                    <img
                        class="frame-inner"
                        alt=""
                        src="public\img\home\Ellipse 668.png"
                    />
                    </li>
                    <li><div class="praveen">{{ Auth::user()->name }}</div></li>
                    <li>
                    <img
                        class="outline-arrows-alt-arrow-d"
                        alt=""
                        src="public\img\home\down.png"
                        id="outlineArrowsAltArrowD"
                    />
                    </li>
                </ul>
            </div>
        </section>
        <div class="line-div"></div>
    </div>

    <div id="frameContainer" class="popup-overlay" style="display: none">
        <div class="outline-settings-fine-tunin-parent">
            <img
            class="outline-settings-fine-tunin"
            alt=""
            src="public\img\home\Settings.png"
            />
            <a href="{{url('setting')}}" class=adject><div class="settings">Settings</div></a>
            <img
            class="bxsupport-icon"
            alt=""
            src="public\img\home\bx_support.png"
            />
            <div class="help-center">Help center</div>

            <img
            class="material-symbolshelp-outline-icon"
            alt=""
            src="public\img\home\material-symbols_help-outline.png"
            />
            <div class="contact-suport">Contact & suport</div>
            <img
            class="material-symbolsfeedback-outl-icon"
            alt=""
            src="public\img\home\material-symbols_feedback-outline.png"
            />
            <div class="send-feedback">Send Feedback</div>
            <img
            class="iconoirprivacy-policy"
            alt=""
            src="public\img\home\iconoir_privacy-policy.png"
            />
            <div class="privacy-policy">Privacy policy</div>
        </div>
    </div>
</div>
