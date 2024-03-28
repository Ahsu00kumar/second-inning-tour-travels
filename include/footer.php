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