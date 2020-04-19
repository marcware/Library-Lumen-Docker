<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
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
        $users = $User::All();

        return $this->succesResponse($users);
    }

    /**
     * Return authors created
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|max:8|confirmed'
        ];

        $this->validate($request, $rules);

        $author = $User::create($request->all());

        return $this->succesResponse($user, Response::HTTP_CREATED);

    }

    /**
     * Return an author
     * @param $User $user
     * @return JsonResponse
     */
    public function show($user)
    {
        $user = $User::findOrFail($user);

        return $this->succesResponse($user);

    }

    /**
     * Return an author
     * @param Request $request
     * @param $User $user
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, $user)
    {
        $rules = [
            'name' => 'max:255',
            'email' => 'max:255|email|unique:users,email',
            'password' => 'max:8|confirmed'
        ];

        $this->validate($request, $rules);

        $user = $User::findOrFail($user);

        $user->fill($request->all());

        if($user->isClean()){
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $user->save();

        return $this->succesResponse($user);

    }

    /**
     * Return an author
     * @param $User $user
     * @return JsonResponse
     */
    public function destroy($user)
    {
        $user = $User::findOrFail($user);

        $user->delete();

        return $this->succesResponse($user);

    }

}
