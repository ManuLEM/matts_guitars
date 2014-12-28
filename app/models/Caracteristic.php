<?php


class Caracteristic extends Eloquent  {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'caracteristics';

    protected $guarded = array('id');

    public function guitars()
    {
        return $this->belongsToMany('Guitar');
    }

}