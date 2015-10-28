define([
    'app',
    'common/globals',
    'tpl!apps/timeline/list/list_times/templates/times_list.tpl',
    'tpl!apps/timeline/list/list_times/templates/times_item.tpl'
], function (DWApp, Globals, TimesListTpl, TimesItemTpl) {

    DWApp.module('TimelineApp.List.ListTimes', function (ListTimes, DWApp, Backbone, Marionette, $, _) {

        // ITEM --------------------------------------------------------------------------------------------------------

        ListTimes.TimesItemView = Marionette.ItemView.extend({
            template: TimesItemTpl,

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

                    out += 'height:' + (bot - top + Globals.LABEL_HEIGHT) + 'px;';

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

        ListTimes.TimesEmptyView = Marionette.ItemView.extend({
            template: '<div></div>',

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            }
        });

        // LIST --------------------------------------------------------------------------------------------------------

        ListTimes.TimesListView = Marionette.CompositeView.extend({
            template:           TimesListTpl,
            childView:          ListTimes.TimesItemView,
            emptyView:          ListTimes.TimesEmptyView,
            childViewContainer: '#dwt-time-list',

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

    return DWApp.TimelineApp.ListTimes;
});