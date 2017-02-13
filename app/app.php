<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/PingPong.php';
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    session_start();

    // initialize session variable if necessarry

    $app = new Silex\Application();
    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        $test= new PingPong();
        $output = $test->makePingPong(3);
        var_dump($output);
        return "hello";
        // return $app['twig']->render('pong.html.twig');
    }) ;




    return $app;
?>
