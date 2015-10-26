define([
    'app',
    'apps/timeline/list/list_view',
    'apps/timeline/list/list_seasons/list_seasons_controller',
    'apps/timeline/list/list_years/list_years_controller',
    'apps/timeline/list/list_doctors/list_doctors_controller',
    'apps/timeline/list/list_companions/list_companions_controller',
    'apps/timeline/list/list_creatures/list_creatures_controller',
    'apps/timeline/list/list_episodes/list_episodes_controller',
    'apps/timeline/list/list_adventures/list_adventures_controller',
    //'apps/timeline/list/list_locations/list_locations_controller',
    //'apps/timeline/list/list_time/list_time_controller'
], function (DWApp) {

    DWApp.module('TimelineApp.List', function (List, DWApp, Backbone, Marionette, $, _) {

        var Controller = Marionette.Controller.extend({

            startTimeline: function () {
                this.stopListening();
                var self = List.Controller;

                DWApp.TimelineApp.List.layoutView = new List.LayoutView();

                self.listenTo(DWApp.TimelineApp.List.layoutView, 'show', function () {
                    DWApp.trigger('timeline:list:seasons');
                    DWApp.trigger('timeline:list:years');
                    DWApp.trigger('timeline:list:doctors');
                    DWApp.trigger('timeline:list:companions');
                    DWApp.trigger('timeline:list:creatures');
                    DWApp.trigger('timeline:list:episodes');
                    DWApp.trigger('timeline:list:adventures');
                    //DWApp.trigger('timeline:list:locations');
                    //DWApp.trigger('timeline:list:times');
                });

                DWApp.mainRegion.show(DWApp.TimelineApp.List.layoutView);

            },

        });

        List.Controller = new Controller();

    });

    return DWApp.TimelineApp.List;

});
