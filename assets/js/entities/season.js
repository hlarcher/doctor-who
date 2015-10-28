define([
    'app',
    //'entities/base',
    //'entities/customer_company',
    //'backbone.relational'
], function (DWApp) {

    DWApp.module('Entities', function (Entities, DWApp, Backbone, Marionette, $, _) {

        // MODEL -------------------------------------------------------------------------------------------------------

        Entities.Season = Backbone.Model.extend();

        _.extend(Entities.Season.prototype, {
            urlRoot: '../api/index.php/seasons',

            defaults: {
                'id':       '',
                'name':     '',
                'from':     '',
                'to':       ''
            }

        });

        // COLLECTION --------------------------------------------------------------------------------------------------

        Entities.Seasons = Backbone.Collection.extend();

        _.extend(Entities.Seasons.prototype, {
            url:    '../api/index.php/seasons',
            model:  Entities.Season
        });

        // API -----------------------------------------------------------------

        var API = {

            getModel: function (season) {
                var defer = $.Deferred();

                season.fetch({
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
                var seasons = new Entities.Seasons();
                var defer = $.Deferred();

                seasons.fetch({
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

        DWApp.reqres.setHandler('season:entity', function (model) {
            return API.getModel(model);
        });

        DWApp.reqres.setHandler('season:entities', function (collection) {
            return API.getCollection(collection);
        });

    });

    return DWApp.Entities;
});
