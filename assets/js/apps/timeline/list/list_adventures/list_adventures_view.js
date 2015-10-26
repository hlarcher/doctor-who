define([
    'app',
    'common/globals',
    'tpl!apps/timeline/list/list_adventures/templates/adventures_list.tpl',
    'tpl!apps/timeline/list/list_adventures/templates/adventures_item.tpl'
], function (DWApp, Globals, AdventuresListTpl, AdventuresItemTpl) {

    DWApp.module('TimelineApp.List.ListAdventures', function (ListAdventures, DWApp, Backbone, Marionette, $, _) {

        // ITEM --------------------------------------------------------------------------------------------------------

        ListAdventures.AdventuresItemView = Marionette.ItemView.extend({
            template: AdventuresItemTpl,

            templateHelpers: {

                getStyle: function () {
                    var out = '';

                    var top = this.from * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;
                    var bot = this.to * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;

                    out += 'top:' + top + 'px;';
                    out += 'height:' + (bot - top + Globals.LABEL_HEIGHT) + 'px;';

                    return out;
                },

                getLabelStyle: function () {
                    var out = '';

                    var top = this.from * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;
                    var bot = this.to * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;

                    out += 'height: ' + (bot - top + Globals.LABEL_HEIGHT) + 'px;';

                    return out;
                },

                getEpisodesStyle: function () {
                    var out = '';

                    var top = this.from * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;
                    var bot = this.to * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;

                    out += 'height: ' + (bot - top + Globals.LABEL_HEIGHT) + 'px;';

                    return out;
                },

                getTitle: function () {
                    var out = '';

                    out = (this.name.length > 0) ? this.id + '. ' + this.name : this.id;

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

        ListAdventures.AdventuresEmptyView = Marionette.ItemView.extend({
            template: '<div></div>',

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            }
        });

        // LIST --------------------------------------------------------------------------------------------------------

        ListAdventures.AdventuresListView = Marionette.CompositeView.extend({
            template:           AdventuresListTpl,
            childView:          ListAdventures.AdventuresItemView,
            emptyView:          ListAdventures.AdventuresEmptyView,
            childViewContainer: '#dwt-adventure-list',

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

    return DWApp.TimelineApp.ListAdventures;
});