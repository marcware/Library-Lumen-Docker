<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

        $authors = $this->authorService->createAuthor($request->all());

        return $this->succesResponse($authors,Response::HTTP_CREATED);

    }


    public function show($author)
    {
        $author = $this->authorService->obtainAuthor($author);

        return $this->succesResponse($author);

    }


    public function update(Request $request, $author)
    {
        $author = $this->authorService->editAuthor($request->all(),$author);

        return $this->succesResponse($author);

    }


    public function destroy($author)

    {
        $author = $this->authorService->deleteAuthor($author);

        return $this->succesResponse($author);

    }

}
