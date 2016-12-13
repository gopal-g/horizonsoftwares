<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saveenquiry extends Model
{
    //
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'enquiries';
    }
}
