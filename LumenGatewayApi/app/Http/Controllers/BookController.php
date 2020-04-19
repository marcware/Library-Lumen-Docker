<?php

namespace App\Http\Controllers;


use App\Book;
use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * @var BookService
     */
    public $bookService;

    /**
     * @param BookService $bookService
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * @return Response|ResponseFactory
     */
    public function index()
    {
        $books = $this->bookService->obtainBooks();

        return $this->succesResponse($books);
    }

    /**
     * @param Request $request
     * @return Response|ResponseFactory
     */
    public function store(Request $request)
    {

        $books = $this->bookService->createBook($request->all());

        return $this->succesResponse($books,Response::HTTP_CREATED);

    }


    /**
     * @param Book $book
     * @return Response|ResponseFactory
     */
    public function show($book)
    {
        $book = $this->bookService->obtainBook($book);

        return $this->succesResponse($book);

    }


    /**
     * @param Request $request
     * @param Book $book
     * @return Response|ResponseFactory
     */
    public function update(Request $request, $book)
    {
        $book = $this->bookService->editBook($request->all(),$book);

        return $this->succesResponse($book);

    }


    /**
     * @param Book $book
     * @return Response|ResponseFactory
     */
    public function destroy($book)
    {
        $book = $this->bookService->deleteBook($book);

        return $this->succesResponse($book);

    }

}
