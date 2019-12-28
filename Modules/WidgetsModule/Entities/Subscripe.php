<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Subscripe extends Model
{
    protected $fillable = ['email'];

    protected $table = 'subscription';
}
