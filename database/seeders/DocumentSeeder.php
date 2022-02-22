<?php

namespace Database\Seeders;
use App\Models\Document;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = Auth::id();
        $data = file_get_contents("database/Queries/documents.json");
        $documents = json_decode($data, true);
        foreach ($documents as $value) {
            Document::create([
                'title' => $value['title'],
                'category' => $value['category'],
                'user_id' => 1,
                'isActive' => $value['isActive']
            ]);
        }
    }
}
