<?php

namespace Database\Seeders;

use App\Models\PhotoDestination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoDestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/anyer 1.jpg',
            'destination_id' => '1'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/anyer 2.jpg',
            'destination_id' => '1'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/legon 1.jpg',
            'destination_id' => '2'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/legon 2.jpg',
            'destination_id' => '2'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/sawarna 1.jpg',
            'destination_id' => '3'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/sawarna 2.jpg',
            'destination_id' => '3'
        ]);


        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/ratu 1.jpg',
            'destination_id' => '4'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/ratu 2.jpg',
            'destination_id' => '4'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/karang 1.jpg',
            'destination_id' => '5'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/karang 2.jpg',
            'destination_id' => '5'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/carita 1.jpg',
            'destination_id' => '6'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/carita 2.jpg',
            'destination_id' => '6'
        ]);
    }
}
