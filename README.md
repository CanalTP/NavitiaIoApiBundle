# NavitiaIoApiBundle

Symfony2 bundle which provide a [NavitiaIoApiService](https://github.com/CanalTP/NavitiaIoApiComponent/blob/master/src/NavitiaIoApiService.php).

The bundle uses the [NavitiaIoApiComponent](https://github.com/CanalTP/NavitiaIoApiComponent).


## Installation

Install via composer

``` js
{
    "require": {
        "canaltp/navitiaio-api-bundle": "1.x"
    }
}
```

Updating **AppKernel.php**:

``` php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new CanalTP\NavitiaIoApiBundle\CanalTPNavitiaIoApiBundle(),
        );
    }
```

Updating **app/config.yml**:

``` yml
# NavitiaIoApi api configuration
canal_tp_navitia_io_api:
    url: %navitia_io_api.url%
    authentification:
        user: %navitia_io_api.auth.user%
        password: %navitia_io_api.auth.password%
```

Add parameters in **parameters.yml**:

``` yml
parameters:
    navitia_io_api.url: http://navitia.local/
    navitia_io_api.auth.user: user_test
    navitia_io_api.auth.password: password_test
```


## Usage

``` php
// Accessing service
$navitiaIoApi = $container->get('canal_tp_navitia_io.api');

// Call api
$user = $navitiaIoApi->getUsers();
```


## License

This project is under [GPL-3.0 License](LICENSE).
