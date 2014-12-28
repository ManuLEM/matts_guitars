<?php


class Guitar extends Eloquent  {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'guitars';

    protected $guarded = array('id');

    public function caracteristics()
    {
        return $this->belongsToMany('Caracteristic');
    }

    public function previous_owner()
    {
        return $this->belongsTo('PreviousOwner', 'previous_owner_id');
    }
}