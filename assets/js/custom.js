
ROWS = 825;
ROW_HEIGHT = 30;
LABEL_HEIGHT = 26;
MARGINS = 120 * 2;

USE_FADE = false;
USE_PLAX = false;

PLAX1_VAL = .80;
PLAX2_VAL = .10;
PLAX3_VAL = .30;

lastWindowHeight = $(window).height();
lastWindowWidth = $(window).width();

$(document).ready(function($) {
    var done = 0;
    var checks = 0;
    var timeout;
    var ready = false;
    
    function moveOn (step) {
        switch (step) {
            case 1:
                createTimeline();
                break;
            case 2:
                createSeasons();
                break;
            case 3:
                $('#dwt-wrapper').show();
                
                createDates();
                createDoctors();
                createCompanions();
                createCreatures();
                createEpisodes();
                createAdventures();
                createLocations();
                createTimes();
                
                timeout = setTimeout(checkDone, 1000);
                
                break;
        }
    }
    
    function checkDone () {
        checks++;
        if (done === 8 || checks === 20) {
            initTimeline();
            clearTimeout(timeout);
            ready = true;
        } else {
            timeout = setTimeout(checkDone, 1000);
        }
    }
    
    function initTimeline () {
        $('#dwt-loader').hide();
        
        checkRelations();
        initTooltips();
        
        if (USE_PLAX) {
            $(window).bind('scroll', function (e) {
                parallaxScroll();
            });
            $(window).on("debouncedresize", function() {
                if ($(window).height() !== lastWindowHeight || $(window).width() !== lastWindowWidth) {
                    lastWindowHeight = $(window).height();
                    lastWindowWidth = $(window).width();
                    calculateBgSizes(lastWindowWidth, lastWindowHeight);
                }
            });
        }
    }
    
    /* create stuff */
    
    function createTimeline () {
        $('#dwt-wrapper').hide();
        var html = ''
        +   '<div id="dwt-header">'
        +       '<div class="dwt-year-bg">Year</div>'
        +       '<div class="dwt-doctor-bg">Doctor</div>'
        +       '<div class="dwt-companion-bg">Companion</div>'
        +       '<div class="dwt-creature-bg">Creature</div>'
        +       '<div class="dwt-episode-bg">Episode</div>'
        +       '<div class="dwt-adventure-bg">Adventure</div>'
        +       '<div class="dwt-location-bg">Location</div>'
        +       '<div class="dwt-time-bg">Time</div>'
        //+       '<div class="dwt-event-bg">Event</div>'
        +   '</div>'
        +   '<div id="dwt-body">'
        +       '<div class="dwt-bg dwt-year-bg"></div>'
        +       '<div class="dwt-bg dwt-doctor-bg"></div>'
        +       '<div class="dwt-bg dwt-companion-bg"></div>'
        +       '<div class="dwt-bg dwt-creature-bg"></div>'
        +       '<div class="dwt-bg dwt-episode-bg"></div>'
        +       '<div class="dwt-bg dwt-adventure-bg"></div>'
        +       '<div class="dwt-bg dwt-location-bg"></div>'
        +       '<div class="dwt-bg dwt-time-bg"></div>'
        //+       '<div class="dwt-bg dwt-event-bg"></div>'
        +   '</div>'
        +   '<div id="dwt-footer">'
        +       'The Doctor Who Timeline has no connection to the BBC. Doctor Who is copyright © by the British Broadcasting Corporation. No copyright infringement is intended.'
        +   '</div>';
        $('#dwt-wrapper').append(html);
        
        var hei = (ROWS * ROW_HEIGHT) + MARGINS;
        
        $('#dwt-body').css('height', (ROWS * ROW_HEIGHT) + 'px');
        
        calculateBgSizes();
        createStars();
        
        moveOn(2);
    }
    
    function createSeasons () {
        SEASONS.init(function () {
            moveOn(3);
        });
    }
    
    function createDates () {
        DATES.init(function () {
            done++;
        });
    }
    
    function createDoctors () {
        DOCTORS.init(function () {
            done++;
        });
    }
    
    function createCompanions () {
        COMPANIONS.init(function() {
            done++;
        });
    }
    
    function createCreatures () {
        CREATURES.init(function() {
            done++;
        });
    }
    
    function createEpisodes () {
        EPISODES.init(function() {
            done++;
        });
    }
    
    function createAdventures () {
        ADVENTURES.init(function() {
            done++;
        });
    }
    
    function createLocations () {
        LOCATIONS.init(function() {
            done++;
        });
    }
    
    function createTimes () {
        TIMES.init(function() {
            done++;
        });
    }
    
    // INIT
    
//    $('body').append('<div id="dwt-menu"><ul></ul></div>');
//    $(window).resize(function () {
//        if ($(window).width() >= 1200) $('#dwt-menu').show();
//        else $('#dwt-menu').hide();
//    });
    
    moveOn(1);
});

SEASONS = {
    data: {},
    init: function (callback) {
        $.getJSON('json/seasons.json', function(json) {
            SEASONS.data = json.seasons;
            SEASONS.render();
            callback();
        });
    },
    render: function () {
        var seasons = SEASONS.data;
        if (seasons.length) {
            var season_top = 0;

            for (var i = 0; i < seasons.length; i++) {
                var html =''
                +   '<div id="dwt-season-' + seasons[i].id + '" class="dwt-season" data-season="' + seasons[i].id + '">'
                +       '<div class="dwt-season-label">'
                +           '<h4>' + seasons[i].name + '</h4>'
                +       '</div>'
                +   '</div>';
                $('#dwt-body').append(html);

                //$('#dwt-menu ul').append('<li><a href="#dwt-season-' + seasons[i].number + '" title="' + seasons[i].name + '">' + seasons[i].name + '</a></li>');

                $('.dwt-season[data-season=' + seasons[i].id + ']').css('top', season_top + 'px');
                $('.dwt-season[data-season=' + seasons[i].id + ']').css('height', ((seasons[i].episodes * ROW_HEIGHT) - 2) + 'px');

                season_top += seasons[i].episodes * ROW_HEIGHT;
            }
        }
    },
    get: function (id) {
        var seasons = SEASONS.data;
        for (var i = 0; i < seasons.length; i++) {
            if (seasons[i].id === id) return seasons[i];
        }
        return false;
    },
    getTop: function (num) {
        return parseInt($('.dwt-season[data-season=' + num + ']').css('top'), 10);
    }
};

DATES = {
    data: {},
    init: function (callback) {
        $.getJSON('json/dates.json', function(json) {
            DATES.data = json.dates;
            DATES.render();
            callback();
        });
    },
    render: function () {
        var dates = DATES.data;
        if (dates.length) {
            var date_top = 0;
            var date_bot = 0;

            for (var i = 0; i < dates.length; i++) {
                date_top = dates[i].from * ROW_HEIGHT - ROW_HEIGHT;
                date_bot = dates[i].to * ROW_HEIGHT - ROW_HEIGHT;
                
                var style = (USE_FADE) ? 'style="opacity: 0;"' : '';
                var html = ''
                +   '<div class="dwt-duration dwt-year" data-year="' + dates[i].date + '" title="' + dates[i].date + '" ' + style + '">'
                +       '<div class="dwt-label dwt-year-name" title="' + dates[i].date + '">' + dates[i].date + '</div>'
                +   '</div>';
                $('#dwt-body').append(html);
                
                var selec = DATES.element(dates[i].date);
                $(selec).css('top', date_top + 'px');
                $(selec).css('height', (date_bot - date_top + LABEL_HEIGHT) + 'px');
            }
            
            if (USE_FADE) {
                var cnt = 0;
                $('.dwt-year-name').each(function () {
                    $(this).parent('.dwt-duration').delay((cnt++) * 100).fadeTo(500, 1);
                });
            }
        }
    },
    get: function (id) {
        var dates = DATES.data;
        for (var i = 0; i < dates.length; i++) {
            if (dates[i].id === id) return dates[i];
        }
        return false;
    },
    element: function (id) {
        return '.dwt-year[data-year=' + id + ']';
    }
};

DOCTORS = {
    data: {},
    init: function (callback) {
        $.getJSON('json/doctors.json', function(json) {
            DOCTORS.data = json.doctors;
            DOCTORS.render();
            callback();
        });
    },
    render: function () {
        var doctors = DOCTORS.data;
        if (doctors.length) {
            var doctor_top = 0;
            var doctor_bot = 0;

            for (var i = 0; i < doctors.length; i++) {
                // element
                if (doctors[i].from.length && doctors[i].to.length) {
                    doctor_top = doctors[i].from * ROW_HEIGHT - ROW_HEIGHT;
                    doctor_bot = doctors[i].to * ROW_HEIGHT - ROW_HEIGHT;

                    var style = (USE_FADE) ? 'style="opacity: 0;"' : '';
                    var html = ''
                    +   '<div class="dwt-duration dwt-doctor" data-doctor="' + doctors[i].id + '" title="' + doctors[i].name + '" ' + style + '>'
                    +       '<div class="dwt-label dwt-doctor-name ttip_t" title="' + doctors[i].name + '">' + doctors[i].name + '</div>'
                    +   '</div>';
                    $('#dwt-body').append(html);

                    var selec = DOCTORS.element(doctors[i].id);
                    $(selec).css('top', doctor_top + 'px');
                    $(selec).css('height', (doctor_bot - doctor_top + LABEL_HEIGHT) + 'px');
                }

                // info
                var info_id = 'modal-doctor-' + doctors[i].id;
                createModal(info_id, doctors[i].info);
            }
            
            var cnt = 0;
            $('.dwt-doctor').each(function () {
                if (USE_FADE) $(this).delay((cnt++) * 100).fadeTo(500, 1);
                $(this).unbind('click').click(function () {
                    $('#modal-doctor-' + $(this).attr('data-doctor')).modal('show');
                });
            }).css('cursor','pointer');
        }
    },
    get: function (id) {
        var doctors = DOCTORS.data;
        for (var i = 0; i < doctors.length; i++) {
            if (doctors[i].id === id) return doctors[i];
        }
        return false;
    },
    element: function (id) {
        return '.dwt-doctor[data-doctor=' + id + ']';
    }
};

COMPANIONS = {
    data: {},
    init: function (callback) {
        $.getJSON('json/companions.json', function(json) {
            COMPANIONS.data = json.companions;
            COMPANIONS.render();
            callback();
        });
    },
    render: function () {
        var companions = COMPANIONS.data;
        if (companions.length) {
            var companion_top = 0;
            var companion_bot = 0;

            for (var i = 0; i < companions.length; i++) {
                for (var j = 0; j < companions[i].episodes.length; j++) {
                    // element
                    companion_top = companions[i].episodes[j].from * ROW_HEIGHT - ROW_HEIGHT;
                    companion_bot = companions[i].episodes[j].to * ROW_HEIGHT - ROW_HEIGHT;

                    var xcls = companions[i].episodes[j].xcls;
                    var style = (USE_FADE) ? 'style="opacity: 0;"' : '';
                    var html = ''
                    +   '<div class="dwt-duration dwt-companion' + xcls + ' ' + companions[i].color + '" data-id="' + companions[i].id + '" data-companion="' + companions[i].episodes[j].number + '" title="' + companions[i].fname + '" ' + style + '>'
                    +       '<div class="dwt-label dwt-companion-name ' + companions[i].color + ' ttip_t" title="' + companions[i].fname + '">' + companions[i].name + '</div>'
                    +   '</div>';
                    
                    $('#dwt-body').append(html);

                    var selec = COMPANIONS.element(companions[i].episodes[j].number, xcls);
                    $(selec).css('top', companion_top + 'px');
                    $(selec).css('left', companions[i].episodes[j].pos + 'px');
                    $(selec).css('height', (companion_bot - companion_top + LABEL_HEIGHT) + 'px');
                    $(selec).css('z-index', companions[i].episodes[j].zi);

                    // info
                    if (companions[i].info.title === 'doctor') {
                        $(selec).attr('data-cdoctor', companions[i].info.number);
                    } else {
                        var info_id = 'modal-companion-' + companions[i].id;
                        if ($('#' + info_id).length < 1) {
                            createModal(info_id, companions[i].info);
                        }
                    }
                }
            }
            
            var cnt = 0;
            $('.dwt-companion-name').parent('.dwt-duration').each(function () {
                if (USE_FADE) $(this).delay((cnt++) * 100).fadeTo(500, 1);
                $(this).unbind('click').click(function () {
                    if ($(this).attr('data-cdoctor') !== undefined) $('#modal-doctor-' + $(this).attr('data-cdoctor')).modal('show');
                    else $('#modal-companion-' + $(this).attr('data-id')).modal('show');
                });
            }).css('cursor','pointer');
        }
    },
    get: function (id) {
        var companions = COMPANIONS.data;
        for (var i = 0; i < companions.length; i++) {
            if (companions[i].id === id) return companions[i];
        }
        return false;
    },
    element: function (id, xcls) {
        if (xcls === undefined) xcls = '';
        return '.dwt-companion' + xcls + '[data-companion=' + id + ']';
    }
};

CREATURES = {
    data: {},
    init: function (callback) {
        $.getJSON('json/creatures.json', function(json) {
            CREATURES.data = json.creatures;
            CREATURES.render();
            callback();
        });
    },
    render: function () {
        var creatures = CREATURES.data;
        if (creatures.length) {
            var creature_top = 0;
            var creature_bot = 0;

            for (var i = 0; i < creatures.length; i++) {
                for (var j = 0; j < creatures[i].episodes.length; j++) {
                    // element
                    creature_top = creatures[i].episodes[j].from * ROW_HEIGHT - ROW_HEIGHT;
                    creature_bot = creatures[i].episodes[j].to * ROW_HEIGHT - ROW_HEIGHT;
                    
                    var xcls = creatures[i].episodes[j].xcls;
                    var style = (USE_FADE) ? 'style="opacity: 0;"' : '';
                    var color = 'color-creature' + (i % 9);
                    var html = ''
                    +   '<div class="dwt-duration dwt-creature' + xcls + ' ' + color + '" data-id="' + creatures[i].id + '" data-creature="' + creatures[i].episodes[j].number + '" title="' + creatures[i].name + '" ' + style + '>'
                    +       '<div class="dwt-label dwt-creature-name ' + color + ' ttip_t" title="' + creatures[i].name + '">' + creatures[i].name + '</div>'
                    +   '</div>';

                    $('#dwt-body').append(html);
                    
                    var selec = CREATURES.element(creatures[i].episodes[j].number, xcls);
                    $(selec).css('top', creature_top + 'px');
                    $(selec).css('height', (creature_bot - creature_top + LABEL_HEIGHT) + 'px');
                    
                    // info
                    var info_id = 'modal-creature-' + creatures[i].id;
                    if ($('#' + info_id).length < 1) createModal(info_id, creatures[i].info);
                }
                
                var cnt = 0;
                $('.dwt-creature-name').parent('.dwt-duration').each(function () {
                    if (USE_FADE) $(this).delay((cnt++) * 100).fadeTo(500, 1);
                    $(this).unbind('click').click(function () {
                        $('#modal-creature-' + $(this).attr('data-id')).modal('show');
                    });
                }).css('cursor','pointer');
            }
        }
    },
    get: function (id) {
        var creatures = CREATURES.data;
        for (var i = 0; i < creatures.length; i++) {
            if (creatures[i].id === id) return creatures[i];
        }
        return false;
    },
    element: function (id, xcls) {
        if (xcls === undefined) xcls = '';
        return '.dwt-creature' + xcls + '[data-creature=' + id + ']';
    }
};

EPISODES = {
    data: {},
    init: function (callback) {
        $.getJSON('json/episodes.json', function(json) {
            EPISODES.data = json.episodes;
            EPISODES.render();
            callback();
        });
    },
    render: function () {
        var episodes = EPISODES.data;
        if (episodes.length) {
            var episode_top = 0;

            for (var i = 0; i < episodes.length; i++) {
                episode_top = episodes[i].id * ROW_HEIGHT - ROW_HEIGHT;
                
                var style = (USE_FADE) ? 'style="opacity: 0;"' : '';
                var html = '<div class="dwt-label dwt-episode-name" data-episode="' + episodes[i].id + '" title="' + episodes[i].name + '" ' + style + '>(' + episodes[i].id + ') ' + episodes[i].episode + '. ' + episodes[i].name + '</div>';

                $('#dwt-body').append(html);
                
                var selec = EPISODES.element(episodes[i].id);
                $(selec).css('top', episode_top + 'px');
            }
            
            if (USE_FADE) {
                var cnt = 0;
                $('.dwt-episode-name').each(function () {
                    $(this).delay((cnt++) * 10).fadeTo(500, 1);
                });
            }
        }
    },
    get: function (id) {
        var episodes = EPISODES.data;
        for (var i = 0; i < episodes.length; i++) {
            if (episodes[i].id === id) return episodes[i];
        }
        return false;
    },
    element: function (id) {
        return '.dwt-episode-name[data-episode=' + id + ']';
    }
};

ADVENTURES = {
    data: {},
    init: function (callback) {
        $.getJSON('json/adventures.json', function(json) {
            ADVENTURES.data = json.adventures;
            ADVENTURES.render();
            callback();
        });
    },
    render: function () {
        var adventures = ADVENTURES.data;
        if (adventures.length) {
            var adventure_top = 0;
            var adventure_bot = 0;
            
            for (var i = 0; i < adventures.length; i++) {
                adventure_top = adventures[i].from * ROW_HEIGHT - ROW_HEIGHT;
                adventure_bot = adventures[i].to * ROW_HEIGHT - ROW_HEIGHT;
                
                var adventure_title = (adventures[i].name.length > 0) ? adventures[i].id + '. ' + adventures[i].name : adventures[i].id;
                var style = (USE_FADE) ? 'style="opacity: 0;"' : '';
                var html = ''
                +   '<div class="dwt-duration dwt-adventure" data-adventure="' + adventures[i].id + '" ' + style + '>'
                +       '<div class="dwt-label dwt-adventure-name" title="' + adventures[i].name + '">' + adventure_title + '</div>'
                +       '<div class="dwt-adventure-episodes"></div>'
                +   '</div>';
                
                $('#dwt-body').append(html);
                
                var selec = ADVENTURES.element(adventures[i].id);
                $(selec).css('top', adventure_top + 'px');
                $(selec).css('height', (adventure_bot - adventure_top + LABEL_HEIGHT) + 'px');
                $(selec + ' .dwt-adventure-name').css('height', (adventure_bot - adventure_top + LABEL_HEIGHT) + 'px');
                $(selec + ' .dwt-adventure-episodes').css('height', (adventure_bot - adventure_top + LABEL_HEIGHT) + 'px');
            }
            
            if (USE_FADE) {
                var cnt = 0;
                $('.dwt-adventure-name').each(function () {
                    $(this).parent('.dwt-duration').delay((cnt++) * 50).fadeTo(500, 1);
                });
            }
        }
    },
    get: function (id) {
        var adventures = ADVENTURES.data;
        for (var i = 0; i < adventures.length; i++) {
            if (adventures[i].id === id) return adventures[i];
        }
        return false;
    },
    element: function (id) {
        return '.dwt-adventure[data-adventure=' + id + ']';
    }
};

LOCATIONS = {
    data: {},
    init: function (callback) {
        $.getJSON('json/locations.json', function(json) {
            LOCATIONS.data = json.locations;
            LOCATIONS.render();
            callback();
        });
    },
    render: function () {
        var locations = LOCATIONS.data;
        if (locations.length) {
            var location_top = 0;
            var location_bot = 0;
            
            for (var i = 0; i < locations.length; i++) {
                location_top = locations[i].from * ROW_HEIGHT - ROW_HEIGHT;
                location_bot = locations[i].to * ROW_HEIGHT - ROW_HEIGHT;
                
                var style = (USE_FADE) ? 'style="opacity: 0;"' : '';
                var html = ''
                +   '<div class="dwt-duration dwt-location" data-location="' + locations[i].id + '" ' + style + '>'
                +       '<div class="dwt-label dwt-location-name ttip_t" title="' + locations[i].name + '">' + locations[i].name + '</div>'
                +   '</div>';
                
                $('#dwt-body').append(html);
                
                var selec = LOCATIONS.element(locations[i].id);
                $(selec).css('top', location_top + 'px');
                $(selec).css('height', (location_bot - location_top + LABEL_HEIGHT) + 'px');
                $(selec + ' .dwt-location-name').css('height', (location_bot - location_top + LABEL_HEIGHT) + 'px');
            }
            
            if (USE_FADE) {
                var cnt = 0;
                $('.dwt-location-name').each(function () {
                    $(this).parent('.dwt-duration').delay((cnt++) * 50).fadeTo(500, 1);
                });
            }
        }
    },
    get: function (id) {
        var locations = LOCATIONS.data;
        for (var i = 0; i < locations.length; i++) {
            if (locations[i].id === id) return locations[i];
        }
        return false;
    },
    element: function (id) {
        return '.dwt-location[data-location=' + id + ']';
    }
};

TIMES = {
    data: {},
    init: function (callback) {
        $.getJSON('json/times.json', function(json) {
            TIMES.data = json.times;
            TIMES.render();
            callback();
        });
    },
    render: function () {
        var times = TIMES.data;
        if (times.length) {
            var time_top = 0;
            var time_bot = 0;
            
            for (var i = 0; i < times.length; i++) {
                time_top = times[i].from * ROW_HEIGHT - ROW_HEIGHT;
                time_bot = times[i].to * ROW_HEIGHT - ROW_HEIGHT;
                
                var style = (USE_FADE) ? 'style="opacity: 0;"' : '';
                var html = ''
                +   '<div class="dwt-duration dwt-time" data-time="' + times[i].id + '" ' + style + '>'
                +       '<div class="dwt-label dwt-time-name ttip_t" title="' + times[i].name + '">' + times[i].name + '</div>'
                +   '</div>';
                
                $('#dwt-body').append(html);
                
                var selec = TIMES.element(times[i].id);
                $(selec).css('top', time_top + 'px');
                $(selec).css('height', (time_bot - time_top + LABEL_HEIGHT) + 'px');
                $(selec + ' .dwt-time-name').css('height', (time_bot - time_top + LABEL_HEIGHT) + 'px');
            }
            
            if (USE_FADE) {
                var cnt = 0;
                $('.dwt-time-name').each(function () {
                    $(this).parent('.dwt-duration').delay((cnt++) * 50).fadeTo(500, 1);
                });
            }
        }
    },
    get: function (id) {
        var times = TIMES.data;
        for (var i = 0; i < times.length; i++) {
            if (times[i].id === id) return times[i];
        }
        return false;
    },
    element: function (id) {
        return '.dwt-time[data-time=' + id + ']';
    }
};

function createModal (id, info) {
    return;
    var facts = '';
    if (info.facts.length) {
        facts += '<ul class="facts">';
        for (var i = 0; i < info.facts.length; i++) facts += '<li>' + info.facts[i] + '</li>';
        facts += '</ul>';
    }
    
    $('body').append(''
    +   '<div id="' + id + '" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">'
    +       '<div class="modal-header">'
    +           '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>'
    +           '<img src="' + info.image + '" class="pull-left img-polaroid"/>'
    +           '<h4>' + info.title + '</h4>'
    +       '</div>'
    +       '<div class="modal-body">'
    +           ((info.actor !== undefined && info.actor.length > 0) ? '<h6>' + info.actor + '</h6>' : '')
    +           '<p>' + info.text + '</p>'
    +           ((info.quote !== undefined && info.quote.length > 0) ? '<blockquote>' + info.quote + '</blockquote>' : '')
    +           facts
    +       '</div>'
    +   '</div>');
}

function checkRelations (what) {
    if (what === undefined) return;
    
    var i,j,k,m,n,p,q,r;
    var relations = {};
    var doctors = DOCTORS.data;
    var companions = COMPANIONS.data;
    var creatures = CREATURES.data;
    
    if (what === 'doctors') {
        for (i = 0; i < doctors.length; i++) {
            relations[doctors[i].name] = { companions: [], creatures: [], episodes: 0 };
            relations[doctors[i].name].episodes = doctors[i].to - doctors[i].from + 1;
            // DOCTOR -> COMPANIONS
            for (j = 0; j < companions.length; j++) {
                for (k = 0; k < companions[j].episodes.length; k++) {
                    if (companions[j].info.title !== 'doctor') {
                        var res = rangeIntersects(doctors[i].from, doctors[i].to, companions[j].episodes[k].from, companions[j].episodes[k].to);
                        //console.log(doctors[i].name + ' & ' + companions[j].name + ' - ' + doctors[i].from + ' to ' + doctors[i].to + ' / ' + companions[j].episodes[k].from + ' to ' + companions[j].episodes[k].to + ' = ' + res);
                        if (res) {
                            var isnew = true;
                            for (m = 0; m < relations[doctors[i].name].companions.length; m++) {
                                if (relations[doctors[i].name].companions[m] === companions[j].name) isnew = false;
                            }
                            if (isnew) relations[doctors[i].name].companions.push(companions[j].name);
                        }
                    } else {
                        if (companions[j].info.number === doctors[i].id) {
                            //relations[doctors[i].name].episodes += companions[j].episodes[k].to - companions[j].episodes[k].from + 1;
                        }
                    }
                }
            }
            // DOCTOR -> CREATURES
            for (j = 0; j < creatures.length; j++) {
                for (k = 0; k < creatures[j].episodes.length; k++) {
                    var res = rangeIntersects(doctors[i].from, doctors[i].to, creatures[j].episodes[k].from, creatures[j].episodes[k].to);
                    //console.log(doctors[i].name + ' & ' + creatures[j].name + ' - ' + doctors[i].from + ' to ' + doctors[i].to + ' / ' + creatures[j].episodes[k].from + ' to ' + creatures[j].episodes[k].to + ' = ' + res);
                    if (res) {
                        var isnew = true;
                        for (m = 0; m < relations[doctors[i].name].creatures.length; m++) {
                            if (relations[doctors[i].name].creatures[m] === creatures[j].name) isnew = false;
                        }
                        if (isnew) relations[doctors[i].name].creatures.push(creatures[j].name);
                    }
                }
            }
        }
        console.log(relations);
    }
    
    if (what === 'companions') {
        for (j = 0; j < companions.length; j++) {
            if (companions[j].info.title !== 'doctor') {
                relations[companions[j].name] = { doctors: [], creatures: [], episodes: 0 };
                for (k = 0; k < companions[j].episodes.length; k++) {
                    relations[companions[j].name].episodes += companions[j].episodes[k].to - companions[j].episodes[k].from + 1;
                    // COMPANION -> DOCTORS
                    for (m = 0; m < doctors.length; m++) {
                        var res = rangeIntersects(companions[j].episodes[k].from, companions[j].episodes[k].to, doctors[m].from, doctors[m].to);
                        if (res) {
                            var isnew = true;
                            for (n = 0; n < relations[companions[j].name].doctors.length; n++) {
                                if (relations[companions[j].name].doctors[n] === doctors[m].name) isnew = false;
                            }
                            if (isnew) relations[companions[j].name].doctors.push(doctors[m].name);
                        }
                    }
                    // COMPANION -> CREATURES
                    for (m = 0; m < creatures.length; m++) {
                        for (n = 0; n < creatures[m].episodes.length; n++) {
                            var res = rangeIntersects(companions[j].episodes[k].from, companions[j].episodes[k].to, creatures[m].episodes[n].from, creatures[m].episodes[n].to);
                            if (res) {
                                var isnew = true;
                                for (p = 0; p < relations[companions[j].name].creatures.length; p++) {
                                    if (relations[companions[j].name].creatures[p] === creatures[m].name) isnew = false;
                                }
                                if (isnew) relations[companions[j].name].creatures.push(creatures[m].name);
                            }
                        }
                    }

                }
            }
        }
        console.log(relations);
    }
}
    
function rangeIntersects (a_start, a_end, b_start, b_end) {
    if (parseInt(a_start) <= parseInt(b_end) && parseInt(b_start) <= parseInt(a_end)) return true;
    return false;
}

function parallaxScroll () {
    var scrolled = $(window).scrollTop();
    var plax1 = (0 + (scrolled * PLAX1_VAL)).toFixed(1);
    var plax2 = (0 + (scrolled * PLAX2_VAL)).toFixed(1);
    var plax3 = (0 - (scrolled * PLAX3_VAL)).toFixed(1);
    
    $('#bg1').css('top', plax1 + 'px');
    $('#bg2').css('top', plax2 + 'px');
    $('#bg3').css('top', plax3 + 'px');
}

function createStars () {
    var x = y = 0;
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
}

function calculateBgSizes (ww, wh) {
    var hei = (ROWS * ROW_HEIGHT) + MARGINS;
    
    if (wh === undefined) wh = $(window).height();
    
    if (USE_PLAX) {
        $('#bg1').css('height', Math.round(hei - ((hei - wh) * PLAX1_VAL)) + 'px');
        $('#bg2').css('height', Math.round(hei - ((hei - wh) * PLAX2_VAL)) + 'px');
        $('#bg3').css('height', Math.round(hei + ((hei - wh) * PLAX3_VAL)) + 'px');
    } else {
        $('#bg1').css('height', hei + 'px');
        $('#bg2').css('height', hei + 'px');
        $('#bg3').css('height', hei + 'px');
    }
}

function initTooltips () {
    $('.ttip_t').tooltip({ container: 'body', placement: 'top' });
    $('.ttip_r').tooltip({ container: 'body', placement: 'right' });
    $('.ttip_b').tooltip({ container: 'body', placement: 'bottom' });
    $('.ttip_l').tooltip({ container: 'body', placement: 'left' });
}



/*
var message = "You can enable/disable right clicking from Theme Options and customize this message too.";
function clickIE4() {
    if (event.button == 2) {
        alert(message);
        return false;
    }
}
function clickNS4(e) {
    if (document.layers || document.getElementById && !document.all) {
        if (e.which == 2 || e.which == 3) {
            alert(message);
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = clickNS4;
} else if (document.all && !document.getElementById) {
    document.onmousedown = clickIE4;
}
document.oncontextmenu = new Function("alert(message);return false");
*/