<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saveEnquiries extends Model
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
    protected $id = ['id'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'enquiries';
    }

}
