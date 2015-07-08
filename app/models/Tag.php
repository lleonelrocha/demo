<?php

class Tag extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * Whether or not to enable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Whitelisted model properties for mass assignment.
     *
     * @var array
     */
    protected $fillable = array('name');

    /**
     * Defines a many-to-many relationship.
     *
     * @see http://laravel.com/docs/eloquent#many-to-many
     */
    public function posts()
    {
        return $this->belongsToMany('Post');
    }

}