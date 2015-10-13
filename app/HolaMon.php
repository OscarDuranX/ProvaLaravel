<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HolaMon extends Model
{
    protected $string = "Hello World prova123!!";

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }


}
