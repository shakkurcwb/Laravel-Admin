<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <link rel="icon" type="image/ico" href="favicon.png">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <link rel="stylesheet" type="text/css" href="/css/nprogress.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'dashboard') }}">@lang('welcome.Home')</a>
                    @else
                        <a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'login') }}">@lang('welcome.Login')</a>
                        <a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'register') }}">@lang('welcome.Register')</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Panthera Systems
                </div>

                <div class="links">
                    <a href="/docs">@lang('welcome.Documentation')</a>
                    <a href="/git">@lang('welcome.GitHub')</a>
                    <a href="/news">@lang('welcome.News')</a>
                    <a href="/community">@lang('welcome.Community')</a>

                    @if (\App::isLocale('pt-BR'))
                        <a href="{{ LaravelLocalization::getLocalizedURL('en', '/') }}">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADN0lEQVRYR+2XW0gUURjH/7Prruuuupt4qyy13BIxDEx8UElEpIQeUvBJDcGMevCWKBIZbKYZohaFpCV5gTKRvID1oA+iQkQkZeFJSSGRgqXSvLuX6RzHzUUpd3wYX/zg8J9zZr75/+Y7c+YwHHY5uF32xx4Aq4CcNud1lXJGLNRshQHsi4+v+imXy3Zk3qh8t6M8yGTw7XziwQACEhJqJhsbL6KpaRDp6dGitLAwYWcANIvjuEAGcDwurorExh5DRsZpVFW/RH7eWVRTzbPXKtrP3xhn17Hka4rPGwD8+qH9q83GbP318zKdO0yjY/BufhC8BhAbW0laWi6hrKwLRUXnUFHR7bDeVIyKroBM6wbT2AS8nz0UAKKi7pCICH/k5JyBwfACJSXnHVLm3NBwQTSALYFOgQAQGVlOWluvoLCwFeXlKSgufu6w3ld+EA0gc3OFefobfLsaBYDw8FskKMgTpaUpyM1tRk1NmkPKnB8rh8UDuGpgMf7A/ldPBYCwMANpa8tGZmY96uoykZX1yGHt7y8QDbBlCkJCbhAPDw3q6jORllqLlubLSE2rRTPVtP8owKNL+ZqtJ+GePH3Nbcf2/U3jnEpFP0HLODDULVRAr79OOjpykZRUg/b2HCQn36OaTfXupv7W8T7V4MYy264W60uSUyrBm8zwG+4VAAIDiwkgQ2dnLhITK9HTU+CQMr+pqdvb2f7z/N9V4OdXRLq7ryI62oCBgRLExDiun1R94gEUCsjd3XBobEiogK9vAZmfX4XZzPYHcUFcesUlsKudnMC5aeA/8UYAsFgsREY3BynDarVCLpcLAF98QokTfXp+1SQJA6dUwKxwwtHvIwLAuGcwUVh58Cur4gBYtm0DYpn2m87mc3Z35pyVMNHtX28cFQCWlpaIiq1NCYN6Qq1WCwCjrkeIi7Mz+MUlSRA4tQsWV1cQMjchAHxUBxBXtRr8wqI0ABo15mkFQhcmBYCZmRmi1WolMbeZzM7OQqfTCQDvVYeJjn4YpIxfv+dwcvnrGkDQW6+D41L/ILDFc8o4rWe+PrSdoM1LygpQLyNtIwyA/ROw+jOVMlao2ZzUld/ygHsAfwD3bIyLqd/M7AAAAABJRU5ErkJggg==">
                        </a>
                        <a href="{{ LaravelLocalization::getLocalizedURL('fr', '/') }}">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAkklEQVRYR2NkGGDAOMD2M4w6YDQEGA0dpoYQkxDdHFV+1hRZsROj9nVm2a9fh06zEaOW0chh6n9iFAb6qB8vzLCwJEbtc4/oE38fPbUgQu3/UQeMhsBoCIyGwGgIjIbAaAiMhsAgCAHHKWFEtFwYXG0Vf9aU2hHVJHuTWfnr56GTxDXJiLGclmpGm+WjITDgIQAAGofb8ADVqusAAAAASUVORK5CYII=">
                        </a>
                    @elseif (\App::isLocale('en'))
                        <a href="{{ LaravelLocalization::getLocalizedURL('pt-BR', '/') }}">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACq0lEQVRYR+2W309SYRjHv+fAAQEROCqCiaMfs+yidF3U3EpbrCtrrmU/76xmife1ti6q9QfU1OrCbtxs3TXrqrWmtdbKsTlrrbVwThRBBEHIExzi9B5YdFQUYTRueC7PeZ/3+bzP932+51AoclBFro8SQKkD1OEHx04X8yISAJtQAsinAyYFj976RQhkkvtnKuGJMflsg5wlkJG56agO4pw5CIZKqRdLUHjm0eO5T4/fOQqaE8AudRR2ix91DI8xhxnfpnRJgD07Qmg9MA9XTI6B2Sr8WFFuuRtbAlDSAi6aA2ivDsPtVePOo2ZMzWpXFdlpWcat7gnU1qzgxYIWwx4Dogk6K0hWgGYth2vk1EaiOR+nYb/Xsq743yoiRN/ND2DkCXhJNx66qjARVm0KsSFABdnk0jY/Wg2R9Abj7nZ4VTb84jmwDAuKpvF9ZhrTjhDG3zuT625cnoTt4Fw6Z3SpHE/mKrFM4DNFRoA2NoKuWj9ECGn0Pd2Ld5/3we8LpR83NNbi0EkrDAYNRgYnsd/yCb3nv67KE4uLECLM2sgMQE7dRU6fCWBkdDtkMhnUagY8n4AgJMBxMRjYcly9fhxh31t07B5aBzBIAMa2CiBmi8VFiDaJBK8/WjD06ii4CIdAIAKW1SEhxBFc+pksaLEaceXUF7Q0Ov5JECASuHOUQIrfRC5hz5pL6A+bIFfIEeV40DSFMrUSZSoGJl0At7tfFuYSSiHEMbxgCuCEMTWGdx83wemqAMMwRAIBGo0CDdYY7J1vUmPoq8DwvL4wYygFEY2op24RFkV8QyPqJ0bkLLQRSSGSVmwM4mxNEArSGTGSVuwlVrzwn61YCiJ+jOz1/uSjAWI481H5poaz0cusTpjXrjkkFR/gyH3bmRyAC7609Fdc6kCpA38Asq8bQ6j9PWYAAAAASUVORK5CYII=">
                        </a>
                        <a href="{{ LaravelLocalization::getLocalizedURL('fr', '/') }}">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAkklEQVRYR2NkGGDAOMD2M4w6YDQEGA0dpoYQkxDdHFV+1hRZsROj9nVm2a9fh06zEaOW0chh6n9iFAb6qB8vzLCwJEbtc4/oE38fPbUgQu3/UQeMhsBoCIyGwGgIjIbAaAiMhsAgCAHHKWFEtFwYXG0Vf9aU2hHVJHuTWfnr56GTxDXJiLGclmpGm+WjITDgIQAAGofb8ADVqusAAAAASUVORK5CYII=">
                        </a>
                    @elseif (\App::isLocale('fr'))
                        <a href="{{ LaravelLocalization::getLocalizedURL('en', '/') }}">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADN0lEQVRYR+2XW0gUURjH/7Prruuuupt4qyy13BIxDEx8UElEpIQeUvBJDcGMevCWKBIZbKYZohaFpCV5gTKRvID1oA+iQkQkZeFJSSGRgqXSvLuX6RzHzUUpd3wYX/zg8J9zZr75/+Y7c+YwHHY5uF32xx4Aq4CcNud1lXJGLNRshQHsi4+v+imXy3Zk3qh8t6M8yGTw7XziwQACEhJqJhsbL6KpaRDp6dGitLAwYWcANIvjuEAGcDwurorExh5DRsZpVFW/RH7eWVRTzbPXKtrP3xhn17Hka4rPGwD8+qH9q83GbP318zKdO0yjY/BufhC8BhAbW0laWi6hrKwLRUXnUFHR7bDeVIyKroBM6wbT2AS8nz0UAKKi7pCICH/k5JyBwfACJSXnHVLm3NBwQTSALYFOgQAQGVlOWluvoLCwFeXlKSgufu6w3ld+EA0gc3OFefobfLsaBYDw8FskKMgTpaUpyM1tRk1NmkPKnB8rh8UDuGpgMf7A/ldPBYCwMANpa8tGZmY96uoykZX1yGHt7y8QDbBlCkJCbhAPDw3q6jORllqLlubLSE2rRTPVtP8owKNL+ZqtJ+GePH3Nbcf2/U3jnEpFP0HLODDULVRAr79OOjpykZRUg/b2HCQn36OaTfXupv7W8T7V4MYy264W60uSUyrBm8zwG+4VAAIDiwkgQ2dnLhITK9HTU+CQMr+pqdvb2f7z/N9V4OdXRLq7ryI62oCBgRLExDiun1R94gEUCsjd3XBobEiogK9vAZmfX4XZzPYHcUFcesUlsKudnMC5aeA/8UYAsFgsREY3BynDarVCLpcLAF98QokTfXp+1SQJA6dUwKxwwtHvIwLAuGcwUVh58Cur4gBYtm0DYpn2m87mc3Z35pyVMNHtX28cFQCWlpaIiq1NCYN6Qq1WCwCjrkeIi7Mz+MUlSRA4tQsWV1cQMjchAHxUBxBXtRr8wqI0ABo15mkFQhcmBYCZmRmi1WolMbeZzM7OQqfTCQDvVYeJjn4YpIxfv+dwcvnrGkDQW6+D41L/ILDFc8o4rWe+PrSdoM1LygpQLyNtIwyA/ROw+jOVMlao2ZzUld/ygHsAfwD3bIyLqd/M7AAAAABJRU5ErkJggg==">
                        </a>
                        <a href="{{ LaravelLocalization::getLocalizedURL('pt-BR', '/') }}">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACq0lEQVRYR+2W309SYRjHv+fAAQEROCqCiaMfs+yidF3U3EpbrCtrrmU/76xmife1ti6q9QfU1OrCbtxs3TXrqrWmtdbKsTlrrbVwThRBBEHIExzi9B5YdFQUYTRueC7PeZ/3+bzP932+51AoclBFro8SQKkD1OEHx04X8yISAJtQAsinAyYFj976RQhkkvtnKuGJMflsg5wlkJG56agO4pw5CIZKqRdLUHjm0eO5T4/fOQqaE8AudRR2ix91DI8xhxnfpnRJgD07Qmg9MA9XTI6B2Sr8WFFuuRtbAlDSAi6aA2ivDsPtVePOo2ZMzWpXFdlpWcat7gnU1qzgxYIWwx4Dogk6K0hWgGYth2vk1EaiOR+nYb/Xsq743yoiRN/ND2DkCXhJNx66qjARVm0KsSFABdnk0jY/Wg2R9Abj7nZ4VTb84jmwDAuKpvF9ZhrTjhDG3zuT625cnoTt4Fw6Z3SpHE/mKrFM4DNFRoA2NoKuWj9ECGn0Pd2Ld5/3we8LpR83NNbi0EkrDAYNRgYnsd/yCb3nv67KE4uLECLM2sgMQE7dRU6fCWBkdDtkMhnUagY8n4AgJMBxMRjYcly9fhxh31t07B5aBzBIAMa2CiBmi8VFiDaJBK8/WjD06ii4CIdAIAKW1SEhxBFc+pksaLEaceXUF7Q0Ov5JECASuHOUQIrfRC5hz5pL6A+bIFfIEeV40DSFMrUSZSoGJl0At7tfFuYSSiHEMbxgCuCEMTWGdx83wemqAMMwRAIBGo0CDdYY7J1vUmPoq8DwvL4wYygFEY2op24RFkV8QyPqJ0bkLLQRSSGSVmwM4mxNEArSGTGSVuwlVrzwn61YCiJ+jOz1/uSjAWI481H5poaz0cusTpjXrjkkFR/gyH3bmRyAC7609Fdc6kCpA38Asq8bQ6j9PWYAAAAASUVORK5CYII=">
                        </a>
                    @endif

                </div>
            </div>
        </div>

        <script src="/js/nprogress.js"></script>
        <script>
            NProgress.done(true);
        </script>
    </body>
</html>
