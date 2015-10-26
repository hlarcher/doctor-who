define([
    'marionette'
], function (Marionette) {

    var DWApp = new Marionette.Application();

    // REGIONS -----------------------------------------------------------------

    DWApp.addRegions({
        mainRegion:     '#dwt-wrapper'
    });

    // NAVIGATION --------------------------------------------------------------

    DWApp.navigate = function (route, options) {
        options || (options = {});
        Backbone.history.navigate(route, options);
    };

    DWApp.getCurrentRoute = function () {
        if (Backbone.history.fragment === undefined) return '';
        return Backbone.history.fragment;
    };


    DWApp.closeAllModals = function () {
        $('.modal').remove();
    };

    DWApp.windowResize = function (e) {
        DWApp.trigger('window:resize');
    };

    // INIT --------------------------------------------------------------------

    DWApp.listenTo(DWApp, 'start', function () {
        $(window).on('resize', DWApp.windowResize);

        if (Backbone.history) {
            Backbone.history.start();

            DWApp.trigger('timeline:start');
        }
    });

    return DWApp;

});
