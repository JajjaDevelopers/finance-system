<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $loginRules;

    public function __construct()
    {
        $this->setLoginRules();
    }

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
      public function setLoginRules():void
      {
        $this->loginRules =[
            "email" => [
            "rules" => "required",
            "errors" => [
            "required" => "Please provide your email address",
            ]
            ],
            "password" => [
            "rules" => "required",
            "errors" => [
            "required" => "Please provide your password.",
            ]
            ],

        ];
      }
}
