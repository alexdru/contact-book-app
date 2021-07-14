<?php

namespace Tests\Unit;

use App\Models\Contact;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use JsonException;
use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Testing to get all contacts
     *
     * @see ContactController::index()
     * @throws JsonException
     */
    public function testIndex(): void
    {
        $response = $this->get('/api/contacts');

        $structure = $this->getFileStructure('/responses/contact/contact-list.json');
        $response->assertJsonStructure($structure);
    }

    /**
     * Testing contact saving
     *
     * @see ContactController::store()
     */
    public function testStore(): void
    {
        $response = $this->post('/api/contacts', ['name' => 'Test Test']);

        $this->assertEquals(true, $response['data']);
    }

    /**
     * Testing contact deleting
     *
     * @see ContactController::destroy()
     */
    public function testDestroy(): void
    {
        $contactId = Contact::query()
            ->select('id')
            ->inRandomOrder()
            ->first();

        $response = $this->delete('/api/contacts', ['id' => $contactId->id]);

        $this->assertEquals(true, $response['data']);
    }
}
