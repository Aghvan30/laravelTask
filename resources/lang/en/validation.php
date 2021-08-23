<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :brand must be accepted.',
    'active_url' => 'The :brand is not a valid URL.',
    'after' => 'The :brand must be a date after :date.',
    'after_or_equal' => 'The :brand must be a date after or equal to :date.',
    'alpha' => 'The :brand must only contain letters.',
    'alpha_dash' => 'The :brand must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :brand must only contain letters and numbers.',
    'array' => 'The :brand must be an array.',
    'before' => 'The :brand must be a date before :date.',
    'before_or_equal' => 'The :brand must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :brand must be between :min and :max.',
        'file' => 'The :brand must be between :min and :max kilobytes.',
        'string' => 'The :brand must be between :min and :max characters.',
        'array' => 'The :brand must have between :min and :max items.',
    ],
    'boolean' => 'The :brand field must be true or false.',
    'confirmed' => 'The :brand confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :brand is not a valid date.',
    'date_equals' => 'The :brand must be a date equal to :date.',
    'date_format' => 'The :brand does not match the format :format.',
    'different' => 'The :brand and :other must be different.',
    'digits' => 'The :brand must be :digits digits.',
    'digits_between' => 'The :brand must be between :min and :max digits.',
    'dimensions' => 'The :brand has invalid image dimensions.',
    'distinct' => 'The :brand field has a duplicate value.',
    'email' => 'The :brand must be a valid email address.',
    'ends_with' => 'The :brand must end with one of the following: :values.',
    'exists' => 'The selected :brand is invalid.',
    'file' => 'The :brand must be a file.',
    'filled' => 'The :brand field must have a value.',
    'gt' => [
        'numeric' => 'The :brand must be greater than :value.',
        'file' => 'The :brand must be greater than :value kilobytes.',
        'string' => 'The :brand must be greater than :value characters.',
        'array' => 'The :brand must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :brand must be greater than or equal :value.',
        'file' => 'The :brand must be greater than or equal :value kilobytes.',
        'string' => 'The :brand must be greater than or equal :value characters.',
        'array' => 'The :brand must have :value items or more.',
    ],
    'image' => 'The :brand must be an image.',
    'in' => 'The selected :brand is invalid.',
    'in_array' => 'The :brand field does not exist in :other.',
    'integer' => 'The :brand must be an integer.',
    'ip' => 'The :brand must be a valid IP address.',
    'ipv4' => 'The :brand must be a valid IPv4 address.',
    'ipv6' => 'The :brand must be a valid IPv6 address.',
    'json' => 'The :brand must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :brand must be less than :value.',
        'file' => 'The :brand must be less than :value kilobytes.',
        'string' => 'The :brand must be less than :value characters.',
        'array' => 'The :brand must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :brand must be less than or equal :value.',
        'file' => 'The :brand must be less than or equal :value kilobytes.',
        'string' => 'The :brand must be less than or equal :value characters.',
        'array' => 'The :brand must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :brand must not be greater than :max.',
        'file' => 'The :brand must not be greater than :max kilobytes.',
        'string' => 'The :brand must not be greater than :max characters.',
        'array' => 'The :brand must not have more than :max items.',
    ],
    'mimes' => 'The :brand must be a file of type: :values.',
    'mimetypes' => 'The :brand must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :brand must be at least :min.',
        'file' => 'The :brand must be at least :min kilobytes.',
        'string' => 'The :brand must be at least :min characters.',
        'array' => 'The :brand must have at least :min items.',
    ],
    'multiple_of' => 'The :brand must be a multiple of :value.',
    'not_in' => 'The selected :brand is invalid.',
    'not_regex' => 'The :brand format is invalid.',
    'numeric' => 'The :brand must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :brand field must be present.',
    'regex' => 'The :brand format is invalid.',
    'required' => 'The :brand field is required.',
    'required_if' => 'The :brand field is required when :other is :value.',
    'required_unless' => 'The :brand field is required unless :other is in :values.',
    'required_with' => 'The :brand field is required when :values is present.',
    'required_with_all' => 'The :brand field is required when :values are present.',
    'required_without' => 'The :brand field is required when :values is not present.',
    'required_without_all' => 'The :brand field is required when none of :values are present.',
    'prohibited' => 'The :brand field is prohibited.',
    'prohibited_if' => 'The :brand field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :brand field is prohibited unless :other is in :values.',
    'same' => 'The :brand and :other must match.',
    'size' => [
        'numeric' => 'The :brand must be :size.',
        'file' => 'The :brand must be :size kilobytes.',
        'string' => 'The :brand must be :size characters.',
        'array' => 'The :brand must contain :size items.',
    ],
    'starts_with' => 'The :brand must start with one of the following: :values.',
    'string' => 'The :brand must be a string.',
    'timezone' => 'The :brand must be a valid zone.',
    'unique' => 'The :brand has already been taken.',
    'uploaded' => 'The :brand failed to upload.',
    'url' => 'The :brand format is invalid.',
    'uuid' => 'The :brand must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "brand.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given brand rule.
    |
    */

    'custom' => [
        'brand-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our brand placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
