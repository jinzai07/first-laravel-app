<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];
    public function scopeActive($query) {
        return $query->where('active', 1)->get();
    }

    public function scopeInactive($query) {
        return $query->where('active', 0)->get();
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function getActiveAttribute($attribute) {
        return [
            '0' => 'Inactive',
            '1' => 'Active'
        ] [$attribute];
    }
}
