Illuminate-Decouplr
===================
Laravel provides tons of functionality out of the box with a beautiful and easy to use interface via it's
various facades and the Illuminate classes that power them. While this is great for application level classes
and services, we don't really want to be doing this in our domain logic.

```php
// Acme\Handlers\UserSubscribedCommandHandler.php

class UserSubscribedCommandHandler {

    public function handle($command)
    {
        // Do everything involved with a new user subscription
        
        Event::fire('user.subscribed', $command); // Very tight coupling!
    }
}
```

A common alternative is to inject the Illuminate class in via constructor injection

```php
// Acme\Handlers\UserSubscribedCommandHandler.php

class UserSubscribedCommandHandler {

    protected $dispatcher;

    public function __construct(\Illuminate\Events\Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function handle($command)
    {
        $this->dispatcher->fire('user.subscribed', $command); // Less tightly coupled
    }
}
```

but this approach still leaves us directly tied to the Illuminate\Events\Dispatcher class.
Illuminate-Decouplr lets us break that coupling and use an interface that we specify and control.

```php
// Acme\Handlers\UserSubscribedCommandHandler.php

class UserSubscribedCommandHandler {
    
    protected $dispatcher;
    
    public function __construct(\Acme\Events\EventInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }
    
    public function handle($command)
    {
        $this->dispatcher->fire('user.subscribed', $command); // Completely decoupled
    }
}
```

Installation
------------
1. Add the following to your composer.json file
    ```js
    {
        "require": {
            "divsmith/decouplr": "4.2.*" // Follows Laravel major versions, i.e. 4.2, 4.3, etc.
        }
    }
    ```

2. Run ```composer install```

Usage
--------------
1.  Create an interface that includes the methods on the Illuminate class that your domain logic will use.

    ```php
    // Acme\Events\EventInterface.php
    
    interface EventInterface {
        public function fire();
        public function listen();
    }
    ```
    
2. Next, create an adapter class that implements the interface and extends the corresponding IlluminateDecouplr class.

    ```php
    // Acme\Events\IlluminateEventAdapter.php
    
    class EventAdapter implements EventInterface extends \IlluminateDecouplr\Events\Dispatcher {}
    ```
    
    The naming conventions follow Laravel's, so ```Illuminate\Events\Dispatcher``` becomes ```IlluminateDecouplr\Events\Dispatcher```,
    ```Illuminate\Log\Writer``` becomes ```IlluminateDecouplr\Log\Writer```, etc. Each ```IlluminateDecouplr``` class has the same
    public methods as the original ```Illuminate``` class, so for the most part as long as your interface sticks to them
    you don't need to implement them in your adapter.
    
3. Bind your adapter implementation to the interface in the IoC container via the service provider

    ```php
    // vendor\divsmith\illuminate-decouplr\src\IlluminateDecouplrServiceProvider.php
    
    class IlluminateDecouplrServiceProvider extends ServiceProvider {
        
        public function register()
        {
            $this->app->bind('\Acme\Events\EventInterface', function() 
            {
                return new \Acme\Events\IlluminateEventAdapter;
            }
        }
    }
    ```
    
    and add it to your providers array
    
    ```php
    // app\config\app.php
    
        ....
        'Illuminate\Session\SessionServiceProvider',
        'Illuminate\Translation\TranslationServiceProvider',
        'Illuminate\Validation\ValidationServiceProvider',
        'Illuminate\View\ViewServiceProvider',
        '\IlluminateDecouplr\IlluminateDecouplrServiceProvider'
    ),
    ....
    ```
    
4. Enjoy!

Contributing
------------
I'm open to any and all pull requests, from typo fixes to methods that can't be documented in the Illuminate class 
documentation due to the use of ```__call()```.
    