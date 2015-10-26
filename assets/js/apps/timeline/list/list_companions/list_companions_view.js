define([
    'app',
    'common/globals',
    'tpl!apps/timeline/list/list_companions/templates/companions_list.tpl',
    'tpl!apps/timeline/list/list_companions/templates/companions_item.tpl'
], function (DWApp, Globals, CompanionsListTpl, CompanionsItemTpl) {

    DWApp.module('TimelineApp.List.ListCompanions', function (ListCompanions, DWApp, Backbone, Marionette, $, _) {

        // ITEM --------------------------------------------------------------------------------------------------------

        ListCompanions.CompanionsItemView = Marionette.ItemView.extend({
            template: CompanionsItemTpl,

            templateHelpers: {

                getStyle: function (episode) {
                    var out = '';

                    var top = episode.from * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;
                    var bot = episode.to * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;

                    out += 'top:' + top + 'px; ';
                    out += 'left:' + episode.pos + 'px; ';
                    out += 'height:' + (bot - top + Globals.LABEL_HEIGHT) + 'px; ';
                    out += 'z-index: ' + episode.zi;

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

        ListCompanions.CompanionsEmptyView = Marionette.ItemView.extend({
            template: '<div></div>',

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            }
        });

        // LIST --------------------------------------------------------------------------------------------------------

        ListCompanions.CompanionsListView = Marionette.CompositeView.extend({
            template:           CompanionsListTpl,
            childView:          ListCompanions.CompanionsItemView,
            emptyView:          ListCompanions.CompanionsEmptyView,
            childViewContainer: '#dwt-companion-list',

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

    return DWApp.TimelineApp.ListCompanions;
});