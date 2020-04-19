<?php

namespace App\Http\Controllers;

use App\Book;
use App\Services\bookService;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * @var bookService
     */
    public $bookService;

    /**
     * @param bookService $bookService
     */
    public function __construct(bookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Return authors list
     * @return JsonResponse
     */
    public function index()
    {
        $books = Book::all();

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
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|min:1',
            'author_id' => 'required|min:1',
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
            'title' => 'max:255',
            'description' => 'max:255',
            'price' => 'min:1',
            'author_id' => 'min:1',
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