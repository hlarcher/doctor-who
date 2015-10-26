define([
    'app',
    //'entities/base',
    //'entities/customer_company',
    //'backbone.relational'
], function (DWApp) {

    DWApp.module('Entities', function (Entities, DWApp, Backbone, Marionette, $, _) {

        // MODEL -------------------------------------------------------------------------------------------------------

        Entities.Doctor = Backbone.Model.extend();

        _.extend(Entities.Doctor.prototype, {
            //idAttribute: 'linkId',
            urlRoot: '../api/index.php/doctors',

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

        Entities.Doctors = Backbone.Collection.extend();

        _.extend(Entities.Doctors.prototype, {
            url:    '../api/index.php/doctors',
            model:  Entities.Doctor
        });

        // API -----------------------------------------------------------------

        var API = {

            getModel: function (doctor) {
                var defer = $.Deferred();

                doctor.fetch({
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
                var doctors = new Entities.Doctors();
                var defer = $.Deferred();

                doctors.fetch({
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

        DWApp.reqres.setHandler('doctor:entity', function (model) {
            return API.getModel(model);
        });

        DWApp.reqres.setHandler('doctor:entities', function (collection) {
            return API.getCollection(collection);
        });

    });

    return DWApp.Entities;
});
