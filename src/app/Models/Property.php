<?php
namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
    'title',
    'imageURL',
    'street',
    'number',
    'city',
    'province',
    'country',
    // 'status',
    'type',
    'description',
    'contact_mail',
    'contact_phone',
    'condition',
    'room',
    'bath',
    'size',
    'price',
    'pet',
    'lift',
    'garden',
    'air_conditioning',
    'swimming_pool',
    'terrace',
    'publication_date'
    ];
}