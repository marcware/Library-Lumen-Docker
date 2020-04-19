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
        $authors = Book::All();

        return $this->succesResponse($authors);
    }

    /**
     * @param Request $request
     * @return Response|ResponseFactory
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255'
        ];

        $this->validate($request, $rules);

        $author = Book::create($request->all());

        return $this->succesResponse($author, Response::HTTP_CREATED);

    }

    /**
     * Return an author
     * @param Book $author
     * @return JsonResponse
     */
    public function show($author)
    {
        $author = Book::findOrFail($author);

        return $this->succesResponse($author);

    }

    /**
     * Return an author
     * @param Request $request
     * @param Book $author
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, $author)
    {
        $rules = [
            'name' => 'max:255',
            'gender' => 'max:255|in:male,female',
            'country' => 'max:255'
        ];

        $this->validate($request, $rules);

        $author = Book::findOrFail($author);

        $author->fill($request->all());

        if($author->isClean()){
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $author->save();

        return $this->succesResponse($author);

    }

    /**
     * Return an author
     * @param Book $author
     * @return JsonResponse
     */
    public function destroy($author)
    {
        $author = Book::findOrFail($author);

        $author->delete();

        return $this->succesResponse($author);

    }

}
