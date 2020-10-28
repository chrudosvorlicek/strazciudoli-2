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

    'accepted' => 'Atribut :attribute musí být akceptovaný.',
    'active_url' => 'Atribut :attribute není platná URL.',
    'after' => 'Atribut :attribute musí být datum větší než :date.',
    'after_or_equal' => 'Atribut :attribute musí být datum větší nebo rovno :date.',
    'alpha' => 'Atribut :attribute může obsahovat jen písmena.',
    'alpha_dash' => 'Atribut :attribute může obsahovat jen písmena, čísla, pomlčky a podtržení.',
    'alpha_num' => 'Atribut :attribute může obsahovat jen písmena a čísla.',
    'array' => 'Atribut :attribute musí být pole.',
    'before' => 'Atribut :attribute musí být datum menší než :date.',
    'before_or_equal' => 'Atribut :attribute musí být datum menší nebo rovno :date.',
    'between' => [
        'numeric' => 'Atribut :attribute musí být mezi :min a :max.',
        'file' => 'Velikost :attribute musí být mezi :min a :max kilobytů.',
        'string' => 'Délka :attribute musí být mezi :min a :max znaků.',
        'array' => 'Atribut :attribute musí mít mezi :min a :max položkami.',
    ],
    'boolean' => 'Atribut :attribute musí být TRUE nebo FALSE',
    'confirmed' => 'Attribute :attribute confirmation does not match.',
    'date' => 'Atribut :attribute není platné datum.',
    'date_equals' => 'Atribut :attribute se musí rovnot datu :date.',
    'date_format' => 'Atribut :attribute není datum ve formátu :format.',
    'different' => 'Atribut :attribute a :other se musí lišit.',
    'digits' => 'Atribut :attribute musí být :digits číslic.',
    'digits_between' => 'Atribut :attribute musí být minimálně :min a maximálně :max číslic.',
    'dimensions' => 'Obrázek :attribute nemá platné rozměry.',
    'distinct' => 'Atribut :attribute musí mít odlišné hodnoty.',
    'email' => 'Atribut :attribute musí být platná emailová adresa.',
    'ends_with' => 'Atribut :attribute nusí končit jednou z následujících hodnot: :values.',
    'exists' => 'Vybraný :attribute není platný.',
    'file' => 'Atribut :attribute musí být soubor.',
    'filled' => 'Atribut :attribute musí být vyplněný.',
    'gt' => [
        'numeric' => 'Atribut :attribute musí být větší než :value.',
        'file' => 'Soubor :attribute musí být větší než :value kilobytů.',
        'string' => 'Délka :attribute musí být větší než :value znaků.',
        'array' => 'Pole :attribute musí mít víc než :value záznamů.',
    ],
    'gte' => [
        'numeric' => 'Atribut :attribute musí být větší nebo rovno :value.',
        'file' => 'Soubor :attribute musí mít minimálně :value kilobytů.',
        'string' => 'Délka :attribute musí mít minimálně :value znaků.',
        'array' => 'Pole :attribute musí mít minimálně :value záznamů.',
    ],
    'image' => 'Atribut :attribute musí být obrázek.',
    'in' => 'Vybraný :attribute není platný.',
    'in_array' => 'Atribut :attribute není součástí :other.',
    'integer' => 'Atribut :attribute musí být číslo.',
    'ip' => 'Atribut :attribute musí být platná IP adresa.',
    'ipv4' => 'Atribut :attribute musí být platná IPv4 adresa.',
    'ipv6' => 'Atribut :attribute musí být platná IPv6 adresa.',
    'json' => 'Atribut :attribute musí být platný JSON řetězec.',
    'lt' => [
        'numeric' => 'Atribut :attribute musí být menší než :value.',
        'file' => 'Soubor :attribute musí být menší než :value kilobytů.',
        'string' => 'Délka :attribute musí být menší než :value znaků.',
        'array' => 'Pole :attribute musí mít míň než :value záznamů.',
    ],
    'lte' => [
        'numeric' => 'Atribut :attribute musí být menší nebo rovno :value.',
        'file' => 'Soubor :attribute musí mít maximálně :value kilobytů.',
        'string' => 'Délka :attribute musí mít maximálně :value znaků.',
        'array' => 'Pole :attribute musí mít maximálně :value záznamů.',
    ],
    'max' => [
        'numeric' => 'Atribut :attribute nesmí být větší než :value.',
        'file' => 'Soubor :attribute nesmí být větší než :value kilobytů.',
        'string' => 'Délka :attribute nesmí být větší než :value znaků.',
        'array' => 'Pole :attribute nesmí mít víc než :value záznamů.',
    ],
    'mimes' => 'Atribut :attribute musí být typu: :values.',
    'mimetypes' => 'Soubor :attribute musí být typu: :values.',
    'min' => [
        'numeric' => 'Atribut :attribute nesmí být menší než :value.',
        'file' => 'Soubor :attribute nesmí být menší než :value kilobytů.',
        'string' => 'Délka :attribute nesmí být menší než :value znaků.',
        'array' => 'Pole :attribute nesmí mít míň než :value záznamů.',
    ],
    'not_in' => 'Vybraná položka :attribute není platná.',
    'not_regex' => 'Atribut :attribute má neplatný formát.',
    'numeric' => 'Atribut :attribute musí být číslo.',
    'password' => 'Heslo je neplatné.',
    'present' => 'Atribut :attribute musí být vyplněné.',
    'regex' => 'Atribut :attribute nevyhovuje regulárnímu výrazu.',
    'required' => 'Atribut :attribute je povinný.',
    'required_if' => 'Atribut :attribute je povinný v kombinaci s hodnotou :value atributu :other.',
    'required_unless' => 'Atribut :attribute je povinný, pokud není vyplněn :other hodnotou :values.',
    'required_with' => 'Atribut :attribute je povinný, pokud je vyplněna alespoň jedna hodnota :values.',
    'required_with_all' => 'Atribut :attribute je povinný, pokud jsou vyplněny všechny hodnoty :values.',
    'required_without' => 'Atribut :attribute je povinný, pokud není vyplněna alespoň jedna hodnota :values.',
    'required_without_all' => 'Atribut :attribute je povinný, pokud není vyplněna žádná hodnota :values.',
    'same' => 'Atribut :attribute a :other se musí shodovat.',
    'size' => [
        'numeric' => 'Atribut :attribute musí mít velikost :size.',
        'file' => 'Atribut :attribute musí mít velikost :size kilobytů.',
        'string' => 'Atribut :attribute musí mít délku :size znaků.',
        'array' => 'Atribut :attribute musí obsahovat :size položek.',
    ],
    'starts_with' => 'Atribut :attribute musí začínat jedním z následujících: :values.',
    'string' => 'Atribut :attribute musí být textový řetězec.',
    'timezone' => 'Atribut :attribute musí být validní časová zóna.',
    'unique' => 'Atribut :attribute je již používán.',
    'uploaded' => 'Soubor :attribute se nepodařilo nahrát.',
    'url' => 'Formál URL :attribute je neplatný.',
    'uuid' => 'Atribut :attribute musí být platné UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
