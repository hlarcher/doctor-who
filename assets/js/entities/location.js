define([
    'app',
    //'entities/base',
    //'entities/customer_company',
    //'backbone.relational'
], function (DWApp) {

    DWApp.module('Entities', function (Entities, DWApp, Backbone, Marionette, $, _) {

        // MODEL -------------------------------------------------------------------------------------------------------

        Entities.Location = Backbone.Model.extend();

        _.extend(Entities.Location.prototype, {
            urlRoot: '../api/index.php/locations',

            defaults: {
                'id':       '',
                'place':    '',
                'from':     '',
                'to':       ''
            }

        });

        // COLLECTION --------------------------------------------------------------------------------------------------

        Entities.Locations = Backbone.Collection.extend();

        _.extend(Entities.Locations.prototype, {
            url:    '../api/index.php/locations',
            model:  Entities.Location
        });

        // API -----------------------------------------------------------------

        var API = {

            getModel: function (location) {
                var defer = $.Deferred();

                location.fetch({
                    success: function (model) {
                        defer.resolve(model);
                    },
                    error: function () {
                        defer.reject(undefined);
                    }
                });

                return defer.promise();
            },

            getCollection: function () {
                var locations = new Entities.Locations();
                var defer = $.Deferred();

                locations.fetch({
                    //traditional: true,
                    success: function (collection) {
                        defer.resolve(collection);
                    },
                    error: function () {
                        defer.reject(undefined);
                    }
                });

                return defer.promise();
            }

        };

        // HANDLERS ----------------------------------------------------------------------------------------------------

        DWApp.reqres.setHandler('location:entity', function (model) {
            return API.getModel(model);
        });

        DWApp.reqres.setHandler('location:entities', function (collection) {
            return API.getCollection(collection);
        });

    });

    return DWApp.Entities;
});
