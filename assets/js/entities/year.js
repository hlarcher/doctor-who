define([
    'app',
    //'entities/base',
    //'entities/customer_company',
    //'backbone.relational'
], function (DWApp) {

    DWApp.module('Entities', function (Entities, DWApp, Backbone, Marionette, $, _) {

        // MODEL -------------------------------------------------------------------------------------------------------

        Entities.Year = Backbone.Model.extend();

        _.extend(Entities.Year.prototype, {
            urlRoot: '../api/index.php/years',

            defaults: {
                'id':       '',
                'date':     '',
                'from':     '',
                'to':       ''
            }

        });

        // COLLECTION --------------------------------------------------------------------------------------------------

        Entities.Years = Backbone.Collection.extend();

        _.extend(Entities.Years.prototype, {
            url:    '../api/index.php/years',
            model:  Entities.Year
        });

        // API -----------------------------------------------------------------

        var API = {

            getModel: function (year) {
                var defer = $.Deferred();

                year.fetch({
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
                var years = new Entities.Years();
                var defer = $.Deferred();

                years.fetch({
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

        DWApp.reqres.setHandler('year:entity', function (model) {
            return API.getModel(model);
        });

        DWApp.reqres.setHandler('year:entities', function (collection) {
            return API.getCollection(collection);
        });

    });

    return DWApp.Entities;
});
