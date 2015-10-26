define([
    'app',
    'apps/timeline/list/list_creatures/list_creatures_view',
    'entities/creature'
], function (DWApp) {

    DWApp.module('TimelineApp.List.ListCreatures', function (ListCreatures, DWApp, Backbone, Marionette, $, _) {

        var Controller = Marionette.Controller.extend({

            listCreatures: function () {
                this.stopListening();
                var self = ListCreatures.Controller;

                var listRequest = DWApp.request('creature:entities');
                $.when(listRequest).done(function (listResult) {

                    DWApp.TimelineApp.List.ListCreatures.listView = new ListCreatures.CreaturesListView({
                        collection: listResult
                    });

                    DWApp.TimelineApp.List.layoutView.creatureRegion.show(DWApp.TimelineApp.List.ListCreatures.listView);

                }).fail(function () {

                });

            }

        });

        ListCreatures.Controller = new Controller();

    });

    return DWApp.TimelineApp.ListCreatures;
});
