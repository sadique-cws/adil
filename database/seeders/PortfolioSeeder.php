<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolioItems = [
            // Structure Glazing Projects
            [
                'name' => 'Corporate Office Glass Facade',
                'url' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],
            [
                'name' => 'Modern Glass Building Exterior',
                'url' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],
            [
                'name' => 'Commercial Mall Glass Structure',
                'url' => 'https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],

            // UPVC Windows & Doors
            [
                'name' => 'Luxury Villa UPVC Windows',
                'url' => 'https://images.unsplash.com/photo-1600607686527-6fb886090705?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-600607686527-6fb886090705?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],
            [
                'name' => 'Modern Home UPVC Door Installation',
                'url' => 'https://images.unsplash.com/photo-1503708928676-1cb796a0891e?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1503708928676-1cb796a0891e?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],
            [
                'name' => 'Residential UPVC Window System',
                'url' => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],

            // Modular Kitchen
            [
                'name' => 'Contemporary Modular Kitchen Design',
                'url' => 'https://images.unsplash.com/photo-1556911220-bff31c812dba?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1556911220-bff31c812dba?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],
            [
                'name' => 'Premium Kitchen with Island',
                'url' => 'https://images.unsplash.com/photo-1556912167-f556f1f39f96?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1556912167-f556f1f39f96?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],

            // Glass Railings
            [
                'name' => 'Frameless Glass Railing for Balcony',
                'url' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],
            [
                'name' => 'Modern Staircase Glass Railing',
                'url' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],

            // Steel & Iron Work
            [
                'name' => 'Custom Steel Staircase',
                'url' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],
            [
                'name' => 'Decorative Iron Gate Work',
                'url' => 'https://images.unsplash.com/photo-1595814433015-e670b358f0c4?w=1200&auto=format&fit=crop',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1595814433015-e670b358f0c4?w=400&auto=format&fit=crop',
                'file_id' => 'sample_' . uniqid(),
            ],
        ];

        foreach ($portfolioItems as $item) {
            Portfolio::create($item);
        }
    }
}
