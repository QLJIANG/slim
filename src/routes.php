<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/hello/[{name}]', function($request, $response, $args) {
    return $response->write("Hello, " . empty($args['name']) ? '' : $args['name']);
});
