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
        
        Event::fire('user.subscribed', $command); // Very tightly coupled!
    }
}
```

A common alternative is to inject the Illuminate class in via constructor injection

```php
// Acme\Handlers\UserSubscribedCommandHandler.php

class UserSubscribedCommandHandler {

    protected $dispatcher;

    public function __construct(\Illuminate\Events\Dispatcher $dispatcher) // Less tightly coupled
    {
        $this->dispatcher = $dispatcher;
    }

    public function handle($command)
    {
        $this->dispatcher->fire('user.subscribed', $command);
    }
}
```

but this approach still leaves us directly tied to the Illuminate\Events\Dispatcher class.
Illuminate-Decouplr lets us break that coupling and use an interface that we specify and control.

```php
// Acme\Handlers\UserSubscribedCommandHandler.php

class UserSubscribedCommandHandler {
    
    protected $dispatcher;
    
    public function __construct(\Acme\Events\EventInterface $dispatcher) // Completely decoupled
    {
        $this->dispatcher = $dispatcher;
    }
    
    public function handle($command)
    {
        $this->dispatcher->fire('user.subscribed', $command);
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
    
2. Next, create a class that implements the interface and extends the corresponding IlluminateDecouplr class.

    ```php
    // Acme\Events\IlluminateEvents.php
    
    class IlluminateEvents implements EventInterface extends \IlluminateDecouplr\Events\Dispatcher {}
    ```
    
    IlluminateDecouplr's naming conventions follow Laravel's, so the IlluminateDecouplr adapter for ```Illuminate\Events\Dispatcher```
    would be ```IlluminateDecouplr\Events\Dispatcher```, ```Illuminate\Log\Writer``` would be ```IlluminateDecouplr\Log\Writer```, etc. 
    Each ```IlluminateDecouplr``` class has the same public methods as the original ```Illuminate``` class, so for the most part as long 
    as your interface sticks to them you don't need to implement them in your class.
    
3. Bind your implementation to the interface in the IoC container via the service provider

    ```php
    // vendor\divsmith\illuminate-decouplr\src\IlluminateDecouplrServiceProvider.php
    
    class IlluminateDecouplrServiceProvider extends ServiceProvider {
        
        public function register()
        {
            $this->app->bind('\Acme\Events\EventInterface', function() 
            {
                return new \Acme\Events\IlluminateEvents;
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

Notes
-----
1. You may occasionally find an Illuminate method that hasn't been implemented in the associated IlluminateDecouplr
    adapter. This is because it's not explicitly defined in the Illuminate class's public API and instead gets called
    through the ```__call()``` magic method. Feel free to add it to the IlluminateDecouplr adapter and submit a pull request.
    
2. You may notice that some of Laravel's facades don't have IlluminateDecouplr adapters provided. I made a conscious
    decision to leave out the ones that deal with application logic to help keep domain logic clean. If you feel that
    a valid one has been left out, either send me a message or create the associated adapter and submit a pull request.
    
Contributing
------------
I'm open to any and all pull requests, from typos to missing method additions to new adapters. Please submit all pull
requests to the associated dev branch (i.e. 4.2-dev, 4.3-dev, etc).
    