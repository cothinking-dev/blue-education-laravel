<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnquiryRequest;
use App\Mail\EnquiryReceived;
use App\Models\Enquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(StoreEnquiryRequest $request): JsonResponse
    {
        $enquiry = Enquiry::create($request->validated());

        Mail::to(config('seo.organization.email'))->send(new EnquiryReceived($enquiry));

        return response()->json(['success' => true]);
    }
}
