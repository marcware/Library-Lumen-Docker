<?php

namespace App\Services;

use App\Traits\ConsumeExternalServices;

class bookService
{
    use  ConsumeExternalServices;

    /**
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }


}