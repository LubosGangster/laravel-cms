<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Vrať název atributu, podle kterého se získává článek z parametru routy.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'url';
    }
}
