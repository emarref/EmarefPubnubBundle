Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require emarref/pubnub-bundle "^1.0"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Emarref\Bundle\PubnubBundle\EmarrefPubnubBundle(),
        );

        // ...
    }

    // ...
}
```

Step 3: Configuration
---------------------

All configuration options on the Pubnub\Pubnub class can be configured. Only
`publish_key` and `subscribe_key` are required. Default reference is below.

```yaml
emarref_pubnub:
    publish_key: <your_pub_key> # Required
    subscribe_key: <your_sub_key> # Required
    secret_key: false
    cipher_key: false
    ssl: true
    origin: false
    pem_path: "%kernel.root_dir%/../vendor/pubnub/pubnub/"
    uuid: symfony
    proxy: false
    auth_key: false
    verify_peer: true
```


Step 4: Usage
-------------

Get the pubnub client from the container.

```php
$pubnub = $this->getContainer()->get('emarref.pubnub.client.pubnub');
```

The `$pubnub` object is an instance of `Pubnub\Pubnub`. Usage documentation can
be found in the [Pubnub repository](https://github.com/pubnub/php).
