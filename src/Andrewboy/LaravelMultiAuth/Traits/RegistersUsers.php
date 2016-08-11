<?php namespace Andrewboy\LaravelMultiAuth\Traits;

use Illuminate\Foundation\Auth\RegistersUsers as DefaultRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait RegistersUsers {
    use DefaultRegistersUsers;

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        call_user_func('Auth::'.$this->entity)->login($this->create($request->all()));

        return redirect($this->redirectPath());
    }
}