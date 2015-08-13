Tyr Bundle
==========

Symfony2 bundle which provide a [TyrService](https://github.com/CanalTP/TyrComponent/blob/master/src/TyrService.php).

The bundle uses the [TyrComponent](https://github.com/CanalTP/TyrComponent).


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
# Tyr api configuration
canal_tp_navitia_io_api:
    url: %url%
    authentification:
        user: %user%
        password: %password%
```

Add parameters in **parameters.yml**:

``` yml
parameters:
    url: http://navitia.local/
    user: 'user_test'
    password: 'password_test'
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
