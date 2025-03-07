<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class Property extends JsonResource
{
    public function toArray($request)
        {
        return [
        'id' => $this->id,
        'title' => $this->title,
        'imageURL' => $this->imageURL,
        'street' => $this->street,
        'number' => $this->number,
        'city' => $this->city,
        'province' => $this->province,
        'country' => $this->country,
        // 'status' => $this->status,
        'type' => $this->type,
        'description' => $this->description,
        'contact_mail' => $this->contact_email,
        'contact_phone' => $this->contact_phone,
        'condition' => $this->condition,
        'room' => $this->room,
        'bath' => $this->bath,
        'size' => $this->size,
        'price' => $this->price,
        'pet' => $this->pet,
        'lift' => $this->lift,
        'garden' => $this->garden,
        'air_conditioning' => $this->air_conditioning,
        'swimming_pool' => $this->swimming_pool,
        'terrace' => $this->terrace,
        'publication_date' => $this->publication_date,
        // 'created_at' => $this->created_at->format('m/d/Y'),
        // 'updated_at' => $this->updated_at->format('m/d/Y'),
        ];
    }
}