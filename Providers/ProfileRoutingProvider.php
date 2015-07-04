<?php namespace Cms\Modules\Profile\Providers;

use Cms\Modules\Core\Providers\CmsRoutingProvider;
use Illuminate\Routing\Router;
use Cms\Modules\Profile;

class ProfileRoutingProvider extends CmsRoutingProvider
{

    protected $namespace = 'Cms\Modules\Profile\Http\Controllers';

    /**
     * @return string
     */
    protected function getFrontendRoute()
    {
        return __DIR__ . '/../Http/routes-frontend.php';
    }

    /**
     * @return string
     */
    protected function getBackendRoute()
    {
        return __DIR__ . '/../Http/routes-backend.php';
    }

    /**
     * @return string
     */
    protected function getApiRoute()
    {
        return __DIR__ . '/../Http/routes-api.php';
    }

    public function boot(Router $router)
    {
        parent::boot($router);

    }
}