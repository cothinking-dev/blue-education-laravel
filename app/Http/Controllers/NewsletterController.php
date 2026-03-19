<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;

class NewsletterController extends Controller
{
    public function __invoke(StoreSubscriberRequest $request): JsonResponse
    {
        Subscriber::updateOrCreate(['email' => $request->validated()['email']]);

        return response()->json(['success' => true]);
    }
}
