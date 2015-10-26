define([
    'app',
    'apps/timeline/list/list_years/list_years_view',
    'entities/year'
], function (DWApp) {

    DWApp.module('TimelineApp.List.ListYears', function (ListYears, DWApp, Backbone, Marionette, $, _) {

        var Controller = Marionette.Controller.extend({

            listYears: function () {
                this.stopListening();
                var self = ListYears.Controller;

                var listRequest = DWApp.request('year:entities');
                $.when(listRequest).done(function (listResult) {

                    DWApp.TimelineApp.List.ListYears.listView = new ListYears.YearsListView({
                        collection: listResult
                    });

                    DWApp.TimelineApp.List.layoutView.yearRegion.show(DWApp.TimelineApp.List.ListYears.listView);

                }).fail(function () {

                });

            }

        });

        ListYears.Controller = new Controller();

    });

    return DWApp.TimelineApp.ListYears;
});
