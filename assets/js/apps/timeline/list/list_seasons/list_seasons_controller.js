define([
    'app',
    'apps/timeline/list/list_seasons/list_seasons_view',
    'entities/season'
], function (DWApp) {

    DWApp.module('TimelineApp.List.ListSeasons', function (ListSeasons, DWApp, Backbone, Marionette, $, _) {

        var Controller = Marionette.Controller.extend({

            listSeasons: function () {
                this.stopListening();
                var self = ListSeasons.Controller;

                var listRequest = DWApp.request('season:entities');
                $.when(listRequest).done(function (listResult) {

                    DWApp.TimelineApp.List.ListSeasons.listView = new ListSeasons.SeasonsListView({
                        collection: listResult
                    });

                    DWApp.TimelineApp.List.layoutView.seasonRegion.show(DWApp.TimelineApp.List.ListSeasons.listView);

                }).fail(function () {

                });

            }

        });

        ListSeasons.Controller = new Controller();

    });

    return DWApp.TimelineApp.ListSeasons;
});
