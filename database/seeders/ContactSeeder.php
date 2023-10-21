<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\ContactRepository;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (Contact::count() > 0) {
            return;
        }

        app(ContactRepository::class)->create([
            'title' => [
                'en' => 'Contact',
                // add other languages here
            ],
            'description' => [
                'en' => '',
                // add other languages here
            ],
            'published' => false,
        ]);
    }
}
