<footer>
    <div class="container">
        <div class="row mx-0 py-5">
            <div class="col-sm-3">

                <div class="foot_logo d-flex align-items-center">
                    <img src="images/logo.webp" alt="second inning tours" width="120px">
                    <span>Second Inning Tours</span>
                </div>
                <div class="sub_logo_title">
                    <p>Lorem ipsum dolor sit amet consectetur. Dis mattis eget habitasse
                        suspendisse penatibus amet massa. Turpis habitasse nunc
                        vestibulum at porttitor.</p>
                </div>
            </div>
            <div class="col-sm-3">

                <div class="text-end foot_call address">
                    <h5>Address</h5>
                    <ul>
                        <li>
                            <a href="">
                                Office location - near by Overbridge
                                telibandha, Raipur, Chhattisgarh <br>
                                - 492001
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">

                <div class="text-end foot_call Quick_Link hover_effect">
                    <h5>Quick Link</h5>
                    <ul>
                        <li> <a href="index.php"> Home </a> </li>
                        <li> <a href="index.php"> About Us </a> </li>
                        <li> <a href="index.php"> Explore </a> </li>
                        <li> <a href="index.php"> Services </a> </li>
                        <li> <a href="index.php"> Contact Us </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 text-end">

                <div class="text-end foot_call newsletter">
                    <h5>Subscribe to Our Newsletter</h5>

                    <form action="" method="post">
                        <div class="newsletter_head">
                            <span><input type="text" name="newsletter" placeholder="Email Address"></span>
                            <a href="index.php" title="send"><img src="images/arrow_right.svg" alt="submit newsletter" width="16px" height="16px"></a>
                        </div>
                    </form>

                </div>
                <div class="text-end foot_call Quick_Link social_media">
                    <h5>Social Media links</h5>
                    <ul class="social">
                        <li>
                            <a href="#"><img src="images/facebook.svg" alt="click & view are FB page" width="36px" height="36px"> </a>
                        </li>
                        <li>
                            <a href="#"><img src="images/instagram.svg" alt="Folow are insta page" width="36px" height="36px"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/email.svg" alt="Mail Me" width="36px" height="36px"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/call.svg" alt="Call me" width="36px" height="36px"> </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="plugin/slick/slick/slick.min.js"></script>

<script>
    (function() {

        var LIB = function() {};


        LIB.prototype.event = function(target, mode, func, flg) {
            flg = (flg) ? flg : false;
            if (target.addEventListener) {
                target.addEventListener(mode, func, flg)
            } else {
                target.attachEvent('on' + mode, function() {
                    func.call(target, window.event)
                })
            }
        };
        LIB.prototype.construct = function() {
            var lib = new LIB();
            switch (document.readyState) {
                case "complete":
                    new MAIN;
                    break;
                case "interactive":
                    lib.event(window, "DOMContentLoaded", function() {
                        new MAIN
                    });
                    break;
                default:
                    lib.event(window, "load", function() {
                        new MAIN
                    });
                    break;
            }
        };


        var MAIN = function() {
            this.humbarger();
        };

        MAIN.prototype.humbarger = function() {
            var lib = new LIB();
            var humbarger_menu = document.querySelector(".humbarger-menu");
            if (humbarger_menu) {
                lib.event(humbarger_menu, "click", (function(e) {
                    var target = document.querySelector(".content-header");
                    if (!target) {
                        return;
                    }
                    if (target.getAttribute("data-status") === "open") {
                        target.setAttribute("data-status", "close");
                    } else {
                        target.setAttribute("data-status", "open");
                    }
                }).bind(this));
            }
        };
        MAIN.prototype.flg_currentPage = function() {
            var urlinfo = new LIB().urlinfo();
            urlinfo.file = (urlinfo.file) ? urlinfo.file : "./";
            var menus = document.querySelectorAll(".menu-area ul.menu li");
            for (var i = 0; i < menus.length; i++) {
                var a = menus[i].querySelector("a");
                if (urlinfo.file == a.getAttribute("href")) {
                    menus[i].setAttribute("data-current", "1");
                } else {
                    menus[i].setAttribute("data-current", "0");
                }
            }
        };


        new LIB().construct();
    })();
</script>

<script>
    $('#responsive').slick({
        dots: true,
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        speed: 1000,

        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>