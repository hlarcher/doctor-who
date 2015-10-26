define([
    'app',
    'apps/timeline/list/list_companions/list_companions_view',
    'entities/companion'
], function (DWApp) {

    DWApp.module('TimelineApp.List.ListCompanions', function (ListCompanions, DWApp, Backbone, Marionette, $, _) {

        var Controller = Marionette.Controller.extend({

            listCompanions: function () {
                this.stopListening();
                var self = ListCompanions.Controller;

                var listRequest = DWApp.request('companion:entities');
                $.when(listRequest).done(function (listResult) {

                    DWApp.TimelineApp.List.ListCompanions.listView = new ListCompanions.CompanionsListView({
                        collection: listResult
                    });

                    DWApp.TimelineApp.List.layoutView.companionRegion.show(DWApp.TimelineApp.List.ListCompanions.listView);

                }).fail(function () {

                });

            }

        });

        ListCompanions.Controller = new Controller();

    });

    return DWApp.TimelineApp.ListCompanions;
});
