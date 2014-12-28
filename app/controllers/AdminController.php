<?php

use Illuminate\Support\MessageBag;

class AdminController extends BaseController {

    protected $layout = 'layouts.admin';

    public function getLogin()
    {
        if (Auth::check()) {
            return Redirect::route('adminHome');
        }

        $this->layout->content = View::make('admin.login');
    }

    public function postLogin()
    {
        $validator = Validator::make(Input::all(), array(
            'username' => 'required',
            'password' => 'required'
        ));

        if ($validator->passes()) {

            $credentials = array(
                "username" => Input::get("username"),
                "password" => Input::get("password")
            );

            $errors = new MessageBag;
            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                return Redirect::route('adminHome');
            } else {
                $errors->add('credentials', 'Invalid login credentials');

                return Redirect::route('getLogin')->withErrors($errors);
            }
        } else {
            return Redirect::route('getLogin')->withErrors($validator);
        }
    }

    public function getHome()
    {
        $this->layout->content = View::make('admin.home');
    }

    public function getGuitars()
    {
        $data['guitars'] = Guitar::all();
        $this->layout->content = View::make('admin.guitars.list', $data);
    }

    public function getArticles()
    {
        $data['articles'] = Guitar::all();
        $this->layout->content = View::make('admin.articles.list', $data);
    }

    public function getGuitarForm()
    {
        $this->layout->content = View::make('admin.guitars.add');
    }

    public function addGuitar()
    {
        $validator = Validator::make(Input::all(), array(
            'title' => 'required',
        ));

        if ($validator->passes()) {

        }
        die;
    }

    public function getArticleForm()
    {
        $this->layout->content = View::make('admin.articles.add');
    }

}
