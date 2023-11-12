<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\TestimonialRepository;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (Testimonial::count() > 0) {
            return;
        }

        app(TestimonialRepository::class)->create([
            'title' => [
                'en' => 'Testimonial',
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
