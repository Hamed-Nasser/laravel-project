<?php
namespace App\Http\Responses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;
use Spatie\Permission\PermissionRegistrar;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
/**
 * Class LoginResponse
 * @package App\Http\Responses
 * @author Babu Khan
 */
class LogoutResponse implements LogoutResponseContract {
 public function toResponse($request)
 {
 $user = Auth::user();
 $userId = 0;
 if($user != null) {
 $userId = $user->id;
 //your custom code goes here
 
 }
 
 if($request->session() == null) {
 $request->session()->regenerateToken();
 } else {
 Auth::guard('web')->logout();
 $request->session()->invalidate();
 $request->session()->regenerateToken(); 
 }
 
 return redirect(route('login'));
 /* redirect to admin login page */
 }
}