<?php namespace Divsmith\IlluminateDecouplr\Foundation;

use Divsmith\Decouplr\Decouplr;
use Illuminate\Foundation\Application as IlluminateApplication;

abstract class Application extends Decouplr {

    public function __construct(IlluminateApplication $app)
    {
        $this->decoupled = $app;
    }

    public function bound()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function isAlias()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function bind()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function bindIf()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function singleton()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function share()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function bindShared()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function extend()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function instance()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function alias()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function rebinding()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function refresh()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function make()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function build()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function resolving()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function resolvingAny()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function isShared()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getBindings()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function forgetInstance()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function forgetInstances()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetExists()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetGet()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetSet()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetUnset()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function bindInstallPaths()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getBootstrapFile()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function startExceptionHandling()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function environment()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function isLocal()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function detectEnvironment()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function runningInConsole()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function runningUnitTests()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function forceRegister()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function register()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getRegistered()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function resolveProviderClass()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function loadDeferredProviders()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function registerDeferredProvider()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function before()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function after()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function finish()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function shutdown()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function useArraySessions()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function isBooted()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function boot()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function booting()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function run()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function middleware()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function forgetMiddleware()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function handle()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function dispatch()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function terminate()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function callFinishCallbacks()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function prepareRequest()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function prepareResponse()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function readyForResponses()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function isDownForMaintenance()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function down()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function abort()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function missing()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function error()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function pushError()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function fatal()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getConfigLoader()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getEnvironmentVariablesLoader()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getProviderRepository()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getLoadedProviders()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setDeferredServices()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function isDeferredService()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function requestClass()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setRequestForConsoleEnvironment()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function onRequest()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getLocale()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setLocale()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function registerCoreContainerAliases()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 