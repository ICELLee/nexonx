protected $middlewareGroups = [
'web' => [
// ...
\App\Http\Middleware\LocalizationMiddleware::class,
],
// ...
];
