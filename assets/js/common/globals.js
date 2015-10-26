define([
    'jquery',
    'common/utils'
], function ($, utils) {

    var self = this;

    this.ROWS = 825;
    this.ROW_HEIGHT = 30;
    this.LABEL_HEIGHT = 26;
    this.MARGINS = 120 * 2;

    this.USE_FADE = false;
    this.USE_PLAX = false;

    this.PLAX1_VAL = .80;
    this.PLAX2_VAL = .10;
    this.PLAX3_VAL = .30;

    return this;

});