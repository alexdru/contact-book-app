<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Get contacts quantity
     *
     * @param $limit
     * @throws \JsonException
     */
    public function index($limit = null): void
    {
        if ($limit) {
            $result = Contact::query()->limit($limit)->get();
        } else {
            $result = Contact::all();
        }

        $this->response($result);
    }

    /**
     * Store new contact
     *
     * @param Request $request
     * @throws \JsonException
     */
    public function store(Request $request): void
    {
        $request->validate([
            'name' => 'required'
        ]);

        $name = $request->name;

        $result = (new Contact([
            'name' => $name
        ]))->save();

        $this->response($result);
    }
}
