<?php

use Illuminate\Support\MessageBag;

class AdminController extends BaseController {

    protected $layout = 'layouts.admin';

    public function getLogin()
    {
        if (Auth::check()) {
            return Redirect::route('admin_home');
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

                return Redirect::route('admin_home');
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

}
