<?php
namespace Controllers;
use Illuminate\Support\Facades\Request;
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
    public static function storeContact(Request $request): string
    {

    }

}