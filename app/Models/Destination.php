<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    /**
     * Data tempat wisata (hardcoded sesuai ketentuan UTS)
     * 
     * @var array
     */
    private static $destinations = [
        [
            'id' => 1,
            'name' => 'Acropolis, Yunani',
            'image' => 'acropolis.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Shibuya, Jepang',
            'image' => 'shibuya.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Cappadocia, mudi bale',
            'image' => 'cappadocia.webp'
        ],
        [
            'id' => 4,
            'name' => 'Giza, Lotim',
            'image' => 'giza.webp'
        ],
        [
            'id' => 5,
            'name' => 'Garuda wisnhu kencana, bali',
            'image' => 'garuda.jpg'
        ],
        [
            'id' => 6,
            'name' => 'Huayana, Peru',
            'image' => 'huayana.jpg'
        ],
        [
            'id' => 7,
            'name' => 'Jumeirah, Abu Dhabi',
            'image' => 'jumeirah.jpg'
        ],
        [
            'id' => 8,
            'name' => 'Newyork, US',
            'image' => 'newyork.jpg'
        ],
        [
            'id' => 9,
            'name' => 'Niagara, Kanada (karangan anak narmada)',
            'image' => 'niagara.jpg'
        ]
    ];

    /**
     * Get all destinations
     * 
     * @return array
     */
    public static function getAllDestinations()
    {
        return self::$destinations;
    }

    /**
     * Count total destinations (sesuai ketentuan UTS no.4)
     * 
     * @return int
     */
    public static function countDestinations()
    {
        return count(self::$destinations);
    }

    /**
     * Find destination by id
     * 
     * @param int $id
     * @return array|null
     */
    public static function find($id)
    {
        foreach (self::$destinations as $destination) {
            if ($destination['id'] == $id) {
                return $destination;
            }
        }
        return null;
    }
}
