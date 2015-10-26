define([
    'app',
    'common/globals',
    'tpl!apps/timeline/list/list_doctors/templates/doctors_list.tpl',
    'tpl!apps/timeline/list/list_doctors/templates/doctors_item.tpl'
], function (DWApp, Globals, DoctorsListTpl, DoctorsItemTpl) {

    DWApp.module('TimelineApp.List.ListDoctors', function (ListDoctors, DWApp, Backbone, Marionette, $, _) {

        // ITEM --------------------------------------------------------------------------------------------------------

        ListDoctors.DoctorsItemView = Marionette.ItemView.extend({
            template: DoctorsItemTpl,

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

        ListDoctors.DoctorsEmptyView = Marionette.ItemView.extend({
            template: '<div></div>',

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            }
        });

        // LIST --------------------------------------------------------------------------------------------------------

        ListDoctors.DoctorsListView = Marionette.CompositeView.extend({
            template:           DoctorsListTpl,
            childView:          ListDoctors.DoctorsItemView,
            emptyView:          ListDoctors.DoctorsEmptyView,
            childViewContainer: '#dwt-doctor-list',

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

    return DWApp.TimelineApp.ListDoctors;
});