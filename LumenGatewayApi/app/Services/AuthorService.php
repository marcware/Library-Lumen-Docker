<?php

namespace App\Services;

use App\Traits\ConsumeExternalServices;
use GuzzleHttp\Client;

class AuthorService
{
    use  ConsumeExternalServices;

    /**
     * @var string
     */
    public $baseUri;

    /**
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
        $this->baseUri = config('services.authors.secret');
    }

    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }

    public function createAuthor($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }

    public function obtainAuthor($author)
    {
        return $this->performRequest('GET', "/authors/{$author}" );
    }

    public function editAuthor($data,$author)
    {
        return $this->performRequest('PUT', "/authors/{$author}",$data );
    }

    public function deleteAuthor($author)
    {
        return $this->performRequest('DELETE', "/authors/{$author}" );
    }


}