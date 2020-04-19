<?php

namespace App\Services;

use App\Traits\ConsumeExternalServices;

class AuthorService
{
    use  ConsumeExternalServices;

    /**
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }


}