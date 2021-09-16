<?php

namespace App\Http\Filters;

use App\Models\Property;
use Illuminate\Http\Request;


class PropertyFilters
{
    public static function apply(Request $filters){

        // Connection with model
        $properties = new Property;

        // Filtering
        if ( $filters->has("q")){
            $properties = $properties->where("city", "LIKE", "%" . $filters->get('q') . "%");
        }

        // type
        if ($filters->has('type')) {
            $typeArr = explode(",", $filters->get("type"));
            $properties = $properties->whereIn('type', $typeArr);
        }

        // condition
        if ($filters->has("condition")){
            $conditionArr = explode(",", $filters->get("condition"));
            $properties = $properties->whereIn("condition", $conditionArr);
        }

        // rooms
        if($filters->has("room")){
            $roomArr = explode(",", $filters->get("room"));
            $properties = $properties->whereIn("room", $roomArr);
        };
        if($filters->has("room_gte")){
            $properties = $properties->orWhere("room", ">=", $filters->get("room_gte"));
        };
        
        // bath
        if($filters->has("bath")){
            $bathArr = explode(",", $filters->get("bath"));
            $properties = $properties->whereIn("bath", $bathArr);
        };
        if($filters->has("bath_gte")){
            $properties = $properties->orWhere("bath", ">=", $filters->get("bath_gte"));
        };
        

        // price
        if($filters->has("price_lte")){
            $properties = $properties->where("price", "<=", $filters->get("price_lte"));
        }
        if($filters->has("price_gte")){
            $properties = $properties->where("price", ">=", $filters->get("price_gte"));
        }

        // publication date
        if($filters->has("publication_date_gte")){
            $properties = $properties->where("publication_date", ">=", $filters->get("publication_date_gte"));
        }

        // others
        if ($filters->has("pet")){
            $properties = $properties->where("pet", 1);
        };
        if ($filters->has("lift")){
            $properties = $properties->where("lift", 1);
        };
        if ($filters->has("garden")){
            $properties = $properties->where("garden", 1);
        };
        if ($filters->has("terrace")){
            $properties = $properties->where("terrace", 1);
        };
        if ($filters->has("air_conditioning")){
            $properties = $properties->where("air_conditioning", 1);
        };
        if ($filters->has("swimming_pool")){
            $properties = $properties->where("swimming_pool", 1);
        };


        return $properties->get();
    }


}