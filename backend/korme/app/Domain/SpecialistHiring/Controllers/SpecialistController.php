<?php

namespace App\Domain\SpecialistHiring\Controllers;

use App\Domain\SpecialistHiring\Models\Specialist;
use App\Domain\SpecialistHiring\Requests\StoreSpecialistRequest;
use App\Domain\SpecialistHiring\Resources\SpecialistResource;
use Illuminate\Http\JsonResponse;

class SpecialistController
{
    public function store(StoreSpecialistRequest $request): JsonResponse
    {
        $specialist = Specialist::create($request->validated());
        return response()->json(new SpecialistResource($specialist), 201);
    }
}