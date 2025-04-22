<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    House,
    Photo
};
use App\DTO\HouseDTO;

class APIHouseController extends Controller
{

    public function houses()
    {
        $housesRaw = House::with(['photos'])->get()->all();

         /**
         * @var array<HouseDTO> $housesResponseList
         */
        $housesResponseList = array();
        
        /**
         * @var House $ho
         */
        foreach($housesRaw as $ho)
        {
            // $newHouse = new HouseDTO($ho->id);
            $newHouse = new HouseDTO($ho->id);
            $newHouse->loadHouseData($ho);
            $firstPhoto = Photo::where('house_id', $ho->id)->first();
            if(isset($firstPhoto))
            {
                $newHouse->photoUrl = $firstPhoto->path;
            }
            array_push($housesResponseList, $newHouse);
        }

        return response()->json($housesResponseList);
    }

}