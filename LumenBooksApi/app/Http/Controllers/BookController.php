<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class BookController extends Controller
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
     * Return authors list
     * @return JsonResponse
     */
    public function index()
    {
        $books = Book::All();

        return $this->succesResponse($books);
    }

    /**
     * Return authors created
     * @param Request $request
     * @return JsonResponse
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

        $book = Book::create($request->all());

        return $this->succesResponse($book, Response::HTTP_CREATED);

    }

    /**
     * Return an author
     * @param Book $book
     * @return JsonResponse
     */
    public function show($book)
    {
        $book = Book::findOrFail($book);

        return $this->succesResponse($book);

    }

    /**
     * Return an author
     * @param Request $request
     * @param Book $book
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, $book)
    {
        $rules = [
            'name' => 'max:255',
            'gender' => 'max:255|in:male,female',
            'country' => 'max:255'
        ];

        $this->validate($request, $rules);

        $book = Book::findOrFail($book);

        $book->fill($request->all());

        if($book->isClean()){
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $book->save();

        return $this->succesResponse($book);

    }

    /**
     * Return an author
     * @param Book $book
     * @return JsonResponse
     */
    public function destroy($book)
    {
        $book = Book::findOrFail($book);

        $book->delete();

        return $this->succesResponse($book);

    }

}
