<?php


class PreviousOwner extends Eloquent  {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'previous_owner';

    protected $guarded = array('id');

    public function guitars()
    {
        return $this->hasMany('Guitar');
    }
}