**WARNING**: This repository is a fork of [Silex](https://github.com/silexphp/Silex-WebProfiler). While the original one is not maintained anymore and has been declared "end of life" in June 2018, this repository has been put up to date with Symfony 4.x (see branch) and 5.x (master) components.

Silex Web Profiler
==================

The Silex Web Profiler service provider allows you to use the wonderful Symfony web debug toolbar and the Symfony profiler in your Silex 2.x application.

The current master works with PHP 7.2.5 or later, and Symfony 5.x.

Installation
------------

The recommended way to install Silex is through [Composer](https://getcomposer.org). As this repository is not the main one and there are no releases, is has to be declared as follows in your composer.json:

``` {.sourceCode .json}
"require": {
    ...
    "silex/web-profiler": "2.5.x-dev",
    ...
},

"repositories": [
    ...
    {
      "type": "vcs",
      "url": "https://github.com/GregOriol/Silex"
    },
    ...
]
```

Then run:

``` {.sourceCode .bash}
composer install
```

Usage
------------

Enable it in your application:

``` {.sourceCode .php}
use Silex\Provider;

$app->register(new Provider\WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => __DIR__.'/../cache/profiler',
    'profiler.mount_prefix' => '/_profiler', // this is the default
));
```

The provider depends on `ServiceControllerServiceProvider`, `TwigServiceProvider`, and `HttpFragmentServiceProvider` so you also need to enable those if that's not already the case:

``` {.sourceCode .php}
$app->register(new Provider\HttpFragmentServiceProvider());
$app->register(new Provider\ServiceControllerServiceProvider());
$app->register(new Provider\TwigServiceProvider());
```

If you are using `FormServiceProvider`, the `WebProfilerServiceProvider` will detect that and enable the corresponding panels.

*Make sure to register all other required or used service providers before* `WebProfilerServiceProvider`.

If you are using `MonologServiceProvider` for logs, you must also add `symfony/monolog-bridge` as a Composer dependency to get the logs in the profiler.

If you are using `VarDumperServiceProvider`, add `symfony/debug-bundle` as a Composer dependency to display VarDumper dumps in the toolbar and the profiler.

If you are using `symfony/security`, add `symfony/security-bundle` as a Composer dependency to display Security related information in the toolbar and the profiler.
