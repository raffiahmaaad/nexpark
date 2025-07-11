<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plat_number',
        'registration_number',
        'status',
        'duration',
        'packing_charge',
        'customer_id',
        'category_id',
        'created_by'
    ];

    protected $attributes = [
        'status' => 1 // Set default status to ongoing (1)
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function vehicleIns()
    {
        return $this->hasMany(\App\Models\VehicleIn::class, 'vehicle_id');
    }

    public static function booted()
    {

        static::creating(function ($model) {
            $model->created_by = Auth::id();
            $model->registration_number = rand(12, 34353) . time();
        });
    }
}
