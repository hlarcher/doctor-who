define([
    'app',
    'apps/timeline/list/list_controller'
], function (DWApp) {

    DWApp.module('TimelineApp', function (Timeline, DWApp, Backbone, Marionette, $, _) {

        // API -----------------------------------------------------------------

        var API = {

            startTimeline: function () {
                DWApp.TimelineApp.List.Controller.startTimeline();
            },

            listSeasons: function () {
                DWApp.TimelineApp.List.ListSeasons.Controller.listSeasons();
            },

            listYears: function () {
                DWApp.TimelineApp.List.ListYears.Controller.listYears();
            },

            listDoctors: function () {
                DWApp.TimelineApp.List.ListDoctors.Controller.listDoctors();
            },

            listCompanions: function () {
                DWApp.TimelineApp.List.ListCompanions.Controller.listCompanions();
            },

            listCreatures: function () {
                DWApp.TimelineApp.List.ListCreatures.Controller.listCreatures();
            },

            listEpisodes: function () {
                DWApp.TimelineApp.List.ListEpisodes.Controller.listEpisodes();
            },

            listAdventures: function () {
                DWApp.TimelineApp.List.ListAdventures.Controller.listAdventures();
            },

            listLocations: function () {
                DWApp.TimelineApp.List.ListLocations.Controller.listLocations();
            },

            listTimes: function () {
                DWApp.TimelineApp.List.ListTimes.Controller.listTimes();
            }

        };

        // EVENTS --------------------------------------------------------------

        this.listenTo(DWApp, 'timeline:start', function () {
            API.startTimeline();
        });

        this.listenTo(DWApp, 'timeline:list:seasons', function () {
            API.listSeasons();
        });

        this.listenTo(DWApp, 'timeline:list:years', function () {
            API.listYears();
        });

        this.listenTo(DWApp, 'timeline:list:doctors', function () {
            API.listDoctors();
        });

        this.listenTo(DWApp, 'timeline:list:companions', function () {
            API.listCompanions();
        });

        this.listenTo(DWApp, 'timeline:list:creatures', function () {
            API.listCreatures();
        });

        this.listenTo(DWApp, 'timeline:list:episodes', function () {
            API.listEpisodes();
        });

        this.listenTo(DWApp, 'timeline:list:adventures', function () {
            API.listAdventures();
        });

        this.listenTo(DWApp, 'timeline:list:locations', function () {
            API.listLocations();
        });

        this.listenTo(DWApp, 'timeline:list:times', function () {
            API.listTimes();
        });

    });

    return DWApp.TimelineApp;

});
