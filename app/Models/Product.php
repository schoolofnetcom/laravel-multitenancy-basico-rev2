<?php

namespace App\Models;

use App\Tenant\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use TenantModels;
    protected $fillable = ['name','description','price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
