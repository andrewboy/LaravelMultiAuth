# Multi Auth for Laravel 5.1

This package can be use with only 5.1 version of laravel. This package extends the **Kbwebs/MultiAuth** package by overriding the default single 
laravel auth traits. With this package you can easily use the auth mechanism that laravel default offers.

## Overwritten traits

+ AuthenticatesAndRegistersUsers

    ```PHP
    Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers
    ```
    to
    ```PHP
    Andrewboy\LaravelMultiAuth\Traits\AuthenticatesAndRegistersUsers
    ```
+ AuthenticatesUsers

    ```PHP
    Illuminate\Foundation\Auth\AuthenticatesUsers
    ```
    to
    ```PHP
    Andrewboy\LaravelMultiAuth\Traits\AuthenticatesUsers
    ```
+ RegistersUsers
    ```PHP
    Illuminate\Foundation\Auth\RegistersUsers
    ```
    to
    ```PHP
    Andrewboy\LaravelMultiAuth\Traits\RegistersUsers
    ```
+ ResetsPasswords
    ```PHP
    Illuminate\Foundation\Auth\ResetsPasswords
    ```
    to
    ```PHP
    Andrewboy\LaravelMultiAuth\Traits\ResetsPasswords
    ```


## Installation steps

1. First setup the [Kbwebs/MultiAuth](https://github.com/Kbwebs/MultiAuth) package
2. In config/app.php set the provider:
    ```PHP
    ...
    'providers' => [
        ...
        Andrewboy\LaravelMultiAuth\LaravelMultiAuthServiceProvider::class,
    ],
    ...
    ```

3. Set the controllers

    **AuthController**

    ```PHP
    use Andrewboy\LaravelMultiAuth\Traits\AuthenticatesAndRegistersUsers;
    
    class AuthController extends Controller
    {
        use AuthenticatesAndRegistersUsers, ThrottlesLogins;
        protected $entity = 'admin';
    
        ...
    }
    ```
    **PasswordController**

    ```PHP
    use Andrewboy\LaravelMultiAuth\Traits\ResetsPasswords;
    
    class PasswordController extends Controller
    {
        use ResetsPasswords;
        
        protected $entity = 'admin';
        
        ...
    }
    ```
    
    Note: if you have only one entity, then you don't have to use the protected $entity property.