let app = {

    init: function() {
        console.log("app.init");

        // Menu Hamburger : click event
        $(".hamburger").click(app.toggleHumburgerMenu);
        $(".header-nav").on("click", ".header-nav-item-list--mobile", app.toggleHumburgerMenu);
    },

    /**
     *  Menu Hamburger : click event
     */
    toggleHumburgerMenu: function() {
        console.log("app.handleHamburgerClick");
        $(".hamburger").toggleClass("is-active")
        $(".header-nav-item-list").toggleClass("header-nav-item-list--mobile")
    },

}
$(app.init);