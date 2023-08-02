<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    private static $tasks = [
        [
            'id' => 1,
            'name' => 'Tugas Artikel',
            'description' => 'Buat Artikel Bebas',
            'dedline' => 'UTS',
            'status' => 'selesai',
        ],

        [
            'id' => 2,
            'name' => 'Tugas Puisi',
            'description' => 'Buat Puisi Bebas',
            'dedline' => 'UAS',
            'status' => 'belum selesai',
        ],

        [
            'id' => 3,
            'name' => 'Tugas Gambar',
            'description' => 'Buat Gambar Bebas',
            'dedline' => 'UTS',
            'status' => 'selesai',
        ],
    ];
    
    public static function getAll()
    {
        return self::$tasks;
    }

    public static function getById($id)
    {
        
        foreach (self::$tasks as $task) {
            if ($task['id'] == $id) {
                return $task;
            }
        }

        return null;

    }
}
