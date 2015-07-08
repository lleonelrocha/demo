<?php

class Category extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Whether or not to enable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Defines a one-to-many relationship.
     *
     * @see http://laravel.com/docs/eloquent#one-to-many
     */
    public function posts()
    {
        return $this->hasMany('Post');
    }

    /**
     * Defines a has-many-through relationship.
     *
     * @see http://laravel.com/docs/eloquent#has-many-through
     */
    public function comments()
    {
        return $this->hasManyThrough('Comment', 'Post');
    }

}