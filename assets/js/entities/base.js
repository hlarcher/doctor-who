define([
    'app',
    //'backbone.relational',
    //'backbone.memento'
], function (DWApp) {
    
    DWApp.module('Entities', function (Entities, DWApp, Backbone, Marionette, $, _) {
        
        // BASE MODEL ----------------------------------------------------------

        Entities.BaseModel = Backbone.RelationalModel.extend();

        _.extend(Entities.BaseModel.prototype, {
            initialize: function () {
                var memento = new Backbone.Memento(this);
                _.extend(this, memento);
            },
            
            sync: function (method, model, options) {
                var self = this,
                    config = {
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader('auth-token', DWApp.Session.get('secretToken'));
                        }
                    };
                options = _.extend(options, config);
                return Backbone.RelationalModel.prototype.sync.call(this, method, model, options);
            }
        });

        // BASE COLLECTION -----------------------------------------------------

        Entities.BaseCollection = Backbone.Collection.extend();

        _.extend(Entities.BaseCollection.prototype, {
            sync: function (method, collection, options) {
                var self = this,
                    config = {
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader('auth-token', DWApp.Session.get('secretToken'));
                        }
                    };
                options = _.extend(options, config);
                return Backbone.Collection.prototype.sync.call(this, method, collection, options);
            }
        });
        
    });

    return DWApp.Entities;
});
