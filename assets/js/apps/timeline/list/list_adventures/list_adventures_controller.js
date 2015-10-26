define([
    'app',
    'apps/timeline/list/list_adventures/list_adventures_view',
    'entities/adventure'
], function (DWApp) {

    DWApp.module('TimelineApp.List.ListAdventures', function (ListAdventures, DWApp, Backbone, Marionette, $, _) {

        var Controller = Marionette.Controller.extend({

            listAdventures: function () {
                this.stopListening();
                var self = ListAdventures.Controller;

                var listRequest = DWApp.request('adventure:entities');
                $.when(listRequest).done(function (listResult) {

                    DWApp.TimelineApp.List.ListAdventures.listView = new ListAdventures.AdventuresListView({
                        collection: listResult
                    });

                    DWApp.TimelineApp.List.layoutView.adventureRegion.show(DWApp.TimelineApp.List.ListAdventures.listView);

                }).fail(function () {

                });

            }

        });

        ListAdventures.Controller = new Controller();

    });

    return DWApp.TimelineApp.ListAdventures;
});
