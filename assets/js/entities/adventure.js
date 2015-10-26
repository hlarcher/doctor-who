define([
    'app',
    //'entities/base',
    //'entities/customer_company',
    //'backbone.relational'
], function (DWApp) {

    DWApp.module('Entities', function (Entities, DWApp, Backbone, Marionette, $, _) {

        // MODEL -------------------------------------------------------------------------------------------------------

        Entities.Adventure = Backbone.Model.extend();

        _.extend(Entities.Adventure.prototype, {
            //idAttribute: 'linkId',
            urlRoot: '../api/index.php/adventures',

            defaults: {
                'id':       '',
                'name':     '',
                'from':     '',
                'to':       ''
            }

        });

        // COLLECTION --------------------------------------------------------------------------------------------------

        Entities.Adventures = Backbone.Collection.extend();

        _.extend(Entities.Adventures.prototype, {
            url:    '../api/index.php/adventures',
            model:  Entities.Adventure
        });

        // API -----------------------------------------------------------------

        var API = {

            getModel: function (adventure) {
                var defer = $.Deferred();

                adventure.fetch({
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
                var adventures = new Entities.Adventures();
                var defer = $.Deferred();

                adventures.fetch({
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

        DWApp.reqres.setHandler('adventure:entity', function (model) {
            return API.getModel(model);
        });

        DWApp.reqres.setHandler('adventure:entities', function (collection) {
            return API.getCollection(collection);
        });

    });

    return DWApp.Entities;
});
