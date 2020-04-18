<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return autrhos list
     * @return JsonResponse
     */
    public function index()
    {
        $authors = Author::All();

        return $this->succesResponse($authors);
    }

    /**
     * Return autrhos list
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Return an author
     * @return Response
     */
    public function show($author)
    {

    }

    /**
     * Return an author
     * @return Response
     */
    public function update(Request $request, $author)
    {

    }

    /**
     * Return an author
     * @return Response
     */
    public function desploy($author)
    {

    }

}
