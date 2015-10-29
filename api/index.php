<?php

/**
 * Step 1: Require the Slim Framework
 *
 * If you are not using Composer, you need to require the
 * Slim Framework and register its PSR-0 autoloader.
 *
 * If you are using Composer, you can skip this step.
 */
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */
$app = new \Slim\Slim();

/**
 * custom stuff
 */
$app->contentType('application/json');
//$db = new PDO('sqlite:db.sqlite');

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, and `Slim::delete`
 * is an anonymous function.
 */

/*

.d8888b   .d88b.   8888b.  .d8888b   .d88b.  88888b.  .d8888b
88K      d8P  Y8b     "88b 88K      d88""88b 888 "88b 88K
"Y8888b. 88888888 .d888888 "Y8888b. 888  888 888  888 "Y8888b.
     X88 Y8b.     888  888      X88 Y88..88P 888  888      X88
 88888P'  "Y8888  "Y888888  88888P'  "Y88P"  888  888  88888P'

*/

$app->get('/seasons', function () use ($app) {
    $seasons_array = array(
        array( "id" => "1",  "from" => "1",   "to" => "42",  "name" => "Season 1"  ), // "episodes"=> "42"
        array( "id" => "2",  "from" => "43",  "to" => "81",  "name" => "Season 2"  ), // "episodes"=> "39"
        array( "id" => "3",  "from" => "82",  "to" => "126", "name" => "Season 3"  ), // "episodes"=> "45"
        array( "id" => "4",  "from" => "127", "to" => "169", "name" => "Season 4"  ), // "episodes"=> "43"
        array( "id" => "5",  "from" => "170", "to" => "209", "name" => "Season 5"  ), // "episodes"=> "40"
        array( "id" => "6",  "from" => "210", "to" => "253", "name" => "Season 6"  ), // "episodes"=> "44"
        array( "id" => "7",  "from" => "254", "to" => "278", "name" => "Season 7"  ), // "episodes"=> "25"
        array( "id" => "8",  "from" => "279", "to" => "303", "name" => "Season 8"  ), // "episodes"=> "25"
        array( "id" => "9",  "from" => "304", "to" => "329", "name" => "Season 9"  ), // "episodes"=> "26"
        array( "id" => "10", "from" => "330", "to" => "355", "name" => "Season 10" ), // "episodes"=> "26"
        array( "id" => "11", "from" => "356", "to" => "381", "name" => "Season 11" ), // "episodes"=> "26"
        array( "id" => "12", "from" => "382", "to" => "401", "name" => "Season 12" ), // "episodes"=> "20"
        array( "id" => "13", "from" => "402", "to" => "427", "name" => "Season 13" ), // "episodes"=> "26"
        array( "id" => "14", "from" => "428", "to" => "453", "name" => "Season 14" ), // "episodes"=> "26"
        array( "id" => "15", "from" => "454", "to" => "479", "name" => "Season 15" ), // "episodes"=> "26"
        array( "id" => "16", "from" => "480", "to" => "505", "name" => "Season 16" ), // "episodes"=> "26"
        array( "id" => "17", "from" => "506", "to" => "525", "name" => "Season 17" ), // "episodes"=> "20"
        array( "id" => "18", "from" => "526", "to" => "553", "name" => "Season 18" ), // "episodes"=> "28"
        array( "id" => "19", "from" => "554", "to" => "579", "name" => "Season 19" ), // "episodes"=> "26"
        array( "id" => "20", "from" => "580", "to" => "602", "name" => "Season 20" ), // "episodes"=> "23"
        array( "id" => "21", "from" => "603", "to" => "626", "name" => "Season 21" ), // "episodes"=> "24"
        array( "id" => "22", "from" => "627", "to" => "639", "name" => "Season 22" ), // "episodes"=> "13"
        array( "id" => "23", "from" => "640", "to" => "653", "name" => "Season 23" ), // "episodes"=> "14"
        array( "id" => "24", "from" => "654", "to" => "667", "name" => "Season 24" ), // "episodes"=> "14"
        array( "id" => "25", "from" => "668", "to" => "681", "name" => "Season 25" ), // "episodes"=> "14"
        array( "id" => "26", "from" => "682", "to" => "695", "name" => "Season 26" ), // "episodes"=> "14"
        array( "id" => "27", "from" => "696", "to" => "696", "name" => "M"         ), // "episodes"=> "1"
        array( "id" => "28", "from" => "697", "to" => "709", "name" => "Series 1"  ), // "episodes"=> "13"
        array( "id" => "29", "from" => "710", "to" => "723", "name" => "Series 2"  ), // "episodes"=> "14"
        array( "id" => "30", "from" => "724", "to" => "737", "name" => "Series 3"  ), // "episodes"=> "14"
        array( "id" => "31", "from" => "738", "to" => "751", "name" => "Series 4"  ), // "episodes"=> "14"
        array( "id" => "32", "from" => "752", "to" => "756", "name" => "Specials"  ), // "episodes"=> "5"
        array( "id" => "33", "from" => "757", "to" => "769", "name" => "Series 5"  ), // "episodes"=> "13"
        array( "id" => "34", "from" => "770", "to" => "783", "name" => "Series 6"  ), // "episodes"=> "14"
        array( "id" => "35", "from" => "784", "to" => "798", "name" => "Series 7"  ), // "episodes"=> "15"
        array( "id" => "36", "from" => "799", "to" => "812", "name" => "Series 8"  ), // "episodes"=> "14"
        array( "id" => "37", "from" => "813", "to" => "825", "name" => "Series 9"  ), // "episodes"=> "13"
    );

    // get all
    $response = $seasons_array;

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($response);
});

/*

888  888  .d88b.   8888b.  888d888 .d8888b
888  888 d8P  Y8b     "88b 888P"   88K
888  888 88888888 .d888888 888     "Y8888b.
Y88b 888 Y8b.     888  888 888          X88
 "Y88888  "Y8888  "Y888888 888      88888P'
     888
Y8b d88P
 "Y88P"

*/

$app->get('/years', function () use ($app) {
    $years_array = array(
        array( "id" => "1",  "from" => "1",   "to" => "6",   "date" => "1963" ),
        array( "id" => "2",  "from" => "7",   "to" => "51",  "date" => "1964" ),
        array( "id" => "3",  "from" => "52",  "to" => "97",  "date" => "1965" ),
        array( "id" => "4",  "from" => "98",  "to" => "135", "date" => "1966" ),
        array( "id" => "5",  "from" => "136", "to" => "187", "date" => "1967" ),
        array( "id" => "6",  "from" => "188", "to" => "228", "date" => "1968" ),
        array( "id" => "7",  "from" => "229", "to" => "253", "date" => "1969" ),
        array( "id" => "8",  "from" => "254", "to" => "278", "date" => "1970" ),
        array( "id" => "9",  "from" => "279", "to" => "303", "date" => "1971" ),
        array( "id" => "10", "from" => "304", "to" => "330", "date" => "1972" ),
        array( "id" => "11", "from" => "331", "to" => "358", "date" => "1973" ),
        array( "id" => "12", "from" => "359", "to" => "382", "date" => "1974" ),
        array( "id" => "13", "from" => "383", "to" => "417", "date" => "1975" ),
        array( "id" => "14", "from" => "418", "to" => "439", "date" => "1976" ),
        array( "id" => "15", "from" => "440", "to" => "469", "date" => "1977" ),
        array( "id" => "16", "from" => "470", "to" => "497", "date" => "1978" ),
        array( "id" => "17", "from" => "498", "to" => "523", "date" => "1979" ),
        array( "id" => "18", "from" => "524", "to" => "541", "date" => "1980" ),
        array( "id" => "19", "from" => "542", "to" => "553", "date" => "1981" ),
        array( "id" => "20", "from" => "554", "to" => "579", "date" => "1982" ),
        array( "id" => "21", "from" => "580", "to" => "602", "date" => "1983" ),
        array( "id" => "22", "from" => "603", "to" => "626", "date" => "1984" ),
        array( "id" => "23", "from" => "627", "to" => "639", "date" => "1985" ),
        array( "id" => "24", "from" => "640", "to" => "653", "date" => "1986" ),
        array( "id" => "25", "from" => "654", "to" => "667", "date" => "1987" ),
        array( "id" => "26", "from" => "668", "to" => "694", "date" => "1988" ),
        array( "id" => "27", "from" => "695", "to" => "695", "date" => "1989" ),
        array( "id" => "28", "from" => "696", "to" => "696", "date" => "1996" ),
        array( "id" => "29", "from" => "697", "to" => "710", "date" => "2005" ),
        array( "id" => "30", "from" => "711", "to" => "724", "date" => "2006" ),
        array( "id" => "31", "from" => "725", "to" => "738", "date" => "2007" ),
        array( "id" => "32", "from" => "739", "to" => "752", "date" => "2008" ),
        array( "id" => "33", "from" => "753", "to" => "755", "date" => "2009" ),
        array( "id" => "34", "from" => "756", "to" => "770", "date" => "2010" ),
        array( "id" => "35", "from" => "771", "to" => "784", "date" => "2011" ),
        array( "id" => "36", "from" => "785", "to" => "790", "date" => "2012" ),
        array( "id" => "37", "from" => "791", "to" => "800", "date" => "2013" ),
        array( "id" => "38", "from" => "801", "to" => "813", "date" => "2014" ),
        array( "id" => "39", "from" => "814", "to" => "825", "date" => "2015" )
    );

    // get all
    $response = $years_array;

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($response);
});

/*

     888                   888
     888                   888
     888                   888
 .d88888  .d88b.   .d8888b 888888 .d88b.  888d888 .d8888b
d88" 888 d88""88b d88P"    888   d88""88b 888P"   88K
888  888 888  888 888      888   888  888 888     "Y8888b.
Y88b 888 Y88..88P Y88b.    Y88b. Y88..88P 888          X88
 "Y88888  "Y88P"   "Y8888P  "Y888 "Y88P"  888      88888P'

*/

$app->get('/doctors', function () use ($app) {
    $doctors_array = array(
        array( "id" => "1",  "from" => "1",   "to" => "134", "name" => "1st Doctor",  "actor" => "William Hartnell"      ),
        array( "id" => "2",  "from" => "135", "to" => "253", "name" => "2nd Doctor",  "actor" => "Patrick Troughton"     ),
        array( "id" => "3",  "from" => "254", "to" => "381", "name" => "3rd Doctor",  "actor" => "Jon Pertwee"           ),
        array( "id" => "4",  "from" => "382", "to" => "553", "name" => "4th Doctor",  "actor" => "Tom Baker"             ),
        array( "id" => "5",  "from" => "554", "to" => "622", "name" => "5th Doctor",  "actor" => "Peter Davison"         ),
        array( "id" => "6",  "from" => "623", "to" => "653", "name" => "6th Doctor",  "actor" => "Colin Baker"           ),
        array( "id" => "7",  "from" => "654", "to" => "695", "name" => "7th Doctor",  "actor" => "Sylvester McCoy"       ),
        array( "id" => "8",  "from" => "696", "to" => "696", "name" => "8th Doctor",  "actor" => "Paul McGann"           ),
        array( "id" => "9",  "from" => "697", "to" => "709", "name" => "9th Doctor",  "actor" => "Christopher Eccleston" ),
        array( "id" => "10", "from" => "710", "to" => "756", "name" => "10th Doctor", "actor" => "David Tennant"         ),
        array( "id" => "11", "from" => "757", "to" => "800", "name" => "11th Doctor", "actor" => "Matt Smith"            ),
        array( "id" => "12", "from" => "801", "to" => "825", "name" => "12th Doctor", "actor" => "Peter Capaldi"         )
    );

    // get all
    $response = $doctors_array;

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($response);
});

/*

                                                          d8b
                                                          Y8P

 .d8888b .d88b.  88888b.d88b.  88888b.   8888b.  88888b.  888  .d88b.  88888b.  .d8888b
d88P"   d88""88b 888 "888 "88b 888 "88b     "88b 888 "88b 888 d88""88b 888 "88b 88K
888     888  888 888  888  888 888  888 .d888888 888  888 888 888  888 888  888 "Y8888b.
Y88b.   Y88..88P 888  888  888 888 d88P 888  888 888  888 888 Y88..88P 888  888      X88
 "Y8888P "Y88P"  888  888  888 88888P"  "Y888888 888  888 888  "Y88P"  888  888  88888P'
                               888
                               888
                               888

*/

$app->get('/companions', function () use ($app) {
    $companions_array = array(
        array( "id" => "1",  "color" => "color-susan", "name" => "Susan", "fname" => "Susan Foreman", "episodes" => array(
                array( "number" => "1",   "pos" => "3", "zi" => "8", "from" => "1",   "to" => "51",  "xcls" => "" ),
                array( "number" => "70",  "pos" => "3", "zi" => "8", "from" => "602", "to" => "602", "xcls" => "-small" )
            )
        ),
        array( "id" => "2",  "color" => "color-barbara", "name" => "Barbara", "fname"=> "Barbara Wright", "episodes" => array(
                array( "number" => "2",   "pos" => "76", "zi" => "8", "from" => "1",   "to" => "33",  "xcls" => "" ),
                array( "number" => "3",   "pos" => "76", "zi" => "8", "from" => "35",  "to" => "59",  "xcls" => "" ),
                array( "number" => "4",   "pos" => "76", "zi" => "9", "from" => "61",  "to" => "77",  "xcls" => "" )
            )
        ),
        array( "id" => "3",  "color" => "color-ian", "name" => "Ian", "fname" => "Ian Chesterton", "episodes" => array(
                array( "number" => "5",   "pos" => "149", "zi" => "8", "from" => "1",   "to" => "77",  "xcls" => "" )
            )
        ),
        array( "id" => "4",  "color" => "color-vicki", "name" => "Vicki", "fname" => "Vicki Pallister", "episodes" => array(
                array( "number" => "6",   "pos" => "39", "zi" => "8", "from" => "52",  "to" => "85",  "xcls" => "" ),
                array( "number" => "113", "pos" => "39", "zi" => "9", "from" => "87",  "to" => "90",  "xcls" => "" )
            )
        ),
        array( "id" => "5",  "color" => "color-steven", "name" => "Steven", "fname" => "Steven Taylor", "episodes" => array(
                array( "number" => "7",   "pos" => "3", "zi" => "8", "from" => "77",  "to" => "122", "xcls" => "" )
            )
        ),
        array( "id" => "6",  "color" => "color-katarina", "name" => "Katarina", "fname" => "Katarina", "episodes" => array(
                array( "number" => "8",   "pos" => "112", "zi" => "8", "from" => "90",  "to" => "94",  "xcls" => "" )
            )
        ),
        array( "id" => "7",  "color" => "color-sara", "name" => "Sara", "fname" => "Sara Kingdom", "episodes" => array(
                array( "number" => "9",   "pos" => "149", "zi" => "8", "from" => "91",  "to" => "102", "xcls" => "" )
            )
        ),
        array( "id" => "8",  "color" => "color-dodo", "name" => "Dodo", "fname" => "Dodo Chaplet", "episodes" => array(
                array( "number" => "10",  "pos" => "76", "zi" => "8", "from" => "106", "to" => "124", "xcls" => "" )
            )
        ),
        array( "id" => "9",  "color" => "color-polly", "name" => "Polly", "fname" => "Polly", "episodes" => array(
                array( "number" => "11",  "pos" => "3", "zi" => "8", "from" => "123", "to" => "137", "xcls" => "" ),
                array( "number" => "114", "pos" => "3", "zi" => "8", "from" => "139", "to" => "158", "xcls" => "" ),
                array( "number" => "12",  "pos" => "3", "zi" => "8", "from" => "162", "to" => "162", "xcls" => "" )
            )
        ),
        array( "id" => "10", "color" => "color-ben", "name" => "Ben", "fname" => "Ben Jackson", "episodes" => array(
                array( "number" => "13",  "pos" => "149", "zi" => "8", "from" => "123", "to" => "138", "xcls" => "" ),
                array( "number" => "115", "pos" => "149", "zi" => "8", "from" => "140", "to" => "159", "xcls" => "" ),
                array( "number" => "14",  "pos" => "149", "zi" => "8", "from" => "162", "to" => "162", "xcls" => "" )
            )
        ),
        array( "id" => "11", "color" => "color-jamie", "name" => "Jamie", "fname" => "Jamie McCrimmon", "episodes" => array(
                array( "number" => "15",  "pos" => "76", "zi" => "8", "from" => "141", "to" => "253", "xcls" => "" ),
                array( "number" => "116", "pos" => "62", "zi" => "9", "from" => "602", "to" => "602", "xcls" => "-small" ),
                array( "number" => "65",  "pos" => "149", "zi" => "8", "from" => "633", "to" => "635", "xcls" => "" )
            )
        ),
        array( "id" => "12", "color" => "color-victoria", "name" => "Victoria", "fname"=> "Victoria Waterfield", "episodes" => array(
                array( "number" => "16",  "pos" => "3", "zi" => "8", "from" => "163", "to" => "203", "xcls" => "" )
            )
        ),
        array( "id" => "13", "color" => "color-brigadier", "name" => "Brigadier", "fname" => "Brigadier Lethbridge-Stewart", "episodes" => array(
                array( "number" => "17",  "pos" => "149", "zi" => "8", "from" => "194", "to" => "197", "xcls" => "" ),
                array( "number" => "18",  "pos" => "149", "zi" => "8", "from" => "221", "to" => "227", "xcls" => "" ),
                array( "number" => "19",  "pos" => "149", "zi" => "8", "from" => "254", "to" => "293", "xcls" => "" ),
                array( "number" => "20",  "pos" => "149", "zi" => "8", "from" => "298", "to" => "305", "xcls" => "" ),
                array( "number" => "24",  "pos" => "149", "zi" => "8", "from" => "307", "to" => "307", "xcls" => "" ),
                array( "number" => "21",  "pos" => "149", "zi" => "8", "from" => "324", "to" => "327", "xcls" => "" ),
                array( "number" => "22",  "pos" => "149", "zi" => "8", "from" => "329", "to" => "333", "xcls" => "" ),
                array( "number" => "23",  "pos" => "149", "zi" => "8", "from" => "350", "to" => "356", "xcls" => "" ),
                array( "number" => "25",  "pos" => "149", "zi" => "8", "from" => "360", "to" => "365", "xcls" => "" ),
                array( "number" => "26",  "pos" => "149", "zi" => "8", "from" => "376", "to" => "377", "xcls" => "" ),
                array( "number" => "27",  "pos" => "149", "zi" => "8", "from" => "381", "to" => "385", "xcls" => "" ),
                array( "number" => "28",  "pos" => "149", "zi" => "8", "from" => "402", "to" => "405", "xcls" => "" ),
                array( "number" => "29",  "pos" => "149", "zi" => "8", "from" => "588", "to" => "591", "xcls" => "" ),
                array( "number" => "117", "pos" => "82",  "zi" => "9", "from" => "602", "to" => "602", "xcls" => "-small" ),
                array( "number" => "118", "pos" => "149", "zi" => "8", "from" => "682", "to" => "685", "xcls" => "" )
            )
        ),
        array( "id" => "14", "color" => "color-zoe", "name" => "Zoe", "fname" => "Zoe Heriot", "episodes" => array(
                array( "number" => "30",  "pos" => "3",   "zi" => "8", "from" => "204", "to" => "221", "xcls" => "" ),
                array( "number" => "31",  "pos" => "3",   "zi" => "8", "from" => "223", "to" => "253", "xcls" => "" )
            )
        ),
        array( "id" => "15", "color" => "color-liz", "name" => "Liz", "fname" => "Liz Shaw", "episodes" => array(
                array( "number" => "32",  "pos" => "3",   "zi" => "8", "from" => "254", "to" => "278", "xcls" => "" ),
                array( "number" => "119", "pos" => "102", "zi" => "9", "from" => "602", "to" => "602", "xcls" => "-small" )
            )
        ),
        array( "id" => "16", "color" => "color-jo", "name" => "Jo", "fname" => "Jo Grant", "episodes" => array(
                array( "number" => "33",  "pos" => "3",   "zi" => "8", "from" => "279", "to" => "355", "xcls" => "" )
            )
        ),
        array( "id" => "17", "color" => "color-doctor", "name" => "1st Doctor", "fname" => "1st Doctor", "episodes" => array(
                array( "number" => "34",  "pos" => "39",  "zi" => "8", "from" => "330", "to" => "333", "xcls" => "" ),
                array( "number" => "73",  "pos" => "142", "zi" => "9", "from" => "602", "to" => "602", "xcls" => "-small" )
            )
        ),
        array( "id" => "18", "color" => "color-doctor", "name" => "2nd Doctor", "fname" => "2nd Doctor", "episodes" => array(
                array( "number" => "35",  "pos" => "112", "zi" => "8", "from" => "330", "to" => "333", "xcls" => "" ),
                array( "number" => "74",  "pos" => "162", "zi" => "8", "from" => "602", "to" => "602", "xcls" => "-small" ),
                array( "number" => "66",  "pos" => "3",   "zi" => "8", "from" => "633", "to" => "635", "xcls" => "" )
            )
        ),
        array( "id" => "19", "color" => "color-sarah", "name" => "Sarah Jane", "fname" => "Sarah Jane Smith", "episodes" => array(
                array( "number" => "36",  "pos" => "3",   "zi" => "8", "from" => "356", "to" => "435", "xcls" => "" ),
                array( "number" => "71",  "pos" => "22",  "zi" => "8", "from" => "602", "to" => "602", "xcls" => "-small" ),
                array( "number" => "84",  "pos" => "149", "zi" => "8", "from" => "713", "to" => "713", "xcls" => "" ),
                array( "number" => "120", "pos" => "149", "zi" => "9", "from" => "750", "to" => "751", "xcls" => "" ),
                array( "number" => "121", "pos" => "76",  "zi" => "8", "from" => "755", "to" => "755", "xcls" => "" )
            )
        ),
        array( "id" => "20", "color" => "color-harry", "name" => "Harry", "fname" => "Harry Sullivan", "episodes" => array(
                array( "number" => "37",  "pos" => "76",  "zi" => "8", "from" => "382", "to" => "405", "xcls" => "" ),
                array( "number" => "38",  "pos" => "76",  "zi" => "8", "from" => "415", "to" => "417", "xcls" => "" )
            )
        ),
        array( "id" => "21", "color" => "color-leela", "name" => "Leela", "fname" => "Leela", "episodes" => array(
                array( "number" => "39",  "pos" => "3",   "zi" => "8", "from" => "440", "to" => "479", "xcls" => "" )
            )
        ),
        array( "id" => "22", "color" => "color-k9", "name" => "K-9", "fname" => "K-9", "episodes" => array(
                array( "number" => "40",  "pos" => "76",  "zi" => "8", "from" => "459", "to" => "461", "xcls" => "" ),
                array( "number" => "41",  "pos" => "76",  "zi" => "8", "from" => "466", "to" => "477", "xcls" => "" ),
                array( "number" => "42",  "pos" => "76",  "zi" => "8", "from" => "479", "to" => "480", "xcls" => "" ),
                array( "number" => "123", "pos" => "76",  "zi" => "8", "from" => "482", "to" => "495", "xcls" => "" ),
                array( "number" => "43",  "pos" => "76",  "zi" => "8", "from" => "500", "to" => "505", "xcls" => "" ),
                array( "number" => "44",  "pos" => "76",  "zi" => "8", "from" => "514", "to" => "526", "xcls" => "" ),
                array( "number" => "124", "pos" => "76",  "zi" => "8", "from" => "530", "to" => "535", "xcls" => "" ),
                array( "number" => "125", "pos" => "76",  "zi" => "8", "from" => "537", "to" => "538", "xcls" => "" ),
                array( "number" => "126", "pos" => "76",  "zi" => "8", "from" => "540", "to" => "545", "xcls" => "" ),
                array( "number" => "127", "pos" => "122", "zi" => "9", "from" => "602", "to" => "602", "xcls" => "-small" ),
                array( "number" => "83",  "pos" => "3",   "zi" => "9", "from" => "713", "to" => "713", "xcls" => "" ),
                array( "number" => "122", "pos" => "179", "zi" => "9", "from" => "751", "to" => "751", "xcls" => "-medium" )
            )
        ),
        array( "id" => "23", "color" => "color-romana-1", "name" => "Romana I", "fname" => "Romana I", "episodes" => array(
                array( "number" => "45",  "pos" => "3",   "zi" => "8", "from" => "480", "to" => "505", "xcls" => "" )
            )
        ),
        array( "id" => "24", "color" => "color-romana-2", "name" => "Romana II", "fname" => "Romana II", "episodes" => array(
                array( "number" => "46",  "pos" => "3",   "zi" => "8", "from" => "506", "to" => "545", "xcls" => "" ),
                array( "number" => "72",  "pos" => "42",  "zi" => "9", "from" => "602", "to" => "602", "xcls" => "-small" )
            )
        ),
        array( "id" => "25", "color" => "color-adric", "name" => "Adric", "fname" => "Adric", "episodes" => array(
                array( "number" => "47",  "pos" => "149", "zi" => "8", "from" => "534", "to" => "575", "xcls" => "" ),
                array( "number" => "48",  "pos" => "149", "zi" => "8", "from" => "577", "to" => "577", "xcls" => "" ),
                array( "number" => "49",  "pos" => "179", "zi" => "8", "from" => "622", "to" => "622", "xcls" => "-medium" )
            )
        ),
        array( "id" => "26", "color" => "color-nyssa", "name" => "Nyssa", "fname" => "Nyssa", "episodes" => array(
                array( "number" => "50",  "pos" => "3",   "zi" => "8", "from" => "546", "to" => "549", "xcls" => "" ),
                array( "number" => "51",  "pos" => "3",   "zi" => "8", "from" => "551", "to" => "562", "xcls" => "" ),
                array( "number" => "53",  "pos" => "3",   "zi" => "8", "from" => "565", "to" => "595", "xcls" => "" ),
                array( "number" => "54",  "pos" => "3",   "zi" => "9", "from" => "622", "to" => "622", "xcls" => "-medium" )
            )
        ),
        array( "id" => "27", "color" => "color-tegan", "name" => "Tegan", "fname" => "Tegan Jovanka", "episodes" => array(
                array( "number" => "55",  "pos" => "76",  "zi" => "8", "from" => "550", "to" => "579", "xcls" => "" ),
                array( "number" => "56",  "pos" => "76",  "zi" => "8", "from" => "581", "to" => "614", "xcls" => "" ),
                array( "number" => "57",  "pos" => "135", "zi" => "9", "from" => "622", "to" => "622", "xcls" => "-medium" )
            )
        ),
        array( "id" => "28", "color" => "color-turlough", "name" => "Turlough", "fname" => "Vislor Turlough", "episodes" => array(
                array( "number" => "58",  "pos" => "39",  "zi" => "8", "from" => "588", "to" => "618", "xcls" => "" ),
                array( "number" => "59",  "pos" => "47",  "zi" => "8", "from" => "622", "to" => "622", "xcls" => "-medium" )
            )
        ),
        array( "id" => "29", "color" => "color-kamelion", "name" => "Kamelion", "fname" => "Kamelion", "episodes" => array(
                array( "number"=> "60", "pos"=> "3",   "zi"=> "8", "from"=> "600", "to"=> "601", "xcls"=> "" ),
                array( "number"=> "61", "pos"=> "3",   "zi"=> "8", "from"=> "607", "to"=> "608", "xcls"=> "" ),
                array( "number"=> "62", "pos"=> "3",   "zi"=> "8", "from"=> "615", "to"=> "618", "xcls"=> "" ),
                array( "number"=> "63", "pos"=> "91",  "zi"=> "9", "from"=> "622", "to"=> "622", "xcls"=> "-medium" )
            )
        ),
        array( "id" => "30", "color"=> "color-peri", "name"=> "Peri", "fname"=> "Peri Brown", "episodes"=> array(
                array( "number"=> "64", "pos"=> "76",  "zi"=> "8", "from"=> "615", "to"=> "647", "xcls"=> "" )
            )
        ),
        array( "id" => "31", "color"=> "color-mel", "name"=> "Mel", "fname"=> "Melanie Bush", "episodes"=> array(
                array( "number"=> "67", "pos"=> "3",   "zi"=> "8", "from"=> "648", "to"=> "667", "xcls"=> "" )
            )
        ),
        array( "id" => "32", "color"=> "color-ace", "name"=> "Ace", "fname"=> "Ace", "episodes"=> array(
                array( "number"=> "68", "pos"=> "76",  "zi"=> "8", "from"=> "665", "to"=> "695", "xcls"=> "" )
            )
        ),
        array( "id" => "33", "color"=> "color-grace", "name"=> "Grace", "fname"=> "Grace Holloway", "episodes"=> array(
                array( "number"=> "69", "pos"=> "3",   "zi"=> "8", "from"=> "696", "to"=> "696", "xcls"=> "" )
            )
        ),
        array( "id" => "34", "color"=> "color-doctor", "name"=> "3rd Doctor", "fname"=> "3rd Doctor", "episodes"=> array(
                array( "number"=> "75", "pos"=> "182", "zi"=> "8", "from"=> "602", "to"=> "602", "xcls"=> "-small" )
            )
        ),
        array( "id" => "35", "color"=> "color-doctor", "name"=> "4th Doctor", "fname"=> "4th Doctor", "episodes"=> array(
                array( "number"=> "76", "pos"=> "202", "zi"=> "8", "from"=> "602", "to"=> "602", "xcls"=> "-small" )
            )
        ),
        array( "id" => "36", "color"=> "color-rose", "name"=> "Rose", "fname"=> "Rose Tyler", "episodes"=> array(
                array( "number"=> "77",  "pos"=> "3",   "zi"=> "8", "from"=> "697", "to"=> "723", "xcls"=> "" ),
                array( "number"=> "128", "pos"=> "3",   "zi"=> "8", "from"=> "739", "to"=> "739", "xcls"=> "" ),
                array( "number"=> "78",  "pos"=> "39",  "zi"=> "8", "from"=> "749", "to"=> "751", "xcls"=> "" )
            )
        ),
        array( "id" => "37", "color"=> "color-adam", "name"=> "Adam", "fname"=> "Adam Mitchell", "episodes"=> array(
                array( "number"=> "79", "pos"=> "39",  "zi"=> "9", "from"=> "702", "to"=> "703", "xcls"=> "" )
            )
        ),
        array( "id" => "38", "color"=> "color-jack", "name"=> "Jack", "fname"=> "Jack Harkness", "episodes"=> array(
                array( "number"=> "80", "pos"=> "39",  "zi"=> "9", "from"=> "705", "to"=> "709", "xcls"=> "" ),
                array( "number"=> "81", "pos"=> "39",  "zi"=> "9", "from"=> "735", "to"=> "737", "xcls"=> "" ),
                array( "number"=> "82", "pos"=> "76",  "zi"=> "9", "from"=> "750", "to"=> "751", "xcls"=> "" )
            )
        ),
        array( "id" => "39", "color"=> "color-mickey", "name"=> "Mickey", "fname"=> "Mickey Smith", "episodes"=> array(
                array( "number"=> "129", "pos"=> "76",  "zi"=> "8",  "from"=> "697", "to"=> "697", "xcls"=> "" ),
                array( "number"=> "130", "pos"=> "76",  "zi"=> "8",  "from"=> "700", "to"=> "701", "xcls"=> "" ),
                array( "number"=> "131", "pos"=> "76",  "zi"=> "9",  "from"=> "707", "to"=> "707", "xcls"=> "" ),
                array( "number"=> "132", "pos"=> "76",  "zi"=> "9",  "from"=> "709", "to"=> "711", "xcls"=> "" ),
                array( "number"=> "85",  "pos"=> "76",  "zi"=> "9",  "from"=> "713", "to"=> "716", "xcls"=> "" ),
                array( "number"=> "134", "pos"=> "76",  "zi"=> "8",  "from"=> "722", "to"=> "723", "xcls"=> "" ),
                array( "number"=> "135", "pos"=> "3",   "zi"=> "10", "from"=> "751", "to"=> "751", "xcls"=> "-medium" ),
                array( "number"=> "136", "pos"=> "112", "zi"=> "9",  "from"=> "756", "to"=> "756", "xcls"=> "" )
            )
        ),
        array( "id" => "40", "color"=> "color-donna", "name"=> "Donna", "fname"=> "Donna Noble", "episodes"=> array(
                array( "number"=> "86",  "pos"=> "149", "zi"=> "8", "from"=> "723", "to"=> "724", "xcls"=> "" ),
                array( "number"=> "89",  "pos"=> "112", "zi"=> "8", "from"=> "739", "to"=> "751", "xcls"=> "" ),
                array( "number"=> "137", "pos"=> "149", "zi"=> "8", "from"=> "755", "to"=> "756", "xcls"=> "" )
            )
        ),
        array( "id" => "41", "color"=> "color-martha", "name"=> "Martha", "fname"=> "Martha Jones", "episodes"=> array(
                array( "number"=> "87",  "pos"=> "3",   "zi"=> "8", "from"=> "725", "to"=> "737", "xcls"=> "" ),
                array( "number"=> "90",  "pos"=> "3",   "zi"=> "8", "from"=> "742", "to"=> "744", "xcls"=> "" ),
                array( "number"=> "138", "pos"=> "3",   "zi"=> "9", "from"=> "750", "to"=> "751", "xcls"=> "" ),
                array( "number"=> "139", "pos"=> "39",  "zi"=> "9", "from"=> "756", "to"=> "756", "xcls"=> "" )
            )
        ),
        array( "id" => "42", "color"=> "color-astrid", "name"=> "Astrid", "fname"=> "Astrid Peth", "episodes"=> array(
                array( "number"=> "88",  "pos"=> "3",   "zi"=> "8", "from"=> "738", "to"=> "738", "xcls"=> "" )
            )
        ),
        array( "id" => "43", "color"=> "color-river", "name"=> "River", "fname"=> "River Song", "episodes"=> array(
                array( "number"=> "91",  "pos"=> "76",  "zi"=> "8", "from"=> "746", "to"=> "747", "xcls"=> "" ),
                array( "number"=> "96",  "pos"=> "76",  "zi"=> "8", "from"=> "760", "to"=> "761", "xcls"=> "" ),
                array( "number"=> "99",  "pos"=> "76",  "zi"=> "8", "from"=> "768", "to"=> "769", "xcls"=> "" ),
                array( "number"=> "101", "pos"=> "76",  "zi"=> "8", "from"=> "771", "to"=> "772", "xcls"=> "" ),
                array( "number"=> "102", "pos"=> "76",  "zi"=> "8", "from"=> "777", "to"=> "777", "xcls"=> "" ),
                array( "number"=> "110", "pos"=> "76",  "zi"=> "8", "from"=> "789", "to"=> "789", "xcls"=> "" ),
                array( "number"=> "111", "pos"=> "76",  "zi"=> "8", "from"=> "798", "to"=> "798", "xcls"=> "" )
            )
        ),
        array( "id" => "44", "color"=> "color-jackson", "name"=> "Jackson", "fname"=> "Jackson Lake", "episodes"=> array(
                array( "number"=> "106", "pos"=> "3",   "zi"=> "8", "from"=> "752", "to"=> "752", "xcls"=> "" )
            )
        ),
        array( "id" => "45", "color"=> "color-christina", "name"=> "Christina", "fname"=> "Lady Christina de Souza", "episodes"=> array(
                array( "number"=> "92", "pos"=> "3",   "zi"=> "8", "from"=> "753", "to"=> "753", "xcls"=> "" )
            )
        ),
        array( "id" => "46", "color"=> "color-adelaide", "name"=> "Adelaide", "fname"=> "Adelaide Brooke", "episodes"=> array(
                array( "number"=> "93", "pos"=> "3",   "zi"=> "8", "from"=> "754", "to"=> "754", "xcls"=> "" )
            )
        ),
        array( "id" => "47", "color"=> "color-wilfred", "name"=> "Wilfred", "fname"=> "Wilfred Mott", "episodes"=> array(
                array( "number"=> "94", "pos"=> "3",   "zi"=> "8", "from"=> "755", "to"=> "756", "xcls"=> "" )
            )
        ),
        array( "id" => "48", "color"=> "color-amy", "name"=> "Amy", "fname"=> "Amelia Jessica 'Amy' Pond", "episodes"=> array(
                array( "number"=> "95",  "pos"=> "3",   "zi"=> "8", "from"=> "757", "to"=> "781", "xcls"=> "" ),
                array( "number"=> "104", "pos"=> "3",   "zi"=> "8", "from"=> "783", "to"=> "783", "xcls"=> "" ),
                array( "number"=> "107", "pos"=> "3",   "zi"=> "8", "from"=> "785", "to"=> "789", "xcls"=> "" )
            )
        ),
        array( "id" => "49", "color"=> "color-rory", "name"=> "Rory", "fname"=> "Rory Williams", "episodes"=> array(
                array( "number"=> "97",  "pos"=> "149", "zi"=> "8", "from"=> "762", "to"=> "765", "xcls"=> "" ),
                array( "number"=> "100", "pos"=> "149", "zi"=> "8", "from"=> "768", "to"=> "781", "xcls"=> "" ),
                array( "number"=> "105", "pos"=> "149", "zi"=> "8", "from"=> "783", "to"=> "783", "xcls"=> "" ),
                array( "number"=> "108", "pos"=> "149", "zi"=> "8", "from"=> "785", "to"=> "789", "xcls"=> "" )
            )
        ),
        array( "id" => "50", "color"=> "color-craig", "name"=> "Craig", "fname"=> "Craig Owens", "episodes"=> array(
                array( "number"=> "98",  "pos"=> "76",  "zi"=> "8", "from"=> "767", "to"=> "767", "xcls"=> "" ),
                array( "number"=> "103", "pos"=> "76",  "zi"=> "8", "from"=> "782", "to"=> "782", "xcls"=> "" )
            )
        ),
        array( "id" => "51", "color"=> "color-clara", "name"=> "Clara", "fname"=> "Clara Oswin Oswald", "episodes"=> array(
                array( "number"=> "109", "pos"=> "76",  "zi"=> "8", "from"=> "785", "to"=> "785", "xcls"=> "" ),
                array( "number"=> "112", "pos"=> "3",   "zi"=> "8", "from"=> "790", "to"=> "825", "xcls"=> "" )
            )
        ),
        array( "id" => "52", "color"=> "color-doctor", "name"=> "10th Doctor", "fname"=> "10th Doctor", "episodes"=> array(
                array( "number"=> "140", "pos"=> "76",  "zi"=> "8", "from"=> "799", "to"=> "799", "xcls"=> "" )
            )
        ),
        array( "id" => "53", "color"=> "color-doctor", "name"=> "War Doctor", "fname"=> "War Doctor", "episodes"=> array(
                array( "number"=> "141", "pos"=> "149", "zi"=> "8", "from"=> "799", "to"=> "799", "xcls"=> "" )
            )
        )
    );

    // get all
    $response = $companions_array;

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($response);
});

/*

                                  888
                                  888
                                  888
 .d8888b 888d888 .d88b.   8888b.  888888 888  888 888d888 .d88b.  .d8888b
d88P"    888P"  d8P  Y8b     "88b 888    888  888 888P"  d8P  Y8b 88K
888      888    88888888 .d888888 888    888  888 888    88888888 "Y8888b.
Y88b.    888    Y8b.     888  888 Y88b.  Y88b 888 888    Y8b.          X88
 "Y8888P 888     "Y8888  "Y888888  "Y888  "Y88888 888     "Y8888   88888P'

*/

$app->get('/creatures', function () use ($app) {
    $creatures_array = array(
		array( "id" => "1", "name" => "Daleks", "color" => "color-creature1", "episodes" => array(
	            array( "number" => "1",   "from" => "5",   "to" => "11",  "xcls" => ""       ),
	            array( "number" => "2",   "from" => "46",  "to" => "51",  "xcls" => ""       ),
	            array( "number" => "3",   "from" => "72",  "to" => "77",  "xcls" => "-tl"    ),
	            array( "number" => "4",   "from" => "86",  "to" => "86",  "xcls" => ""       ),
	            array( "number" => "5",   "from" => "91",  "to" => "102", "xcls" => "-sl"    ),
	            array( "number" => "6",   "from" => "135", "to" => "140", "xcls" => ""       ),
	            array( "number" => "7",   "from" => "163", "to" => "169", "xcls" => ""       ),
	            array( "number" => "8",   "from" => "304", "to" => "307", "xcls" => "-sl"    ),
	            array( "number" => "9",   "from" => "344", "to" => "349", "xcls" => "-sl"    ),
	            array( "number" => "10",  "from" => "366", "to" => "369", "xcls" => "-sl"    ),
	            array( "number" => "11",  "from" => "392", "to" => "397", "xcls" => "-tl"    ),
	            array( "number" => "12",  "from" => "506", "to" => "509", "xcls" => "-tl"    ),
	            array( "number" => "13",  "from" => "613", "to" => "614", "xcls" => "-sl"    ),
	            array( "number" => "14",  "from" => "638", "to" => "639", "xcls" => "-sl"    ),
	            array( "number" => "15",  "from" => "668", "to" => "671", "xcls" => "-sl"    ),
	            array( "number" => "16",  "from" => "702", "to" => "702", "xcls" => ""       ),
	            array( "number" => "17",  "from" => "708", "to" => "709", "xcls" => ""       ),
	            array( "number" => "18",  "from" => "722", "to" => "723", "xcls" => "-sl"    ),
	            array( "number" => "19",  "from" => "728", "to" => "729", "xcls" => ""       ),
	            array( "number" => "20",  "from" => "750", "to" => "751", "xcls" => "-tl"    ),
	            array( "number" => "21",  "from" => "759", "to" => "759", "xcls" => ""       ),
	            array( "number" => "22",  "from" => "785", "to" => "785", "xcls" => ""       ),
	            array( "number" => "282", "from" => "799", "to" => "799", "xcls" => "-sl"    ),
	            array( "number" => "298", "from" => "768", "to" => "769", "xcls" => "-four4" ),
	            array( "number" => "299", "from" => "800", "to" => "800", "xcls" => "-five1" )
            )
        ),
        array( "id" => "2", "name" => "Sensorites", "color" => "color-creature2", "episodes" => array(
                array( "number" => "23",  "from" => "31",  "to" => "36",  "xcls" => ""       )
            )
        ),
        array( "id" => "3", "name" => "Meddling Monk", "color" => "color-creature3", "episodes" => array(
                array( "number" => "24",  "from" => "78",  "to" => "81",  "xcls" => ""       ),
                array( "number" => "25",  "from" => "91",  "to" => "102", "xcls" => "-sr"    )
            )
        ),
        array( "id" => "4", "name" => "War Machines", "color" => "color-creature4", "episodes" => array(
                array( "number" => "26",  "from" => "123", "to" => "126", "xcls" => "-sr"    )
            )
        ),
        array( "id" => "5", "name" => "Cybermen", "color" => "color-creature5", "episodes" => array(
                array( "number" => "27",  "from" => "131", "to" => "134", "xcls" => ""       ),
                array( "number" => "28",  "from" => "149", "to" => "152", "xcls" => ""       ),
                array( "number" => "29",  "from" => "170", "to" => "173", "xcls" => ""       ),
                array( "number" => "30",  "from" => "204", "to" => "209", "xcls" => ""       ),
                array( "number" => "31",  "from" => "220", "to" => "227", "xcls" => ""       ),
                array( "number" => "32",  "from" => "398", "to" => "401", "xcls" => "-sl"    ),
                array( "number" => "33",  "from" => "572", "to" => "575", "xcls" => ""       ),
                array( "number" => "34",  "from" => "602", "to" => "602", "xcls" => "-sl"    ),
                array( "number" => "35",  "from" => "627", "to" => "628", "xcls" => "-sl"    ),
                array( "number" => "36",  "from" => "675", "to" => "677", "xcls" => ""       ),
                array( "number" => "37",  "from" => "715", "to" => "716", "xcls" => ""       ),
                array( "number" => "38",  "from" => "722", "to" => "723", "xcls" => "-sr"    ),
                array( "number" => "39",  "from" => "752", "to" => "752", "xcls" => ""       ),
                array( "number" => "40",  "from" => "782", "to" => "782", "xcls" => ""       ),
                array( "number" => "283", "from" => "797", "to" => "797", "xcls" => ""       ),
                array( "number" => "296", "from" => "768", "to" => "769", "xcls" => "-four2" ),
                array( "number" => "301", "from" => "800", "to" => "800", "xcls" => "-five3" )
            )
        ),
        array( "id" => "6", "name" => "Ice Warriors", "color" => "color-creature6", "episodes" => array(
                array( "number" => "41",  "from" => "180", "to" => "185", "xcls" => ""       ),
                array( "number" => "42",  "from" => "232", "to" => "237", "xcls" => ""       ),
                array( "number" => "43",  "from" => "244", "to" => "253", "xcls" => "-sl"    ),
                array( "number" => "44",  "from" => "283", "to" => "288", "xcls" => "-tr"    ),
                array( "number" => "45",  "from" => "308", "to" => "311", "xcls" => ""       ),
                array( "number" => "46",  "from" => "370", "to" => "375", "xcls" => ""       ),
                array( "number" => "47",  "from" => "793", "to" => "793", "xcls" => ""       )
            )
        ),
        array( "id" => "7", "name" => "Great Intelligence", "color" => "color-creature7", "episodes" => array(
                array( "number" => "48",  "from" => "174", "to" => "179", "xcls" => ""       ),
                array( "number" => "49",  "from" => "192", "to" => "197", "xcls" => ""       ),
                array( "number" => "50",  "from" => "790", "to" => "791", "xcls" => ""       ),
                array( "number" => "51",  "from" => "798", "to" => "798", "xcls" => ""       )
            )
        ),
        array( "id" => "8", "name" => "Silurians", "color" => "color-creature8", "episodes" => array(
                array( "number" => "53",  "from" => "258", "to" => "264", "xcls" => ""       ),
                array( "number" => "54",  "from" => "603", "to" => "606", "xcls" => "-sl"    ),
                array( "number" => "55",  "from" => "764", "to" => "765", "xcls" => ""       ),
                array( "number" => "56",  "from" => "777", "to" => "777", "xcls" => "-sl"    ),
                array( "number" => "274", "from" => "783", "to" => "783", "xcls" => "-tr"    ),
                array( "number" => "276", "from" => "786", "to" => "786", "xcls" => "-sl"    )
            )
        ),
        array( "id" => "9", "name" => "Master", "color" => "color-creature9", "episodes" => array(
                array( "number" => "57", "from" => "279", "to" => "303", "xcls" => "-tl" ),
                array( "number" => "58", "from" => "312", "to" => "317", "xcls" => "-tl" ),
                array( "number" => "59", "from" => "324", "to" => "329", "xcls" => "" ),
                array( "number" => "60", "from" => "338", "to" => "343", "xcls" => "-tl" ),
                array( "number" => "61", "from" => "436", "to" => "439", "xcls" => "-sl" ),
                array( "number" => "62", "from" => "546", "to" => "557", "xcls" => "-tl" ),
                array( "number" => "63", "from" => "576", "to" => "579", "xcls" => "-tl" ),
                array( "number" => "64", "from" => "600", "to" => "602", "xcls" => "-sr" ),
                array( "number" => "65", "from" => "615", "to" => "618", "xcls" => "" ),
                array( "number" => "66", "from" => "631", "to" => "632", "xcls" => "-sl" ),
                array( "number" => "67", "from" => "652", "to" => "653", "xcls" => "-sl" ),
                array( "number" => "68", "from" => "693", "to" => "695", "xcls" => "-sl" ),
                array( "number" => "69", "from" => "696", "to" => "696", "xcls" => "" ),
                array( "number" => "70", "from" => "735", "to" => "737", "xcls" => "-sl" ),
                array( "number" => "71", "from" => "755", "to" => "756", "xcls" => "-tl" )
            )
        ),
        array( "id" => "10", "name" => "Sontarans", "color" => "color-creature10", "episodes" => array(
                array( "number" => "72", "from" => "356", "to" => "359", "xcls" => "" ),
                array( "number" => "73", "from" => "390", "to" => "391", "xcls" => "" ),
                array( "number" => "74", "from" => "474", "to" => "479", "xcls" => "-tr" ),
                array( "number" => "75", "from" => "550", "to" => "553", "xcls" => "-tc" ),
                array( "number" => "76", "from" => "633", "to" => "635", "xcls" => "-sl" ),
                array( "number" => "77", "from" => "742", "to" => "743", "xcls" => "" ),
                array( "number" => "79", "from" => "777", "to" => "777", "xcls" => "-sr" ),
                array( "number" => "297", "from" => "768", "to" => "769", "xcls" => "-four3" ),
                array( "number" => "303", "from" => "800", "to" => "800", "xcls" => "-five5" )
            )
        ),
        array( "id" => "11", "name" => "Davros", "color" => "color-creature1", "episodes" => array(
                array( "number" => "80", "from" => "392", "to" => "397", "xcls" => "-tc" ),
                array( "number" => "81", "from" => "506", "to" => "509", "xcls" => "-tc" ),
                array( "number" => "82", "from" => "613", "to" => "614", "xcls" => "-sr" ),
                array( "number" => "83", "from" => "638", "to" => "639", "xcls" => "-sr" ),
                array( "number" => "84", "from" => "668", "to" => "671", "xcls" => "-sr" ),
                array( "number" => "85", "from" => "750", "to" => "751", "xcls" => "-tc" )
            )
        ),
        array( "id" => "12", "name" => "Zygons", "color" => "color-creature2", "episodes" => array(
                array( "number" => "86",  "from" => "402", "to" => "405", "xcls" => "" ),
                array( "number" => "281", "from" => "799", "to" => "799", "xcls" => "-sr" )
            )
        ),
        array( "id" => "13", "name" => "Black Guardian", "color" => "color-creature3", "episodes" => array(
                array( "number" => "88", "from" => "500", "to" => "505", "xcls" => "" ),
                array( "number" => "89", "from" => "588", "to" => "599", "xcls" => "-sl" )
            )
        ),
        array( "id" => "14", "name" => "Terileptils", "color" => "color-creature4", "episodes" => array(
                array( "number" => "90", "from" => "566", "to" => "569", "xcls" => "" )
            )
        ),
        array( "id" => "15", "name" => "Mara", "color" => "color-creature5", "episodes" => array(
                array( "number" => "91", "from" => "562", "to" => "565", "xcls" => "" ),
                array( "number" => "92", "from" => "584", "to" => "587", "xcls" => "-sl" )
            )
        ),
        array( "id" => "16", "name" => "Sil", "color" => "color-creature6", "episodes" => array(
                array( "number" => "93", "from" => "629", "to" => "630", "xcls" => "" ),
                array( "number" => "94", "from" => "644", "to" => "647", "xcls" => "-mr" )
            )
        ),
        array( "id" => "17", "name" => "Rani", "color" => "color-creature7", "episodes" => array(
                array( "number" => "95", "from" => "631", "to" => "632", "xcls" => "-sr" ),
                array( "number" => "96", "from" => "654", "to" => "657", "xcls" => "-tl" )
            )
        ),
        array( "id" => "18", "name" => "Valeyard", "color" => "color-creature8", "episodes" => array(
                array( "number" => "97", "from" => "640", "to" => "647", "xcls" => "-tl" ),
                array( "number" => "98", "from" => "652", "to" => "653", "xcls" => "-sr" )
            )
        ),
        array( "id" => "19", "name" => "Kandy Man", "color" => "color-creature9", "episodes" => array(
                array( "number" => "99", "from" => "672", "to" => "674", "xcls" => "" )
            )
        ),
        array( "id" => "20", "name" => "Haemovores", "color" => "color-creature10", "episodes" => array(
                array( "number" => "100", "from" => "689", "to" => "692", "xcls" => "" )
            )
        ),
        array( "id" => "21", "name" => "Autons", "color" => "color-creature1", "episodes" => array(
                array( "number" => "101", "from" => "254", "to" => "257", "xcls" => "-sr" ),
                array( "number" => "102", "from" => "279", "to" => "282", "xcls" => "-tr" ),
                array( "number" => "103", "from" => "697", "to" => "697", "xcls" => "-sl" ),
                array( "number" => "295", "from" => "768", "to" => "769", "xcls" => "-four1" )
            )
        ),
        array( "id" => "22", "name" => "Slitheen", "color" => "color-creature2", "episodes" => array(
                array( "number" => "105", "from" => "700", "to" => "701", "xcls" => "" ),
                array( "number" => "106", "from" => "707", "to" => "707", "xcls" => "" )
            )
        ),
        array( "id" => "23", "name" => "Ood", "color" => "color-creature3", "episodes" => array(
                array( "number" => "107", "from" => "718", "to" => "719", "xcls" => "-sl" ),
                array( "number" => "109", "from" => "741", "to" => "741", "xcls" => "" ),
                array( "number" => "259", "from" => "755", "to" => "756", "xcls" => "-tr" ),
                array( "number" => "268", "from" => "774", "to" => "774", "xcls" => "" )
            )
        ),
        array( "id" => "24", "name" => "Vashta Nerada", "color" => "color-creature4", "episodes" => array(
                array( "number" => "111", "from" => "746", "to" => "747", "xcls" => "" )
            )
        ),
        array( "id" => "25", "name" => "Weeping Angels", "color" => "color-creature5", "episodes" => array(
                array( "number" => "112", "from" => "734", "to" => "734", "xcls" => "" ),
                array( "number" => "113", "from" => "760", "to" => "761", "xcls" => "" ),
                array( "number" => "114", "from" => "789", "to" => "789", "xcls" => "" ),
                array( "number" => "302", "from" => "800", "to" => "800", "xcls" => "-five4" )
            )
        ),
        array( "id" => "26", "name" => "Silence", "color" => "color-creature6", "episodes" => array(
                array( "number" => "115", "from" => "771", "to" => "772", "xcls" => "" ),
                array( "number" => "116", "from" => "778", "to" => "778", "xcls" => "-sl" ),
                array( "number" => "117", "from" => "783", "to" => "783", "xcls" => "-tl" ),
                array( "number" => "300", "from" => "800", "to" => "800", "xcls" => "-five2" )
            )
        ),
        array( "id" => "27", "name" => "Voords", "color" => "color-creature7", "episodes" => array(
                array( "number" => "118", "from" => "21",  "to" => "26",  "xcls" => "" )
            )
        ),
        array( "id" => "28", "name" => "Koquillion", "color" => "color-creature8", "episodes" => array(
                array( "number" => "119", "from" => "52",  "to" => "53",  "xcls" => "" )
            )
        ),
        array( "id" => "29", "name" => "Menoptera", "color" => "color-creature9", "episodes" => array(
                array( "number" => "120", "from" => "58",  "to" => "63",  "xcls" => "-tl" )
            )
        ),
        array( "id" => "30", "name" => "Zarbi", "color" => "color-creature10", "episodes" => array(
                array( "number" => "120", "from" => "58",  "to" => "63",  "xcls" => "-tc" )
            )
        ),
        array( "id" => "31", "name" => "Animus", "color" => "color-creature1", "episodes" => array(
                array( "number" => "121", "from" => "58",  "to" => "63",  "xcls" => "-tr" )
            )
        ),
        array( "id" => "32", "name" => "Moroks", "color" => "color-creature2", "episodes" => array(
                array( "number" => "122", "from" => "68",  "to" => "71",  "xcls" => "-sl" )
            )
        ),
        array( "id" => "33", "name" => "Xerons", "color" => "color-creature3", "episodes" => array(
                array( "number" => "123", "from" => "68",  "to" => "71",  "xcls" => "-sr" )
            )
        ),
        array( "id" => "34", "name" => "Aridians", "color" => "color-creature4", "episodes" => array(
                array( "number" => "124", "from" => "72",  "to" => "77",  "xcls" => "-tc" )
            )
        ),
        array( "id" => "35", "name" => "Mechanoids", "color" => "color-creature5", "episodes" => array(
                array( "number" => "125", "from" => "72",  "to" => "77",  "xcls" => "-tr" )
            )
        ),
        array( "id" => "36", "name" => "Chumblies", "color" => "color-creature6", "episodes" => array(
                array( "number" => "126", "from" => "82",  "to" => "85",  "xcls" => "-tl" )
            )
        ),
        array( "id" => "37", "name" => "Drahvins", "color" => "color-creature7", "episodes" => array(
                array( "number" => "127", "from" => "82",  "to" => "85",  "xcls" => "-tc" )
            )
        ),
        array( "id" => "38", "name" => "Rills", "color" => "color-creature8", "episodes" => array(
                array( "number" => "128", "from" => "82",  "to" => "85",  "xcls" => "-tr" )
            )
        ),
        array( "id" => "39", "name" => "Celestial Toymaker", "color" => "color-creature9", "episodes" => array(
                array( "number" => "129", "from" => "111", "to" => "114",  "xcls" => "" )
            )
        ),
        array( "id" => "40", "name" => "WOTAN", "color" => "color-creature10", "episodes" => array(
                array( "number" => "130", "from" => "123", "to" => "126", "xcls" => "-sl" )
            )
        ),
        array( "id" => "41", "name" => "Macra", "color" => "color-creature1", "episodes" => array(
                array( "number" => "131", "from" => "153", "to" => "156", "xcls" => "" )
            )
        ),
        array( "id" => "42", "name" => "Chameleons", "color" => "color-creature2", "episodes" => array(
                array( "number" => "132", "from" => "157", "to" => "162", "xcls" => "" )
            )
        ),
        array( "id" => "43", "name" => "Dominators", "color" => "color-creature3", "episodes" => array(
                array( "number" => "133", "from" => "210", "to" => "214", "xcls" => "-tl" )
            )
        ),
        array( "id" => "44", "name" => "Quarks", "color" => "color-creature4", "episodes" => array(
                array( "number" => "134", "from" => "210", "to" => "214", "xcls" => "-tc" )
            )
        ),
        array( "id" => "45", "name" => "Dulcians", "color" => "color-creature5", "episodes" => array(
                array( "number" => "135", "from" => "210", "to" => "214", "xcls" => "-tr" )
            )
        ),
        array( "id" => "46", "name" => "Clockwork Soldiers", "color" => "color-creature6", "episodes" => array(
                array( "number" => "136", "from" => "215", "to" => "219", "xcls" => "-sl" )
            )
        ),
        array( "id" => "47", "name" => "White Robots", "color" => "color-creature7", "episodes" => array(
                array( "number" => "137", "from" => "215", "to" => "219", "xcls" => "-sr" )
            )
        ),
        array( "id" => "48", "name" => "Gonds", "color" => "color-creature8", "episodes" => array(
                array( "number" => "138", "from" => "228", "to" => "231", "xcls" => "-sl" )
            )
        ),
        array( "id" => "49", "name" => "Krotons", "color" => "color-creature9", "episodes" => array(
                array( "number" => "139", "from" => "228", "to" => "231", "xcls" => "-sr" )
            )
        ),
        array( "id" => "50", "name" => "Time Lords", "color" => "color-creature10", "episodes" => array(
                array( "number" => "140", "from" => "244", "to" => "253", "xcls" => "-sr" ),
                array( "number" => "171", "from" => "436", "to" => "439", "xcls" => "-sr" ),
                array( "number" => "175", "from" => "474", "to" => "479", "xcls" => "-tc" ),
                array( "number" => "203", "from" => "580", "to" => "583", "xcls" => "-tl" ),
                array( "number" => "78",  "from" => "755", "to" => "756", "xcls" => "-tc" )
            )
        ),
        array( "id" => "51", "name" => "Nestene Consciousness", "color" => "color-creature1", "episodes" => array(
                array( "number" => "141", "from" => "254", "to" => "257", "xcls" => "-sl" ),
                array( "number" => "142", "from" => "279", "to" => "282", "xcls" => "-tc" ),
                array( "number" => "230", "from" => "697", "to" => "697", "xcls" => "-sr" )
            )
        ),
        array( "id" => "52", "name" => "Keller Machine", "color" => "color-creature2", "episodes" => array(
                array( "number" => "143", "from" => "283", "to" => "288", "xcls" => "-tc" )
            )
        ),
        array( "id" => "53", "name" => "Axons", "color" => "color-creature3", "episodes" => array(
                array( "number" => "144", "from" => "289", "to" => "292", "xcls" => "-mr" )
            )
        ),
        array( "id" => "54", "name" => "Primitives", "color" => "color-creature4", "episodes" => array(
                array( "number" => "145", "from" => "293", "to" => "298", "xcls" => "-mr" )
            )
        ),
        array( "id" => "55", "name" => "Daemons", "color" => "color-creature5", "episodes" => array(
                array( "number" => "146", "from" => "299", "to" => "303", "xcls" => "-mr" )
            )
        ),
        array( "id" => "56", "name" => "Ogrons", "color" => "color-creature6", "episodes" => array(
                array( "number" => "147", "from" => "304", "to" => "307", "xcls" => "-sr" ),
                array( "number" => "154", "from" => "338", "to" => "343", "xcls" => "-tc" )
            )
        ),
        array( "id" => "57", "name" => "Sea Devils", "color" => "color-creature7", "episodes" => array(
                array( "number" => "148", "from" => "312", "to" => "317", "xcls" => "-tc" ),
                array( "number" => "207", "from" => "603", "to" => "606", "xcls" => "-sr" )
            )
        ),
        array( "id" => "58", "name" => "Kronos", "color" => "color-creature8", "episodes" => array(
                array( "number" => "149", "from" => "312", "to" => "317", "xcls" => "-tr" )
            )
        ),
        array( "id" => "59", "name" => "Omega", "color" => "color-creature9", "episodes" => array(
                array( "number" => "150", "from" => "330", "to" => "333", "xcls" => "" ),
                array( "number" => "202", "from" => "580", "to" => "583", "xcls" => "-tc" )
            )
        ),
        array( "id" => "60", "name" => "Drashigs", "color" => "color-creature10", "episodes" => array(
                array( "number" => "151", "from" => "334", "to" => "337", "xcls" => "-tl" )
            )
        ),
        array( "id" => "61", "name" => "Lurmans", "color" => "color-creature1", "episodes" => array(
                array( "number" => "152", "from" => "334", "to" => "337", "xcls" => "-tc" )
            )
        ),
        array( "id" => "62", "name" => "Minorians", "color" => "color-creature2", "episodes" => array(
                array( "number" => "153", "from" => "334", "to" => "337", "xcls" => "-tr" )
            )
        ),
        array( "id" => "63", "name" => "Draconians", "color" => "color-creature3", "episodes" => array(
                array( "number" => "155", "from" => "338", "to" => "343", "xcls" => "-tr" )
            )
        ),
        array( "id" => "64", "name" => "Thals", "color" => "color-creature4", "episodes" => array(
                array( "number" => "156", "from" => "344", "to" => "349", "xcls" => "-sr" )
            )
        ),
        array( "id" => "65", "name" => "Dinosaurs", "color" => "color-creature5", "episodes" => array(
                array( "number" => "157", "from" => "360", "to" => "365", "xcls" => "" ),
                array( "number" => "275", "from" => "786", "to" => "786", "xcls" => "-sr" )
            )
        ),
        array( "id" => "66", "name" => "Exxilons", "color" => "color-creature6", "episodes" => array(
                array( "number" => "158", "from" => "366", "to" => "369", "xcls" => "-sr" )
            )
        ),
        array( "id" => "67", "name" => "Spiders", "color" => "color-creature7", "episodes" => array(
                array( "number" => "159", "from" => "376", "to" => "381", "xcls" => "" )
            )
        ),
        array( "id" => "68", "name" => "K1 Robot", "color" => "color-creature8", "episodes" => array(
                array( "number" => "160", "from" => "382", "to" => "385", "xcls" => "" )
            )
        ),
        array( "id" => "69", "name" => "Wirrn", "color" => "color-creature9", "episodes" => array(
                array( "number" => "161", "from" => "386", "to" => "389", "xcls" => "" )
            )
        ),
        array( "id" => "70", "name" => "Kalads", "color" => "color-creature10", "episodes" => array(
                array( "number" => "162", "from" => "392", "to" => "397", "xcls" => "-tr" )
            )
        ),
        array( "id" => "71", "name" => "Vogans", "color" => "color-creature1", "episodes" => array(
                array( "number" => "163", "from" => "398", "to" => "401", "xcls" => "-sr" )
            )
        ),
        array( "id" => "72", "name" => "Osirian", "color" => "color-creature2", "episodes" => array(
                array( "number" => "164", "from" => "410", "to" => "413", "xcls" => "-sl" )
            )
        ),
        array( "id" => "73", "name" => "Sutekh", "color" => "color-creature3", "episodes" => array(
                array( "number" => "165", "from" => "410", "to" => "413", "xcls" => "-sr" )
            )
        ),
        array( "id" => "74", "name" => "Kraals", "color" => "color-creature4", "episodes" => array(
                array( "number" => "166", "from" => "414", "to" => "417", "xcls" => "" )
            )
        ),
        array( "id" => "75", "name" => "Morbius", "color" => "color-creature5", "episodes" => array(
                array( "number" => "167", "from" => "418", "to" => "421", "xcls" => "" )
            )
        ),
        array( "id" => "76", "name" => "Krynoids", "color" => "color-creature6", "episodes" => array(
                array( "number" => "168", "from" => "422", "to" => "427", "xcls" => "" )
            )
        ),
        array( "id" => "77", "name" => "Helix Intelligence", "color" => "color-creature7", "episodes" => array(
                array( "number" => "169", "from" => "428", "to" => "431", "xcls" => "" )
            )
        ),
        array( "id" => "78", "name" => "Kastrians", "color" => "color-creature8", "episodes" => array(
                array( "number" => "170", "from" => "432", "to" => "435", "xcls" => "" )
            )
        ),
        array( "id" => "79", "name" => "Rutans", "color" => "color-creature9", "episodes" => array(
                array( "number" => "171", "from" => "454", "to" => "457", "xcls" => "" )
            )
        ),
        array( "id" => "80", "name" => "Fendahl", "color" => "color-creature10", "episodes" => array(
                array( "number" => "172", "from" => "462", "to" => "465", "xcls" => "" )
            )
        ),
        array( "id" => "81", "name" => "Oracle", "color" => "color-creature1", "episodes" => array(
                array( "number" => "173", "from" => "470", "to" => "473", "xcls" => "" )
            )
        ),
        array( "id" => "82", "name" => "Vardans", "color" => "color-creature2", "episodes" => array(
                array( "number" => "174", "from" => "474", "to" => "479", "xcls" => "-tl" )
            )
        ),
        array( "id" => "83", "name" => "Shrivenzales", "color" => "color-creature3", "episodes" => array(
                array( "number" => "176", "from" => "480", "to" => "483", "xcls" => "-tl" )
            )
        ),
        array( "id" => "84", "name" => "Ribosian", "color" => "color-creature4", "episodes" => array(
                array( "number" => "177", "from" => "480", "to" => "483", "xcls" => "-tc" )
            )
        ),
        array( "id" => "85", "name" => "Levithians", "color" => "color-creature5", "episodes" => array(
                array( "number" => "178", "from" => "480", "to" => "483", "xcls" => "-tr" )
            )
        ),
        array( "id" => "86", "name" => "Diplosians", "color" => "color-creature6", "episodes" => array(
                array( "number" => "179", "from" => "488", "to" => "491", "xcls" => "" )
            )
        ),
        array( "id" => "87", "name" => "Taran wood beasts", "color" => "color-creature7", "episodes" => array(
                array( "number" => "180", "from" => "492", "to" => "495", "xcls" => "" )
            )
        ),
        array( "id" => "88", "name" => "Kroll", "color" => "color-creature8", "episodes" => array(
                array( "number" => "181", "from" => "496", "to" => "499", "xcls" => "-sl" )
            )
        ),
        array( "id" => "89", "name" => "Swampies", "color" => "color-creature9", "episodes" => array(
                array( "number" => "182", "from" => "496", "to" => "499", "xcls" => "-sr" )
            )
        ),
        array( "id" => "90", "name" => "Movellans", "color" => "color-creature10", "episodes" => array(
                array( "number" => "183", "from" => "506", "to" => "509", "xcls" => "-tr" )
            )
        ),
        array( "id" => "91", "name" => "Jagaroths", "color" => "color-creature1", "episodes" => array(
                array( "number" => "184", "from" => "510", "to" => "513", "xcls" => "" )
            )
        ),
        array( "id" => "92", "name" => "Mandrels", "color" => "color-creature2", "episodes" => array(
                array( "number" => "185", "from" => "514", "to" => "517", "xcls" => "" )
            )
        ),
        array( "id" => "93", "name" => "Skonnans", "color" => "color-creature3", "episodes" => array(
                array( "number" => "186", "from" => "522", "to" => "525", "xcls" => "-sl" )
            )
        ),
        array( "id" => "94", "name" => "Nimon", "color" => "color-creature4", "episodes" => array(
                array( "number" => "187", "from" => "522", "to" => "525", "xcls" => "-sr" )
            )
        ),
        array( "id" => "95", "name" => "Argolins", "color" => "color-creature5", "episodes" => array(
                array( "number" => "188", "from" => "526", "to" => "529", "xcls" => "" )
            )
        ),
        array( "id" => "96", "name" => "Gaztaks", "color" => "color-creature6", "episodes" => array(
                array( "number" => "189", "from" => "530", "to" => "533", "xcls" => "-sl" )
            )
        ),
        array( "id" => "97", "name" => "Zolfa-Thurans", "color" => "color-creature7", "episodes" => array(
                array( "number" => "190", "from" => "530", "to" => "533", "xcls" => "-sr" )
            )
        ),
        array( "id" => "98", "name" => "Marshman", "color" => "color-creature8", "episodes" => array(
                array( "number" => "191", "from" => "534", "to" => "537", "xcls" => "-sl" )
            )
        ),
        array( "id" => "99", "name" => "Alzarians", "color" => "color-creature9", "episodes" => array(
                array( "number" => "192", "from" => "534", "to" => "537", "xcls" => "-sr" )
            )
        ),
        array( "id" => "100", "name" => "Great Vampires", "color" => "color-creature10", "episodes" => array(
                array( "number" => "193", "from" => "538", "to" => "541", "xcls" => "" )
            )
        ),
        array( "id" => "101", "name" => "Tharils", "color" => "color-creature1", "episodes" => array(
                array( "number" => "194", "from" => "542", "to" => "545", "xcls" => "" )
            )
        ),
        array( "id" => "102", "name" => "Trakenites", "color" => "color-creature2", "episodes" => array(
                array( "number" => "195", "from" => "546", "to" => "549", "xcls" => "-tc" )
            )
        ),
        array( "id" => "103", "name" => "Melkur", "color" => "color-creature3", "episodes" => array(
                array( "number" => "196", "from" => "546", "to" => "549", "xcls" => "-tr" )
            )
        ),
        array( "id" => "104", "name" => "Logopolitans", "color" => "color-creature4", "episodes" => array(
                array( "number" => "197", "from" => "550", "to" => "553", "xcls" => "-tr" )
            )
        ),
        array( "id" => "105", "name" => "Urbankans", "color" => "color-creature5", "episodes" => array(
                array( "number" => "198", "from" => "558", "to" => "561", "xcls" => "" )
            )
        ),
        array( "id" => "106", "name" => "Plasmatons", "color" => "color-creature6", "episodes" => array(
                array( "number" => "199", "from" => "576", "to" => "579", "xcls" => "-tc" )
            )
        ),
        array( "id" => "107", "name" => "Xeraphins", "color" => "color-creature7", "episodes" => array(
                array( "number" => "200", "from" => "576", "to" => "579", "xcls" => "-tr" )
            )
        ),
        array( "id" => "108", "name" => "Ergon", "color" => "color-creature8", "episodes" => array(
                array( "number" => "201", "from" => "580", "to" => "583", "xcls" => "-tr" )
            )
        ),
        array( "id" => "109", "name" => "Manussans", "color" => "color-creature9", "episodes" => array(
                array( "number" => "204", "from" => "584", "to" => "587", "xcls" => "-sr" )
            )
        ),
        array( "id" => "110", "name" => "Vanir", "color" => "color-creature10", "episodes" => array(
                array( "number" => "205", "from" => "592", "to" => "595", "xcls" => "-sr" )
            )
        ),
        array( "id" => "111", "name" => "Eternals", "color" => "color-creature1", "episodes" => array(
                array( "number" => "206", "from" => "596", "to" => "599", "xcls" => "-sr" )
            )
        ),
        array( "id" => "112", "name" => "Malus", "color" => "color-creature2", "episodes" => array(
                array( "number" => "208", "from" => "607", "to" => "608", "xcls" => "" )
            )
        ),
        array( "id" => "113", "name" => "Tractators", "color" => "color-creature3", "episodes" => array(
                array( "number" => "209", "from" => "609", "to" => "612", "xcls" => "" )
            )
        ),
        array( "id" => "114", "name" => "Gastropods", "color" => "color-creature4", "episodes" => array(
                array( "number" => "210", "from" => "623", "to" => "626", "xcls" => "-sl" )
            )
        ),
        array( "id" => "115", "name" => "Jacondans", "color" => "color-creature5", "episodes" => array(
                array( "number" => "211", "from" => "623", "to" => "626", "xcls" => "-sr" )
            )
        ),
        array( "id" => "116", "name" => "Cryons", "color" => "color-creature6", "episodes" => array(
                array( "number" => "212", "from" => "627", "to" => "628", "xcls" => "-sr" )
            )
        ),
        array( "id" => "117", "name" => "Androgums", "color" => "color-creature7", "episodes" => array(
                array( "number" => "213", "from" => "633", "to" => "635", "xcls" => "-sr" )
            )
        ),
        array( "id" => "118", "name" => "Timelash", "color" => "color-creature8", "episodes" => array(
                array( "number" => "214", "from" => "636", "to" => "637", "xcls" => "-sl" )
            )
        ),
        array( "id" => "119", "name" => "Karfelons", "color" => "color-creature9", "episodes" => array(
                array( "number" => "215", "from" => "636", "to" => "637", "xcls" => "-sr" )
            )
        ),
        array( "id" => "120", "name" => "Andromedans", "color" => "color-creature10", "episodes" => array(
                array( "number" => "216", "from" => "640", "to" => "643", "xcls" => "-tc" )
            )
        ),
        array( "id" => "121", "name" => "L3 Robot", "color" => "color-creature1", "episodes" => array(
                array( "number" => "217", "from" => "640", "to" => "643", "xcls" => "-tr" )
            )
        ),
        array( "id" => "122", "name" => "Vervoids", "color" => "color-creature2", "episodes" => array(
                array( "number" => "218", "from" => "648", "to" => "651", "xcls" => "-sl" )
            )
        ),
        array( "id" => "123", "name" => "Mogarians", "color" => "color-creature3", "episodes" => array(
                array( "number" => "219", "from" => "648", "to" => "651", "xcls" => "-sr" )
            )
        ),
        array( "id" => "124", "name" => "Tetraps", "color" => "color-creature4", "episodes" => array(
                array( "number" => "220", "from" => "654", "to" => "657", "xcls" => "-tc" )
            )
        ),
        array( "id" => "125", "name" => "Lakertians", "color" => "color-creature5", "episodes" => array(
                array( "number" => "221", "from" => "654", "to" => "657", "xcls" => "-tr" )
            )
        ),
        array(
            "id" => "126",
            "name" => "Robotic Cleaners",
            "color" => "color-creature6",
            "info" => array(
                "title" => "Robotic Cleaners (first appeared 1987)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "222", "from" => "658", "to" => "661", "xcls" => "" )
            )
        ),
        array(
            "id" => "127",
            "name" => "Bannermen",
            "color" => "color-creature7",
            "info" => array(
                "title" => "Bannermen (first appeared 1987)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "223", "from" => "662", "to" => "664", "xcls" => "-sl" )
            )
        ),
        array(
            "id" => "128",
            "name" => "Chimeron",
            "color" => "color-creature8",
            "info" => array(
                "title" => "Chimeron (first appeared 1987)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "224", "from" => "662", "to" => "664", "xcls" => "-sr" )
            )
        ),
        array(
            "id" => "129",
            "name" => "Proamonians",
            "color" => "color-creature9",
            "info" => array(
                "title" => "Proamonians (first appeared 1987)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "225", "from" => "665", "to" => "667", "xcls" => "-sl" )
            )
        ),
        array(
            "id" => "130",
            "name" => "Dragon",
            "color" => "color-creature10",
            "info" => array(
                "title" => "Dragon (first appeared 1987)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "225", "from" => "665", "to" => "667", "xcls" => "-sr" )
            )
        ),
        array(
            "id" => "131",
            "name" => "Gods of Ragnarok",
            "color" => "color-creature1",
            "info" => array(
                "title" => "Gods of Ragnarok (first appeared 1988)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "226", "from" => "678", "to" => "681", "xcls" => "" )
            )
        ),
        array(
            "id" => "132",
            "name" => "S'Rax",
            "color" => "color-creature2",
            "info" => array(
                "title" => "The S'Rax (first appeared 1988)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "227", "from" => "682", "to" => "685", "xcls" => "-sl" )
            )
        ),
        array(
            "id" => "133",
            "name" => "Destroyer",
            "color" => "color-creature3",
            "info" => array(
                "title" => "The Destroyer (first appeared 1988)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "228", "from" => "682", "to" => "685", "xcls" => "-sr" )
            )
        ),
        array(
            "id" => "134",
            "name" => "Cheetah People",
            "color" => "color-creature4",
            "info" => array(
                "title" => "The Cheetah People (first appeared 1988)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "229", "from" => "693", "to" => "695", "xcls" => "-sr" )
            )
        ),
        array(
            "id" => "135",
            "name" => "Adherents of the Repeated Meme",
            "color" => "color-creature5",
            "info" => array(
                "title" => "Adherents of the Repeated Meme (first appeared 2005)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "231", "from" => "698", "to" => "698", "xcls" => "-tl" )
            )
        ),
        array(
            "id" => "136",
            "name" => "Tree of Cheem",
            "color" => "color-creature6",
            "info" => array(
                "title" => "Tree of Cheem (first appeared 2005)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "232", "from" => "698", "to" => "698", "xcls" => "-tc" )
            )
        ),
        array(
            "id" => "138",
            "name" => "Gelth",
            "color" => "color-creature8",
            "info" => array(
                "title" => "Gelth (first appeared 2005)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "234", "from" => "699", "to" => "699", "xcls" => "" )
            )
        ),
        array(
            "id" => "139",
            "name" => "Jagrafess",
            "color" => "color-creature9",
            "info" => array(
                "title" => "Jagrafess (first appeared 2005)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "236", "from" => "703", "to" => "703", "xcls" => "" )
            )
        ),
        array(
            "id" => "140",
            "name" => "Reapers",
            "color" => "color-creature10",
            "info" => array(
                "title" => "Reapers (first appeared 2005)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "237", "from" => "704", "to" => "704", "xcls" => "" )
            )
        ),
        array(
            "id" => "141",
            "name" => "Sycorax",
            "color" => "color-sycorax",
            "info" => array(
                "title" => "Sycorax (first appeared 2005)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "238", "from" => "710", "to" => "710", "xcls" => "" )
            )
        ),
        array(
            "id" => "142",
            "name" => "Cat People",
            "color" => "color-catpeople",
            "info" => array(
                "title" => "Cat People (first appeared 2006)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "239", "from" => "711", "to" => "711", "xcls" => "-sl" ),
                array( "number" => "248", "from" => "727", "to" => "727", "xcls" => "-sl" )
            )
        ),
        array(
            "id" => "143",
            "name" => "Werewolves",
            "color" => "color-werewolves",
            "info" => array(
                "title" => "Werewolves (first appeared 2006)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "240", "from" => "712", "to" => "712", "xcls" => "" )
            )
        ),
        array(
            "id" => "144",
            "name" => "Krillitanes",
            "color" => "color-krillitanes",
            "info" => array(
                "title" => "Krillitanes (first appeared 2006)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "241", "from" => "713", "to" => "713", "xcls" => "" )
            )
        ),
        array(
            "id" => "145",
            "name" => "Wire",
            "color" => "color-wire",
            "info" => array(
                "title" => "The Wire (first appeared 2006)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "242", "from" => "717", "to" => "717", "xcls" => "" )
            )
        ),
        array(
            "id" => "146",
            "name" => "The Beast",
            "color" => "color-beast",
            "info" => array(
                "title" => "The Beast (first appeared 2006)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "243", "from" => "718", "to" => "719", "xcls" => "-sr" )
            )
        ),
        array(
            "id" => "147",
            "name" => "Abzorbaloff",
            "color" => "color-abzorbaloff",
            "info" => array(
                "title" => "Abzorbaloff (first appeared 2006)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "244", "from" => "720", "to" => "720", "xcls" => "" )
            )
        ),
        array(
            "id" => "147",
            "name" => "Racnoss",
            "color" => "color-racnoss",
            "info" => array(
                "title" => "Racnoss (first appeared 2006)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "245", "from" => "724", "to" => "724", "xcls" => "" )
            )
        ),
        array(
            "id" => "148",
            "name" => "Judoon",
            "color" => "color-judoon",
            "info" => array(
                "title" => "Judoon (first appeared 2007)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "246", "from" => "725", "to" => "725", "xcls" => "" ),
                array( "number" => "257", "from" => "750", "to" => "751", "xcls" => "-tr" )
            )
        ),
        array(
            "id" => "149",
            "name" => "The Carrionites",
            "color" => "color-carrionites",
            "info" => array(
                "title" => "The Carrionites (first appeared 2007)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "247", "from" => "726", "to" => "726", "xcls" => "" )
            )
        ),
        array(
            "id" => "150",
            "name" => "Macra",
            "color" => "color-macra",
            "info" => array(
                "title" => "Macra (first appeared 2007)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "249", "from" => "727", "to" => "727", "xcls" => "-sr" )
            )
        ),
        array(
            "id" => "151",
            "name" => "Family of Blood",
            "color" => "color-familyblood",
            "info" => array(
                "title" => "The Family of Blood (first appeared 2007)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "250", "from" => "732", "to" => "733", "xcls" => "" )
            )
        ),
        array(
            "id" => "152",
            "name" => "Toclafane",
            "color" => "color-toclafane",
            "info" => array(
                "title" => "Toclafane (first appeared 2007)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "251", "from" => "735", "to" => "737", "xcls" => "-sr" )
            )
        ),
        array(
            "id" => "153",
            "name" => "Adipose",
            "color" => "color-adipose",
            "info" => array(
                "title" => "Adipose (first appeared 2008)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "252", "from" => "739", "to" => "739", "xcls" => "" )
            )
        ),
        array(
            "id" => "154",
            "name" => "Pyroviles",
            "color" => "color-pyroviles",
            "info" => array(
                "title" => "Pyroviles (first appeared 2008)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "253", "from" => "740", "to" => "740", "xcls" => "" )
            )
        ),
        array(
            "id" => "155",
            "name" => "Hath",
            "color" => "color-hath",
            "info" => array(
                "title" => "Hath (first appeared 2008)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "254", "from" => "744", "to" => "744", "xcls" => "" )
            )
        ),
        array(
            "id" => "156",
            "name" => "Vespiform",
            "color" => "color-vespiform",
            "info" => array(
                "title" => "Vespiform (first appeared 2008)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "255", "from" => "745", "to" => "745", "xcls" => "" )
            )
        ),
        array(
            "id" => "157",
            "name" => "Trickster",
            "color" => "color-trickster",
            "info" => array(
                "title" => "Trickster (first appeared 2008)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "256", "from" => "749", "to" => "749", "xcls" => "" )
            )
        ),
        array(
            "id" => "158",
            "name" => "Swarm",
            "color" => "color-swarm",
            "info" => array(
                "title" => "The Swarm (first appeared 2009)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "258", "from" => "753", "to" => "753", "xcls" => "" )
            )
        ),
        array(
            "id" => "159",
            "name" => "Prisoner Zero",
            "color" => "color-prisonerzero",
            "info" => array(
                "title" => "Prisoner Zero (first appeared 2010)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "260", "from" => "757", "to" => "757", "xcls" => "-sl" )
            )
        ),
        array(
            "id" => "160",
            "name" => "Atraxi",
            "color" => "color-atraxi",
            "info" => array(
                "title" => "Atraxi (first appeared 2010)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "261", "from" => "757", "to" => "757", "xcls" => "-sr" )
            )
        ),
        array(
            "id" => "161",
            "name" => "Smilers",
            "color" => "color-smilers",
            "info" => array(
                "title" => "Smilers (first appeared 2010)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "262", "from" => "758", "to" => "758", "xcls" => "-sl" )
            )
        ),
        array(
            "id" => "162",
            "name" => "Star Whale",
            "color" => "color-starwhale",
            "info" => array(
                "title" => "Star Whale (first appeared 2010)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "263", "from" => "758", "to" => "758", "xcls" => "-sr" )
            )
        ),
        array(
            "id" => "163",
            "name" => "Saturnyns",
            "color" => "color-saturnyns",
            "info" => array(
                "title" => "Saturnyns (first appeared 2010)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "264", "from" => "762", "to" => "762", "xcls" => "" )
            )
        ),
        array(
            "id" => "164",
            "name" => "Krafayis",
            "color" => "color-krafayis",
            "info" => array(
                "title" => "Krafayis (first appeared 2010)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "265", "from" => "766", "to" => "766", "xcls" => "" )
            )
        ),
        array(
            "id" => "165",
            "name" => "Sky Fish",
            "color" => "color-skyfish",
            "info" => array(
                "title" => "Sky Fish (first appeared 2010)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "266", "from" => "770", "to" => "770", "xcls" => "" )
            )
        ),
        array(
            "id" => "166",
            "name" => "Siren",
            "color" => "color-siren",
            "info" => array(
                "title" => "Siren (first appeared 2011)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "267", "from" => "773", "to" => "773", "xcls" => "" )
            )
        ),
        array(
            "id" => "167",
            "name" => "Teselecta",
            "color" => "color-teselecta",
            "info" => array(
                "title" => "Teselecta (first appeared 2011)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "269", "from" => "778", "to" => "778", "xcls" => "-sr" ),
                array( "number" => "273", "from" => "783", "to" => "783", "xcls" => "-tc" )
            )
        ),
        array(
            "id" => "168",
            "name" => "Peg Dolls",
            "color" => "color-pegdolls",
            "info" => array(
                "title" => "Peg Dolls (first appeared 2011)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "270", "from" => "779", "to" => "779", "xcls" => "" )
            )
        ),
        array(
            "id" => "169",
            "name" => "Handbots",
            "color" => "color-handbots",
            "info" => array(
                "title" => "Handbots (first appeared 2011)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "271", "from" => "780", "to" => "780", "xcls" => "" )
            )
        ),
        array(
            "id" => "170",
            "name" => "Minotaur",
            "color" => "color-minotaur",
            "info" => array(
                "title" => "Minotaur (first appeared 2011)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "272", "from" => "781", "to" => "781", "xcls" => "" )
            )
        ),
        array(
            "id" => "171",
            "name" => "Kahler",
            "color" => "color-kahler",
            "info" => array(
                "title" => "Kahler (first appeared 2012)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "276", "from" => "787", "to" => "787", "xcls" => "" )
            )
        ),
        array(
            "id" => "172",
            "name" => "Shakri",
            "color" => "color-shakri",
            "info" => array(
                "title" => "Shakri (first appeared 2012)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "277", "from" => "788", "to" => "788", "xcls" => "" )
            )
        ),
        array(
            "id" => "137",
            "name" => "Empty Child",
            "color" => "color-emptychild",
            "info" => array(
                "title" => "Empty Child (first appeared 2005)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "278", "from" => "705", "to" => "706", "xcls" => "" )
            )
        ),
        array(
            "id" => "173",
            "name" => "Lady Cassandra",
            "color" => "color-cassandra",
            "info" => array(
                "title" => "Lady Cassandra (first appeared 2005)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "233", "from" => "698", "to" => "698", "xcls" => "-tr" ),
                array( "number" => "280", "from" => "711", "to" => "711", "xcls" => "-sr" )
            )
        ),
        array(
            "id" => "174",
            "name" => "Mister Sweet",
            "color" => "color-mrsweet",
            "info" => array(
                "title" => "Mister Sweet (first appeared 2013)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "284", "from" => "796", "to" => "796", "xcls" => "" )
            )
        ),
        array(
            "id" => "175",
            "name" => "Akhaten",
            "color" => "color-akhaten",
            "info" => array(
                "title" => "Akhaten (first appeared 2013)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "285", "from" => "792", "to" => "792", "xcls" => "" )
            )
        ),
        array(
            "id" => "176",
            "name" => "Clockwork Droids",
            "color" => "color-alliance",
            "info" => array(
                "title" => "Clockwork Droids (first appeared 2006)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "287", "from" => "714", "to" => "714", "xcls" => "" )
            )
        ),
        array(
            "id" => "177",
            "name" => "Isolas",
            "color" => "color-isolas",
            "info" => array(
                "title" => "Isolas (first appeared 2006)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "288", "from" => "721", "to" => "721", "xcls" => "" )
            )
        ),
        array(
            "id" => "178",
            "name" => "Prof. Lazarus",
            "color" => "color-lazarus",
            "info" => array(
                "title" => "Professor Lazarus (first appeared 2007)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "289", "from" => "730", "to" => "730", "xcls" => "" )
            )
        ),
        array(
            "id" => "179",
            "name" => "Ashton",
            "color" => "color-ashton",
            "info" => array(
                "title" => "Ashton (first appeared 2007)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "290", "from" => "731", "to" => "731", "xcls" => "" )
            )
        ),
        array(
            "id" => "180",
            "name" => "Max Capricorn",
            "color" => "color-maxcapricorn",
            "info" => array(
                "title" => "Max Capricorn (first appeared 2007)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "291", "from" => "738", "to" => "738", "xcls" => "" )
            )
        ),
        array(
            "id" => "181",
            "name" => "Dream Lord",
            "color" => "color-dreamlord",
            "info" => array(
                "title" => "Dream Lord (first appeared 2010)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "292", "from" => "763", "to" => "763", "xcls" => "-sl" )
            )
        ),
        array(
            "id" => "182",
            "name" => "Eknodine",
            "color" => "color-eknodine",
            "info" => array(
                "title" => "Eknodine (first appeared 2007)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "293", "from" => "763", "to" => "763", "xcls" => "-sr" )
            )
        ),
        array(
            "id" => "183",
            "name" => "#79B Aickman Road",
            "color" => "color-79b",
            "info" => array(
                "title" => "#79B Aickman Road (first appeared 2007)",
                "actor" => "",
                "image" => "images/.png",
                "text" => "",
                "quote" => "",
                "facts" => array(

                )
            ),
            "episodes" => array(
                array( "number" => "294", "from" => "767", "to" => "767", "xcls" => "" )
            )
        )
    );

    // get all
    $response = $creatures_array;

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($response);
});

/*

                  d8b                        888                   
                  Y8P                        888                   
                                             888                   
 .d88b.  88888b.  888 .d8888b   .d88b.   .d88888  .d88b.  .d8888b  
d8P  Y8b 888 "88b 888 88K      d88""88b d88" 888 d8P  Y8b 88K      
88888888 888  888 888 "Y8888b. 888  888 888  888 88888888 "Y8888b. 
Y8b.     888 d88P 888      X88 Y88..88P Y88b 888 Y8b.          X88 
 "Y8888  88888P"  888  88888P'  "Y88P"   "Y88888  "Y8888   88888P' 
         888                                                       
         888                                                       
         888                                                       

*/

$app->get('/episodes', function () use ($app) {
    $doctors_array = array(
        array( "id" => "1",   "season" => "1",  "episode" => "1",  "name" => "An Unearthly Child" ),
        array( "id" => "2",   "season" => "1",  "episode" => "2",  "name" => "The Cave of Skulls" ),
        array( "id" => "3",   "season" => "1",  "episode" => "3",  "name" => "The Forest of Fear" ),
        array( "id" => "4",   "season" => "1",  "episode" => "4",  "name" => "The Firemaker" ),
        array( "id" => "5",   "season" => "1",  "episode" => "5",  "name" => "The Dead Planet" ),
        array( "id" => "6",   "season" => "1",  "episode" => "6",  "name" => "The Survivors" ),
        array( "id" => "7",   "season" => "1",  "episode" => "7",  "name" => "The Escape" ),
        array( "id" => "8",   "season" => "1",  "episode" => "8",  "name" => "The Ambush" ),
        array( "id" => "9",   "season" => "1",  "episode" => "9",  "name" => "The Expedition" ),
        array( "id" => "10",  "season" => "1",  "episode" => "10", "name" => "The Ordeal" ),
        array( "id" => "11",  "season" => "1",  "episode" => "11", "name" => "The Rescue" ),
        array( "id" => "12",  "season" => "1",  "episode" => "12", "name" => "The Edge of Destruction" ),
        array( "id" => "13",  "season" => "1",  "episode" => "13", "name" => "The Brink of Disaster" ),
        array( "id" => "14",  "season" => "1",  "episode" => "14", "name" => "The Roof of the World" ),
        array( "id" => "15",  "season" => "1",  "episode" => "15", "name" => "The Singing Sands" ),
        array( "id" => "16",  "season" => "1",  "episode" => "16", "name" => "Five Hundred Eyes" ),
        array( "id" => "17",  "season" => "1",  "episode" => "17", "name" => "The Wall of Lies" ),
        array( "id" => "18",  "season" => "1",  "episode" => "18", "name" => "Rider from Shang-Tu" ),
        array( "id" => "19",  "season" => "1",  "episode" => "19", "name" => "Mighty Kublai Khan" ),
        array( "id" => "20",  "season" => "1",  "episode" => "20", "name" => "Assassin at Peking" ),
        array( "id" => "21",  "season" => "1",  "episode" => "21", "name" => "The Sea of Death" ),
        array( "id" => "22",  "season" => "1",  "episode" => "22", "name" => "The Velvet Web" ),
        array( "id" => "23",  "season" => "1",  "episode" => "23", "name" => "The Screaming Jungle" ),
        array( "id" => "24",  "season" => "1",  "episode" => "24", "name" => "The Snows of Terror" ),
        array( "id" => "25",  "season" => "1",  "episode" => "25", "name" => "Sentence of Death" ),
        array( "id" => "26",  "season" => "1",  "episode" => "26", "name" => "The Keys of Marinus" ),
        array( "id" => "27",  "season" => "1",  "episode" => "27", "name" => "The Temple of Evil" ),
        array( "id" => "28",  "season" => "1",  "episode" => "28", "name" => "The Warriors of Death" ),
        array( "id" => "29",  "season" => "1",  "episode" => "29", "name" => "The Bride of Sacrifice" ),
        array( "id" => "30",  "season" => "1",  "episode" => "30", "name" => "The Day of Darkness" ),
        array( "id" => "31",  "season" => "1",  "episode" => "31", "name" => "Strangers in Space" ),
        array( "id" => "32",  "season" => "1",  "episode" => "32", "name" => "The Unwilling Warriors" ),
        array( "id" => "33",  "season" => "1",  "episode" => "33", "name" => "Hidden Danger" ),
        array( "id" => "34",  "season" => "1",  "episode" => "34", "name" => "A Race Against Death" ),
        array( "id" => "35",  "season" => "1",  "episode" => "35", "name" => "Kidnap" ),
        array( "id" => "36",  "season" => "1",  "episode" => "36", "name" => "A Desperate Venture" ),
        array( "id" => "37",  "season" => "1",  "episode" => "37", "name" => "A Land of Fear" ),
        array( "id" => "38",  "season" => "1",  "episode" => "38", "name" => "Guests of Madame Guillotine" ),
        array( "id" => "39",  "season" => "1",  "episode" => "39", "name" => "A Change of Identity" ),
        array( "id" => "40",  "season" => "1",  "episode" => "40", "name" => "The Tyrant of France" ),
        array( "id" => "41",  "season" => "1",  "episode" => "41", "name" => "A Bargain of Necessity" ),
        array( "id" => "42",  "season" => "1",  "episode" => "42", "name" => "Prisoners of Conciergerie" ),
        
        array( "id" => "43",  "season" => "2",  "episode" => "1",  "name" => "Planet of Giants" ),
        array( "id" => "44",  "season" => "2",  "episode" => "2",  "name" => "Dangerous Journey" ),
        array( "id" => "45",  "season" => "2",  "episode" => "3",  "name" => "Crisis" ),
        array( "id" => "46",  "season" => "2",  "episode" => "4",  "name" => "World's End" ),
        array( "id" => "47",  "season" => "2",  "episode" => "5",  "name" => "The Daleks" ),
        array( "id" => "48",  "season" => "2",  "episode" => "6",  "name" => "Day of Reckoning" ),
        array( "id" => "49",  "season" => "2",  "episode" => "7",  "name" => "The End of Tomorrow" ),
        array( "id" => "50",  "season" => "2",  "episode" => "8",  "name" => "The Waking Ally" ),
        array( "id" => "51",  "season" => "2",  "episode" => "9",  "name" => "Flashpoint" ),
        array( "id" => "52",  "season" => "2",  "episode" => "10", "name" => "The Powerful Enemy" ),
        array( "id" => "53",  "season" => "2",  "episode" => "11", "name" => "Desperate Measures" ),
        array( "id" => "54",  "season" => "2",  "episode" => "12", "name" => "The Slave Traders" ),
        array( "id" => "55",  "season" => "2",  "episode" => "13", "name" => "All Roads Lead to Rome" ),
        array( "id" => "56",  "season" => "2",  "episode" => "14", "name" => "Conspiracy" ),
        array( "id" => "57",  "season" => "2",  "episode" => "15", "name" => "Inferno" ),
        array( "id" => "58",  "season" => "2",  "episode" => "16", "name" => "The Web Planet" ),
        array( "id" => "59",  "season" => "2",  "episode" => "17", "name" => "The Zarbi" ),
        array( "id" => "60",  "season" => "2",  "episode" => "18", "name" => "Escape to Danger" ),
        array( "id" => "61",  "season" => "2",  "episode" => "19", "name" => "Crater of Needles" ),
        array( "id" => "62",  "season" => "2",  "episode" => "20", "name" => "Invasion" ),
        array( "id" => "63",  "season" => "2",  "episode" => "21", "name" => "The Centre" ),
        array( "id" => "64",  "season" => "2",  "episode" => "22", "name" => "The Lion" ),
        array( "id" => "65",  "season" => "2",  "episode" => "23", "name" => "The Knight of Jaffa" ),
        array( "id" => "66",  "season" => "2",  "episode" => "24", "name" => "The Wheel of Fortune" ),
        array( "id" => "67",  "season" => "2",  "episode" => "25", "name" => "The Warlords" ),
        array( "id" => "68",  "season" => "2",  "episode" => "26", "name" => "The Space Museum" ),
        array( "id" => "69",  "season" => "2",  "episode" => "27", "name" => "The Dimensions of Time" ),
        array( "id" => "70",  "season" => "2",  "episode" => "28", "name" => "The Search" ),
        array( "id" => "71",  "season" => "2",  "episode" => "29", "name" => "The Final Phase" ),
        array( "id" => "72",  "season" => "2",  "episode" => "30", "name" => "The Executioners" ),
        array( "id" => "73",  "season" => "2",  "episode" => "31", "name" => "The Death of Time" ),
        array( "id" => "74",  "season" => "2",  "episode" => "32", "name" => "Flight Through Eternity" ),
        array( "id" => "75",  "season" => "2",  "episode" => "33", "name" => "Journey into Terror" ),
        array( "id" => "76",  "season" => "2",  "episode" => "34", "name" => "The Death of Doctor Who" ),
        array( "id" => "77",  "season" => "2",  "episode" => "35", "name" => "The Planet of Decision" ),
        array( "id" => "78",  "season" => "2",  "episode" => "36", "name" => "The Watcher" ),
        array( "id" => "79",  "season" => "2",  "episode" => "37", "name" => "The Meddling Monk" ),
        array( "id" => "80",  "season" => "2",  "episode" => "38", "name" => "A Battle of Wits" ),
        array( "id" => "81",  "season" => "2",  "episode" => "39", "name" => "Checkmate" ),
        
        array( "id" => "82",  "season" => "3",  "episode" => "1",  "name" => "Four Hundred Dawns" ),
        array( "id" => "83",  "season" => "3",  "episode" => "2",  "name" => "Trap of Steel" ),
        array( "id" => "84",  "season" => "3",  "episode" => "3",  "name" => "Air Lock" ),
        array( "id" => "85",  "season" => "3",  "episode" => "4",  "name" => "The Exploding Planet" ),
        array( "id" => "86",  "season" => "3",  "episode" => "5",  "name" => "Mission to the Unknown" ),
        array( "id" => "87",  "season" => "3",  "episode" => "6",  "name" => "Temple of Secrets" ),
        array( "id" => "88",  "season" => "3",  "episode" => "7",  "name" => "Small Prophet, Quick Return" ),
        array( "id" => "89",  "season" => "3",  "episode" => "8",  "name" => "Death of a Spy" ),
        array( "id" => "90",  "season" => "3",  "episode" => "9",  "name" => "Horse of Destruction" ),
        array( "id" => "91",  "season" => "3",  "episode" => "10", "name" => "The Nightmare Begins" ),
        array( "id" => "92",  "season" => "3",  "episode" => "11", "name" => "Day of Armageddon" ),
        array( "id" => "93",  "season" => "3",  "episode" => "12", "name" => "Devil's Planet" ),
        array( "id" => "94",  "season" => "3",  "episode" => "13", "name" => "The Traitors" ),
        array( "id" => "95",  "season" => "3",  "episode" => "14", "name" => "Counter Plot" ),
        array( "id" => "96",  "season" => "3",  "episode" => "15", "name" => "Coronas of the Sun" ),
        array( "id" => "97",  "season" => "3",  "episode" => "16", "name" => "The Feast of Steven" ),
        array( "id" => "98",  "season" => "3",  "episode" => "17", "name" => "Volcano" ),
        array( "id" => "99",  "season" => "3",  "episode" => "18", "name" => "Golden Death" ),
        array( "id" => "100", "season" => "3",  "episode" => "19", "name" => "Escape Switch" ),
        array( "id" => "101", "season" => "3",  "episode" => "20", "name" => "The Abandoned Planet" ),
        array( "id" => "102", "season" => "3",  "episode" => "21", "name" => "Destruction of Time" ),
        array( "id" => "103", "season" => "3",  "episode" => "22", "name" => "War of God" ),
        array( "id" => "104", "season" => "3",  "episode" => "23", "name" => "The Sea Beggar" ),
        array( "id" => "105", "season" => "3",  "episode" => "24", "name" => "Priest of Death" ),
        array( "id" => "106", "season" => "3",  "episode" => "25", "name" => "Bell of Doom" ),
        array( "id" => "107", "season" => "3",  "episode" => "26", "name" => "The Steel Sky" ),
        array( "id" => "108", "season" => "3",  "episode" => "27", "name" => "The Plague" ),
        array( "id" => "109", "season" => "3",  "episode" => "28", "name" => "The Return" ),
        array( "id" => "110", "season" => "3",  "episode" => "29", "name" => "The Bomb" ),
        array( "id" => "111", "season" => "3",  "episode" => "30", "name" => "The Celestial Toyroom" ),
        array( "id" => "112", "season" => "3",  "episode" => "31", "name" => "The Hall of Dolls" ),
        array( "id" => "113", "season" => "3",  "episode" => "32", "name" => "The Dancing Floor" ),
        array( "id" => "114", "season" => "3",  "episode" => "33", "name" => "The Final Test" ),
        array( "id" => "115", "season" => "3",  "episode" => "34", "name" => "A Holiday for the Doctor" ),
        array( "id" => "116", "season" => "3",  "episode" => "35", "name" => "Don't Shoot the Pianist" ),
        array( "id" => "117", "season" => "3",  "episode" => "36", "name" => "Johnny Ringo" ),
        array( "id" => "118", "season" => "3",  "episode" => "37", "name" => "The OK Corral" ),
        array( "id" => "119", "season" => "3",  "episode" => "38", "name" => "The Savages (Part 1)" ),
        array( "id" => "120", "season" => "3",  "episode" => "39", "name" => "The Savages (Part 2)" ),
        array( "id" => "121", "season" => "3",  "episode" => "40", "name" => "The Savages (Part 3)" ),
        array( "id" => "122", "season" => "3",  "episode" => "41", "name" => "The Savages (Part 4)" ),
        array( "id" => "123", "season" => "3",  "episode" => "42", "name" => "The War Machines (Part 1)" ),
        array( "id" => "124", "season" => "3",  "episode" => "43", "name" => "The War Machines (Part 2)" ),
        array( "id" => "125", "season" => "3",  "episode" => "44", "name" => "The War Machines (Part 3)" ),
        array( "id" => "126", "season" => "3",  "episode" => "45", "name" => "The War Machines (Part 4)" ),
        
        array( "id" => "127", "season" => "4",  "episode" => "1",  "name" => "The Smugglers (Part 1)" ),
        array( "id" => "128", "season" => "4",  "episode" => "2",  "name" => "The Smugglers (Part 2)" ),
        array( "id" => "129", "season" => "4",  "episode" => "3",  "name" => "The Smugglers (Part 3)" ),
        array( "id" => "130", "season" => "4",  "episode" => "4",  "name" => "The Smugglers (Part 4)" ),
        array( "id" => "131", "season" => "4",  "episode" => "5",  "name" => "The Tenth Planet (Part 1)" ),
        array( "id" => "132", "season" => "4",  "episode" => "6",  "name" => "The Tenth Planet (Part 2)" ),
        array( "id" => "133", "season" => "4",  "episode" => "7",  "name" => "The Tenth Planet (Part 3)" ),
        array( "id" => "134", "season" => "4",  "episode" => "8",  "name" => "The Tenth Planet (Part 4)" ),
        array( "id" => "135", "season" => "4",  "episode" => "9",  "name" => "The Power of the Daleks (Part 1)" ),
        array( "id" => "136", "season" => "4",  "episode" => "10", "name" => "The Power of the Daleks (Part 2)" ),
        array( "id" => "137", "season" => "4",  "episode" => "11", "name" => "The Power of the Daleks (Part 3)" ),
        array( "id" => "138", "season" => "4",  "episode" => "12", "name" => "The Power of the Daleks (Part 4)" ),
        array( "id" => "139", "season" => "4",  "episode" => "13", "name" => "The Power of the Daleks (Part 5)" ),
        array( "id" => "140", "season" => "4",  "episode" => "14", "name" => "The Power of the Daleks (Part 6)" ),
        array( "id" => "141", "season" => "4",  "episode" => "15", "name" => "The Highlanders (Part 1)" ),
        array( "id" => "142", "season" => "4",  "episode" => "16", "name" => "The Highlanders (Part 2)" ),
        array( "id" => "143", "season" => "4",  "episode" => "17", "name" => "The Highlanders (Part 3)" ),
        array( "id" => "144", "season" => "4",  "episode" => "18", "name" => "The Highlanders (Part 4)" ),
        array( "id" => "145", "season" => "4",  "episode" => "19", "name" => "The Underwater Menace (Part 1)" ),
        array( "id" => "146", "season" => "4",  "episode" => "20", "name" => "The Underwater Menace (Part 2)" ),
        array( "id" => "147", "season" => "4",  "episode" => "21", "name" => "The Underwater Menace (Part 3)" ),
        array( "id" => "148", "season" => "4",  "episode" => "22", "name" => "The Underwater Menace (Part 4)" ),
        array( "id" => "149", "season" => "4",  "episode" => "23", "name" => "The Moonbase (Part 1)" ),
        array( "id" => "150", "season" => "4",  "episode" => "24", "name" => "The Moonbase (Part 2)" ),
        array( "id" => "151", "season" => "4",  "episode" => "25", "name" => "The Moonbase (Part 3)" ),
        array( "id" => "152", "season" => "4",  "episode" => "26", "name" => "The Moonbase (Part 4)" ),
        array( "id" => "153", "season" => "4",  "episode" => "27", "name" => "The Macra Terror (Part 1)" ),
        array( "id" => "154", "season" => "4",  "episode" => "28", "name" => "The Macra Terror (Part 2)" ),
        array( "id" => "155", "season" => "4",  "episode" => "29", "name" => "The Macra Terror (Part 3)" ),
        array( "id" => "156", "season" => "4",  "episode" => "30", "name" => "The Macra Terror (Part 4)" ),
        array( "id" => "157", "season" => "4",  "episode" => "31", "name" => "The Faceless Ones (Part 1)" ),
        array( "id" => "158", "season" => "4",  "episode" => "32", "name" => "The Faceless Ones (Part 2)" ),
        array( "id" => "159", "season" => "4",  "episode" => "33", "name" => "The Faceless Ones (Part 3)" ),
        array( "id" => "160", "season" => "4",  "episode" => "34", "name" => "The Faceless Ones (Part 4)" ),
        array( "id" => "161", "season" => "4",  "episode" => "35", "name" => "The Faceless Ones (Part 5)" ),
        array( "id" => "162", "season" => "4",  "episode" => "36", "name" => "The Faceless Ones (Part 6)" ),
        array( "id" => "163", "season" => "4",  "episode" => "37", "name" => "The Evil of the Daleks (Part 1)" ),
        array( "id" => "164", "season" => "4",  "episode" => "38", "name" => "The Evil of the Daleks (Part 2)" ),
        array( "id" => "165", "season" => "4",  "episode" => "39", "name" => "The Evil of the Daleks (Part 3)" ),
        array( "id" => "166", "season" => "4",  "episode" => "40", "name" => "The Evil of the Daleks (Part 4)" ),
        array( "id" => "167", "season" => "4",  "episode" => "41", "name" => "The Evil of the Daleks (Part 5)" ),
        array( "id" => "168", "season" => "4",  "episode" => "42", "name" => "The Evil of the Daleks (Part 6)" ),
        array( "id" => "169", "season" => "4",  "episode" => "43", "name" => "The Evil of the Daleks (Part 7)" ),
        
        array( "id" => "170", "season" => "5",  "episode" => "1",  "name" => "The Tomb of the Cybermen (Part 1)" ),
        array( "id" => "171", "season" => "5",  "episode" => "2",  "name" => "The Tomb of the Cybermen (Part 2)" ),
        array( "id" => "172", "season" => "5",  "episode" => "3",  "name" => "The Tomb of the Cybermen (Part 3)" ),
        array( "id" => "173", "season" => "5",  "episode" => "4",  "name" => "The Tomb of the Cybermen (Part 4)" ),
        array( "id" => "174", "season" => "5",  "episode" => "5",  "name" => "The Abominable Snowmen (Part 1)" ),
        array( "id" => "175", "season" => "5",  "episode" => "6",  "name" => "The Abominable Snowmen (Part 2)" ),
        array( "id" => "176", "season" => "5",  "episode" => "7",  "name" => "The Abominable Snowmen (Part 3)" ),
        array( "id" => "177", "season" => "5",  "episode" => "8",  "name" => "The Abominable Snowmen (Part 4)" ),
        array( "id" => "178", "season" => "5",  "episode" => "9",  "name" => "The Abominable Snowmen (Part 5)" ),
        array( "id" => "179", "season" => "5",  "episode" => "10", "name" => "The Abominable Snowmen (Part 6)" ),
        array( "id" => "180", "season" => "5",  "episode" => "11", "name" => "The Ice Warriors (Part 1)" ),
        array( "id" => "181", "season" => "5",  "episode" => "12", "name" => "The Ice Warriors (Part 2)" ),
        array( "id" => "182", "season" => "5",  "episode" => "13", "name" => "The Ice Warriors (Part 3)" ),
        array( "id" => "183", "season" => "5",  "episode" => "14", "name" => "The Ice Warriors (Part 4)" ),
        array( "id" => "184", "season" => "5",  "episode" => "15", "name" => "The Ice Warriors (Part 5)" ),
        array( "id" => "185", "season" => "5",  "episode" => "16", "name" => "The Ice Warriors (Part 6)" ),
        array( "id" => "186", "season" => "5",  "episode" => "17", "name" => "The Enemy of the World (Part 1)" ),
        array( "id" => "187", "season" => "5",  "episode" => "18", "name" => "The Enemy of the World (Part 2)" ),
        array( "id" => "188", "season" => "5",  "episode" => "19", "name" => "The Enemy of the World (Part 3)" ),
        array( "id" => "189", "season" => "5",  "episode" => "20", "name" => "The Enemy of the World (Part 4)" ),
        array( "id" => "190", "season" => "5",  "episode" => "21", "name" => "The Enemy of the World (Part 5)" ),
        array( "id" => "191", "season" => "5",  "episode" => "22", "name" => "The Enemy of the World (Part 6)" ),
        array( "id" => "192", "season" => "5",  "episode" => "23", "name" => "The Web of Fear (Part 1)" ),
        array( "id" => "193", "season" => "5",  "episode" => "24", "name" => "The Web of Fear (Part 2)" ),
        array( "id" => "194", "season" => "5",  "episode" => "25", "name" => "The Web of Fear (Part 3)" ),
        array( "id" => "195", "season" => "5",  "episode" => "26", "name" => "The Web of Fear (Part 4)" ),
        array( "id" => "196", "season" => "5",  "episode" => "27", "name" => "The Web of Fear (Part 5)" ),
        array( "id" => "197", "season" => "5",  "episode" => "28", "name" => "The Web of Fear (Part 6)" ),
        array( "id" => "198", "season" => "5",  "episode" => "29", "name" => "Fury from the Deep (Part 1)" ),
        array( "id" => "199", "season" => "5",  "episode" => "30", "name" => "Fury from the Deep (Part 2)" ),
        array( "id" => "200", "season" => "5",  "episode" => "31", "name" => "Fury from the Deep (Part 3)" ),
        array( "id" => "201", "season" => "5",  "episode" => "32", "name" => "Fury from the Deep (Part 4)" ),
        array( "id" => "202", "season" => "5",  "episode" => "33", "name" => "Fury from the Deep (Part 5)" ),
        array( "id" => "203", "season" => "5",  "episode" => "34", "name" => "Fury from the Deep (Part 6)" ),
        array( "id" => "204", "season" => "5",  "episode" => "35", "name" => "The Wheel in Space (Part 1)" ),
        array( "id" => "205", "season" => "5",  "episode" => "36", "name" => "The Wheel in Space (Part 2)" ),
        array( "id" => "206", "season" => "5",  "episode" => "37", "name" => "The Wheel in Space (Part 3)" ),
        array( "id" => "207", "season" => "5",  "episode" => "38", "name" => "The Wheel in Space (Part 4)" ),
        array( "id" => "208", "season" => "5",  "episode" => "39", "name" => "The Wheel in Space (Part 5)" ),
        array( "id" => "209", "season" => "5",  "episode" => "40", "name" => "The Wheel in Space (Part 6)" ),
        
        array( "id" => "210", "season" => "6",  "episode" => "1",  "name" => "The Dominators (Part 1)" ),
        array( "id" => "211", "season" => "6",  "episode" => "2",  "name" => "The Dominators (Part 2)" ),
        array( "id" => "212", "season" => "6",  "episode" => "3",  "name" => "The Dominators (Part 3)" ),
        array( "id" => "213", "season" => "6",  "episode" => "4",  "name" => "The Dominators (Part 4)" ),
        array( "id" => "214", "season" => "6",  "episode" => "5",  "name" => "The Dominators (Part 5)" ),
        array( "id" => "215", "season" => "6",  "episode" => "6",  "name" => "The Mind Robber (Part 1)" ),
        array( "id" => "216", "season" => "6",  "episode" => "7",  "name" => "The Mind Robber (Part 2)" ),
        array( "id" => "217", "season" => "6",  "episode" => "8",  "name" => "The Mind Robber (Part 3)" ),
        array( "id" => "218", "season" => "6",  "episode" => "9",  "name" => "The Mind Robber (Part 4)" ),
        array( "id" => "219", "season" => "6",  "episode" => "10", "name" => "The Mind Robber (Part 5)" ),
        array( "id" => "220", "season" => "6",  "episode" => "11", "name" => "The Invasion (Part 1)" ),
        array( "id" => "221", "season" => "6",  "episode" => "12", "name" => "The Invasion (Part 2)" ),
        array( "id" => "222", "season" => "6",  "episode" => "13", "name" => "The Invasion (Part 3)" ),
        array( "id" => "223", "season" => "6",  "episode" => "14", "name" => "The Invasion (Part 4)" ),
        array( "id" => "224", "season" => "6",  "episode" => "15", "name" => "The Invasion (Part 5)" ),
        array( "id" => "225", "season" => "6",  "episode" => "16", "name" => "The Invasion (Part 6)" ),
        array( "id" => "226", "season" => "6",  "episode" => "17", "name" => "The Invasion (Part 7)" ),
        array( "id" => "227", "season" => "6",  "episode" => "18", "name" => "The Invasion (Part 8)" ),
        array( "id" => "228", "season" => "6",  "episode" => "19", "name" => "The Krotons (Part 1)" ),
        array( "id" => "229", "season" => "6",  "episode" => "20", "name" => "The Krotons (Part 2)" ),
        array( "id" => "230", "season" => "6",  "episode" => "21", "name" => "The Krotons (Part 3)" ),
        array( "id" => "231", "season" => "6",  "episode" => "22", "name" => "The Krotons (Part 4)" ),
        array( "id" => "232", "season" => "6",  "episode" => "23", "name" => "The Seeds of Death (Part 1)" ),
        array( "id" => "233", "season" => "6",  "episode" => "24", "name" => "The Seeds of Death (Part 2)" ),
        array( "id" => "234", "season" => "6",  "episode" => "25", "name" => "The Seeds of Death (Part 3)" ),
        array( "id" => "235", "season" => "6",  "episode" => "26", "name" => "The Seeds of Death (Part 4)" ),
        array( "id" => "236", "season" => "6",  "episode" => "27", "name" => "The Seeds of Death (Part 5)" ),
        array( "id" => "237", "season" => "6",  "episode" => "28", "name" => "The Seeds of Death (Part 6)" ),
        array( "id" => "238", "season" => "6",  "episode" => "29", "name" => "The Space Pirates (Part 1)" ),
        array( "id" => "239", "season" => "6",  "episode" => "30", "name" => "The Space Pirates (Part 2)" ),
        array( "id" => "240", "season" => "6",  "episode" => "31", "name" => "The Space Pirates (Part 3)" ),
        array( "id" => "241", "season" => "6",  "episode" => "32", "name" => "The Space Pirates (Part 4)" ),
        array( "id" => "242", "season" => "6",  "episode" => "33", "name" => "The Space Pirates (Part 5)" ),
        array( "id" => "243", "season" => "6",  "episode" => "34", "name" => "The Space Pirates (Part 6)" ),
        array( "id" => "244", "season" => "6",  "episode" => "35", "name" => "The War Games (Part 1)" ),
        array( "id" => "245", "season" => "6",  "episode" => "36", "name" => "The War Games (Part 2)" ),
        array( "id" => "246", "season" => "6",  "episode" => "37", "name" => "The War Games (Part 3)" ),
        array( "id" => "247", "season" => "6",  "episode" => "38", "name" => "The War Games (Part 4)" ),
        array( "id" => "248", "season" => "6",  "episode" => "39", "name" => "The War Games (Part 5)" ),
        array( "id" => "249", "season" => "6",  "episode" => "40", "name" => "The War Games (Part 6)" ),
        array( "id" => "250", "season" => "6",  "episode" => "41", "name" => "The War Games (Part 7)" ),
        array( "id" => "251", "season" => "6",  "episode" => "42", "name" => "The War Games (Part 8)" ),
        array( "id" => "252", "season" => "6",  "episode" => "43", "name" => "The War Games (Part 9)" ),
        array( "id" => "253", "season" => "6",  "episode" => "44", "name" => "The War Games (Part 10)" ),
        
        array( "id" => "254", "season" => "7",  "episode" => "1",  "name" => "Spearhead from Space (Part 1)" ),
        array( "id" => "255", "season" => "7",  "episode" => "2",  "name" => "Spearhead from Space (Part 2)" ),
        array( "id" => "256", "season" => "7",  "episode" => "3",  "name" => "Spearhead from Space (Part 3)" ),
        array( "id" => "257", "season" => "7",  "episode" => "4",  "name" => "Spearhead from Space (Part 4)" ),
        array( "id" => "258", "season" => "7",  "episode" => "5",  "name" => "Doctor Who and the Silurians (Part 1)" ),
        array( "id" => "259", "season" => "7",  "episode" => "6",  "name" => "Doctor Who and the Silurians (Part 2)" ),
        array( "id" => "260", "season" => "7",  "episode" => "7",  "name" => "Doctor Who and the Silurians (Part 3)" ),
        array( "id" => "261", "season" => "7",  "episode" => "8",  "name" => "Doctor Who and the Silurians (Part 4)" ),
        array( "id" => "262", "season" => "7",  "episode" => "9",  "name" => "Doctor Who and the Silurians (Part 5)" ),
        array( "id" => "263", "season" => "7",  "episode" => "10", "name" => "Doctor Who and the Silurians (Part 6)" ),
        array( "id" => "264", "season" => "7",  "episode" => "11", "name" => "Doctor Who and the Silurians (Part 7)" ),
        array( "id" => "265", "season" => "7",  "episode" => "12", "name" => "The Ambassadors of Death (Part 1)" ),
        array( "id" => "266", "season" => "7",  "episode" => "13", "name" => "The Ambassadors of Death (Part 2)" ),
        array( "id" => "267", "season" => "7",  "episode" => "14", "name" => "The Ambassadors of Death (Part 3)" ),
        array( "id" => "268", "season" => "7",  "episode" => "15", "name" => "The Ambassadors of Death (Part 4)" ),
        array( "id" => "269", "season" => "7",  "episode" => "16", "name" => "The Ambassadors of Death (Part 5)" ),
        array( "id" => "270", "season" => "7",  "episode" => "17", "name" => "The Ambassadors of Death (Part 6)" ),
        array( "id" => "271", "season" => "7",  "episode" => "18", "name" => "The Ambassadors of Death (Part 7)" ),
        array( "id" => "272", "season" => "7",  "episode" => "19", "name" => "Inferno (Part 1)" ),
        array( "id" => "273", "season" => "7",  "episode" => "20", "name" => "Inferno (Part 2)" ),
        array( "id" => "274", "season" => "7",  "episode" => "21", "name" => "Inferno (Part 3)" ),
        array( "id" => "275", "season" => "7",  "episode" => "22", "name" => "Inferno (Part 4)" ),
        array( "id" => "276", "season" => "7",  "episode" => "23", "name" => "Inferno (Part 5)" ),
        array( "id" => "277", "season" => "7",  "episode" => "24", "name" => "Inferno (Part 6)" ),
        array( "id" => "278", "season" => "7",  "episode" => "25", "name" => "Inferno (Part 7)" ),
        
        array( "id" => "279", "season" => "8",  "episode" => "1",  "name" => "Terror of the Autons (Part 1)" ),
        array( "id" => "280", "season" => "8",  "episode" => "2",  "name" => "Terror of the Autons (Part 2)" ),
        array( "id" => "281", "season" => "8",  "episode" => "3",  "name" => "Terror of the Autons (Part 3)" ),
        array( "id" => "282", "season" => "8",  "episode" => "4",  "name" => "Terror of the Autons (Part 4)" ),
        array( "id" => "283", "season" => "8",  "episode" => "5",  "name" => "The Mind of Evil (Part 1)" ),
        array( "id" => "284", "season" => "8",  "episode" => "6",  "name" => "The Mind of Evil (Part 2)" ),
        array( "id" => "285", "season" => "8",  "episode" => "7",  "name" => "The Mind of Evil (Part 3)" ),
        array( "id" => "286", "season" => "8",  "episode" => "8",  "name" => "The Mind of Evil (Part 4)" ),
        array( "id" => "287", "season" => "8",  "episode" => "9",  "name" => "The Mind of Evil (Part 5)" ),
        array( "id" => "288", "season" => "8",  "episode" => "10", "name" => "The Mind of Evil (Part 6)" ),
        array( "id" => "289", "season" => "8",  "episode" => "11", "name" => "The Claws of Axos (Part 1)" ),
        array( "id" => "290", "season" => "8",  "episode" => "12", "name" => "The Claws of Axos (Part 2)" ),
        array( "id" => "291", "season" => "8",  "episode" => "13", "name" => "The Claws of Axos (Part 3)" ),
        array( "id" => "292", "season" => "8",  "episode" => "14", "name" => "The Claws of Axos (Part 4)" ),
        array( "id" => "293", "season" => "8",  "episode" => "15", "name" => "Colony in Space (Part 1)" ),
        array( "id" => "294", "season" => "8",  "episode" => "16", "name" => "Colony in Space (Part 2)" ),
        array( "id" => "295", "season" => "8",  "episode" => "17", "name" => "Colony in Space (Part 3)" ),
        array( "id" => "296", "season" => "8",  "episode" => "18", "name" => "Colony in Space (Part 4)" ),
        array( "id" => "297", "season" => "8",  "episode" => "19", "name" => "Colony in Space (Part 5)" ),
        array( "id" => "298", "season" => "8",  "episode" => "20", "name" => "Colony in Space (Part 6)" ),
        array( "id" => "299", "season" => "8",  "episode" => "21", "name" => "The Daemons (Part 1)" ),
        array( "id" => "300", "season" => "8",  "episode" => "22", "name" => "The Daemons (Part 2)" ),
        array( "id" => "301", "season" => "8",  "episode" => "23", "name" => "The Daemons (Part 3)" ),
        array( "id" => "302", "season" => "8",  "episode" => "24", "name" => "The Daemons (Part 4)" ),
        array( "id" => "303", "season" => "8",  "episode" => "25", "name" => "The Daemons (Part 5)" ),
        
        array( "id" => "304", "season" => "9",  "episode" => "1",  "name" => "Day of the Daleks (Part 1)" ),
        array( "id" => "305", "season" => "9",  "episode" => "2",  "name" => "Day of the Daleks (Part 2)" ),
        array( "id" => "306", "season" => "9",  "episode" => "3",  "name" => "Day of the Daleks (Part 3)" ),
        array( "id" => "307", "season" => "9",  "episode" => "4",  "name" => "Day of the Daleks (Part 4)" ),
        array( "id" => "308", "season" => "9",  "episode" => "5",  "name" => "The Curse of Peladon (Part 1)" ),
        array( "id" => "309", "season" => "9",  "episode" => "6",  "name" => "The Curse of Peladon (Part 2)" ),
        array( "id" => "310", "season" => "9",  "episode" => "7",  "name" => "The Curse of Peladon (Part 3)" ),
        array( "id" => "311", "season" => "9",  "episode" => "8",  "name" => "The Curse of Peladon (Part 4)" ),
        array( "id" => "312", "season" => "9",  "episode" => "9",  "name" => "The Sea Devils (Part 1)" ),
        array( "id" => "313", "season" => "9",  "episode" => "10", "name" => "The Sea Devils (Part 2)" ),
        array( "id" => "314", "season" => "9",  "episode" => "11", "name" => "The Sea Devils (Part 3)" ),
        array( "id" => "315", "season" => "9",  "episode" => "12", "name" => "The Sea Devils (Part 4)" ),
        array( "id" => "316", "season" => "9",  "episode" => "13", "name" => "The Sea Devils (Part 5)" ),
        array( "id" => "317", "season" => "9",  "episode" => "14", "name" => "The Sea Devils (Part 6)" ),
        array( "id" => "318", "season" => "9",  "episode" => "15", "name" => "The Mutants (Part 1)" ),
        array( "id" => "319", "season" => "9",  "episode" => "16", "name" => "The Mutants (Part 2)" ),
        array( "id" => "320", "season" => "9",  "episode" => "17", "name" => "The Mutants (Part 3)" ),
        array( "id" => "321", "season" => "9",  "episode" => "18", "name" => "The Mutants (Part 4)" ),
        array( "id" => "322", "season" => "9",  "episode" => "19", "name" => "The Mutants (Part 5)" ),
        array( "id" => "323", "season" => "9",  "episode" => "20", "name" => "The Mutants (Part 6)" ),
        array( "id" => "324", "season" => "9",  "episode" => "21", "name" => "The Time Monster (Part 1)" ),
        array( "id" => "325", "season" => "9",  "episode" => "22", "name" => "The Time Monster (Part 2)" ),
        array( "id" => "326", "season" => "9",  "episode" => "23", "name" => "The Time Monster (Part 3)" ),
        array( "id" => "327", "season" => "9",  "episode" => "24", "name" => "The Time Monster (Part 4)" ),
        array( "id" => "328", "season" => "9",  "episode" => "25", "name" => "The Time Monster (Part 5)" ),
        array( "id" => "329", "season" => "9",  "episode" => "26", "name" => "The Time Monster (Part 6)" ),
        
        array( "id" => "330", "season" => "10", "episode" => "1",  "name" => "The Three Doctors (Part 1)" ),
        array( "id" => "331", "season" => "10", "episode" => "2",  "name" => "The Three Doctors (Part 2)" ),
        array( "id" => "332", "season" => "10", "episode" => "3",  "name" => "The Three Doctors (Part 3)" ),
        array( "id" => "333", "season" => "10", "episode" => "4",  "name" => "The Three Doctors (Part 4)" ),
        array( "id" => "334", "season" => "10", "episode" => "5",  "name" => "Carnival of Monsters (Part 1)" ),
        array( "id" => "335", "season" => "10", "episode" => "6",  "name" => "Carnival of Monsters (Part 2)" ),
        array( "id" => "336", "season" => "10", "episode" => "7",  "name" => "Carnival of Monsters (Part 3)" ),
        array( "id" => "337", "season" => "10", "episode" => "8",  "name" => "Carnival of Monsters (Part 4)" ),
        array( "id" => "338", "season" => "10", "episode" => "9",  "name" => "Frontier in Space (Part 1)" ),
        array( "id" => "339", "season" => "10", "episode" => "10", "name" => "Frontier in Space (Part 2)" ),
        array( "id" => "340", "season" => "10", "episode" => "11", "name" => "Frontier in Space (Part 3)" ),
        array( "id" => "341", "season" => "10", "episode" => "12", "name" => "Frontier in Space (Part 4)" ),
        array( "id" => "342", "season" => "10", "episode" => "13", "name" => "Frontier in Space (Part 5)" ),
        array( "id" => "343", "season" => "10", "episode" => "14", "name" => "Frontier in Space (Part 6)" ),
        array( "id" => "344", "season" => "10", "episode" => "15", "name" => "Planet of the Daleks (Part 1)" ),
        array( "id" => "345", "season" => "10", "episode" => "16", "name" => "Planet of the Daleks (Part 2)" ),
        array( "id" => "346", "season" => "10", "episode" => "17", "name" => "Planet of the Daleks (Part 3)" ),
        array( "id" => "347", "season" => "10", "episode" => "18", "name" => "Planet of the Daleks (Part 4)" ),
        array( "id" => "348", "season" => "10", "episode" => "19", "name" => "Planet of the Daleks (Part 5)" ),
        array( "id" => "349", "season" => "10", "episode" => "20", "name" => "Planet of the Daleks (Part 6)" ),
        array( "id" => "350", "season" => "10", "episode" => "21", "name" => "The Green Death (Part 1)" ),
        array( "id" => "351", "season" => "10", "episode" => "22", "name" => "The Green Death (Part 2)" ),
        array( "id" => "352", "season" => "10", "episode" => "23", "name" => "The Green Death (Part 3)" ),
        array( "id" => "353", "season" => "10", "episode" => "24", "name" => "The Green Death (Part 4)" ),
        array( "id" => "354", "season" => "10", "episode" => "25", "name" => "The Green Death (Part 5)" ),
        array( "id" => "355", "season" => "10", "episode" => "26", "name" => "The Green Death (Part 6)" ),
        
        array( "id" => "356", "season" => "11", "episode" => "1",  "name" => "The Time Warrior (Part 1)" ),
        array( "id" => "357", "season" => "11", "episode" => "2",  "name" => "The Time Warrior (Part 2)" ),
        array( "id" => "358", "season" => "11", "episode" => "3",  "name" => "The Time Warrior (Part 3)" ),
        array( "id" => "359", "season" => "11", "episode" => "4",  "name" => "The Time Warrior (Part 4)" ),
        array( "id" => "360", "season" => "11", "episode" => "5",  "name" => "Invasion of the Dinosaurs (Part 1)" ),
        array( "id" => "361", "season" => "11", "episode" => "6",  "name" => "Invasion of the Dinosaurs (Part 2)" ),
        array( "id" => "362", "season" => "11", "episode" => "7",  "name" => "Invasion of the Dinosaurs (Part 3)" ),
        array( "id" => "363", "season" => "11", "episode" => "8",  "name" => "Invasion of the Dinosaurs (Part 4)" ),
        array( "id" => "364", "season" => "11", "episode" => "9",  "name" => "Invasion of the Dinosaurs (Part 5)" ),
        array( "id" => "365", "season" => "11", "episode" => "10", "name" => "Invasion of the Dinosaurs (Part 6)" ),
        array( "id" => "366", "season" => "11", "episode" => "11", "name" => "Death to the Daleks (Part 1)" ),
        array( "id" => "367", "season" => "11", "episode" => "12", "name" => "Death to the Daleks (Part 2)" ),
        array( "id" => "368", "season" => "11", "episode" => "13", "name" => "Death to the Daleks (Part 3)" ),
        array( "id" => "369", "season" => "11", "episode" => "14", "name" => "Death to the Daleks (Part 4)" ),
        array( "id" => "370", "season" => "11", "episode" => "15", "name" => "The Monster of Peladon (Part 1)" ),
        array( "id" => "371", "season" => "11", "episode" => "16", "name" => "The Monster of Peladon (Part 2)" ),
        array( "id" => "372", "season" => "11", "episode" => "17", "name" => "The Monster of Peladon (Part 3)" ),
        array( "id" => "373", "season" => "11", "episode" => "18", "name" => "The Monster of Peladon (Part 4)" ),
        array( "id" => "374", "season" => "11", "episode" => "19", "name" => "The Monster of Peladon (Part 5)" ),
        array( "id" => "375", "season" => "11", "episode" => "20", "name" => "The Monster of Peladon (Part 6)" ),
        array( "id" => "376", "season" => "11", "episode" => "21", "name" => "Planet of the Spiders (Part 1)" ),
        array( "id" => "377", "season" => "11", "episode" => "22", "name" => "Planet of the Spiders (Part 2)" ),
        array( "id" => "378", "season" => "11", "episode" => "23", "name" => "Planet of the Spiders (Part 3)" ),
        array( "id" => "379", "season" => "11", "episode" => "24", "name" => "Planet of the Spiders (Part 4)" ),
        array( "id" => "380", "season" => "11", "episode" => "25", "name" => "Planet of the Spiders (Part 5)" ),
        array( "id" => "381", "season" => "11", "episode" => "26", "name" => "Planet of the Spiders (Part 6)" ),
        
        array( "id" => "382", "season" => "12", "episode" => "1",  "name" => "Robot (Part 1)" ),
        array( "id" => "383", "season" => "12", "episode" => "2",  "name" => "Robot (Part 2)" ),
        array( "id" => "384", "season" => "12", "episode" => "3",  "name" => "Robot (Part 3)" ),
        array( "id" => "385", "season" => "12", "episode" => "4",  "name" => "Robot (Part 4)" ),
        array( "id" => "386", "season" => "12", "episode" => "5",  "name" => "The Ark in Space (Part 1)" ),
        array( "id" => "387", "season" => "12", "episode" => "6",  "name" => "The Ark in Space (Part 2)" ),
        array( "id" => "388", "season" => "12", "episode" => "7",  "name" => "The Ark in Space (Part 3)" ),
        array( "id" => "389", "season" => "12", "episode" => "8",  "name" => "The Ark in Space (Part 4)" ),
        array( "id" => "390", "season" => "12", "episode" => "9",  "name" => "The Sontaran Experiment (Part 1)" ),
        array( "id" => "391", "season" => "12", "episode" => "10", "name" => "The Sontaran Experiment (Part 2)" ),
        array( "id" => "392", "season" => "12", "episode" => "11", "name" => "Genesis of the Daleks (Part 1)" ),
        array( "id" => "393", "season" => "12", "episode" => "12", "name" => "Genesis of the Daleks (Part 2)" ),
        array( "id" => "394", "season" => "12", "episode" => "13", "name" => "Genesis of the Daleks (Part 3)" ),
        array( "id" => "395", "season" => "12", "episode" => "14", "name" => "Genesis of the Daleks (Part 4)" ),
        array( "id" => "396", "season" => "12", "episode" => "15", "name" => "Genesis of the Daleks (Part 5)" ),
        array( "id" => "397", "season" => "12", "episode" => "16", "name" => "Genesis of the Daleks (Part 6)" ),
        array( "id" => "398", "season" => "12", "episode" => "17", "name" => "Revenge of the Cybermen (Part 1)" ),
        array( "id" => "399", "season" => "12", "episode" => "18", "name" => "Revenge of the Cybermen (Part 2)" ),
        array( "id" => "400", "season" => "12", "episode" => "19", "name" => "Revenge of the Cybermen (Part 3)" ),
        array( "id" => "401", "season" => "12", "episode" => "20", "name" => "Revenge of the Cybermen (Part 4)" ),
        
        array( "id" => "402", "season" => "13", "episode" => "1",  "name" => "Terror of the Zygons (Part 1)" ),
        array( "id" => "403", "season" => "13", "episode" => "2",  "name" => "Terror of the Zygons (Part 2)" ),
        array( "id" => "404", "season" => "13", "episode" => "3",  "name" => "Terror of the Zygons (Part 3)" ),
        array( "id" => "405", "season" => "13", "episode" => "4",  "name" => "Terror of the Zygons (Part 4)" ),
        array( "id" => "406", "season" => "13", "episode" => "5",  "name" => "Planet of Evil (Part 1)" ),
        array( "id" => "407", "season" => "13", "episode" => "6",  "name" => "Planet of Evil (Part 2)" ),
        array( "id" => "408", "season" => "13", "episode" => "7",  "name" => "Planet of Evil (Part 3)" ),
        array( "id" => "409", "season" => "13", "episode" => "8",  "name" => "Planet of Evil (Part 4)" ),
        array( "id" => "410", "season" => "13", "episode" => "9",  "name" => "Pyramids of Mars (Part 1)" ),
        array( "id" => "411", "season" => "13", "episode" => "10", "name" => "Pyramids of Mars (Part 2)" ),
        array( "id" => "412", "season" => "13", "episode" => "11", "name" => "Pyramids of Mars (Part 3)" ),
        array( "id" => "413", "season" => "13", "episode" => "12", "name" => "Pyramids of Mars (Part 4)" ),
        array( "id" => "414", "season" => "13", "episode" => "13", "name" => "The Android-Invasion (Part 1)" ),
        array( "id" => "415", "season" => "13", "episode" => "14", "name" => "The Android-Invasion (Part 2)" ),
        array( "id" => "416", "season" => "13", "episode" => "15", "name" => "The Android-Invasion (Part 3)" ),
        array( "id" => "417", "season" => "13", "episode" => "16", "name" => "The Android-Invasion (Part 4)" ),
        array( "id" => "418", "season" => "13", "episode" => "17", "name" => "The Brain of Morbius (Part 1)" ),
        array( "id" => "419", "season" => "13", "episode" => "18", "name" => "The Brain of Morbius (Part 2)" ),
        array( "id" => "420", "season" => "13", "episode" => "19", "name" => "The Brain of Morbius (Part 3)" ),
        array( "id" => "421", "season" => "13", "episode" => "20", "name" => "The Brain of Morbius (Part 4)" ),
        array( "id" => "422", "season" => "13", "episode" => "21", "name" => "The Seeds of Doom (Part 1)" ),
        array( "id" => "423", "season" => "13", "episode" => "22", "name" => "The Seeds of Doom (Part 2)" ),
        array( "id" => "424", "season" => "13", "episode" => "23", "name" => "The Seeds of Doom (Part 3)" ),
        array( "id" => "425", "season" => "13", "episode" => "25", "name" => "The Seeds of Doom (Part 5)" ),
        array( "id" => "426", "season" => "13", "episode" => "24", "name" => "The Seeds of Doom (Part 4)" ),
        array( "id" => "427", "season" => "13", "episode" => "26", "name" => "The Seeds of Doom (Part 6)" ),
        
        array( "id" => "428", "season" => "14", "episode" => "1",  "name" => "The Masque of Mandragora (Part 1)" ),
        array( "id" => "429", "season" => "14", "episode" => "2",  "name" => "The Masque of Mandragora (Part 2)" ),
        array( "id" => "430", "season" => "14", "episode" => "3",  "name" => "The Masque of Mandragora (Part 3)" ),
        array( "id" => "431", "season" => "14", "episode" => "4",  "name" => "The Masque of Mandragora (Part 4)" ),
        array( "id" => "432", "season" => "14", "episode" => "5",  "name" => "The Hand of Fear (Part 1)" ),
        array( "id" => "433", "season" => "14", "episode" => "6",  "name" => "The Hand of Fear (Part 2)" ),
        array( "id" => "434", "season" => "14", "episode" => "7",  "name" => "The Hand of Fear (Part 3)" ),
        array( "id" => "435", "season" => "14", "episode" => "8",  "name" => "The Hand of Fear (Part 4)" ),
        array( "id" => "436", "season" => "14", "episode" => "9",  "name" => "The Deadly Assassin (Part 1)" ),
        array( "id" => "437", "season" => "14", "episode" => "10", "name" => "The Deadly Assassin (Part 2)" ),
        array( "id" => "438", "season" => "14", "episode" => "11", "name" => "The Deadly Assassin (Part 3)" ),
        array( "id" => "439", "season" => "14", "episode" => "12", "name" => "The Deadly Assassin (Part 4)" ),
        array( "id" => "440", "season" => "14", "episode" => "13", "name" => "The Face of Evil (Part 1)" ),
        array( "id" => "441", "season" => "14", "episode" => "14", "name" => "The Face of Evil (Part 2)" ),
        array( "id" => "442", "season" => "14", "episode" => "15", "name" => "The Face of Evil (Part 3)" ),
        array( "id" => "443", "season" => "14", "episode" => "16", "name" => "The Face of Evil (Part 4)" ),
        array( "id" => "444", "season" => "14", "episode" => "17", "name" => "The Robots of Death (Part 1)" ),
        array( "id" => "445", "season" => "14", "episode" => "18", "name" => "The Robots of Death (Part 2)" ),
        array( "id" => "446", "season" => "14", "episode" => "19", "name" => "The Robots of Death (Part 3)" ),
        array( "id" => "447", "season" => "14", "episode" => "20", "name" => "The Robots of Death (Part 4)" ),
        array( "id" => "448", "season" => "14", "episode" => "21", "name" => "Talons of Weng-Chiang (Part 1)" ),
        array( "id" => "449", "season" => "14", "episode" => "22", "name" => "Talons of Weng-Chiang (Part 2)" ),
        array( "id" => "450", "season" => "14", "episode" => "23", "name" => "Talons of Weng-Chiang (Part 3)" ),
        array( "id" => "451", "season" => "14", "episode" => "24", "name" => "Talons of Weng-Chiang (Part 4)" ),
        array( "id" => "452", "season" => "14", "episode" => "25", "name" => "Talons of Weng-Chiang (Part 5)" ),
        array( "id" => "453", "season" => "14", "episode" => "26", "name" => "Talons of Weng-Chiang (Part 6)" ),
        
        array( "id" => "454", "season" => "15", "episode" => "1",  "name" => "Horror of Fang Rock (Part 1)" ),
        array( "id" => "455", "season" => "15", "episode" => "2",  "name" => "Horror of Fang Rock (Part 2)" ),
        array( "id" => "456", "season" => "15", "episode" => "3",  "name" => "Horror of Fang Rock (Part 3)" ),
        array( "id" => "457", "season" => "15", "episode" => "4",  "name" => "Horror of Fang Rock (Part 4)" ),
        array( "id" => "458", "season" => "15", "episode" => "5",  "name" => "The Invisible Enemy (Part 1)" ),
        array( "id" => "459", "season" => "15", "episode" => "6",  "name" => "The Invisible Enemy (Part 2)" ),
        array( "id" => "460", "season" => "15", "episode" => "7",  "name" => "The Invisible Enemy (Part 3)" ),
        array( "id" => "461", "season" => "15", "episode" => "8",  "name" => "The Invisible Enemy (Part 4)" ),
        array( "id" => "462", "season" => "15", "episode" => "9",  "name" => "Image of the Fendahl (Part 1)" ),
        array( "id" => "463", "season" => "15", "episode" => "10", "name" => "Image of the Fendahl (Part 2)" ),
        array( "id" => "464", "season" => "15", "episode" => "11", "name" => "Image of the Fendahl (Part 3)" ),
        array( "id" => "465", "season" => "15", "episode" => "12", "name" => "Image of the Fendahl (Part 4)" ),
        array( "id" => "466", "season" => "15", "episode" => "13", "name" => "The Sun Makers (Part 1)" ),
        array( "id" => "467", "season" => "15", "episode" => "14", "name" => "The Sun Makers (Part 2)" ),
        array( "id" => "468", "season" => "15", "episode" => "15", "name" => "The Sun Makers (Part 3)" ),
        array( "id" => "469", "season" => "15", "episode" => "16", "name" => "The Sun Makers (Part 4)" ),
        array( "id" => "470", "season" => "15", "episode" => "17", "name" => "Underworld (Part 1)" ),
        array( "id" => "471", "season" => "15", "episode" => "18", "name" => "Underworld (Part 2)" ),
        array( "id" => "472", "season" => "15", "episode" => "19", "name" => "Underworld (Part 3)" ),
        array( "id" => "473", "season" => "15", "episode" => "20", "name" => "Underworld (Part 4)" ),
        array( "id" => "474", "season" => "15", "episode" => "21", "name" => "The Invasion of Time (Part 1)" ),
        array( "id" => "475", "season" => "15", "episode" => "22", "name" => "The Invasion of Time (Part 2)" ),
        array( "id" => "476", "season" => "15", "episode" => "23", "name" => "The Invasion of Time (Part 3)" ),
        array( "id" => "477", "season" => "15", "episode" => "24", "name" => "The Invasion of Time (Part 4)" ),
        array( "id" => "478", "season" => "15", "episode" => "25", "name" => "The Invasion of Time (Part 5)" ),
        array( "id" => "479", "season" => "15", "episode" => "26", "name" => "The Invasion of Time (Part 6)" ),
        
        array( "id" => "480", "season" => "16", "episode" => "1",  "name" => "The Ribos Operation (Part 1)" ),
        array( "id" => "481", "season" => "16", "episode" => "2",  "name" => "The Ribos Operation (Part 2)" ),
        array( "id" => "482", "season" => "16", "episode" => "3",  "name" => "The Ribos Operation (Part 3)" ),
        array( "id" => "483", "season" => "16", "episode" => "4",  "name" => "The Ribos Operation (Part 4)" ),
        array( "id" => "484", "season" => "16", "episode" => "5",  "name" => "The Pirate Planet (Part 1)" ),
        array( "id" => "485", "season" => "16", "episode" => "6",  "name" => "The Pirate Planet (Part 2)" ),
        array( "id" => "486", "season" => "16", "episode" => "7",  "name" => "The Pirate Planet (Part 3)" ),
        array( "id" => "487", "season" => "16", "episode" => "8",  "name" => "The Pirate Planet (Part 4)" ),
        array( "id" => "488", "season" => "16", "episode" => "9",  "name" => "The Stones of Blood (Part 1)" ),
        array( "id" => "489", "season" => "16", "episode" => "10", "name" => "The Stones of Blood (Part 2)" ),
        array( "id" => "490", "season" => "16", "episode" => "11", "name" => "The Stones of Blood (Part 3)" ),
        array( "id" => "491", "season" => "16", "episode" => "12", "name" => "The Stones of Blood (Part 4)" ),
        array( "id" => "492", "season" => "16", "episode" => "13", "name" => "The Androids of Tara (Part 1)" ),
        array( "id" => "493", "season" => "16", "episode" => "14", "name" => "The Androids of Tara (Part 2)" ),
        array( "id" => "494", "season" => "16", "episode" => "15", "name" => "The Androids of Tara (Part 3)" ),
        array( "id" => "495", "season" => "16", "episode" => "16", "name" => "The Androids of Tara (Part 4)" ),
        array( "id" => "496", "season" => "16", "episode" => "17", "name" => "The Power of Kroll (Part 1)" ),
        array( "id" => "497", "season" => "16", "episode" => "18", "name" => "The Power of Kroll (Part 2)" ),
        array( "id" => "498", "season" => "16", "episode" => "19", "name" => "The Power of Kroll (Part 3)" ),
        array( "id" => "499", "season" => "16", "episode" => "20", "name" => "The Power of Kroll (Part 4)" ),
        array( "id" => "500", "season" => "16", "episode" => "21", "name" => "The Armageddon Factor (Part 1)" ),
        array( "id" => "501", "season" => "16", "episode" => "22", "name" => "The Armageddon Factor (Part 2)" ),
        array( "id" => "502", "season" => "16", "episode" => "23", "name" => "The Armageddon Factor (Part 3)" ),
        array( "id" => "503", "season" => "16", "episode" => "24", "name" => "The Armageddon Factor (Part 4)" ),
        array( "id" => "504", "season" => "16", "episode" => "25", "name" => "The Armageddon Factor (Part 5)" ),
        array( "id" => "505", "season" => "16", "episode" => "26", "name" => "The Armageddon Factor (Part 6)" ),
        
        array( "id" => "506", "season" => "17", "episode" => "1",  "name" => "Destiny of the Daleks (Part 1)" ),
        array( "id" => "507", "season" => "17", "episode" => "2",  "name" => "Destiny of the Daleks (Part 2)" ),
        array( "id" => "508", "season" => "17", "episode" => "3",  "name" => "Destiny of the Daleks (Part 3)" ),
        array( "id" => "509", "season" => "17", "episode" => "4",  "name" => "Destiny of the Daleks (Part 4)" ),
        array( "id" => "510", "season" => "17", "episode" => "5",  "name" => "The City of Death (Part 1)" ),
        array( "id" => "511", "season" => "17", "episode" => "6",  "name" => "The City of Death (Part 2)" ),
        array( "id" => "512", "season" => "17", "episode" => "7",  "name" => "The City of Death (Part 3)" ),
        array( "id" => "513", "season" => "17", "episode" => "8",  "name" => "The City of Death (Part 4)" ),
        array( "id" => "514", "season" => "17", "episode" => "9",  "name" => "The Creature from the Pit (Part 1)" ),
        array( "id" => "515", "season" => "17", "episode" => "10", "name" => "The Creature from the Pit (Part 2)" ),
        array( "id" => "516", "season" => "17", "episode" => "11", "name" => "The Creature from the Pit (Part 3)" ),
        array( "id" => "517", "season" => "17", "episode" => "12", "name" => "The Creature from the Pit (Part 4)" ),
        array( "id" => "518", "season" => "17", "episode" => "13", "name" => "Nightmare of Eden (Part 1)" ),
        array( "id" => "519", "season" => "17", "episode" => "14", "name" => "Nightmare of Eden (Part 2)" ),
        array( "id" => "520", "season" => "17", "episode" => "15", "name" => "Nightmare of Eden (Part 3)" ),
        array( "id" => "521", "season" => "17", "episode" => "16", "name" => "Nightmare of Eden (Part 4)" ),
        array( "id" => "522", "season" => "17", "episode" => "17", "name" => "The Horns of Nimon (Part 1)" ),
        array( "id" => "523", "season" => "17", "episode" => "18", "name" => "The Horns of Nimon (Part 2)" ),
        array( "id" => "524", "season" => "17", "episode" => "19", "name" => "The Horns of Nimon (Part 3)" ),
        array( "id" => "525", "season" => "17", "episode" => "20", "name" => "The Horns of Nimon (Part 4)" ),
        
        array( "id" => "526", "season" => "18", "episode" => "1",  "name" => "The Leisure Hive (Part 1)" ),
        array( "id" => "527", "season" => "18", "episode" => "2",  "name" => "The Leisure Hive (Part 2)" ),
        array( "id" => "528", "season" => "18", "episode" => "3",  "name" => "The Leisure Hive (Part 3)" ),
        array( "id" => "529", "season" => "18", "episode" => "4",  "name" => "The Leisure Hive (Part 4)" ),
        array( "id" => "530", "season" => "18", "episode" => "5",  "name" => "Meglos (Part 1)" ),
        array( "id" => "531", "season" => "18", "episode" => "6",  "name" => "Meglos (Part 2)" ),
        array( "id" => "532", "season" => "18", "episode" => "7",  "name" => "Meglos (Part 3)" ),
        array( "id" => "533", "season" => "18", "episode" => "8",  "name" => "Meglos (Part 4)" ),
        array( "id" => "534", "season" => "18", "episode" => "9",  "name" => "Full Circle (Part 1)" ),
        array( "id" => "535", "season" => "18", "episode" => "10", "name" => "Full Circle (Part 2)" ),
        array( "id" => "536", "season" => "18", "episode" => "11", "name" => "Full Circle (Part 3)" ),
        array( "id" => "537", "season" => "18", "episode" => "12", "name" => "Full Circle (Part 4)" ),
        array( "id" => "538", "season" => "18", "episode" => "13", "name" => "State of Decay (Part 1)" ),
        array( "id" => "539", "season" => "18", "episode" => "14", "name" => "State of Decay (Part 2)" ),
        array( "id" => "540", "season" => "18", "episode" => "15", "name" => "State of Decay (Part 3)" ),
        array( "id" => "541", "season" => "18", "episode" => "16", "name" => "State of Decay (Part 4)" ),
        array( "id" => "542", "season" => "18", "episode" => "17", "name" => "Warriors' Gate (Part 1)" ),
        array( "id" => "543", "season" => "18", "episode" => "18", "name" => "Warriors' Gate (Part 2)" ),
        array( "id" => "544", "season" => "18", "episode" => "19", "name" => "Warriors' Gate (Part 3)" ),
        array( "id" => "545", "season" => "18", "episode" => "20", "name" => "Warriors' Gate (Part 4)" ),
        array( "id" => "546", "season" => "18", "episode" => "21", "name" => "The Keeper of Traken (Part 1)" ),
        array( "id" => "547", "season" => "18", "episode" => "22", "name" => "The Keeper of Traken (Part 2)" ),
        array( "id" => "548", "season" => "18", "episode" => "23", "name" => "The Keeper of Traken (Part 3)" ),
        array( "id" => "549", "season" => "18", "episode" => "24", "name" => "The Keeper of Traken (Part 4)" ),
        array( "id" => "550", "season" => "18", "episode" => "25", "name" => "Logopolis (Part 1)" ),
        array( "id" => "551", "season" => "18", "episode" => "26", "name" => "Logopolis (Part 2)" ),
        array( "id" => "552", "season" => "18", "episode" => "27", "name" => "Logopolis (Part 3)" ),
        array( "id" => "553", "season" => "18", "episode" => "28", "name" => "Logopolis (Part 4)" ),
        
        array( "id" => "554", "season" => "19", "episode" => "1",  "name" => "Castrovalva (Part 1)" ),
        array( "id" => "555", "season" => "19", "episode" => "2",  "name" => "Castrovalva (Part 2)" ),
        array( "id" => "556", "season" => "19", "episode" => "3",  "name" => "Castrovalva (Part 3)" ),
        array( "id" => "557", "season" => "19", "episode" => "4",  "name" => "Castrovalva (Part 4)" ),
        array( "id" => "558", "season" => "19", "episode" => "5",  "name" => "Four to Doomsday (Part 1)" ),
        array( "id" => "559", "season" => "19", "episode" => "6",  "name" => "Four to Doomsday (Part 2)" ),
        array( "id" => "560", "season" => "19", "episode" => "7",  "name" => "Four to Doomsday (Part 3)" ),
        array( "id" => "561", "season" => "19", "episode" => "8",  "name" => "Four to Doomsday (Part 4)" ),
        array( "id" => "562", "season" => "19", "episode" => "9",  "name" => "Kinda (Part 1)" ),
        array( "id" => "563", "season" => "19", "episode" => "10", "name" => "Kinda (Part 2)" ),
        array( "id" => "564", "season" => "19", "episode" => "11", "name" => "Kinda (Part 3)" ),
        array( "id" => "565", "season" => "19", "episode" => "12", "name" => "Kinda (Part 4)" ),
        array( "id" => "566", "season" => "19", "episode" => "13", "name" => "The Visitation (Part 1)" ),
        array( "id" => "567", "season" => "19", "episode" => "14", "name" => "The Visitation (Part 2)" ),
        array( "id" => "568", "season" => "19", "episode" => "15", "name" => "The Visitation (Part 3)" ),
        array( "id" => "569", "season" => "19", "episode" => "16", "name" => "The Visitation (Part 4)" ),
        array( "id" => "570", "season" => "19", "episode" => "17", "name" => "Black Orchid (Part 1)" ),
        array( "id" => "571", "season" => "19", "episode" => "18", "name" => "Black Orchid (Part 2)" ),
        array( "id" => "572", "season" => "19", "episode" => "19", "name" => "Earthshock (Part 1)" ),
        array( "id" => "573", "season" => "19", "episode" => "20", "name" => "Earthshock (Part 2)" ),
        array( "id" => "574", "season" => "19", "episode" => "21", "name" => "Earthshock (Part 3)" ),
        array( "id" => "575", "season" => "19", "episode" => "22", "name" => "Earthshock (Part 4)" ),
        array( "id" => "576", "season" => "19", "episode" => "23", "name" => "Time-Flight (Part 1)" ),
        array( "id" => "577", "season" => "19", "episode" => "24", "name" => "Time-Flight (Part 2)" ),
        array( "id" => "578", "season" => "19", "episode" => "25", "name" => "Time-Flight (Part 3)" ),
        array( "id" => "579", "season" => "19", "episode" => "26", "name" => "Time-Flight (Part 4)" ),
        
        array( "id" => "580", "season" => "20", "episode" => "1",  "name" => "Arc of Infinity (Part 1)" ),
        array( "id" => "581", "season" => "20", "episode" => "2",  "name" => "Arc of Infinity (Part 2)" ),
        array( "id" => "582", "season" => "20", "episode" => "3",  "name" => "Arc of Infinity (Part 3)" ),
        array( "id" => "583", "season" => "20", "episode" => "4",  "name" => "Arc of Infinity (Part 4)" ),
        array( "id" => "584", "season" => "20", "episode" => "5",  "name" => "Snakedance (Part 1)" ),
        array( "id" => "585", "season" => "20", "episode" => "6",  "name" => "Snakedance (Part 2)" ),
        array( "id" => "586", "season" => "20", "episode" => "7",  "name" => "Snakedance (Part 3)" ),
        array( "id" => "587", "season" => "20", "episode" => "8",  "name" => "Snakedance (Part 4)" ),
        array( "id" => "588", "season" => "20", "episode" => "9",  "name" => "Mawdryn Undead (Part 1)" ),
        array( "id" => "589", "season" => "20", "episode" => "10", "name" => "Mawdryn Undead (Part 2)" ),
        array( "id" => "590", "season" => "20", "episode" => "11", "name" => "Mawdryn Undead (Part 3)" ),
        array( "id" => "591", "season" => "20", "episode" => "12", "name" => "Mawdryn Undead (Part 4)" ),
        array( "id" => "592", "season" => "20", "episode" => "13", "name" => "Terminus (Part 1)" ),
        array( "id" => "593", "season" => "20", "episode" => "14", "name" => "Terminus (Part 2)" ),
        array( "id" => "594", "season" => "20", "episode" => "15", "name" => "Terminus (Part 3)" ),
        array( "id" => "595", "season" => "20", "episode" => "16", "name" => "Terminus (Part 4)" ),
        array( "id" => "596", "season" => "20", "episode" => "17", "name" => "Enlightenment (Part 1)" ),
        array( "id" => "597", "season" => "20", "episode" => "18", "name" => "Enlightenment (Part 2)" ),
        array( "id" => "598", "season" => "20", "episode" => "19", "name" => "Enlightenment (Part 3)" ),
        array( "id" => "599", "season" => "20", "episode" => "20", "name" => "Enlightenment (Part 4)" ),
        array( "id" => "600", "season" => "20", "episode" => "21", "name" => "The King's Demons (Part 1)" ),
        array( "id" => "601", "season" => "20", "episode" => "22", "name" => "The King's Demons (Part 2)" ),
        array( "id" => "602", "season" => "20", "episode" => "23", "name" => "The Five Doctors (20th Anniversary Special)" ),
        
        array( "id" => "603", "season" => "21", "episode" => "1",  "name" => "Warriors of the Deep (Part 1)" ),
        array( "id" => "604", "season" => "21", "episode" => "2",  "name" => "Warriors of the Deep (Part 2)" ),
        array( "id" => "605", "season" => "21", "episode" => "3",  "name" => "Warriors of the Deep (Part 3)" ),
        array( "id" => "606", "season" => "21", "episode" => "4",  "name" => "Warriors of the Deep (Part 4)" ),
        array( "id" => "607", "season" => "21", "episode" => "5",  "name" => "The Awakening (Part 1)" ),
        array( "id" => "608", "season" => "21", "episode" => "6",  "name" => "The Awakening (Part 2)" ),
        array( "id" => "609", "season" => "21", "episode" => "7",  "name" => "Frontios (Part 1)" ),
        array( "id" => "610", "season" => "21", "episode" => "8",  "name" => "Frontios (Part 2)" ),
        array( "id" => "611", "season" => "21", "episode" => "9",  "name" => "Frontios (Part 3)" ),
        array( "id" => "612", "season" => "21", "episode" => "10", "name" => "Frontios (Part 4)" ),
        array( "id" => "613", "season" => "21", "episode" => "11", "name" => "Resurrection of the Daleks (Part 1)" ),
        array( "id" => "614", "season" => "21", "episode" => "12", "name" => "Resurrection of the Daleks (Part 2)" ),
        array( "id" => "615", "season" => "21", "episode" => "13", "name" => "Planet of Fire (Part 1)" ),
        array( "id" => "616", "season" => "21", "episode" => "14", "name" => "Planet of Fire (Part 2)" ),
        array( "id" => "617", "season" => "21", "episode" => "15", "name" => "Planet of Fire (Part 3)" ),
        array( "id" => "618", "season" => "21", "episode" => "16", "name" => "Planet of Fire (Part 4)" ),
        array( "id" => "619", "season" => "21", "episode" => "17", "name" => "The Caves of Androzani (Part 1)" ),
        array( "id" => "620", "season" => "21", "episode" => "18", "name" => "The Caves of Androzani (Part 2)" ),
        array( "id" => "621", "season" => "21", "episode" => "19", "name" => "The Caves of Androzani (Part 3)" ),
        array( "id" => "622", "season" => "21", "episode" => "20", "name" => "The Caves of Androzani (Part 4)" ),
        array( "id" => "623", "season" => "21", "episode" => "21", "name" => "The Twin Dilemma (Part 1)" ),
        array( "id" => "624", "season" => "21", "episode" => "22", "name" => "The Twin Dilemma (Part 2)" ),
        array( "id" => "625", "season" => "21", "episode" => "23", "name" => "The Twin Dilemma (Part 3)" ),
        array( "id" => "626", "season" => "21", "episode" => "24", "name" => "The Twin Dilemma (Part 4)" ),
        
        array( "id" => "627", "season" => "22", "episode" => "1",  "name" => "Attack of the Cybermen (Part 1)" ),
        array( "id" => "628", "season" => "22", "episode" => "2",  "name" => "Attack of the Cybermen (Part 2)" ),
        array( "id" => "629", "season" => "22", "episode" => "3",  "name" => "Vengeance on Varos (Part 1)" ),
        array( "id" => "630", "season" => "22", "episode" => "4",  "name" => "Vengeance on Varos (Part 2)" ),
        array( "id" => "631", "season" => "22", "episode" => "5",  "name" => "The Mark of the Rani (Part 1)" ),
        array( "id" => "632", "season" => "22", "episode" => "6",  "name" => "The Mark of the Rani (Part 2)" ),
        array( "id" => "633", "season" => "22", "episode" => "7",  "name" => "The Two Doctors (Part 1)" ),
        array( "id" => "634", "season" => "22", "episode" => "8",  "name" => "The Two Doctors (Part 2)" ),
        array( "id" => "635", "season" => "22", "episode" => "9",  "name" => "The Two Doctors (Part 3)" ),
        array( "id" => "636", "season" => "22", "episode" => "10", "name" => "Timelash (Part 1)" ),
        array( "id" => "637", "season" => "22", "episode" => "11", "name" => "Timelash (Part 2)" ),
        array( "id" => "638", "season" => "22", "episode" => "12", "name" => "Revelation of the Daleks (Part 1)" ),
        array( "id" => "639", "season" => "22", "episode" => "13", "name" => "Revelation of the Daleks (Part 2)" ),
        
        array( "id" => "640", "season" => "23", "episode" => "1",  "name" => "The Mysterious Planet (Part 1)" ),
        array( "id" => "641", "season" => "23", "episode" => "2",  "name" => "The Mysterious Planet (Part 2)" ),
        array( "id" => "642", "season" => "23", "episode" => "3",  "name" => "The Mysterious Planet (Part 3)" ),
        array( "id" => "643", "season" => "23", "episode" => "4",  "name" => "The Mysterious Planet (Part 4)" ),
        array( "id" => "644", "season" => "23", "episode" => "5",  "name" => "Mindwarp (Part 1)" ),
        array( "id" => "645", "season" => "23", "episode" => "6",  "name" => "Mindwarp (Part 2)" ),
        array( "id" => "646", "season" => "23", "episode" => "7",  "name" => "Mindwarp (Part 3)" ),
        array( "id" => "647", "season" => "23", "episode" => "8",  "name" => "Mindwarp (Part 4)" ),
        array( "id" => "648", "season" => "23", "episode" => "9",  "name" => "Terror of the Vervoids (Part 1)" ),
        array( "id" => "649", "season" => "23", "episode" => "10", "name" => "Terror of the Vervoids (Part 2)" ),
        array( "id" => "650", "season" => "23", "episode" => "11", "name" => "Terror of the Vervoids (Part 3)" ),
        array( "id" => "651", "season" => "23", "episode" => "12", "name" => "Terror of the Vervoids (Part 4)" ),
        array( "id" => "652", "season" => "23", "episode" => "13", "name" => "The Ultimate Foe (Part 1)" ),
        array( "id" => "653", "season" => "23", "episode" => "14", "name" => "The Ultimate Foe (Part 2)" ),
        
        array( "id" => "654", "season" => "24", "episode" => "1",  "name" => "Time and the Rani (Part 1)" ),
        array( "id" => "655", "season" => "24", "episode" => "2",  "name" => "Time and the Rani (Part 2)" ),
        array( "id" => "656", "season" => "24", "episode" => "3",  "name" => "Time and the Rani (Part 3)" ),
        array( "id" => "657", "season" => "24", "episode" => "4",  "name" => "Time and the Rani (Part 4)" ),
        array( "id" => "658", "season" => "24", "episode" => "5",  "name" => "Paradise Towers (Part 1)" ),
        array( "id" => "659", "season" => "24", "episode" => "6",  "name" => "Paradise Towers (Part 2)" ),
        array( "id" => "660", "season" => "24", "episode" => "7",  "name" => "Paradise Towers (Part 3)" ),
        array( "id" => "661", "season" => "24", "episode" => "8",  "name" => "Paradise Towers (Part 4)" ),
        array( "id" => "662", "season" => "24", "episode" => "9",  "name" => "Delta and the Bannermen (Part 1)" ),
        array( "id" => "663", "season" => "24", "episode" => "10", "name" => "Delta and the Bannermen (Part 2)" ),
        array( "id" => "664", "season" => "24", "episode" => "11", "name" => "Delta and the Bannermen (Part 3)" ),
        array( "id" => "665", "season" => "24", "episode" => "12", "name" => "Dragonfire (Part 1)" ),
        array( "id" => "666", "season" => "24", "episode" => "13", "name" => "Dragonfire (Part 2)" ),
        array( "id" => "667", "season" => "24", "episode" => "14", "name" => "Dragonfire (Part 3)" ),
        
        array( "id" => "668", "season" => "25", "episode" => "1",  "name" => "Remembrance of the Daleks (Part 1)" ),
        array( "id" => "669", "season" => "25", "episode" => "2",  "name" => "Remembrance of the Daleks (Part 2)" ),
        array( "id" => "670", "season" => "25", "episode" => "3",  "name" => "Remembrance of the Daleks (Part 3)" ),
        array( "id" => "671", "season" => "25", "episode" => "4",  "name" => "Remembrance of the Daleks (Part 4)" ),
        array( "id" => "672", "season" => "25", "episode" => "5",  "name" => "The Happiness Patrol (Part 1)" ),
        array( "id" => "673", "season" => "25", "episode" => "6",  "name" => "The Happiness Patrol (Part 2)" ),
        array( "id" => "674", "season" => "25", "episode" => "7",  "name" => "The Happiness Patrol (Part 3)" ),
        array( "id" => "675", "season" => "25", "episode" => "8",  "name" => "Silver Nemesis (Part 1)" ),
        array( "id" => "676", "season" => "25", "episode" => "9",  "name" => "Silver Nemesis (Part 2)" ),
        array( "id" => "677", "season" => "25", "episode" => "10", "name" => "Silver Nemesis (Part 3)" ),
        array( "id" => "678", "season" => "25", "episode" => "11", "name" => "The Greatest Show in the Galaxy (Part 1)" ),
        array( "id" => "679", "season" => "25", "episode" => "12", "name" => "The Greatest Show in the Galaxy (Part 2)" ),
        array( "id" => "680", "season" => "25", "episode" => "13", "name" => "The Greatest Show in the Galaxy (Part 3)" ),
        array( "id" => "681", "season" => "25", "episode" => "14", "name" => "The Greatest Show in the Galaxy (Part 4)" ),
        
        array( "id" => "682", "season" => "26", "episode" => "1",  "name" => "Battlefield (Part 1)" ),
        array( "id" => "683", "season" => "26", "episode" => "2",  "name" => "Battlefield (Part 2)" ),
        array( "id" => "684", "season" => "26", "episode" => "3",  "name" => "Battlefield (Part 3)" ),
        array( "id" => "685", "season" => "26", "episode" => "4",  "name" => "Battlefield (Part 4)" ),
        array( "id" => "686", "season" => "26", "episode" => "5",  "name" => "Ghost Light (Part 1)" ),
        array( "id" => "687", "season" => "26", "episode" => "6",  "name" => "Ghost Light (Part 2)" ),
        array( "id" => "688", "season" => "26", "episode" => "7",  "name" => "Ghost Light (Part 3)" ),
        array( "id" => "689", "season" => "26", "episode" => "8",  "name" => "The Curse of Fenric (Part 1)" ),
        array( "id" => "690", "season" => "26", "episode" => "9",  "name" => "The Curse of Fenric (Part 2)" ),
        array( "id" => "691", "season" => "26", "episode" => "10", "name" => "The Curse of Fenric (Part 3)" ),
        array( "id" => "692", "season" => "26", "episode" => "11", "name" => "The Curse of Fenric (Part 4)" ),
        array( "id" => "693", "season" => "26", "episode" => "12", "name" => "Survival (Part 1)" ),
        array( "id" => "694", "season" => "26", "episode" => "13", "name" => "Survival (Part 2)" ),
        array( "id" => "695", "season" => "26", "episode" => "14", "name" => "Survival (Part 3)" ),
        
        array( "id" => "696", "season" => "27", "episode" => "1",  "name" => "Doctor Who => The Movie" ),
        
        array( "id" => "697", "season" => "28", "episode" => "1",  "name" => "Rose" ),
        array( "id" => "698", "season" => "28", "episode" => "2",  "name" => "The End of the World" ),
        array( "id" => "699", "season" => "28", "episode" => "3",  "name" => "The Unquiet Dead" ),
        array( "id" => "700", "season" => "28", "episode" => "4",  "name" => "Aliens of London" ),
        array( "id" => "701", "season" => "28", "episode" => "5",  "name" => "World War Three" ),
        array( "id" => "702", "season" => "28", "episode" => "6",  "name" => "Dalek" ),
        array( "id" => "703", "season" => "28", "episode" => "7",  "name" => "The Long Game" ),
        array( "id" => "704", "season" => "28", "episode" => "8",  "name" => "Father's Day" ),
        array( "id" => "705", "season" => "28", "episode" => "9",  "name" => "The Empty Child" ),
        array( "id" => "706", "season" => "28", "episode" => "10", "name" => "The Doctor Dances" ),
        array( "id" => "707", "season" => "28", "episode" => "11", "name" => "Boom Town" ),
        array( "id" => "708", "season" => "28", "episode" => "12", "name" => "Bad Wolf" ),
        array( "id" => "709", "season" => "28", "episode" => "13", "name" => "The Parting of the Ways" ),
        
        array( "id" => "710", "season" => "29", "episode" => "S",  "name" => "The Christmas Invasion (Christmas Special)" ),
        array( "id" => "711", "season" => "29", "episode" => "1",  "name" => "New Earth" ),
        array( "id" => "712", "season" => "29", "episode" => "2",  "name" => "Tooth and Claw" ),
        array( "id" => "713", "season" => "29", "episode" => "3",  "name" => "School Reunion" ),
        array( "id" => "714", "season" => "29", "episode" => "4",  "name" => "The Girl in the Fireplace" ),
        array( "id" => "715", "season" => "29", "episode" => "5",  "name" => "Rise of the Cybermen" ),
        array( "id" => "716", "season" => "29", "episode" => "6",  "name" => "The Age of Steel" ),
        array( "id" => "717", "season" => "29", "episode" => "7",  "name" => "The Idiot's Lantern" ),
        array( "id" => "718", "season" => "29", "episode" => "8",  "name" => "The Impossible Planet" ),
        array( "id" => "719", "season" => "29", "episode" => "9",  "name" => "The Satan Pit" ),
        array( "id" => "720", "season" => "29", "episode" => "10", "name" => "Love & Monsters" ),
        array( "id" => "721", "season" => "29", "episode" => "11", "name" => "Fear Her" ),
        array( "id" => "722", "season" => "29", "episode" => "12", "name" => "Army of Ghosts" ),
        array( "id" => "723", "season" => "29", "episode" => "13", "name" => "Doomsday" ),
        
        array( "id" => "724", "season" => "30", "episode" => "S",  "name" => "The Runaway Bride (Christmas Special)" ),
        array( "id" => "725", "season" => "30", "episode" => "1",  "name" => "Smith and Jones" ),
        array( "id" => "726", "season" => "30", "episode" => "2",  "name" => "The Shakespeare Code" ),
        array( "id" => "727", "season" => "30", "episode" => "3",  "name" => "Gridlock" ),
        array( "id" => "728", "season" => "30", "episode" => "4",  "name" => "Daleks in Manhattan" ),
        array( "id" => "729", "season" => "30", "episode" => "5",  "name" => "Evolution of the Daleks" ),
        array( "id" => "730", "season" => "30", "episode" => "6",  "name" => "The Lazarus Experiment" ),
        array( "id" => "731", "season" => "30", "episode" => "7",  "name" => "42" ),
        array( "id" => "732", "season" => "30", "episode" => "8",  "name" => "Human Nature" ),
        array( "id" => "733", "season" => "30", "episode" => "9",  "name" => "The Family of Blood" ),
        array( "id" => "734", "season" => "30", "episode" => "10", "name" => "Blink" ),
        array( "id" => "735", "season" => "30", "episode" => "11", "name" => "Utopia" ),
        array( "id" => "736", "season" => "30", "episode" => "12", "name" => "The Sound of Drums" ),
        array( "id" => "737", "season" => "30", "episode" => "13", "name" => "Last of the Time Lords" ),
        
        array( "id" => "738", "season" => "31", "episode" => "S",  "name" => "Voyage of the Damned (Christmas Special)" ),
        array( "id" => "739", "season" => "31", "episode" => "1",  "name" => "Partners in Crime"),
        array( "id" => "740", "season" => "31", "episode" => "2",  "name" => "The Fires of Pompeii" ),
        array( "id" => "741", "season" => "31", "episode" => "3",  "name" => "The Planet of the Ood" ),
        array( "id" => "742", "season" => "31", "episode" => "4",  "name" => "The Sontaran Strategem" ),
        array( "id" => "743", "season" => "31", "episode" => "5",  "name" => "The Poison Sky" ),
        array( "id" => "744", "season" => "31", "episode" => "6",  "name" => "The Doctor's Daughter" ),
        array( "id" => "745", "season" => "31", "episode" => "7",  "name" => "The Unicorn and the Wasp" ),
        array( "id" => "746", "season" => "31", "episode" => "8",  "name" => "Silence in the Library" ),
        array( "id" => "747", "season" => "31", "episode" => "9",  "name" => "Forest of the Dead" ),
        array( "id" => "748", "season" => "31", "episode" => "10", "name" => "Midnight" ),
        array( "id" => "749", "season" => "31", "episode" => "11", "name" => "Turn Left" ),
        array( "id" => "750", "season" => "31", "episode" => "12", "name" => "The Stolen Earth" ),
        array( "id" => "751", "season" => "31", "episode" => "13", "name" => "Journey's End" ),
        
        array( "id" => "752", "season" => "32", "episode" => "14", "name" => "The Next Doctor (Christmas Special)" ),
        array( "id" => "753", "season" => "32", "episode" => "S",  "name" => "Planet of the Dead (Special)" ),
        array( "id" => "754", "season" => "32", "episode" => "S",  "name" => "The Waters of Mars (Special)" ),
        array( "id" => "755", "season" => "32", "episode" => "S",  "name" => "The End of Time (Part 1) (Christmas Special)" ),
        array( "id" => "756", "season" => "32", "episode" => "S",  "name" => "The End of Time (Part 2) (New Year's Special)" ),
        
        array( "id" => "757", "season" => "33", "episode" => "1",  "name" => "The Eleventh Hour" ),
        array( "id" => "758", "season" => "33", "episode" => "2",  "name" => "The Beast Below" ),
        array( "id" => "759", "season" => "33", "episode" => "3",  "name" => "Victory of the Daleks" ),
        array( "id" => "760", "season" => "33", "episode" => "4",  "name" => "The Time of Angels" ),
        array( "id" => "761", "season" => "33", "episode" => "5",  "name" => "Flesh and Stone" ),
        array( "id" => "762", "season" => "33", "episode" => "6",  "name" => "The Vampires of Venice" ),
        array( "id" => "763", "season" => "33", "episode" => "7",  "name" => "Amy's Choice" ),
        array( "id" => "764", "season" => "33", "episode" => "8",  "name" => "The Hungry Earth" ),
        array( "id" => "765", "season" => "33", "episode" => "9",  "name" => "Cold Blood" ),
        array( "id" => "766", "season" => "33", "episode" => "10", "name" => "Vincent and the Doctor" ),
        array( "id" => "767", "season" => "33", "episode" => "11", "name" => "The Lodger" ),
        array( "id" => "768", "season" => "33", "episode" => "12", "name" => "The Pandorica Opens" ),
        array( "id" => "769", "season" => "33", "episode" => "13", "name" => "The Big Bang" ),
        
        array( "id" => "770", "season" => "34", "episode" => "S",  "name" => "A Christmas Carol (Christmas Special)" ),
        array( "id" => "771", "season" => "34", "episode" => "1",  "name" => "The Impossible Astronaut" ),
        array( "id" => "772", "season" => "34", "episode" => "2",  "name" => "Day of the Moon" ),
        array( "id" => "773", "season" => "34", "episode" => "3",  "name" => "The Curse of the Black Spot" ),
        array( "id" => "774", "season" => "34", "episode" => "4",  "name" => "The Doctor's Wife" ),
        array( "id" => "775", "season" => "34", "episode" => "5",  "name" => "The Rebel Flesh" ),
        array( "id" => "776", "season" => "34", "episode" => "6",  "name" => "The Almost People" ),
        array( "id" => "777", "season" => "34", "episode" => "7",  "name" => "A Good Man Goes to War" ),
        array( "id" => "778", "season" => "34", "episode" => "8",  "name" => "Let's Kill Hitler" ),
        array( "id" => "779", "season" => "34", "episode" => "9",  "name" => "Night Terrors" ),
        array( "id" => "780", "season" => "34", "episode" => "10", "name" => "The Girl Who Waited" ),
        array( "id" => "781", "season" => "34", "episode" => "11", "name" => "The God Complex" ),
        array( "id" => "782", "season" => "34", "episode" => "12", "name" => "Closing Time" ),
        array( "id" => "783", "season" => "34", "episode" => "13", "name" => "The Wedding of River Song" ),
        
        array( "id" => "784", "season" => "35", "episode" => "S",  "name" => "The Doctor, the Witch and the Wardrobe (Christmas Special)" ),
        array( "id" => "785", "season" => "35", "episode" => "1",  "name" => "Asylum of the Daleks" ),
        array( "id" => "786", "season" => "35", "episode" => "2",  "name" => "Dinosaurs on a Spaceship" ),
        array( "id" => "787", "season" => "35", "episode" => "3",  "name" => "A Town Called Mercy" ),
        array( "id" => "788", "season" => "35", "episode" => "4",  "name" => "The Power of Three" ),
        array( "id" => "789", "season" => "35", "episode" => "5",  "name" => "The Angels Take Manhattan" ),
        array( "id" => "790", "season" => "35", "episode" => "S",  "name" => "The Snowmen (Christmas Special)" ),
        array( "id" => "791", "season" => "35", "episode" => "6",  "name" => "The Bells of Saint John" ),
        array( "id" => "792", "season" => "35", "episode" => "7",  "name" => "The Rings of Akhaten" ),
        array( "id" => "793", "season" => "35", "episode" => "8",  "name" => "Cold War" ),
        array( "id" => "794", "season" => "35", "episode" => "9",  "name" => "Hide" ),
        array( "id" => "795", "season" => "35", "episode" => "10", "name" => "Journey to the Centre of the TARDIS" ),
        array( "id" => "796", "season" => "35", "episode" => "11", "name" => "The Crimson Horror" ),
        array( "id" => "797", "season" => "35", "episode" => "12", "name" => "Nightmare in Silver" ),
        array( "id" => "798", "season" => "35", "episode" => "13", "name" => "The Name of the Doctor" ),
        
        array( "id" => "799", "season" => "36", "episode" => "S",  "name" => "The Day of the Doctor" ),
        array( "id" => "800", "season" => "36", "episode" => "S",  "name" => "The Time of the Doctor" ),
        array( "id" => "801", "season" => "36", "episode" => "1",  "name" => "Deep Breath" ),
        array( "id" => "802", "season" => "36", "episode" => "2",  "name" => "Into The Dalek" ),
        array( "id" => "803", "season" => "36", "episode" => "3",  "name" => "Robot Of Sherwood" ),
        array( "id" => "804", "season" => "36", "episode" => "4",  "name" => "Listen" ),
        array( "id" => "805", "season" => "36", "episode" => "5",  "name" => "Time Heist" ),
        array( "id" => "806", "season" => "36", "episode" => "6",  "name" => "The Caretaker" ),
        array( "id" => "807", "season" => "36", "episode" => "7",  "name" => "Kill the Moon" ),
        array( "id" => "808", "season" => "36", "episode" => "8",  "name" => "Mummy on the Orient Express" ),
        array( "id" => "809", "season" => "36", "episode" => "9",  "name" => "Flatline" ),
        array( "id" => "810", "season" => "36", "episode" => "10",  "name" => "In the Forest of the Night" ),
        array( "id" => "811", "season" => "36", "episode" => "11",  "name" => "Dark Water" ),
        array( "id" => "812", "season" => "36", "episode" => "12",  "name" => "Death in Heaven" ),

        array( "id" => "813", "season" => "37", "episode" => "S",  "name" => "Last Christmas" ),
        array( "id" => "814", "season" => "37", "episode" => "1",  "name" => "The Magician's Apprentice" ),
        array( "id" => "815", "season" => "37", "episode" => "2",  "name" => "The Witch's Familiar" ),
        array( "id" => "816", "season" => "37", "episode" => "3",  "name" => "Under the Lake" ),
        array( "id" => "817", "season" => "37", "episode" => "4",  "name" => "Before the Flood" ),
        array( "id" => "818", "season" => "37", "episode" => "5",  "name" => "The Girl Who Died" ),
        array( "id" => "819", "season" => "37", "episode" => "6",  "name" => "The Woman Who Lived" ),
        array( "id" => "820", "season" => "37", "episode" => "7",  "name" => "The Zygon Invasion" ),
        array( "id" => "821", "season" => "37", "episode" => "8",  "name" => "The Zygon Inversion" ),
        array( "id" => "822", "season" => "37", "episode" => "9",  "name" => "Sleep No More" ),
        array( "id" => "823", "season" => "37", "episode" => "10",  "name" => "Face the Raven" ),
        array( "id" => "824", "season" => "37", "episode" => "11",  "name" => "Heaven Sent" ),
        array( "id" => "825", "season" => "37", "episode" => "12",  "name" => "Hell Bent" )
    );

    // get all
    $response = $doctors_array;

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($response);
});

/*

              888                            888
              888                            888
              888                            888
 8888b.   .d88888 888  888  .d88b.  88888b.  888888 888  888 888d888 .d88b.  .d8888b
    "88b d88" 888 888  888 d8P  Y8b 888 "88b 888    888  888 888P"  d8P  Y8b 88K
.d888888 888  888 Y88  88P 88888888 888  888 888    888  888 888    88888888 "Y8888b.
888  888 Y88b 888  Y8bd8P  Y8b.     888  888 Y88b.  Y88b 888 888    Y8b.          X88
"Y888888  "Y88888   Y88P    "Y8888  888  888  "Y888  "Y88888 888     "Y8888   88888P'

*/

$app->get('/adventures', function () use ($app) {
    $adventures_array = array(
		array( "id" => "1",   "from" => "1",   "to" => "4",   "name" => "An Unearthly Child" ),
        array( "id" => "2",   "from" => "5",   "to" => "11",  "name" => "The Daleks" ),
        array( "id" => "3",   "from" => "12",  "to" => "13",  "name" => "The Edge of Destruction" ),
        array( "id" => "4",   "from" => "14",  "to" => "20",  "name" => "Marco Polo" ),
        array( "id" => "5",   "from" => "21",  "to" => "26",  "name" => "The Keys of Marinus" ),
        array( "id" => "6",   "from" => "27",  "to" => "30",  "name" => "The Aztecs" ),
        array( "id" => "7",   "from" => "31",  "to" => "36",  "name" => "The Sensorites" ),
        array( "id" => "8",   "from" => "37",  "to" => "42",  "name" => "The Reign of Terror" ),
        array( "id" => "9",   "from" => "43",  "to" => "45",  "name" => "Planet of Giants" ),
        array( "id" => "10",  "from" => "46",  "to" => "51",  "name" => "The Dalek Invasion of Earth" ),
        array( "id" => "11",  "from" => "52",  "to" => "53",  "name" => "The Rescue" ),
        array( "id" => "12",  "from" => "54",  "to" => "57",  "name" => "The Romans" ),
        array( "id" => "13",  "from" => "58",  "to" => "63",  "name" => "The Web Planet" ),
        array( "id" => "14",  "from" => "64",  "to" => "67",  "name" => "The Crusade" ),
        array( "id" => "15",  "from" => "68",  "to" => "71",  "name" => "The Space Museum" ),
        array( "id" => "16",  "from" => "72",  "to" => "77",  "name" => "The Chase" ),
        array( "id" => "17",  "from" => "78",  "to" => "81",  "name" => "The Time Meddler" ),
        array( "id" => "18",  "from" => "82",  "to" => "85",  "name" => "Galaxy 4" ),
        array( "id" => "19",  "from" => "86",  "to" => "86",  "name" => "Mission to the Unknown" ),
        array( "id" => "20",  "from" => "87",  "to" => "90",  "name" => "The Myth Makers" ),
        array( "id" => "21",  "from" => "91",  "to" => "102", "name" => "The Dalek's Master Plan" ),
        array( "id" => "22",  "from" => "103", "to" => "106", "name" => "The Massacre of St. Bartholomew's Eve" ),
        array( "id" => "23",  "from" => "107", "to" => "110", "name" => "The Ark" ),
        array( "id" => "24",  "from" => "111", "to" => "114", "name" => "The Celestial Toymaker" ),
        array( "id" => "25",  "from" => "115", "to" => "118", "name" => "The Gunfighters" ),
        array( "id" => "26",  "from" => "119", "to" => "122", "name" => "The Savages" ),
        array( "id" => "27",  "from" => "123", "to" => "126", "name" => "The War Machines" ),
        array( "id" => "28",  "from" => "127", "to" => "130", "name" => "The Smugglers" ),
        array( "id" => "29",  "from" => "131", "to" => "134", "name" => "The Tenth Planet" ),
        array( "id" => "30",  "from" => "135", "to" => "140", "name" => "The Power of the Daleks" ),
        array( "id" => "31",  "from" => "141", "to" => "144", "name" => "The Highlanders" ),
        array( "id" => "32",  "from" => "145", "to" => "148", "name" => "The Underwater Menace" ),
        array( "id" => "33",  "from" => "149", "to" => "152", "name" => "The Moonbase" ),
        array( "id" => "34",  "from" => "153", "to" => "156", "name" => "The Macra Terror" ),
        array( "id" => "35",  "from" => "157", "to" => "162", "name" => "The Faceless Ones" ),
        array( "id" => "36",  "from" => "163", "to" => "169", "name" => "The Evil of the Daleks" ),
        array( "id" => "37",  "from" => "170", "to" => "173", "name" => "The Tomb of the Cybermen" ),
        array( "id" => "38",  "from" => "174", "to" => "179", "name" => "The Abominable Snowmen" ),
        array( "id" => "39",  "from" => "180", "to" => "185", "name" => "The Ice Warriors" ),
        array( "id" => "40",  "from" => "186", "to" => "191", "name" => "The Enemy of the World" ),
        array( "id" => "41",  "from" => "192", "to" => "197", "name" => "The Web of Fear" ),
        array( "id" => "42",  "from" => "198", "to" => "203", "name" => "Fury from the Deep" ),
        array( "id" => "43",  "from" => "204", "to" => "209", "name" => "The Wheel in Space" ),
        array( "id" => "44",  "from" => "210", "to" => "214", "name" => "The Dominators" ),
        array( "id" => "45",  "from" => "215", "to" => "219", "name" => "The Mind Robber" ),
        array( "id" => "46",  "from" => "220", "to" => "227", "name" => "The Invasion" ),
        array( "id" => "47",  "from" => "228", "to" => "231", "name" => "The Krotons" ),
        array( "id" => "48",  "from" => "232", "to" => "237", "name" => "The Seeds of Death" ),
        array( "id" => "49",  "from" => "238", "to" => "243", "name" => "The Space Pirates" ),
        array( "id" => "50",  "from" => "244", "to" => "253", "name" => "The War Games" ),
        array( "id" => "51",  "from" => "254", "to" => "257", "name" => "Spearhead from Space" ),
        array( "id" => "52",  "from" => "258", "to" => "264", "name" => "Doctor Who and the Silurians" ),
        array( "id" => "53",  "from" => "265", "to" => "271", "name" => "The Ambassadors of Death" ),
        array( "id" => "54",  "from" => "272", "to" => "278", "name" => "Inferno" ),
        array( "id" => "55",  "from" => "279", "to" => "282", "name" => "Terror of the Autons" ),
        array( "id" => "56",  "from" => "283", "to" => "288", "name" => "The Mind of Evil" ),
        array( "id" => "57",  "from" => "289", "to" => "292", "name" => "The Claws of Axos" ),
        array( "id" => "58",  "from" => "293", "to" => "298", "name" => "Colony in Space" ),
        array( "id" => "59",  "from" => "299", "to" => "303", "name" => "The Daemons" ),
        array( "id" => "60",  "from" => "304", "to" => "307", "name" => "Day of the Daleks" ),
        array( "id" => "61",  "from" => "308", "to" => "311", "name" => "The Curse of Peladon" ),
        array( "id" => "62",  "from" => "312", "to" => "317", "name" => "The Sea Devils" ),
        array( "id" => "63",  "from" => "318", "to" => "323", "name" => "The Mutants" ),
        array( "id" => "64",  "from" => "324", "to" => "329", "name" => "The Time Monster" ),
        array( "id" => "65",  "from" => "330", "to" => "333", "name" => "The Three Doctors" ),
        array( "id" => "66",  "from" => "334", "to" => "337", "name" => "Carnival of Monsters" ),
        array( "id" => "67",  "from" => "338", "to" => "343", "name" => "Frontier in Space" ),
        array( "id" => "68",  "from" => "344", "to" => "349", "name" => "Planet of the Daleks" ),
        array( "id" => "69",  "from" => "350", "to" => "355", "name" => "The Green Death" ),
        array( "id" => "70",  "from" => "356", "to" => "359", "name" => "The Time Warrior" ),
        array( "id" => "71",  "from" => "360", "to" => "365", "name" => "Invasion of the Dinosaurs" ),
        array( "id" => "72",  "from" => "366", "to" => "369", "name" => "Death to the Daleks" ),
        array( "id" => "73",  "from" => "370", "to" => "375", "name" => "The Monster of Peladon" ),
        array( "id" => "74",  "from" => "376", "to" => "381", "name" => "Planet of the Spiders" ),
        array( "id" => "75",  "from" => "382", "to" => "385", "name" => "Robot" ),
        array( "id" => "76",  "from" => "386", "to" => "389", "name" => "The Ark in Space" ),
        array( "id" => "77",  "from" => "390", "to" => "391", "name" => "The Sontaran Experiment" ),
        array( "id" => "78",  "from" => "392", "to" => "397", "name" => "Genesis of the Daleks" ),
        array( "id" => "79",  "from" => "398", "to" => "401", "name" => "Revenge of the Cybermen" ),
        array( "id" => "80",  "from" => "402", "to" => "405", "name" => "Terror of the Zygons" ),
        array( "id" => "81",  "from" => "406", "to" => "409", "name" => "Planet of Evil" ),
        array( "id" => "82",  "from" => "410", "to" => "413", "name" => "Pyramids of Mars" ),
        array( "id" => "83",  "from" => "414", "to" => "417", "name" => "The Android-Invasion" ),
        array( "id" => "84",  "from" => "418", "to" => "421", "name" => "The Brain of Morbius" ),
        array( "id" => "85",  "from" => "422", "to" => "427", "name" => "The Seeds of Doom" ),
        array( "id" => "86",  "from" => "428", "to" => "431", "name" => "The Masque of Mandragora" ),
        array( "id" => "87",  "from" => "432", "to" => "435", "name" => "The Hand of Fear" ),
        array( "id" => "88",  "from" => "436", "to" => "439", "name" => "The Deadly Assassin" ),
        array( "id" => "89",  "from" => "440", "to" => "443", "name" => "The Face of Evil" ),
        array( "id" => "90",  "from" => "444", "to" => "447", "name" => "The Robots of Death" ),
        array( "id" => "91",  "from" => "448", "to" => "453", "name" => "Talons of Weng-Chiang" ),
        array( "id" => "92",  "from" => "454", "to" => "457", "name" => "Horror of Fang Rock" ),
        array( "id" => "93",  "from" => "458", "to" => "461", "name" => "The Invisible Enemy" ),
        array( "id" => "94",  "from" => "462", "to" => "465", "name" => "Image of the Fendahl" ),
        array( "id" => "95",  "from" => "466", "to" => "469", "name" => "The Sun Makers" ),
        array( "id" => "96",  "from" => "470", "to" => "473", "name" => "Underworld" ),
        array( "id" => "97",  "from" => "474", "to" => "479", "name" => "The Invasion of Time" ),
        array( "id" => "98",  "from" => "480", "to" => "483", "name" => "The Ribos Operation" ),
        array( "id" => "99",  "from" => "484", "to" => "487", "name" => "The Pirate Planet" ),
        array( "id" => "100", "from" => "488", "to" => "491", "name" => "The Stones of Blood" ),
        array( "id" => "101", "from" => "492", "to" => "495", "name" => "The Androids of Tara" ),
        array( "id" => "102", "from" => "496", "to" => "499", "name" => "The Power of Kroll" ),
        array( "id" => "103", "from" => "500", "to" => "505", "name" => "The Armageddon Factor" ),
        array( "id" => "104", "from" => "506", "to" => "509", "name" => "Destiny of the Daleks" ),
        array( "id" => "105", "from" => "510", "to" => "513", "name" => "The City of Death" ),
        array( "id" => "106", "from" => "514", "to" => "517", "name" => "The Creature from the Pit" ),
        array( "id" => "107", "from" => "518", "to" => "521", "name" => "Nightmare of Eden" ),
        array( "id" => "108", "from" => "522", "to" => "525", "name" => "The Horns of Nimon" ),
        array( "id" => "109", "from" => "526", "to" => "529", "name" => "The Leisure Hive" ),
        array( "id" => "110", "from" => "530", "to" => "533", "name" => "Meglos" ),
        array( "id" => "111", "from" => "534", "to" => "537", "name" => "Full Circle" ),
        array( "id" => "112", "from" => "538", "to" => "541", "name" => "State of Decay" ),
        array( "id" => "113", "from" => "542", "to" => "545", "name" => "Warriors' Gate" ),
        array( "id" => "114", "from" => "546", "to" => "549", "name" => "The Keeper of Traken" ),
        array( "id" => "115", "from" => "550", "to" => "553", "name" => "Logopolis" ),
        array( "id" => "116", "from" => "554", "to" => "557", "name" => "Castrovalva" ),
        array( "id" => "117", "from" => "558", "to" => "561", "name" => "Four to Doomsday" ),
        array( "id" => "118", "from" => "562", "to" => "565", "name" => "Kinda" ),
        array( "id" => "119", "from" => "566", "to" => "569", "name" => "The Visitation" ),
        array( "id" => "120", "from" => "570", "to" => "571", "name" => "Black Orchid" ),
        array( "id" => "121", "from" => "572", "to" => "575", "name" => "Earthshock" ),
        array( "id" => "122", "from" => "576", "to" => "579", "name" => "Time-Flight" ),
        array( "id" => "123", "from" => "580", "to" => "583", "name" => "Arc of Infinity" ),
        array( "id" => "124", "from" => "584", "to" => "587", "name" => "Snakedance" ),
        array( "id" => "125", "from" => "588", "to" => "591", "name" => "Mawdryn Undead" ),
        array( "id" => "126", "from" => "592", "to" => "595", "name" => "Terminus" ),
        array( "id" => "127", "from" => "596", "to" => "599", "name" => "Enlightenment" ),
        array( "id" => "128", "from" => "600", "to" => "601", "name" => "The King's Demons" ),
        array( "id" => "129", "from" => "602", "to" => "602", "name" => "The Five Doctors" ),
        array( "id" => "130", "from" => "603", "to" => "606", "name" => "Warriors of the Deep" ),
        array( "id" => "131", "from" => "607", "to" => "608", "name" => "The Awakening" ),
        array( "id" => "132", "from" => "609", "to" => "612", "name" => "Frontios" ),
        array( "id" => "133", "from" => "613", "to" => "614", "name" => "Resurrection of the Daleks" ),
        array( "id" => "134", "from" => "615", "to" => "618", "name" => "Planet of Fire" ),
        array( "id" => "135", "from" => "619", "to" => "622", "name" => "The Caves of Androzani" ),
        array( "id" => "136", "from" => "623", "to" => "626", "name" => "The Twin Dilemma" ),
        array( "id" => "137", "from" => "627", "to" => "628", "name" => "Attack of the Cybermen" ),
        array( "id" => "138", "from" => "629", "to" => "630", "name" => "Vengeance on Varos" ),
        array( "id" => "139", "from" => "631", "to" => "632", "name" => "The Mark of the Rani" ),
        array( "id" => "140", "from" => "633", "to" => "635", "name" => "The Two Doctors" ),
        array( "id" => "141", "from" => "636", "to" => "637", "name" => "Timelash" ),
        array( "id" => "142", "from" => "638", "to" => "639", "name" => "Revelation of the Daleks" ),
        array( "id" => "143", "from" => "640", "to" => "643", "name" => "The Mysterious Planet" ),
        array( "id" => "144", "from" => "644", "to" => "647", "name" => "Mindwarp" ),
        array( "id" => "145", "from" => "648", "to" => "651", "name" => "Terror of the Vervoids" ),
        array( "id" => "146", "from" => "652", "to" => "653", "name" => "The Ultimate Foe" ),
        array( "id" => "147", "from" => "654", "to" => "657", "name" => "Time and the Rani" ),
        array( "id" => "148", "from" => "658", "to" => "661", "name" => "Paradise Towers" ),
        array( "id" => "149", "from" => "662", "to" => "664", "name" => "Delta and the Bannermen" ),
        array( "id" => "150", "from" => "665", "to" => "667", "name" => "Dragonfire" ),
        array( "id" => "151", "from" => "668", "to" => "671", "name" => "Remembrance of the Daleks" ),
        array( "id" => "152", "from" => "672", "to" => "674", "name" => "The Happiness Patrol" ),
        array( "id" => "153", "from" => "675", "to" => "677", "name" => "Silver Nemesis" ),
        array( "id" => "154", "from" => "678", "to" => "681", "name" => "The Greatest Show in the Galaxy" ),
        array( "id" => "155", "from" => "682", "to" => "685", "name" => "Battlefield" ),
        array( "id" => "156", "from" => "686", "to" => "688", "name" => "Ghost Light" ),
        array( "id" => "157", "from" => "689", "to" => "692", "name" => "The Curse of Fenric" ),
        array( "id" => "158", "from" => "693", "to" => "695", "name" => "Survival" ),
        array( "id" => "159", "from" => "696", "to" => "696", "name" => "TV Movie" ),
        array( "id" => "160", "from" => "697", "to" => "697", "name" => "" ),
        array( "id" => "161", "from" => "698", "to" => "698", "name" => "" ),
        array( "id" => "162", "from" => "699", "to" => "699", "name" => "" ),
        array( "id" => "163", "from" => "700", "to" => "701", "name" => "" ),
        array( "id" => "164", "from" => "702", "to" => "702", "name" => "" ),
        array( "id" => "165", "from" => "703", "to" => "703", "name" => "" ),
        array( "id" => "166", "from" => "704", "to" => "704", "name" => "" ),
        array( "id" => "167", "from" => "705", "to" => "706", "name" => "" ),
        array( "id" => "168", "from" => "707", "to" => "707", "name" => "" ),
        array( "id" => "169", "from" => "708", "to" => "709", "name" => "" ),
        array( "id" => "170", "from" => "710", "to" => "710", "name" => "" ),
        array( "id" => "171", "from" => "711", "to" => "711", "name" => "" ),
        array( "id" => "172", "from" => "712", "to" => "712", "name" => "" ),
        array( "id" => "173", "from" => "713", "to" => "713", "name" => "" ),
        array( "id" => "174", "from" => "714", "to" => "714", "name" => "" ),
        array( "id" => "175", "from" => "715", "to" => "716", "name" => "" ),
        array( "id" => "176", "from" => "717", "to" => "717", "name" => "" ),
        array( "id" => "177", "from" => "718", "to" => "719", "name" => "" ),
        array( "id" => "178", "from" => "720", "to" => "720", "name" => "" ),
        array( "id" => "179", "from" => "721", "to" => "721", "name" => "" ),
        array( "id" => "180", "from" => "722", "to" => "723", "name" => "" ),
        array( "id" => "181", "from" => "724", "to" => "724", "name" => "" ),
        array( "id" => "182", "from" => "725", "to" => "725", "name" => "" ),
        array( "id" => "183", "from" => "726", "to" => "726", "name" => "" ),
        array( "id" => "184", "from" => "727", "to" => "727", "name" => "" ),
        array( "id" => "185", "from" => "728", "to" => "729", "name" => "" ),
        array( "id" => "186", "from" => "730", "to" => "730", "name" => "" ),
        array( "id" => "187", "from" => "731", "to" => "731", "name" => "" ),
        array( "id" => "188", "from" => "732", "to" => "733", "name" => "" ),
        array( "id" => "189", "from" => "734", "to" => "734", "name" => "" ),
        array( "id" => "190", "from" => "735", "to" => "737", "name" => "" ),
        array( "id" => "191", "from" => "738", "to" => "738", "name" => "" ),
        array( "id" => "192", "from" => "739", "to" => "739", "name" => "" ),
        array( "id" => "193", "from" => "740", "to" => "740", "name" => "" ),
        array( "id" => "194", "from" => "741", "to" => "741", "name" => "" ),
        array( "id" => "195", "from" => "742", "to" => "743", "name" => "" ),
        array( "id" => "196", "from" => "744", "to" => "744", "name" => "" ),
        array( "id" => "197", "from" => "745", "to" => "745", "name" => "" ),
        array( "id" => "198", "from" => "746", "to" => "747", "name" => "" ),
        array( "id" => "199", "from" => "748", "to" => "748", "name" => "" ),
        array( "id" => "200", "from" => "749", "to" => "749", "name" => "" ),
        array( "id" => "201", "from" => "750", "to" => "751", "name" => "" ),
        array( "id" => "202", "from" => "752", "to" => "752", "name" => "" ),
        array( "id" => "203", "from" => "753", "to" => "753", "name" => "" ),
        array( "id" => "204", "from" => "754", "to" => "754", "name" => "" ),
        array( "id" => "205", "from" => "755", "to" => "756", "name" => "" ),
        array( "id" => "206", "from" => "757", "to" => "757", "name" => "" ),
        array( "id" => "207", "from" => "758", "to" => "758", "name" => "" ),
        array( "id" => "208", "from" => "759", "to" => "759", "name" => "" ),
        array( "id" => "209", "from" => "760", "to" => "761", "name" => "" ),
        array( "id" => "210", "from" => "762", "to" => "762", "name" => "" ),
        array( "id" => "211", "from" => "763", "to" => "763", "name" => "" ),
        array( "id" => "212", "from" => "764", "to" => "765", "name" => "" ),
        array( "id" => "213", "from" => "766", "to" => "766", "name" => "" ),
        array( "id" => "214", "from" => "767", "to" => "767", "name" => "" ),
        array( "id" => "215", "from" => "768", "to" => "769", "name" => "" ),
        array( "id" => "216", "from" => "770", "to" => "770", "name" => "" ),
        array( "id" => "217", "from" => "771", "to" => "772", "name" => "" ),
        array( "id" => "218", "from" => "773", "to" => "773", "name" => "" ),
        array( "id" => "219", "from" => "774", "to" => "774", "name" => "" ),
        array( "id" => "220", "from" => "775", "to" => "776", "name" => "" ),
        array( "id" => "221", "from" => "777", "to" => "777", "name" => "" ),
        array( "id" => "222", "from" => "778", "to" => "778", "name" => "" ),
        array( "id" => "223", "from" => "779", "to" => "779", "name" => "" ),
        array( "id" => "224", "from" => "780", "to" => "780", "name" => "" ),
        array( "id" => "225", "from" => "781", "to" => "781", "name" => "" ),
        array( "id" => "226", "from" => "782", "to" => "782", "name" => "" ),
        array( "id" => "227", "from" => "783", "to" => "783", "name" => "" ),
        array( "id" => "228", "from" => "784", "to" => "784", "name" => "" ),
        array( "id" => "229", "from" => "785", "to" => "785", "name" => "" ),
        array( "id" => "230", "from" => "786", "to" => "786", "name" => "" ),
        array( "id" => "231", "from" => "787", "to" => "787", "name" => "" ),
        array( "id" => "232", "from" => "788", "to" => "788", "name" => "" ),
        array( "id" => "233", "from" => "789", "to" => "789", "name" => "" ),
        array( "id" => "234", "from" => "790", "to" => "790", "name" => "" ),
        array( "id" => "235", "from" => "791", "to" => "791", "name" => "" ),
        array( "id" => "236", "from" => "792", "to" => "792", "name" => "" ),
        array( "id" => "237", "from" => "793", "to" => "793", "name" => "" ),
        array( "id" => "238", "from" => "794", "to" => "794", "name" => "" ),
        array( "id" => "239", "from" => "795", "to" => "795", "name" => "" ),
        array( "id" => "240", "from" => "796", "to" => "796", "name" => "" ),
        array( "id" => "241", "from" => "797", "to" => "797", "name" => "" ),
        array( "id" => "242", "from" => "798", "to" => "798", "name" => "" ),
        array( "id" => "243", "from" => "799", "to" => "799", "name" => "" ),
        array( "id" => "244", "from" => "800", "to" => "800", "name" => "" ),
        array( "id" => "245", "from" => "801", "to" => "801", "name" => "" ),
        array( "id" => "246", "from" => "802", "to" => "802", "name" => "" ),
        array( "id" => "247", "from" => "803", "to" => "803", "name" => "" ),
        array( "id" => "248", "from" => "804", "to" => "804", "name" => "" ),
        array( "id" => "249", "from" => "805", "to" => "805", "name" => "" ),
        array( "id" => "250", "from" => "806", "to" => "806", "name" => "" ),
        array( "id" => "251", "from" => "807", "to" => "807", "name" => "" ),
        array( "id" => "252", "from" => "808", "to" => "808", "name" => "" ),
        array( "id" => "253", "from" => "809", "to" => "809", "name" => "" ),
        array( "id" => "254", "from" => "810", "to" => "810", "name" => "" ),
        array( "id" => "255", "from" => "811", "to" => "812", "name" => "" ),
        array( "id" => "256", "from" => "813", "to" => "813", "name" => "" ),
        array( "id" => "257", "from" => "814", "to" => "815", "name" => "" ),
        array( "id" => "258", "from" => "816", "to" => "817", "name" => "" ),
        array( "id" => "259", "from" => "818", "to" => "819", "name" => "" ),
        array( "id" => "260", "from" => "820", "to" => "821", "name" => "" ),
        array( "id" => "261", "from" => "822", "to" => "822", "name" => "" ),
        array( "id" => "262", "from" => "823", "to" => "823", "name" => "" ),
        array( "id" => "263", "from" => "824", "to" => "825", "name" => "" )
    );

    // get all
    $response = $adventures_array;

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($response);
});

/*

888                            888    d8b
888                            888    Y8P
888                            888
888  .d88b.   .d8888b  8888b.  888888 888  .d88b.  88888b.  .d8888b
888 d88""88b d88P"        "88b 888    888 d88""88b 888 "88b 88K
888 888  888 888      .d888888 888    888 888  888 888  888 "Y8888b.
888 Y88..88P Y88b.    888  888 Y88b.  888 Y88..88P 888  888      X88
888  "Y88P"   "Y8888P "Y888888  "Y888 888  "Y88P"  888  888  88888P'

*/

$app->get('/locations', function () use ($app) {
    $locations_array = array(
		array( "id" => "1",    "from" => "1",    "to" => "4",      "place" => "Earth" ),
        array( "id" => "2",    "from" => "5",    "to" => "11",     "place" => "Skaro" ),
        array( "id" => "3",    "from" => "12",   "to" => "13",     "place" => "TARDIS" ),
        array( "id" => "4",    "from" => "14",   "to" => "20",     "place" => "Earth" ),
        array( "id" => "5",    "from" => "21",   "to" => "26",     "place" => "Marinus" ),
        array( "id" => "6",    "from" => "27",   "to" => "30",     "place" => "Earth" ),
        array( "id" => "7",    "from" => "31",   "to" => "36",     "place" => "Sense-Sphere" ),
        array( "id" => "8",    "from" => "37",   "to" => "51",     "place" => "Earth" ),
        array( "id" => "9",    "from" => "52",   "to" => "53",     "place" => "Dido" ),
        array( "id" => "10",   "from" => "54",   "to" => "57",     "place" => "Earth" ),
        array( "id" => "11",   "from" => "58",   "to" => "63",     "place" => "Vortis" ),
        array( "id" => "12",   "from" => "64",   "to" => "67",     "place" => "Earth" ),
        array( "id" => "13",   "from" => "68",   "to" => "71",     "place" => "Xeros" ),
        array( "id" => "14",   "from" => "72",   "to" => "77",     "place" => "Aridius Mechanus, Earth" ),
        array( "id" => "15",   "from" => "78",   "to" => "81",     "place" => "Earth" ),
        array( "id" => "16",   "from" => "82",   "to" => "85",     "place" => "(arid planet)" ),
        array( "id" => "17",   "from" => "86",   "to" => "86",     "place" => "Kembel" ),
        array( "id" => "18",   "from" => "87",   "to" => "90",     "place" => "Earth" ),
        array( "id" => "19",   "from" => "91",   "to" => "102",    "place" => "Kembel, Earth, Mira" ),
        array( "id" => "20",   "from" => "103",  "to" => "106",    "place" => "Earth" ),
        array( "id" => "21",   "from" => "107",  "to" => "110",    "place" => "(space)" ),
        array( "id" => "22",   "from" => "111",  "to" => "118",    "place" => "Earth" ),
        array( "id" => "23",   "from" => "119",  "to" => "122",    "place" => "(distant planet)" ),
        array( "id" => "24",   "from" => "123",  "to" => "134",    "place" => "Earth" ),
        array( "id" => "25",   "from" => "135",  "to" => "140",    "place" => "Vulcan" ),
        array( "id" => "26",   "from" => "141",  "to" => "148",    "place" => "Earth" ),
        array( "id" => "27",   "from" => "149",  "to" => "152",    "place" => "The Moon" ),
        array( "id" => "28",   "from" => "153",  "to" => "156",    "place" => "N/A" ),
        array( "id" => "29",   "from" => "157",  "to" => "162",    "place" => "Earth" ),
        array( "id" => "30",   "from" => "163",  "to" => "169",    "place" => "Skaro, Earth" ),
        array( "id" => "31",   "from" => "170",  "to" => "173",    "place" => "Telos" ),
        array( "id" => "32",   "from" => "174",  "to" => "203",    "place" => "Earth" ),
        array( "id" => "33",   "from" => "204",  "to" => "209",    "place" => "Station W3" ),
        array( "id" => "34",   "from" => "210",  "to" => "214",    "place" => "Dulkis" ),
        array( "id" => "35",   "from" => "215",  "to" => "219",    "place" => "Fiction" ),
        array( "id" => "36",   "from" => "220",  "to" => "227",    "place" => "Earth" ),
        array( "id" => "37",   "from" => "228",  "to" => "231",    "place" => "(planet of the Gonds)" ),
        array( "id" => "38",   "from" => "232",  "to" => "237",    "place" => "The Moon, Earth" ),
        array( "id" => "39",   "from" => "238",  "to" => "243",    "place" => "(space)" ),
        array( "id" => "40",   "from" => "244",  "to" => "253",    "place" => "N/A" ),
        array( "id" => "41",   "from" => "254",  "to" => "292",    "place" => "Earth" ),
        array( "id" => "42",   "from" => "293",  "to" => "298",    "place" => "Uxarieus" ),
        array( "id" => "43",   "from" => "299",  "to" => "307",    "place" => "Earth" ),
        array( "id" => "44",   "from" => "308",  "to" => "311",    "place" => "Peladon" ),
        array( "id" => "45",   "from" => "312",  "to" => "317",    "place" => "Earth" ),
        array( "id" => "46",   "from" => "318",  "to" => "323",    "place" => "Solos" ),
        array( "id" => "47",   "from" => "324",  "to" => "329",    "place" => "Earth" ),
        array( "id" => "48",   "from" => "330",  "to" => "333",    "place" => "Earth, Gallifrey" ),
        array( "id" => "49",   "from" => "334",  "to" => "337",    "place" => "Inter Minor" ),
        array( "id" => "50",   "from" => "338",  "to" => "343",    "place" => "Earth, The Moon, Draconia" ),
        array( "id" => "51",   "from" => "344",  "to" => "349",    "place" => "Spiridon" ),
        array( "id" => "52",   "from" => "350",  "to" => "365",    "place" => "Earth" ),
        array( "id" => "53",   "from" => "366",  "to" => "369",    "place" => "Exxilon" ),
        array( "id" => "54",   "from" => "370",  "to" => "375",    "place" => "Peladon" ),
        array( "id" => "55",   "from" => "376",  "to" => "381",    "place" => "Earth, Metebelis 3" ),
        array( "id" => "56",   "from" => "382",  "to" => "385",    "place" => "Earth" ),
        array( "id" => "57",   "from" => "386",  "to" => "389",    "place" => "Nerva Beacon" ),
        array( "id" => "58",   "from" => "390",  "to" => "391",    "place" => "Earth" ),
        array( "id" => "59",   "from" => "392",  "to" => "397",    "place" => "Skaro" ),
        array( "id" => "60",   "from" => "398",  "to" => "401",    "place" => "Nerva Beacon, Voga" ),
        array( "id" => "61",   "from" => "402",  "to" => "405",    "place" => "Earth" ),
        array( "id" => "62",   "from" => "406",  "to" => "409",    "place" => "Zeta Minor" ),
        array( "id" => "63",   "from" => "410",  "to" => "413",    "place" => "Earth" ),
        array( "id" => "64",   "from" => "414",  "to" => "417",    "place" => "Oseidon" ),
        array( "id" => "65",   "from" => "418",  "to" => "421",    "place" => "Karn" ),
        array( "id" => "66",   "from" => "422",  "to" => "431",    "place" => "Earth" ),
        array( "id" => "67",   "from" => "432",  "to" => "435",    "place" => "Earth, Kastria" ),
        array( "id" => "68",   "from" => "436",  "to" => "439",    "place" => "Gallifrey" ),
        array( "id" => "69",   "from" => "440",  "to" => "443",    "place" => "(jungle planet)" ),
        array( "id" => "70",   "from" => "444",  "to" => "447",    "place" => "Storm Mine 4" ),
        array( "id" => "71",   "from" => "448",  "to" => "457",    "place" => "Earth" ),
        array( "id" => "72",   "from" => "458",  "to" => "461",    "place" => "K4067, Titan Base" ),
        array( "id" => "73",   "from" => "462",  "to" => "465",    "place" => "Earth" ),
        array( "id" => "74",   "from" => "466",  "to" => "469",    "place" => "Pluto" ),
        array( "id" => "75",   "from" => "470",  "to" => "473",    "place" => "N/A" ),
        array( "id" => "76",   "from" => "474",  "to" => "479",    "place" => "Gallifrey" ),
        array( "id" => "77",   "from" => "480",  "to" => "483",    "place" => "Ribos" ),
        array( "id" => "78",   "from" => "484",  "to" => "487",    "place" => "Zanak" ),
        array( "id" => "79",   "from" => "488",  "to" => "491",    "place" => "Earth" ),
        array( "id" => "80",   "from" => "492",  "to" => "495",    "place" => "Tara" ),
        array( "id" => "81",   "from" => "496",  "to" => "499",    "place" => "Delta III" ),
        array( "id" => "82",   "from" => "500",  "to" => "505",    "place" => "Atrios, Zeos" ),
        array( "id" => "83",   "from" => "506",  "to" => "509",    "place" => "Skaro" ),
        array( "id" => "84",   "from" => "510",  "to" => "513",    "place" => "Earth" ),
        array( "id" => "85",   "from" => "514",  "to" => "517",    "place" => "Chloris" ),
        array( "id" => "86",   "from" => "518",  "to" => "521",    "place" => "The Empress" ),
        array( "id" => "87",   "from" => "522",  "to" => "525",    "place" => "Skonnos, Crinoth" ),
        array( "id" => "88",   "from" => "526",  "to" => "529",    "place" => "Earth, Argolis" ),
        array( "id" => "89",   "from" => "530",  "to" => "533",    "place" => "Zolfa-Thura, Tigella" ),
        array( "id" => "90",   "from" => "534",  "to" => "537",    "place" => "Alzarius" ),
        array( "id" => "91",   "from" => "538",  "to" => "541",    "place" => "N/A" ),
        array( "id" => "92",   "from" => "542",  "to" => "545",    "place" => "The Gateway" ),
        array( "id" => "93",   "from" => "546",  "to" => "549",    "place" => "Traken" ),
        array( "id" => "94",   "from" => "550",  "to" => "553",    "place" => "Earth, Logopolis" ),
        array( "id" => "95",   "from" => "554",  "to" => "557",    "place" => "Earth, Castrovalva" ),
        array( "id" => "96",   "from" => "558",  "to" => "561",    "place" => "Monarch's Ship" ),
        array( "id" => "97",   "from" => "562",  "to" => "565",    "place" => "Deva Loka" ),
        array( "id" => "98",   "from" => "566",  "to" => "571",    "place" => "Earth" ),
        array( "id" => "99",   "from" => "572",  "to" => "575",    "place" => "Earth, Briggs' freighter" ),
        array( "id" => "100",  "from" => "576",  "to" => "579",    "place" => "Earth" ),
        array( "id" => "101",  "from" => "580",  "to" => "583",    "place" => "Earth, Gallifrey" ),
        array( "id" => "102",  "from" => "584",  "to" => "587",    "place" => "Manussa" ),
        array( "id" => "103",  "from" => "588",  "to" => "591",    "place" => "Earth, Mawdryn's ship" ),
        array( "id" => "104",  "from" => "592",  "to" => "595",    "place" => "Terminus" ),
        array( "id" => "105",  "from" => "596",  "to" => "599",    "place" => "N/A" ),
        array( "id" => "106",  "from" => "600",  "to" => "601",    "place" => "Earth" ),
        array( "id" => "107",  "from" => "602",  "to" => "602",    "place" => "Earth, Gallifrey" ),
        array( "id" => "108",  "from" => "603",  "to" => "608",    "place" => "Earth" ),
        array( "id" => "109",  "from" => "609",  "to" => "612",    "place" => "Frontios" ),
        array( "id" => "110",  "from" => "613",  "to" => "618",    "place" => "Earth" ),
        array( "id" => "111",  "from" => "619",  "to" => "622",    "place" => "Andronazi Minor, Andronazi Major" ),
        array( "id" => "112",  "from" => "623",  "to" => "626",    "place" => "Titan III, Jaconda" ),
        array( "id" => "113",  "from" => "627",  "to" => "628",    "place" => "Earth, Telos" ),
        array( "id" => "114",  "from" => "629",  "to" => "630",    "place" => "Varos" ),
        array( "id" => "115",  "from" => "631",  "to" => "632",    "place" => "Earth" ),
        array( "id" => "116",  "from" => "633",  "to" => "635",    "place" => "Earth, Space Station Chimera" ),
        array( "id" => "117",  "from" => "636",  "to" => "637",    "place" => "Karfel" ),
        array( "id" => "118",  "from" => "638",  "to" => "639",    "place" => "Necros" ),
        array( "id" => "119",  "from" => "640",  "to" => "643",    "place" => "Earth" ),
        array( "id" => "120",  "from" => "644",  "to" => "647",    "place" => "Thoros Beta" ),
        array( "id" => "121",  "from" => "648",  "to" => "651",    "place" => "Hyperion III" ),
        array( "id" => "122",  "from" => "652",  "to" => "653",    "place" => "The Matrix" ),
        array( "id" => "123",  "from" => "654",  "to" => "657",    "place" => "Talk Lakertya" ),
        array( "id" => "124",  "from" => "658",  "to" => "664",    "place" => "Earth" ),
        array( "id" => "125",  "from" => "665",  "to" => "667",    "place" => "Iceworld" ),
        array( "id" => "126",  "from" => "668",  "to" => "671",    "place" => "Earth" ),
        array( "id" => "127",  "from" => "672",  "to" => "674",    "place" => "Terra Alpha" ),
        array( "id" => "128",  "from" => "675",  "to" => "677",    "place" => "Earth" ),
        array( "id" => "129",  "from" => "678",  "to" => "681",    "place" => "Segonax" ),
        array( "id" => "130",  "from" => "682",  "to" => "692",    "place" => "Earth" ),
        array( "id" => "131",  "from" => "693",  "to" => "695",    "place" => "Earth, Cheetah World" ),
        array( "id" => "132",  "from" => "696",  "to" => "697",    "place" => "Earth" ),
        array( "id" => "133",  "from" => "698",  "to" => "698",    "place" => "Platform One" ),
        array( "id" => "134",  "from" => "699",  "to" => "702",    "place" => "Earth" ),
        array( "id" => "135",  "from" => "703",  "to" => "703",    "place" => "Satellite Five" ),
        array( "id" => "136",  "from" => "704",  "to" => "707",    "place" => "Earth" ),
        array( "id" => "137",  "from" => "708",  "to" => "709",    "place" => "Satellite Five, Earth" ),
        array( "id" => "138",  "from" => "710",  "to" => "710",    "place" => "Earth" ),
        array( "id" => "139",  "from" => "711",  "to" => "711",    "place" => "New Earth" ),
        array( "id" => "140",  "from" => "712",  "to" => "717",    "place" => "Earth" ),
        array( "id" => "141",  "from" => "718",  "to" => "719",    "place" => "Krop Tor" ),
        array( "id" => "142",  "from" => "720",  "to" => "724",    "place" => "Earth" ),
        array( "id" => "143",  "from" => "725",  "to" => "725",    "place" => "Earth, The Moon" ),
        array( "id" => "144",  "from" => "726",  "to" => "726",    "place" => "Earth" ),
        array( "id" => "145",  "from" => "727",  "to" => "727",    "place" => "New Earth" ),
        array( "id" => "146",  "from" => "728",  "to" => "730",    "place" => "Earth" ),
        array( "id" => "147",  "from" => "731",  "to" => "731",    "place" => "S.S. Pentallian" ),
        array( "id" => "148",  "from" => "732",  "to" => "737",    "place" => "Earth" ),
        array( "id" => "149",  "from" => "738",  "to" => "738",    "place" => "Starship Titanic, Earth" ),
        array( "id" => "150",  "from" => "739",  "to" => "740",    "place" => "Earth" ),
        array( "id" => "151",  "from" => "741",  "to" => "741",    "place" => "Ood Sphere" ),
        array( "id" => "152",  "from" => "742",  "to" => "743",    "place" => "Earth" ),
        array( "id" => "153",  "from" => "744",  "to" => "744",    "place" => "Messaline" ),
        array( "id" => "154",  "from" => "745",  "to" => "745",    "place" => "Earth" ),
        array( "id" => "155",  "from" => "746",  "to" => "747",    "place" => "The Library" ),
        array( "id" => "156",  "from" => "748",  "to" => "748",    "place" => "Midnight" ),
        array( "id" => "157",  "from" => "749",  "to" => "752",    "place" => "Earth" ),
        array( "id" => "158",  "from" => "753",  "to" => "753",    "place" => "San Helios" ),
        array( "id" => "159",  "from" => "754",  "to" => "754",    "place" => "Mars, Earth" ),
        array( "id" => "160",  "from" => "755",  "to" => "756",    "place" => "Earth, Gallifrey" ),
        array( "id" => "161",  "from" => "757",  "to" => "757",    "place" => "Earth" ),
        array( "id" => "162",  "from" => "758",  "to" => "758",    "place" => "Starship UK" ),
        array( "id" => "163",  "from" => "759",  "to" => "759",    "place" => "Earth" ),
        array( "id" => "164",  "from" => "760",  "to" => "761",    "place" => "Alfava Metraxis" ),
        array( "id" => "165",  "from" => "762",  "to" => "769",    "place" => "Earth" ),
        array( "id" => "166",  "from" => "770",  "to" => "770",    "place" => "Earth, Ember" ),
        array( "id" => "167",  "from" => "771",  "to" => "773",    "place" => "Earth" ),
        array( "id" => "168",  "from" => "774",  "to" => "774",    "place" => "TARDIS" ),
        array( "id" => "169",  "from" => "775",  "to" => "776",    "place" => "Earth" ),
        array( "id" => "170",  "from" => "777",  "to" => "777",    "place" => "Earth, Demon's Run" ),
        array( "id" => "171",  "from" => "778",  "to" => "779",    "place" => "Earth" ),
        array( "id" => "172",  "from" => "780",  "to" => "780",    "place" => "Apalapucian" ),
        array( "id" => "173",  "from" => "781",  "to" => "781",    "place" => "Prison Ship" ),
        array( "id" => "174",  "from" => "782",  "to" => "784",    "place" => "Earth" ),
        array( "id" => "175",  "from" => "785",  "to" => "785",    "place" => "Earth, Skaro, Asylum of the Daleks" ),
        array( "id" => "176",  "from" => "786",  "to" => "786",    "place" => "Earth, Silurian Spaceship" ),
        array( "id" => "177",  "from" => "787",  "to" => "791",    "place" => "Earth" ),
        array( "id" => "178",  "from" => "792",  "to" => "792",    "place" => "Akhaten, Tiaanamat" ),
        array( "id" => "179",  "from" => "793",  "to" => "794",    "place" => "Earth" ),
        array( "id" => "180",  "from" => "795",  "to" => "795",    "place" => "TARDIS" ),
        array( "id" => "181",  "from" => "796",  "to" => "796",    "place" => "Earth" ),
        array( "id" => "182",  "from" => "797",  "to" => "797",    "place" => "Hedgewick's World of Wonders" ),
        array( "id" => "183",  "from" => "798",  "to" => "798",    "place" => "Earth, Trenzalore" ),
        array( "id" => "184",  "from" => "799",  "to" => "799",    "place" => "Earth, Gallifrey" ),
        array( "id" => "185",  "from" => "800",  "to" => "800",    "place" => "Earth, Trenzalore" )
    );

    // get all
    $response = $locations_array;

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($response);
});

/*

888    d8b
888    Y8P
888
888888 888 88888b.d88b.   .d88b.  .d8888b
888    888 888 "888 "88b d8P  Y8b 88K
888    888 888  888  888 88888888 "Y8888b.
Y88b.  888 888  888  888 Y8b.          X88
 "Y888 888 888  888  888  "Y8888   88888P'

*/

$app->get('/times', function () use ($app) {
    $times_array = array(
		array( "id" => "1",    "from" => "1",    "to" => "4",      "time" => "100,000 BC" ),
		array( "id" => "2",    "from" => "5",    "to" => "11",     "time" => "" ),
		array( "id" => "3",    "from" => "12",   "to" => "13",     "time" => "" ),
		array( "id" => "4",    "from" => "14",   "to" => "20",     "time" => "1289" ),
		array( "id" => "5",    "from" => "21",   "to" => "26",     "time" => "" ),
		array( "id" => "6",    "from" => "27",   "to" => "30",     "time" => "15th Century" ),
		array( "id" => "7",    "from" => "31",   "to" => "36",     "time" => "" ),
		array( "id" => "8",    "from" => "37",   "to" => "42",     "time" => "18th Century" ),
		array( "id" => "9",    "from" => "43",   "to" => "45",     "time" => "" ),
		array( "id" => "10",   "from" => "46",   "to" => "51",     "time" => "Some time after 2164" ),
		array( "id" => "11",   "from" => "52",   "to" => "53",     "time" => "" ),
		array( "id" => "12",   "from" => "54",   "to" => "57",     "time" => "between 54 and 68 AD" ),
		array( "id" => "13",   "from" => "58",   "to" => "63",     "time" => "" ),
		array( "id" => "14",   "from" => "64",   "to" => "67",     "time" => "12th Century" ),
		array( "id" => "15",   "from" => "68",   "to" => "71",     "time" => "" ),
		array( "id" => "16",   "from" => "72",   "to" => "77",     "time" => "(multiple)" ),
		array( "id" => "17",   "from" => "78",   "to" => "81",     "time" => "1066" ),
		array( "id" => "18",   "from" => "82",   "to" => "85",     "time" => "" ),
		array( "id" => "19",   "from" => "86",   "to" => "86",     "time" => "" ),
		array( "id" => "20",   "from" => "87",   "to" => "90",     "time" => "1184 BC" ),
		array( "id" => "21",   "from" => "91",   "to" => "102",    "time" => "" ),
		array( "id" => "22",   "from" => "103",  "to" => "106",    "time" => "1572" ),
		array( "id" => "23",   "from" => "107",  "to" => "110",    "time" => "around 10,000,000" ),
		array( "id" => "24",   "from" => "111",  "to" => "114",    "time" => "" ),
		array( "id" => "132",  "from" => "697",  "to" => "697",    "time" => "4th,5th,6th March 2005" ),
        array( "id" => "133",  "from" => "698",  "to" => "698",    "time" => "5,000,000,000" ),
        array( "id" => "134",  "from" => "699",  "to" => "699",    "time" => "24th December 1869" ),
        array( "id" => "135",  "from" => "700",  "to" => "701",    "time" => "March 2006" ),
        array( "id" => "136",  "from" => "702",  "to" => "702",    "time" => "2012" ),
        array( "id" => "137",  "from" => "703",  "to" => "703",    "time" => "200,000" ),
        array( "id" => "138",  "from" => "704",  "to" => "704",    "time" => "1986" ),
        array( "id" => "139",  "from" => "705",  "to" => "706",    "time" => "1941" ),
        array( "id" => "140",  "from" => "707",  "to" => "707",    "time" => "2006" ),
        array( "id" => "141",  "from" => "708",  "to" => "709",    "time" => "200,100" ),
        array( "id" => "142",  "from" => "710",  "to" => "710",    "time" => "December 2006" ),
        array( "id" => "143",  "from" => "711",  "to" => "711",    "time" => "5,000,000,023" ),
        array( "id" => "144",  "from" => "712",  "to" => "712",    "time" => "1879" ),
        array( "id" => "145",  "from" => "713",  "to" => "713",    "time" => "2007" ),
        array( "id" => "146",  "from" => "714",  "to" => "714",    "time" => "18th century, 51st century" ),
        array( "id" => "147",  "from" => "715",  "to" => "716",    "time" => "1st,2nd February 2007" ),
        array( "id" => "148",  "from" => "717",  "to" => "717",    "time" => "1953" ),
        array( "id" => "149",  "from" => "718",  "to" => "719",    "time" => "43,000" ),
        array( "id" => "150",  "from" => "720",  "to" => "720",    "time" => "2007" ),
        array( "id" => "151",  "from" => "721",  "to" => "721",    "time" => "2012" ),
        array( "id" => "152",  "from" => "722",  "to" => "723",    "time" => "2007" ),
        array( "id" => "153",  "from" => "724",  "to" => "724",    "time" => "Christmas 2006" ),
        array( "id" => "154",  "from" => "725",  "to" => "725",    "time" => "2008" ),
        array( "id" => "155",  "from" => "726",  "to" => "726",    "time" => "1599" ),
        array( "id" => "156",  "from" => "727",  "to" => "727",    "time" => "5,000,000,053" ),
        array( "id" => "157",  "from" => "728",  "to" => "729",    "time" => "1930s" ),
        array( "id" => "158",  "from" => "730",  "to" => "730",    "time" => "2008" ),
        array( "id" => "159",  "from" => "731",  "to" => "731",    "time" => "42nd century" ),
        array( "id" => "160",  "from" => "732",  "to" => "733",    "time" => "1913" ),
        array( "id" => "161",  "from" => "734",  "to" => "734",    "time" => "2007" ),
        array( "id" => "162",  "from" => "735",  "to" => "735",    "time" => "100 Trillion" ),
        array( "id" => "163",  "from" => "736",  "to" => "737",    "time" => "2008,2009" ),
        array( "id" => "165",  "from" => "738",  "to" => "738",    "time" => "Christmas 2008" ),
        array( "id" => "166",  "from" => "739",  "to" => "739",    "time" => "2009" ),
        array( "id" => "167",  "from" => "740",  "to" => "740",    "time" => "23rd/24th August 79AD" ),
        array( "id" => "168",  "from" => "741",  "to" => "741",    "time" => "4126" ),
        array( "id" => "169",  "from" => "742",  "to" => "743",    "time" => "2009" ),
        array( "id" => "170",  "from" => "744",  "to" => "744",    "time" => "60120724 (new bizantine calendar)" ),
        array( "id" => "171",  "from" => "745",  "to" => "745",    "time" => "3rd December 1926" ),
        array( "id" => "172",  "from" => "746",  "to" => "747",    "time" => "51st century" ),
        array( "id" => "173",  "from" => "748",  "to" => "748",    "time" => "" ),
        array( "id" => "174",  "from" => "749",  "to" => "749",    "time" => "2007,2008,2009" ),
        array( "id" => "175",  "from" => "750",  "to" => "751",    "time" => "2009" ),
        array( "id" => "176",  "from" => "752",  "to" => "752",    "time" => "Christmas 1851" ),
        array( "id" => "177",  "from" => "753",  "to" => "753",    "time" => "Easter 2009" ),
        array( "id" => "178",  "from" => "754",  "to" => "754",    "time" => "21 November 2059" ),
        array( "id" => "179",  "from" => "755",  "to" => "756",    "time" => "December 2009" ),
        array( "id" => "180",  "from" => "757",  "to" => "757",    "time" => "1996,2008,2010" ),
        array( "id" => "181",  "from" => "758",  "to" => "758",    "time" => "3295" ),
        array( "id" => "182",  "from" => "759",  "to" => "759",    "time" => "1941, WWII" ),
        array( "id" => "183",  "from" => "760",  "to" => "761",    "time" => "51st century" ),
        array( "id" => "184",  "from" => "762",  "to" => "762",    "time" => "1580" ),
        array( "id" => "185",  "from" => "763",  "to" => "763",    "time" => "2015" ),
        array( "id" => "186",  "from" => "764",  "to" => "765",    "time" => "2020" ),
        array( "id" => "187",  "from" => "766",  "to" => "766",    "time" => "1890" ),
        array( "id" => "188",  "from" => "767",  "to" => "767",    "time" => "2010" ),
        array( "id" => "189",  "from" => "768",  "to" => "768",    "time" => "102 A.D." ),
        array( "id" => "190",  "from" => "769",  "to" => "769",    "time" => "1996" ),
        array( "id" => "191",  "from" => "770",  "to" => "770",    "time" => "2011,1969" ),
        array( "id" => "192",  "from" => "771",  "to" => "771",    "time" => "1969" ),
        array( "id" => "193",  "from" => "772",  "to" => "772",    "time" => "1699" ),
        array( "id" => "194",  "from" => "773",  "to" => "773",    "time" => "n/a" )
    );

    // get all
    $response = $times_array;

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($response);
});

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();
