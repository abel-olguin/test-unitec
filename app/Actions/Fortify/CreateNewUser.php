<?php

namespace App\Actions\Fortify;

use App\Models\InterestLevel;
use App\Models\MaritalStatus;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'middle_name' => ['required','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'gender' => ['required','in:male,female'],
            'marital_status' => ['required','exists:marital_statuses,id'],
            'interest_level' => ['required','exists:interest_levels,id'],
            'age' => ['required','integer','between:12,60'],
            'password' => $this->passwordRules(),
        ])->validate();
        DB::beginTransaction();
        try{
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'middle_name' => $input['middle_name'],
                'last_name' => $input['last_name'],
                'gender' => $input['gender'],
                'age' => $input['age'],
                'password' => Hash::make($input['password']),
            ]);
    
            MaritalStatus::find($input['marital_status'])->users()->attach($user);
            InterestLevel::find($input['interest_level'])->users()->attach($user);
            
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            dd($e);
        }
       
        return $user;
    }
}
