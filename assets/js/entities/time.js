define([
    'app',
    //'entities/base',
    //'entities/customer_company',
    //'backbone.relational'
], function (DWApp) {

    DWApp.module('Entities', function (Entities, DWApp, Backbone, Marionette, $, _) {

        // MODEL -------------------------------------------------------------------------------------------------------

        Entities.Time = Backbone.Model.extend();

        _.extend(Entities.Time.prototype, {
            urlRoot: '../api/index.php/times',

            defaults: {
                'id':       '',
                'time':     '',
                'from':     '',
                'to':       ''
            }

        });

        // COLLECTION --------------------------------------------------------------------------------------------------

        Entities.Times = Backbone.Collection.extend();

        _.extend(Entities.Times.prototype, {
            url:    '../api/index.php/times',
            model:  Entities.Time
        });

        // API -----------------------------------------------------------------

        var API = {

            getModel: function (time) {
                var defer = $.Deferred();

                time.fetch({
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
                var times = new Entities.Times();
                var defer = $.Deferred();

                times.fetch({
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

        DWApp.reqres.setHandler('time:entity', function (model) {
            return API.getModel(model);
        });

        DWApp.reqres.setHandler('time:entities', function (collection) {
            return API.getCollection(collection);
        });

    });

    return DWApp.Entities;
});
