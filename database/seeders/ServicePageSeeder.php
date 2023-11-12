<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\ServicePageRepository;
use App\Models\ServicePage;

class ServicePageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (ServicePage::count() > 0) {
            return;
        }

        app(ServicePageRepository::class)->create([
            'title' => [
                'en' => 'ServicePage',
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
