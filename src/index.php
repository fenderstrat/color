<?php

/*** Require Autoload ***/
require '../vendor/autoload.php';

/*** Object Instantiation ***/
$app = new Slim\Slim(array(
    'templates.path' => 'templates',
));

/*** View Setting ***/
$app->view(new Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

/*** Application ***/
$colorQuestions = array(
    array(
        'nomor' => '1',
        'key_1' => '12',
        'key_2' => '12',
        'key_3' => '12',
        'image' => 'ishihara_1.gif'
    ),
    array(
        'nomor' => '2',
        'key_1' => '8',
        'key_2' => '3',
        'key_3' => '10',
        'image' => 'ishihara_2.gif'
    ),
    array(
        'nomor' => '3',
        'key_1' => '5',
        'key_2' => '2',
        'key_3' => '0',
        'image' => 'ishihara_3.gif'
    ),
    array(
        'nomor' => '4',
        'key_1' => '29',
        'key_2' => '70',
        'key_3' => '0',
        'image' => 'ishihara_4.gif'
    ),
    array(
        'nomor' => '5',
        'key_1' => '74',
        'key_2' => '21',
        'key_3' => '0',
        'image' => 'ishihara_5.gif'
    ),
    array(
        'nomor' => '6',
        'key_1' => '7',
        'key_2' => '1',
        'key_3' => '0',
        'image' => 'ishihara_6.gif'
    ),
    array(
        'nomor' => '7',
        'key_1' => '45',
        'key_2' => '1',
        'key_3' => '0',
        'image' => 'ishihara_7.gif'
    ),
    array(
        'nomor' => '8',
        'key_1' => '2',
        'key_2' => '1',
        'key_3' => '0',
        'image' => 'ishihara_8.gif'
    ),
    array(
        'nomor' => '9',
        'key_1' => '0',
        'key_2' => '2',
        'key_3' => '0',
        'image' => 'ishihara_9.gif'
    ),
    array(
        'nomor' => '10',
        'key_1' => '16',
        'key_2' => '1',
        'key_3' => '0',
        'image' => 'ishihara_10.gif'
    ),
    array(
        'nomor' => '11',
        'key_1' => '1',
        'key_2' => '1',
        'key_3' => '0',
        'image' => 'ishihara_11.gif'
    ),
    array(
        'nomor' => '12',
        'key_1' => '35',
        'key_2' => '5',
        'key_3' => '0',
        'image' => 'ishihara_12.gif'
    ),
    array(
        'nomor' => '13',
        'key_1' => '96',
        'key_2' => '6',
        'key_3' => '0',
        'image' => 'ishihara_13.gif'
    ),
    array(
        'nomor' => '14',
        'key_1' => '1',
        'key_2' => '1',
        'key_3' => '0',
        'image' => 'ishihara_14.gif'
    )
);

$app->get('/', function() use($app, $colorQuestions) {
    // Get Random Question
    $questions = function() use($colorQuestions) {
        $keys = array_keys($colorQuestions);
        shuffle($keys);
        $shuffled = array();
        foreach ($keys as $key) {
            $shuffled[$key] = $colorQuestions[$key];
        }
         return $shuffled;
    };
    // Render Result
    $app->render('index.html', array (
        'questions' => $questions() 
    ));
});

$app->post('/answers', function() use($app){

});

$app->get('/result', function() use($app){

});

$app->get('/about', function() use($app){

});

$app->get('/page/:title', function($title) use($app){

});


/*** Run Application ***/
$app->run();