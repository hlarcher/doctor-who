define([
    'app',
    'common/globals',
    'tpl!apps/timeline/list/templates/layout.tpl'
], function (DWApp, Globals, LayoutTpl) {

    DWApp.module('TimelineApp.List', function (List, DWApp, Backbone, Marionette, $, _) {

        List.LayoutView = Marionette.LayoutView.extend({
            template: LayoutTpl,

            regions: {
                seasonRegion:       '#dwt-season-region',
                yearRegion:         '#dwt-year-region',
                doctorRegion:       '#dwt-doctor-region',
                companionRegion:    '#dwt-companion-region',
                creatureRegion:    '#dwt-creature-region',
                episodeRegion:    '#dwt-episode-region',
                adventureRegion:    '#dwt-adventure-region'
                //locationRegion:    '#dwt-location-region',
                //timeRegion:    '#dwt-time-region',
            },

            templateHelpers: {



            },

            events: {

            },

            serializeData: function () {
                var data = {};
                if (this.model !== undefined) data = this.model.toJSON();
                return data;
            },

            initialize: function () {
                this.lastWindowHeight = $(window).height();
                this.lastWindowWidth = $(window).width();
            },

            onRender: function () {
                $('#dwt-body').css('height', (Globals.ROWS * Globals.ROW_HEIGHT) + 'px');

                this.calculateBgSizes();
                this.createStars();
            },

            onShow: function () {
                var that = this;

                if (Globals.USE_PLAX) {
                    $(window).bind('scroll', function (e) {
                        that.parallaxScroll();
                    });
                    $(window).on('resize', $.throttle(500, function () {
                        if ($(window).height() !== that.lastWindowHeight || $(window).width() !== that.lastWindowWidth) {
                            that.lastWindowHeight = $(window).height();
                            that.lastWindowWidth = $(window).width();
                            that.calculateBgSizes(that.lastWindowWidth, that.lastWindowHeight);
                        }
                    }));
                }
            },

            // HANDLERS ------------------------------------------------------------------------------------------------



            // METHODS -------------------------------------------------------------------------------------------------

            calculateBgSizes: function (ww, wh) {
                var hei = (Globals.ROWS * Globals.ROW_HEIGHT) + Globals.MARGINS;

                if (wh === undefined) wh = $(window).height();

                if (Globals.USE_PLAX) {
                    $('#bg1').css('height', Math.round(hei - ((hei - wh) * Globals.PLAX1_VAL)) + 'px');
                    $('#bg2').css('height', Math.round(hei - ((hei - wh) * Globals.PLAX2_VAL)) + 'px');
                    $('#bg3').css('height', Math.round(hei + ((hei - wh) * Globals.PLAX3_VAL)) + 'px');
                } else {
                    $('#bg1').css('height', hei + 'px');
                    $('#bg2').css('height', hei + 'px');
                    $('#bg3').css('height', hei + 'px');
                }
            },

            createStars: function () {
                var x = 0;
                var y = 0;
                var w = $(window).width();
                var h2 = $('#bg2').height();
                var h3 = $('#bg3').height();

                for (var i = 0; i < 25; i++) {
                    x = Math.random() * w;
                    y = Math.random() * h2;
                    $('#bg2').append('<div class="starS" style="left: ' + x + 'px; top: ' + y + 'px;"></div>');
                    x = Math.random() * w;
                    y = Math.random() * h3;
                    $('#bg3').append('<div class="starB" style="left: ' + x + 'px; top: ' + y + 'px;"></div>');
                }

                $('#bg1').append('<div class="planetS"></div><div class="planetB"></div>');
            },

            parallaxScroll: function () {
                var scrolled = $(window).scrollTop();
                var plax1 = (0 + (scrolled * Globals.PLAX1_VAL)).toFixed(1);
                var plax2 = (0 + (scrolled * Globals.PLAX2_VAL)).toFixed(1);
                var plax3 = (0 - (scrolled * Globals.PLAX3_VAL)).toFixed(1);

                $('#bg1').css('top', plax1 + 'px');
                $('#bg2').css('top', plax2 + 'px');
                $('#bg3').css('top', plax3 + 'px');
            }

        });

    });

    return DWApp.TimelineApp.List;
});
