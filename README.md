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

Add parameters in **parameters.yml**:

``` yml
parameters:
    canal_tp_navitia_io_api.customers:
        navio:
            host: http://navitia.local
            username: admin
            password: admin
        sncf:
            host: 'http://another.examle'
            username: USERNAME_ADMIN
            password: USERNAME_ADMIN
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
