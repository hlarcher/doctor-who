define([
    'app',
    'apps/timeline/list/list_times/list_times_view',
    'entities/time'
], function (DWApp) {

    DWApp.module('TimelineApp.List.ListTimes', function (ListTimes, DWApp, Backbone, Marionette, $, _) {

        var Controller = Marionette.Controller.extend({

            listTimes: function () {
                this.stopListening();
                var self = ListTimes.Controller;

                var listRequest = DWApp.request('time:entities');
                $.when(listRequest).done(function (listResult) {

                    DWApp.TimelineApp.List.ListTimes.listView = new ListTimes.TimesListView({
                        collection: listResult
                    });

                    DWApp.TimelineApp.List.layoutView.timeRegion.show(DWApp.TimelineApp.List.ListTimes.listView);

                }).fail(function () {

                });

            }

        });

        ListTimes.Controller = new Controller();

    });

    return DWApp.TimelineApp.ListTimes;
});
