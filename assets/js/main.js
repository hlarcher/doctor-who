function initialize() {

    requirejs.config({

        urlArgs: "xpto=" + (new Date()).getTime(),

        baseUrl: 'assets/js',

        waitSeconds: 60,

        //locale: 'en',

        paths: {
            'backbone':              	'vendor/backbone',
            'bootstrap':             	'vendor/bootstrap',
            'bootstrap.modal':       	'vendor/backbone.modal',
            'jquery':                	'vendor/jquery',
            //'json2':                 	'vendor/json2',
            'marionette':            	'vendor/marionette',
            'tpl':                   	'vendor/tpl',
            'underscore':            	'vendor/underscore'
        },

        shim: {
            'jquery':                {
                exports: '$'
            },
            'underscore':            {
                deps:    ['jquery'],
                exports: '_'
            },
            'backbone':              {
                deps:    ['jquery', 'underscore'],
                exports: 'Backbone'
            },
            'marionette':            {
                deps:    ['backbone'],
                exports: 'Marionette'
            },
            'bootstrap':             ['jquery'],
            'bootstrap.modal':       ['jquery', 'bootstrap', 'backbone']
        }

    });

    // start the app
    require([
        'app',
        'apps/timeline/timeline_app',
        'bootstrap'
    ], function (DWApp) {
        DWApp.start();
    });
}

initialize();