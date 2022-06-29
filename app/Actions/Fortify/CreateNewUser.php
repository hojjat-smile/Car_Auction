<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input )
    {

        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'mobile' => ['required'],
            'username' => ['required', 'string', 'max:255'],
            'country_id' => ['required'],
            'image' => ['required'],
            'city_id' => ['required'],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),

        ])->validate();



        return User::create([
            'firstname' => $input['first_name'],
            'lastname' => $input['last_name'],
            'mobile' => $input['mobile'],
            'company_name' => $input['company_name'],
            'username' => $input['username'],
            'country_id' => $input['country_id'],
            'city_id' => $input['city_id'],
            'email' => $input['email'],
            'image' => $input['image'],
            'password' => Hash::make($input['password']),
        ]);

    }
}
