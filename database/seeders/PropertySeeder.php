<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'title' => 'Cozy Cottage',
                'description' => 'A charming cottage in the countryside.',
                'location' => 'Village A',
                'price' => 5000,
                'rooms' => 2,
                'image' => 'cozy_cottage.jpg', // Make sure this image exists in your public/images folder
            ],
            [
                'title' => 'Modern Apartment',
                'description' => 'A stylish apartment in the city center.',
                'location' => 'City B',
                'price' => 15000,
                'rooms' => 3,
                'image' => 'modern_apartment.jpg',
            ],
            [
                'title' => 'Spacious Villa',
                'description' => 'A large villa with a beautiful garden.',
                'location' => 'Suburb C',
                'price' => 30000,
                'rooms' => 5,
                'image' => 'spacious_villa.jpg',
            ],
            [
                'title' => 'Luxury Penthouse',
                'description' => 'A stunning penthouse with a city view.',
                'location' => 'Downtown D',
                'price' => 50000,
                'rooms' => 4,
                'image' => 'luxury_penthouse.jpg',
            ],
            [
                'title' => 'Beachfront Bungalow',
                'description' => 'A beautiful bungalow right by the beach.',
                'location' => 'Coastal E',
                'price' => 40000,
                'rooms' => 3,
                'image' => 'beachfront_bungalow.jpg',
            ],
            [
                'title' => 'Charming Townhouse',
                'description' => 'A quaint townhouse in a lively neighborhood.',
                'location' => 'Town F',
                'price' => 20000,
                'rooms' => 3,
                'image' => 'charming_townhouse.jpg',
            ],
            [
                'title' => 'Renovated Loft',
                'description' => 'An industrial-style loft in a trendy area.',
                'location' => 'District G',
                'price' => 22000,
                'rooms' => 2,
                'image' => 'renovated_loft.jpg',
            ],
            [
                'title' => 'Suburban Family Home',
                'description' => 'A spacious home perfect for families.',
                'location' => 'Suburb H',
                'price' => 25000,
                'rooms' => 4,
                'image' => 'suburban_family_home.jpg',
            ],
            [
                'title' => 'Elegant Studio',
                'description' => 'A modern studio apartment with great amenities.',
                'location' => 'City I',
                'price' => 12000,
                'rooms' => 1,
                'image' => 'elegant_studio.jpg',
            ],
            [
                'title' => 'Rustic Farmhouse',
                'description' => 'A farmhouse with beautiful landscapes.',
                'location' => 'Rural J',
                'price' => 45000,
                'rooms' => 4,
                'image' => 'rustic_farmhouse.jpg',
            ],
            [
                'title' => 'Compact Condo',
                'description' => 'A compact condo perfect for young professionals.',
                'location' => 'Urban K',
                'price' => 10000,
                'rooms' => 1,
                'image' => 'compact_condo.jpg',
            ],
            [
                'title' => 'Stylish Duplex',
                'description' => 'A modern duplex with ample space.',
                'location' => 'Neighborhood L',
                'price' => 23000,
                'rooms' => 3,
                'image' => 'stylish_duplex.jpg',
            ],
            [
                'title' => 'Quiet Retreat',
                'description' => 'A serene property surrounded by nature.',
                'location' => 'Forest M',
                'price' => 28000,
                'rooms' => 3,
                'image' => 'quiet_retreat.jpg',
            ],
            [
                'title' => 'City View Apartment',
                'description' => 'An apartment with stunning views of the city skyline.',
                'location' => 'Skyline N',
                'price' => 16000,
                'rooms' => 2,
                'image' => 'city_view_apartment.jpg',
            ],
            [
                'title' => 'Heritage Home',
                'description' => 'A historic home with modern updates.',
                'location' => 'Historic O',
                'price' => 30000,
                'rooms' => 4,
                'image' => 'heritage_home.jpg',
            ],
            [
                'title' => 'Modern Farmhouse',
                'description' => 'A blend of modern amenities and farmhouse charm.',
                'location' => 'Countryside P',
                'price' => 40000,
                'rooms' => 5,
                'image' => 'modern_farmhouse.jpg',
            ],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
