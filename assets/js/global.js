
// RESIZE

var resizeHandler = null;
var lastWindowHeight = $(window).height();
var lastWindowWidth = $(window).width();

function onWindowResize (handler) {
    resizeHandler = handler;
    $(window).on("debouncedresize", function() {
        if ($(window).height() !== lastWindowHeight || $(window).width() !== lastWindowWidth) {
            lastWindowHeight = $(window).height();
            lastWindowWidth = $(window).width();
            if (resizeHandler !== null) resizeHandler(lastWindowWidth, lastWindowHeight);
        }
    });
}

// SCROLL

var scrollHandler = null;

function onWindowScroll (handler) {
    scrollHandler = handler;
    $(window).scroll(function() {
        if (scrollHandler !== null) scrollHandler();
    });
}

function initToTop () {
    $().UItoTop({ 
        inDelay: 200, 
        outDelay: 200, 
        scrollSpeed: 500
    });
}

// RETINA

function initHighRes () {
    if ($('.retina-img').css('font-size') === "1px") {
        var els = $("img.retina-img").get();
        for (var i = 0; i < els.length; i++) {
            var src = els[i].src;
            src = src.replace(".png", "@2x.png");
            els[i].src = src;
        }
    }
};

// CONTACT

var formDelay = 4000;

function sendContact () {
    $('#contact-form div.control-group').removeClass('error');
    sendResult();
    
    if (!$('#contact-name').val() || !isValidEmail($('#contact-email').val()) || !$('#contact-subject').val() || !$('#contact-message').val()) {
        if (!$('#contact-name').val()) {
            $('#contact-name').closest('div.control-group').addClass('error');
        }
        if (!isValidEmail($('#contact-email').val())) {
            $('#contact-email').closest('div.control-group').addClass('error');
        }
        if (!$('#contact-subject').val()) {
            $('#contact-subject').closest('div.control-group').addClass('error');
        }
        if (!$('#contact-message').val()) {
            $('#contact-message').closest('div.control-group').addClass('error');
        }
        
        sendResult('incomplete');
    } else {
        sendResult('sending', true);
 
        $.ajax( {
            url: $('#contact-form').attr('action') + "?ajax=true",
            type: $('#contact-form').attr('method'),
            data: $('#contact-form').serialize(),
            timeout: 10000,
            success: submitFinished,
            error: function () {
                sendResult('failure');
            }
        } );
    }
    
    return false;
}

function submitFinished (response) {
    response = $.trim(response);
    sendResult();
 
    if (response === 'success') {
        sendResult('success');
        $('#contact-name').val('');
        $('#contact-email').val('');
        $('#contact-subject').val('');
        $('#contact-message').val('');
    } else {
        sendResult('failure');
    }
}

function sendResult (res, noFade) {
    $('.contact-result').hide();
    if (res) {
        if (noFade) $('#contact-' + res).fadeIn();
        else $('#contact-' + res).fadeIn().delay(formDelay).fadeOut();
    }
}

function isValidEmail (sEmail) {
    var sQtext = '[^\\x0d\\x22\\x5c\\x80-\\xff]';
    var sDtext = '[^\\x0d\\x5b-\\x5d\\x80-\\xff]';
    var sAtom = '[^\\x00-\\x20\\x22\\x28\\x29\\x2c\\x2e\\x3a-\\x3c\\x3e\\x40\\x5b-\\x5d\\x7f-\\xff]+';
    var sQuotedPair = '\\x5c[\\x00-\\x7f]';
    var sDomainLiteral = '\\x5b(' + sDtext + '|' + sQuotedPair + ')*\\x5d';
    var sQuotedString = '\\x22(' + sQtext + '|' + sQuotedPair + ')*\\x22';
    var sDomain_ref = sAtom;
    var sSubDomain = '(' + sDomain_ref + '|' + sDomainLiteral + ')';
    var sWord = '(' + sAtom + '|' + sQuotedString + ')';
    var sDomain = sSubDomain + '(\\x2e' + sSubDomain + ')*';
    var sLocalPart = sWord + '(\\x2e' + sWord + ')*';
    var sAddrSpec = sLocalPart + '\\x40' + sDomain; // complete RFC822 email address spec
    var sValidEmail = '^' + sAddrSpec + '$'; // as whole string

    var reValidEmail = new RegExp(sValidEmail);

    if (reValidEmail.test(sEmail)) {
      return true;
    }

    return false;
}

function initContactForm () {
    $('#contact-form').submit(sendContact);
}

// MAPS

function initMaps () {
    $('#map').gmap3({
    map: {
        options: {
            center: [39.74058, -8.81548],
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            },
            navigationControl: true,
            scrollwheel: false,
            streetViewControl: false
        }
    },
    marker: {
        address: "Rua Afonso Lopes Vieira 49a, Leiria, Portugal",
        options: {
            draggable: false
        }
    }
});
}

// LANGUAGES

var currentLanguage = '';

function changeLanguage (lang) {
    if (lang === undefined) {
        var lang = ($.cookie('lang') === null) ? 'en' : $.cookie('lang');
    }
    
    if (currentLanguage === lang) return;
    
    var opts = {
        language: lang, 
        pathPrefix: 'json/localization', 
        skipLanguage: 'en-US' 
    };
    $('[data-localize]').localize('site', opts);
    
    $('#languages li').removeClass('active');
    $('#languages a[data-lang="' + lang + '"]').closest('li').addClass('active');
    
    $.cookie('lang', lang);
    currentLanguage = lang;
}

function initLanguages () {
    $('#languages a').unbind('click').click(function (e) {
        e.preventDefault();
        changeLanguage($(this).attr('data-lang'));
        return false;
    });
}

// TOOLTIPS

function initTooltips () {
    $('.ttip_t').tooltip({ container: 'body', placement: 'top' });
    $('.ttip_r').tooltip({ container: 'body', placement: 'right' });
    $('.ttip_b').tooltip({ container: 'body', placement: 'bottom' });
    $('.ttip_l').tooltip({ container: 'body', placement: 'left' });
}