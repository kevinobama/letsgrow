<?php
/**
 * Created by PhpStorm.
 * User: kevingates
 * Date: 9/25/18
 * Time: 2:29 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'image', 'thumbnail', 'price'];
}
