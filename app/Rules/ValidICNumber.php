<?php

namespace App\Rules;


use Illuminate\Contracts\Validation\Rule;

class ValidICNumber implements Rule
{

    /**
     * The IC Number to check
     */
    //public $ic_number;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->ic_number = $ic_number;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Regex to check for valid IC number
        $regex = "/\d{6}\-\d{2}\-\d{4}/";
        /*
        if (preg_match($regex, $value)) {
            return true;
        } else {
            return false;
        }
        */
        return preg_match($regex, $value);
        //return strtoupper($value) === $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The IC number is invalid. Invalid';
    }
}
