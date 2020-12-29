<?php
namespace Controllers;
use Models\Contact;

class ContactController {

    public static function getContacts()
    {
        return json_encode(Contact::all(), JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);
    }

}