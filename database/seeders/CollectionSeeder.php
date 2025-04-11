<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //CREATE A TEST COLLECTION
        Collection::create([
            'collection' => 'African Burial Ground Archaeological Project',

            'collection_desc' => 'Discovered in 1991 during construction in Lower Manhattan, this site revealed over 400 
            burial remains of free and enslaved Africans dating back to the 17th and 18th centuries. It is the largest and 
            earliest African burial ground rediscovered in North America. The collection includes human remains, personal 
            artifacts like beads and buttons, and coffin hardware. It provides a rare and powerful glimpse into the lives, 
            health, and culture of enslaved Africans in colonial America.',

            'curator' => 'Dr.Brooke',
            'artifact_list' => '"1,2,3"'
        ]);
    }
}
