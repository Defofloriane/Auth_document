<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anneeAcademique extends Model
{
    use HasFactory;
       /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_anneeAcademique';
      /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
     /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';
}
