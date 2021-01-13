<?php

namespace Controllers;

use Illuminate\Http\Request;
use Models\Contact;

class ContactController extends BaseController
{
    /**
     * Get contacts quantity
     *
     * @throws \JsonException
     */
    public function index(): void
    {
        $request = Request::capture();
        $limit = $request->get('limit');

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
     * @throws \JsonException
     */
    public function store(): void
    {
        $request = Request::capture();
        $name = $request->get('name');

        $result = (new Contact([
            'name' => $name
        ]))->save();

        $this->response($result);
    }

}