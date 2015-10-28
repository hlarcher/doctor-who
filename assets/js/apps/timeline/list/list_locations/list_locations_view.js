define([
    'app',
    'common/globals',
    'tpl!apps/timeline/list/list_locations/templates/locations_list.tpl',
    'tpl!apps/timeline/list/list_locations/templates/locations_item.tpl'
], function (DWApp, Globals, LocationsListTpl, LocationsItemTpl) {

    DWApp.module('TimelineApp.List.ListLocations', function (ListLocations, DWApp, Backbone, Marionette, $, _) {

        // ITEM --------------------------------------------------------------------------------------------------------

        ListLocations.LocationsItemView = Marionette.ItemView.extend({
            template: LocationsItemTpl,

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

        ListLocations.LocationsEmptyView = Marionette.ItemView.extend({
            template: '<div></div>',

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            }
        });

        // LIST --------------------------------------------------------------------------------------------------------

        ListLocations.LocationsListView = Marionette.CompositeView.extend({
            template:           LocationsListTpl,
            childView:          ListLocations.LocationsItemView,
            emptyView:          ListLocations.LocationsEmptyView,
            childViewContainer: '#dwt-location-list',

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

    return DWApp.TimelineApp.ListLocations;
});