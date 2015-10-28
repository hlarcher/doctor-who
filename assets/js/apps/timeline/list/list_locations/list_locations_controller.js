define([
    'app',
    'apps/timeline/list/list_locations/list_locations_view',
    'entities/location'
], function (DWApp) {

    DWApp.module('TimelineApp.List.ListLocations', function (ListLocations, DWApp, Backbone, Marionette, $, _) {

        var Controller = Marionette.Controller.extend({

            listLocations: function () {
                this.stopListening();
                var self = ListLocations.Controller;

                var listRequest = DWApp.request('location:entities');
                $.when(listRequest).done(function (listResult) {

                    DWApp.TimelineApp.List.ListLocations.listView = new ListLocations.LocationsListView({
                        collection: listResult
                    });

                    DWApp.TimelineApp.List.layoutView.locationRegion.show(DWApp.TimelineApp.List.ListLocations.listView);

                }).fail(function () {

                });

            }

        });

        ListLocations.Controller = new Controller();

    });

    return DWApp.TimelineApp.ListLocations;
});
