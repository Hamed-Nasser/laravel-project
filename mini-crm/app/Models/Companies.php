<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Companies extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'companies';

    protected $fillable = [
        'company_name',
        'email',
        'logo',
        'website'
    ];
    
    
    public function companies(): HasMany {
        return $this->hasMany(Employees::class);
    }
}
