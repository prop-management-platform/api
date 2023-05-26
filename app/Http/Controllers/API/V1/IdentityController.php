<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;

class IdentityController extends Controller
{
    public function __invoke(): UserResource
    {
        $user = auth()->user();

        return New UserResource($user);
    }
}
