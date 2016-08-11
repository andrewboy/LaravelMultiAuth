<?php namespace Andrewboy\LaravelMultiAuth\Traits;

trait AuthenticatesAndRegistersUsers
{
    use AuthenticatesUsers, RegistersUsers {
        AuthenticatesUsers::redirectPath insteadof RegistersUsers;
        AuthenticatesUsers::getEntity insteadof RegistersUsers;
    }
}