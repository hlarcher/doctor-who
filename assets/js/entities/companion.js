define([
    'app',
    //'entities/base',
    //'entities/customer_company',
    //'backbone.relational'
], function (DWApp) {

    DWApp.module('Entities', function (Entities, DWApp, Backbone, Marionette, $, _) {

        // MODEL -------------------------------------------------------------------------------------------------------

        Entities.Companion = Backbone.Model.extend();

        _.extend(Entities.Companion.prototype, {
            urlRoot: '../api/index.php/companions',

            defaults: {
                'id':       '',
                'name':     '',
                'fname':    '',
                'color':    '',
                'episodes': {}
            }

        });

        // COLLECTION --------------------------------------------------------------------------------------------------

        Entities.Companions = Backbone.Collection.extend();

        _.extend(Entities.Companions.prototype, {
            url:    '../api/index.php/companions',
            model:  Entities.Companion
        });

        // API -----------------------------------------------------------------

        var API = {

            getModel: function (companion) {
                var defer = $.Deferred();

                companion.fetch({
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
                var companions = new Entities.Companions();
                var defer = $.Deferred();

                companions.fetch({
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

        DWApp.reqres.setHandler('companion:entity', function (model) {
            return API.getModel(model);
        });

        DWApp.reqres.setHandler('companion:entities', function (collection) {
            return API.getCollection(collection);
        });

    });

    return DWApp.Entities;
});
