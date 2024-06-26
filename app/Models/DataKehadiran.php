<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKehadiran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('uid', 'like', '%' . $search . '%')
                ->orWhere('jabatan', 'like', '%' . $search . '%');
        })->when($filters['sort'] ?? false, function ($query, $sort) {
            return $query->orderBy('created_at', $sort);
        });
    }
}