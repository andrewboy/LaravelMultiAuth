# Laravel Multi Auth

This package can be use with only 5.1 version of laravel. This package extends the **Kbwebs/MultiAuth** package by overriding the default single 
laravel auth traits. With this package you can easily use the auth mechanism that laravel default offers.

## Overwritten traits

```
Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers

to

Andrewboy\LaravelMultiAuth\Traits\AuthenticatesAndRegistersUsers
```

```
Illuminate\Foundation\Auth\AuthenticatesUsers

to

Andrewboy\LaravelMultiAuth\Traits\AuthenticatesUsers
```

```
Illuminate\Foundation\Auth\RegistersUsers

to

Andrewboy\LaravelMultiAuth\Traits\RegistersUsers
```

```
Illuminate\Foundation\Auth\ResetsPasswords

to

Andrewboy\LaravelMultiAuth\Traits\ResetsPasswords
```


## Installation steps

1. First setup the [Kbwebs/MultiAuth](https://github.com/Kbwebs/MultiAuth) package
2. In config/app.php set the provider:
```
...
'providers' => [
    ...
    Andrewboy\LaravelMultiAuth\LaravelMultiAuthServiceProvider::class,
],
...
```
3. Set the controllers
    **AuthController**

    ```
    use Andrewboy\LaravelMultiAuth\Traits\AuthenticatesAndRegistersUsers;
    
    class AuthController extends Controller
    {
        use AuthenticatesAndRegistersUsers, ThrottlesLogins;
        protected $entity = 'admin';
    
        ...
    }
    ```
    **PasswordController**

    ```
    use Andrewboy\LaravelMultiAuth\Traits\ResetsPasswords;
    
    class PasswordController extends Controller
    {
        use ResetsPasswords;
        
        protected $entity = 'admin';
        
        ...
    }
    ```