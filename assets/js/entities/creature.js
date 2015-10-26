define([
    'app',
    //'entities/base',
    //'entities/customer_company',
    //'backbone.relational'
], function (DWApp) {

    DWApp.module('Entities', function (Entities, DWApp, Backbone, Marionette, $, _) {

        // MODEL -------------------------------------------------------------------------------------------------------

        Entities.Creature = Backbone.Model.extend();

        _.extend(Entities.Creature.prototype, {
            //idAttribute: 'linkId',
            urlRoot: '../api/index.php/creatures',

            defaults: {
                'id':   '',
                'name': '',
                'from': '',
                'to':   '',
                'info': {
                    'title':    '',
                    'actor':    '',
                    'image':    '',
                    'text':     '',
                    'quote':    '',
                    'trivia':   [],
                    'facts':    []
                }
            }

        });

        // COLLECTION --------------------------------------------------------------------------------------------------

        Entities.Creatures = Backbone.Collection.extend();

        _.extend(Entities.Creatures.prototype, {
            url:    '../api/index.php/creatures',
            model:  Entities.Creature
        });

        // API -----------------------------------------------------------------

        var API = {

            getModel: function (creature) {
                var defer = $.Deferred();

                creature.fetch({
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
                var creatures = new Entities.Creatures();
                var defer = $.Deferred();

                creatures.fetch({
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

        DWApp.reqres.setHandler('creature:entity', function (model) {
            return API.getModel(model);
        });

        DWApp.reqres.setHandler('creature:entities', function (collection) {
            return API.getCollection(collection);
        });

    });

    return DWApp.Entities;
});
