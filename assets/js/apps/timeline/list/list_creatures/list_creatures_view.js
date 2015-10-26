define([
    'app',
    'common/globals',
    'tpl!apps/timeline/list/list_creatures/templates/creatures_list.tpl',
    'tpl!apps/timeline/list/list_creatures/templates/creatures_item.tpl'
], function (DWApp, Globals, CreaturesListTpl, CreaturesItemTpl) {

    DWApp.module('TimelineApp.List.ListCreatures', function (ListCreatures, DWApp, Backbone, Marionette, $, _) {

        // ITEM --------------------------------------------------------------------------------------------------------

        ListCreatures.CreaturesItemView = Marionette.ItemView.extend({
            template: CreaturesItemTpl,

            templateHelpers: {

                getStyle: function (episode) {
                    var out = '';

                    var top = episode.from * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;
                    var bot = episode.to * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;

                    out += 'top:' + top + 'px; ';
                    out += 'left:' + episode.pos + 'px; ';
                    out += 'height:' + (bot - top + Globals.LABEL_HEIGHT) + 'px; ';
                    //out += 'z-index: ' + episode.zi;

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

        ListCreatures.CreaturesEmptyView = Marionette.ItemView.extend({
            template: '<div></div>',

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            }
        });

        // LIST --------------------------------------------------------------------------------------------------------

        ListCreatures.CreaturesListView = Marionette.CompositeView.extend({
            template:           CreaturesListTpl,
            childView:          ListCreatures.CreaturesItemView,
            emptyView:          ListCreatures.CreaturesEmptyView,
            childViewContainer: '#dwt-creature-list',

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

    return DWApp.TimelineApp.ListCreatures;
});