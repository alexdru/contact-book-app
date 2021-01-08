<?php

namespace Controllers;

use Illuminate\Http\Request;
use Models\Contact;

class ContactController {

    //get all contacts
    public static function getContacts(): string
    {
        $contacts = Contact::all();

        return print(json_encode($contacts, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));
    }

    //get limited contacts
    public static function getLimitedContacts($limit): string
    {
        $result = Contact::query()->limit($limit)->get();

        return print(json_encode($result, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));
    }

    //store new contact
    public function storeContact(): string
    {
        $request = Request::capture();
        $name = $request->get('name');

        $contact = new Contact([
            'name' => $name
        ]);

        return print(json_encode($contact->save(), JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));
    }

}