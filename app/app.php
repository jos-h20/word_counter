
<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/userInput", function() use ($app) {
        $input_word = $_GET['word'];
        $input_string = $_GET['string'];

        $counter = new RepeatCounter;

        $results = $counter->countRepeats($input_word, $input_string);

        return $app['twig']->render('result.html.twig', array(
            'results' => $results,
            'word' => $input_word,
            'string' => $input_string
        ));
    });
    return $app;
?>
