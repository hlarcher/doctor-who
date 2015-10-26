define([
    'app',
    'common/globals',
    'tpl!apps/timeline/list/list_episodes/templates/episodes_list.tpl',
    'tpl!apps/timeline/list/list_episodes/templates/episodes_item.tpl'
], function (DWApp, Globals, EpisodesListTpl, EpisodesItemTpl) {

    DWApp.module('TimelineApp.List.ListEpisodes', function (ListEpisodes, DWApp, Backbone, Marionette, $, _) {

        // ITEM --------------------------------------------------------------------------------------------------------

        ListEpisodes.EpisodesItemView = Marionette.ItemView.extend({
            template: EpisodesItemTpl,

            templateHelpers: {

                getStyle: function () {
                    var out = '';

                    var top = this.id * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;

                    out = 'top:' + top + 'px;';

                    return out;
                }

            },

            events: {},

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            },

            initialize: function () {

            },

            onRender: function () {

            },

            onShow: function () {

            }

            // HANDLERS ------------------------------------------------------------------------------------------------



            // METHODS -------------------------------------------------------------------------------------------------


        });

        // EMPTY -------------------------------------------------------------------------------------------------------

        ListEpisodes.EpisodesEmptyView = Marionette.ItemView.extend({
            template: '<div></div>',

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            }
        });

        // LIST --------------------------------------------------------------------------------------------------------

        ListEpisodes.EpisodesListView = Marionette.CompositeView.extend({
            template:           EpisodesListTpl,
            childView:          ListEpisodes.EpisodesItemView,
            emptyView:          ListEpisodes.EpisodesEmptyView,
            childViewContainer: '#dwt-episode-list',

            templateHelpers: {},

            events: {},

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            },

            initialize: function () {

            },

            onRender: function () {

            },

            onShow: function () {

            }

            // HANDLERS ------------------------------------------------------------------------------------------------



            // METHODS -------------------------------------------------------------------------------------------------



        });

    });

    return DWApp.TimelineApp.ListEpisodes;
});