let app = {

    init: function() {
        console.log("app.init");

        // Menu Hamburger : click event
        $("#header-nav .hamburger").click(app.toggleHumburgerMenu);
        $("#header-nav").on("click", "#header-nav .header-nav-item-list--mobile", app.toggleHumburgerMenu);

        // Intro section : Swap button style on hover 
        $(".section-intro-buttons .button").mouseover(function(event) {
            $("#section-intro-button-work").toggleClass("button-style1 button-style2");
            $("#section-intro-button-contact").toggleClass("button-style1 button-style2");
        });

        // Inactive links : display modal on click
        $(".inactive-link").click(function() {
            $("#modal .modal-text").text("Lien inactif (site de présentation).");
            app.toggleModal();
        });

        // Modal : button close click event
        $("#modal .modal-button-close").click(app.toggleModal);

        // Smooth scrolling to page anchor on click
        $("a[href*='#']:not([href='#'])").click(function() {
            if (
                location.hostname == this.hostname
                && this.pathname.replace(/^\//,"") == location.pathname.replace(/^\//,"")
            ) {
                var anchor = $(this.hash);
                anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) +"]");
                if ( anchor.length ) {
                    $("html, body").animate( { scrollTop: anchor.offset().top }, 1500);
                }
            }
        });
        // Smooth scrolling to top of page on click
        $("a[href='#']").click(function() {
            $("html, body").animate({scrollTop : 0}, 1500);
        });
    },

    /**
     *  Menu Hamburger : click event
     */
    toggleHumburgerMenu: function() {

        $("#header-nav .hamburger").toggleClass("is-active");
        $("#header-nav .header-nav-item-list").toggleClass("header-nav-item-list--mobile");
    },

    /**
    * Smooth scrolling to a specific element 
    **/
    scrollTo(target) {
        if( target.length ) {
            $("html, body").stop().animate( { scrollTop: target.offset().top }, 1500);
        }
    },

    /**
    * Hide or show modal and arrow-up
    **/
    toggleModal() {
        $("#modal").toggleClass("hidden");
        $("#arrow-up").toggleClass("hidden");
    },
}
$(app.init);
