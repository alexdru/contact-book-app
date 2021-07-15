<?php

namespace App\Services;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ContactService
{
    /**
     * Get all contacts or limited contacts
     *
     * @param int|null $limit
     *
     * @return Contact[]|Builder[]|Collection
     */
    public function index(?int $limit)
    {
        if ($limit) {
            return Contact::query()->limit($limit)->get();
        }

        return Contact::all();
    }

    /**
     * Store new contact
     *
     * @param array $request
     *
     * @return Builder|Model
     */
    public function store(array $request)
    {
        return Contact::query()->create($request);
    }

    /**
     * Delete contact
     *
     * @param Contact $contact
     *
     * @return bool
     */
    public function destroy(Contact $contact): bool
    {
        return $contact->delete();
    }
}
