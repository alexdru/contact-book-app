<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $names = [
            'Артем Кодочегов',
            'Саша Васильевич',
            'Митя Достоевский',
            'Алексей Кощеев',
            'Дима Кулыжников',
            'Денис Мартынов',
            'Алена Щербина',
            'Мария Чебаткова',
            'Сергей Червон',
            'Максим Кулыжников',
            'Никита Савинов',
            'Ирина Истомина',
            'Мария Савочкина',
            'Елена Березкина',
            'Сергей Фатыхов',
            'Анна Смелая'
        ];

        return [
            'name' => $this->faker->randomElement($names)
        ];
    }
}
