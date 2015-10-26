define([
    'app',
    'common/globals',
    'tpl!apps/timeline/list/list_years/templates/years_list.tpl',
    'tpl!apps/timeline/list/list_years/templates/years_item.tpl'
], function (DWApp, Globals, YearsListTpl, YearsItemTpl) {

    DWApp.module('TimelineApp.List.ListYears', function (ListYears, DWApp, Backbone, Marionette, $, _) {

        // ITEM --------------------------------------------------------------------------------------------------------

        ListYears.YearsItemView = Marionette.ItemView.extend({
            template: YearsItemTpl,

            templateHelpers: {

                getStyle: function () {
                    var out = '';

                    var top = this.from * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;
                    var bot = this.to * Globals.ROW_HEIGHT - Globals.ROW_HEIGHT;

                    out = 'top:' + top + 'px; height:' + (bot - top + Globals.LABEL_HEIGHT) + 'px';

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

        ListYears.YearsEmptyView = Marionette.ItemView.extend({
            template: '<div></div>',

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            }
        });

        // LIST --------------------------------------------------------------------------------------------------------

        ListYears.YearsListView = Marionette.CompositeView.extend({
            template:           YearsListTpl,
            childView:          ListYears.YearsItemView,
            emptyView:          ListYears.YearsEmptyView,
            childViewContainer: '#dwt-year-list',

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

    return DWApp.TimelineApp.ListYears;
});