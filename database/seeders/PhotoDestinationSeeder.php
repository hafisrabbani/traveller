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
            'photo_path' => 'assets/images/carrousels/anyer 1.jpeg',
            'destination_id' => '1'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/anyer 2.jpeg',
            'destination_id' => '1'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/anyer 3.jpeg',
            'destination_id' => '1'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/anyer 4.jpeg',
            'destination_id' => '1'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/legon 1.jpeg',
            'destination_id' => '2'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/legon 2.jpeg',
            'destination_id' => '2'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/sawarna 1.jpeg',
            'destination_id' => '3'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/sawarna 2.jpeg',
            'destination_id' => '3'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/sawarna 3.jpeg',
            'destination_id' => '3'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/sawarna 4.jpeg',
            'destination_id' => '3'
        ]);


        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/palabuhan 1.jpeg',
            'destination_id' => '4'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/palabuhan 2.jpeg',
            'destination_id' => '4'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/karang 1.jpeg',
            'destination_id' => '5'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/karang 2.jpeg',
            'destination_id' => '5'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/carita 1.jpeg',
            'destination_id' => '6'
        ]);

        PhotoDestination::create([
            'photo_path' => 'assets/images/carrousels/carita 2.jpeg',
            'destination_id' => '6'
        ]);
    }
}
