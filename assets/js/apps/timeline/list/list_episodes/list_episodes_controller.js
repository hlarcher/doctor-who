define([
    'app',
    'apps/timeline/list/list_episodes/list_episodes_view',
    'entities/episode'
], function (DWApp) {

    DWApp.module('TimelineApp.List.ListEpisodes', function (ListEpisodes, DWApp, Backbone, Marionette, $, _) {

        var Controller = Marionette.Controller.extend({

            listEpisodes: function () {
                this.stopListening();
                var self = ListEpisodes.Controller;

                var listRequest = DWApp.request('episode:entities');
                $.when(listRequest).done(function (listResult) {

                    DWApp.TimelineApp.List.ListEpisodes.listView = new ListEpisodes.EpisodesListView({
                        collection: listResult
                    });

                    DWApp.TimelineApp.List.layoutView.episodeRegion.show(DWApp.TimelineApp.List.ListEpisodes.listView);

                }).fail(function () {

                });

            }

        });

        ListEpisodes.Controller = new Controller();

    });

    return DWApp.TimelineApp.ListEpisodes;
});
