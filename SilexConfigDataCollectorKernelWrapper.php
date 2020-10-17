<?php

namespace Silex\Provider;

use Silex\Application;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;

class SilexConfigDataCollectorKernelWrapper implements KernelInterface
{
    /** @var Application */
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @inheritDoc
     */
    public function handle(Request $request, int $type = self::MASTER_REQUEST, bool $catch = true)
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function registerBundles()
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function boot()
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function shutdown()
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function getBundles()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getBundle(string $name)
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function locateResource(string $name)
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function getEnvironment()
    {
        return 'n/a';
    }

    /**
     * @inheritDoc
     */
    public function isDebug()
    {
        return $this->app['debug'];
    }

    /**
     * @inheritDoc
     */
    public function getProjectDir()
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function getContainer()
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function getStartTime()
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function getCacheDir()
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function getLogDir()
    {
        // Not needed in this context
    }

    /**
     * @inheritDoc
     */
    public function getCharset()
    {
        // Not needed in this context
    }
}
