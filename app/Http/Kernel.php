<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
		'cabin' => \App\Http\Middleware\Cabin::class,
		'cabin-api' => \App\Http\Middleware\CabinApi::class,
		'cabin-analytics' => \Yab\Cabin\Middleware\CabinAnalytics::class,
		'cabin-language' => \App\Http\Middleware\CabinLanguage::class,
		'admin' => \App\Http\Middleware\Admin::class,
		'active' => \App\Http\Middleware\Active::class,
		'cabin' => \App\Http\Middleware\Cabin::class,
		'cabin-api' => \App\Http\Middleware\CabinApi::class,
		'cabin-analytics' => \Yab\Cabin\Middleware\CabinAnalytics::class,
		'cabin-language' => \App\Http\Middleware\CabinLanguage::class,
		'admin' => \App\Http\Middleware\Admin::class,
		'active' => \App\Http\Middleware\Active::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,

        'admin' => \App\Http\Middleware\Admin::class,
        'permissions' => \App\Http\Middleware\Permissions::class,
        'roles' => \App\Http\Middleware\Roles::class,
        'active' => \App\Http\Middleware\Active::class,

        'jwt.auth' => \Tymon\JWTAuth\Middleware\GetUserFromToken::class,
        'jwt.refresh' => \Tymon\JWTAuth\Middleware\RefreshToken::class,

        'localize' => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
		'localizationRedirect' => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
		'localeSessionRedirect' => \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
        'localeViewPath' => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class,
    ];
}
