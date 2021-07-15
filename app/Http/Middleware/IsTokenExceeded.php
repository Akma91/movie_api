<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Response;

class IsTokenExceeded
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $users = User::where('api_token', $request->api_token)->first();

        if($users->api_counter <= 1000){

            User::where('id', $users->id)->update(array('api_counter' => $users->api_counter + 1));
            return $next($request);


        }else{

            return Response::json(['Token usage exceeded'],401);

        }



    }
}
