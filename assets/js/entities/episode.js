define([
    'app',
    //'entities/base',
    //'entities/customer_company',
    //'backbone.relational'
], function (DWApp) {

    DWApp.module('Entities', function (Entities, DWApp, Backbone, Marionette, $, _) {

        // MODEL -------------------------------------------------------------------------------------------------------

        Entities.Episode = Backbone.Model.extend();

        _.extend(Entities.Episode.prototype, {
            //idAttribute: 'linkId',
            urlRoot: '../api/index.php/episodes',

            defaults: {
                'id':       '',
                'name':     '',
                'episodes': '',
                'from':     '',
                'to':       ''
            }

        });

        // COLLECTION --------------------------------------------------------------------------------------------------

        Entities.Episodes = Backbone.Collection.extend();

        _.extend(Entities.Episodes.prototype, {
            url:    '../api/index.php/episodes',
            model:  Entities.Episode
        });

        // API -----------------------------------------------------------------

        var API = {

            getModel: function (episode) {
                var defer = $.Deferred();

                episode.fetch({
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
                var episodes = new Entities.Episodes();
                var defer = $.Deferred();

                episodes.fetch({
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

        DWApp.reqres.setHandler('episode:entity', function (model) {
            return API.getModel(model);
        });

        DWApp.reqres.setHandler('episode:entities', function (collection) {
            return API.getCollection(collection);
        });

    });

    return DWApp.Entities;
});
