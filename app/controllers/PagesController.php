<?php

class PagesController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Pages Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */
    
    protected $layout = 'layouts.master';

    
    
    public function getContactUsForm(){
        //get all the data and store it inside Store Variable
        $data = Input::all();
        
        
        //validation rules for message
        $rules = array(
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'phone_number' => 'numeric|digits:10',
            'email' => 'required|email',
            'message' => 'required|min:15',
            //'winnie' => 'honeypot',
            //'my_time' =>'required|honeytime:5',
        );
        
        //validate data
        $validator = Validator::make ($data, $rules);
        
        //if everything passes valdation...
        if ($validator -> passes()){
            Mail::send('emails.hello', $data, function($message) use ($data){
                //email 'From' field: get the users email and first name
                $message->from($data['email'], $data['first_name'].' '.$data['last_name']);
                //email 'To' fiend: email that you want to be notified on
                $message->to('ivy@e3modern.com', 'Ivy')->subject('Contact request from '.$data['first_name'].' '.$data['last_name']);
            });
            //finally return the view
            return View::make('pages/'.$data['route']);
        }else{
            //return contact form with errors
            return Redirect::to($data['route'])->withErrors($validator);
        }    
    }
    
    public function showImageGallery() {
        $artPics = ImageHelper::folderContents('art');
        $electronicPics = ImageHelper::folderContents('electronic');
        $fixturePics = ImageHelper::folderContents('fixture');
        
        return View::make('pages/photo-gallery', array('artPics' => $artPics, 'electronicPics' => $electronicPics, 'fixturePics' => $fixturePics,));
    }
    
    
    public function showBoozetique() {
        return View::make('pages/boozetique');
    }
    
    public function showGallery() {   
        return View::make('pages/gallery');
    }
    
    public function showHome() {
        return View::make('pages/home');
    }

    public function showAbout() {
        return View::make('pages/about');
    }

    public function showPress() {
        return View::make('pages/press');
    }

    public function showServices() {
        return View::make('pages/services');
    }

    public function showEvents() {
        return View::make('pages/events');
    }

    public function showMap() {
        return View::make('pages/map');
    }
    
    public function showBlog() {
        return View::make('pages/blog');
    }

    public function showContact() {
        return View::make('pages/contact');
    }

}
