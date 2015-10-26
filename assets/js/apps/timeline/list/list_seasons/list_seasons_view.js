define([
    'app',
    'common/globals',
    'tpl!apps/timeline/list/list_seasons/templates/seasons_list.tpl',
    'tpl!apps/timeline/list/list_seasons/templates/seasons_item.tpl'
], function (DWApp, Globals, SeasonsListTpl, SeasonsItemTpl) {

    DWApp.module('TimelineApp.List.ListSeasons', function (ListSeasons, DWApp, Backbone, Marionette, $, _) {

        // ITEM --------------------------------------------------------------------------------------------------------

        ListSeasons.SeasonsItemView = Marionette.ItemView.extend({
            template: SeasonsItemTpl,

            templateHelpers: {

                getStyle: function () {
                    var out = '';

                    var top = (this.from - 1) * Globals.ROW_HEIGHT;
                    var hei = (this.to - this.from + 1) * Globals.ROW_HEIGHT;

                    out = 'top:' + top + 'px; height:' + hei + 'px';

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

        ListSeasons.SeasonsEmptyView = Marionette.ItemView.extend({
            template: '<div></div>',

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            }
        });

        // LIST --------------------------------------------------------------------------------------------------------

        ListSeasons.SeasonsListView = Marionette.CompositeView.extend({
            template:           SeasonsListTpl,
            childView:          ListSeasons.SeasonsItemView,
            emptyView:          ListSeasons.SeasonsEmptyView,
            childViewContainer: '#dwt-season-list',

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

    return DWApp.TimelineApp.ListSeasons;
});