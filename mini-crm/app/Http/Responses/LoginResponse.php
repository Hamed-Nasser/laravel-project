<?php
namespace App\Http\Responses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Spatie\Permission\PermissionRegistrar;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
/**
 * Class LoginResponse
 * @package App\Http\Responses
 * @author babu khan
 */
class LoginResponse implements LoginResponseContract {
 /**
 * Create an HTTP response that represents the object.
 *
 * @param \Illuminate\Http\Request $request
 * @return \Symfony\Component\HttpFoundation\Response|\Illuminate\Http\RedirectResponse
 */
 // public function toResponse($request): Response|RedirectResponse
 public function toResponse($request)
 {
 $user = Auth::user();
 $userId = $user->id;
 //your code goes here
 
 return redirect(route('dashboard'));
 }
}