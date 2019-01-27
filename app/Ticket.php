<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'ticketType'
    ];

/* public function getSpecificSelectData() {
        $mappedData = [];
        $result = DB::select("SELECT concat(`ticketType`, '  - ', `created_at`)
  as `customValue`, `id` FROM theatredatabase.tickets;");
        if (!empty($result)) {
            foreach($result as $key => $value) {
                $mappedData[$value->id] = $value->customValue;
            }
        }
        return $mappedData;
    }*/
}
