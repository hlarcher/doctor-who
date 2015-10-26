define([
    'app',
    'apps/timeline/list/list_doctors/list_doctors_view',
    'entities/doctor'
], function (DWApp) {

    DWApp.module('TimelineApp.List.ListDoctors', function (ListDoctors, DWApp, Backbone, Marionette, $, _) {

        var Controller = Marionette.Controller.extend({

            listDoctors: function () {
                this.stopListening();
                var self = ListDoctors.Controller;

                var listRequest = DWApp.request('doctor:entities');
                $.when(listRequest).done(function (listResult) {

                    DWApp.TimelineApp.List.ListDoctors.listView = new ListDoctors.DoctorsListView({
                        collection: listResult
                    });

                    DWApp.TimelineApp.List.layoutView.doctorRegion.show(DWApp.TimelineApp.List.ListDoctors.listView);

                }).fail(function () {

                });

            }

        });

        ListDoctors.Controller = new Controller();

    });

    return DWApp.TimelineApp.ListDoctors;
});
