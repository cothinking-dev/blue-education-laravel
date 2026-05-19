<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnquiryRequest;
use App\Mail\EnquiryConfirmation;
use App\Mail\EnquiryReceived;
use App\Models\Enquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(StoreEnquiryRequest $request): JsonResponse
    {
        $enquiry = Enquiry::create($request->validated());

        Mail::queue(new EnquiryReceived($enquiry));
        Mail::queue(new EnquiryConfirmation($enquiry));

        return response()->json(['success' => true]);
    }
}
