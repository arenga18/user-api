<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ValidateUserInput
{
    public function handle(Request $request, Closure $next)
    {
        // Validasi input untuk request POST
        if ($request->isMethod('post')) {
            $validated = validator($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $request->route('id'),
                'age' => 'required|integer|min:1',
            ]);

            if ($validated->fails()) {
                return response()->json(['errors' => $validated->errors()], 422);
            }
        }

        return $next($request);
    }
}
