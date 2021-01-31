<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductUser
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ProductUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductUser query()
 * @mixin \Eloquent
 */
class ProductUser extends Model
{
    use HasFactory;

    protected $table = 'product_user';

    protected $guarded = ['id'];
}
