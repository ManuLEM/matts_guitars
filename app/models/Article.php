<?php


class Article extends Eloquent  {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    protected $guarded = array('id');

}