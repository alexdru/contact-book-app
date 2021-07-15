<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use App\Services\ContactService;
use Illuminate\Http\JsonResponse;
use App\Models\Contact;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ContactController extends Controller
{
    protected ContactService $contactService;

    public function __construct()
    {
        $this->contactService = app(ContactService::class);
    }

    /**
     * Get all contacts or limited contacts
     *
     * @param int|null $limit
     * @return AnonymousResourceCollection
     */
    public function index(int $limit = null): AnonymousResourceCollection
    {
        $contacts = $this->contactService->index($limit);

        return ContactResource::collection($contacts);
    }

    /**
     * Store new contact
     *
     * @param ContactRequest $request
     * @bodyParam name string required Contact name. For example: "Test Test"
     *
     * @return ContactResource
     */
    public function store(ContactRequest $request): ContactResource
    {
        $input = $request->validated();
        $contact = $this->contactService->store($input);

        return new ContactResource($contact);
    }

    /**
     * Delete contact
     *
     * @param Contact $contact
     * @urlParam contact integer required Contact id. For example: 1
     *
     * @return JsonResponse
     */
    public function destroy(Contact $contact): JsonResponse
    {
        $response = $this->contactService->destroy($contact);

        return $this->customResponse($response);
    }
}
