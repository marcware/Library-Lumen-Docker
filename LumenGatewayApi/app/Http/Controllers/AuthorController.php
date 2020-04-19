<?php

namespace App\Http\Controllers;

use App\Book;
use App\Services\AuthorService;
use App\Traits\ApiResponser;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * @var AuthorService
     */
    public $authorService;

    /**
     * @param AuthorService $authorService
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * @return Response|ResponseFactory
     */
    public function index()
    {

       $authors = $this->authorService->obtainAuthors();

        return $this->succesResponse($authors);
    }


    public function store(Request $request)
    {


    }


    public function show($author)
    {


    }


    public function update(Request $request, $author)
    {


    }


    public function destroy($author)
    {


    }

}
