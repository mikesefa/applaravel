<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model


{
    /*  /**
     * The table associated with the model.
     *
     * @var string
     */

    /* protected $table = 'projects'; */

    protected $fillable = ['title', 'url', 'description']; //rellenador para request create proyectos.

    /* use HasFactory; */
    public function getRouteKeyName()
    {
        return 'title'; //buscar el projecto por el titulo
    }
}
