<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContactResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ContactController extends Controller
{
    /**
     * Get contacts quantity
     *
     * @param int|null $limit
     * @return AnonymousResourceCollection
     */
    public function index(int $limit = null): AnonymousResourceCollection
    {
        if ($limit) {
            $result = Contact::query()->limit($limit)->get();
        } else {
            $result = Contact::all();
        }

        return ContactResource::collection($result);
    }

    /**
     * Store new contact
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required'
        ]);

        $name = $request->get('name');

        $result = (new Contact([
            'name' => $name
        ]))->save();

        return $this->customResponse($result);
    }

    /**
     * Delete contact
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $result = Contact::findOrFail($id)->delete();

        return $this->customResponse($result);
    }
}
