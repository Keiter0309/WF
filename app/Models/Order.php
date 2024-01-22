<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = [
        'user_id',
        'wine_id',
        'wines_name',
        'name',
        'quantity',
        'total',
    ];

    public function wine()
    {
        return $this->belongsTo(Wine::class);
    }
}
