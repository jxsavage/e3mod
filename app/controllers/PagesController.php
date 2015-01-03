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
    /* Gets image file names from the designiated folder in the /img directory and returns them as an array complete with their path off the public directory */
    private function getImages($folder){
        $images = glob(public_path() . '/img/'.$folder.'/*.{jpg,png,jpeg,gif}', GLOB_BRACE);

        $imgArray = array();

        foreach ($images as $image) {
            array_push($imgArray, '/img/'.$folder.'/'.basename($image));
        }
        
        return $imgArray;
    }
    
    
    /* creates a carousel with the id and classes specified using the the folder indicated for source images */
    private function createCarousel($id, $classes, $folder){
        
        $images = $this->getImages($folder);
        
        $indicators = "";
        
        for($i = 0; $i < count($images); $i++){
            if($i != 0){
                $indicators .= "<li data-target=\"#".$id."\" data-slide-to=\"".$i."\"></li>\n";
            }
            else{
                $indicators .= "<li data-target=\"#".$id."\" data-slide-to=\"".$i."\" class=\"active\"></li>\n";
            }
        }
        
        $wrappers = "";
        
        for($i = 0; $i < count($images); $i++){
            if($i != 0){
                $wrappers .= "<div class=\"item\">
                                <img src=\"".$images[$i]."\" alt=\"...\">
                                <div class=\"carousel-caption\">
                                    <!--Picture caption-->
                                </div>
                              </div>";
            }
            else{
                $wrappers .= "<div class=\"item active\">
                                <img src=\"".$images[$i]."\" alt=\"...\">
                                <div class=\"carousel-caption\">
                                    <!--Picture caption-->
                                </div>
                              </div>";
            }
        }
        
        $htmlClasses = "";
        
        foreach($classes as $class){
            $htmlClasses .= " ".$class;
        }
         
        $html = "<div id=\"".$id."\" class=\"carousel slide".$htmlClasses."\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">".
                $indicators   
                ."</ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">".
                $wrappers
                    ."<!--Picture caption-->
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#".$id."\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#".$id."\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>";
        
        return $html;
    }

    public function showHome() {
        
        $e3Carousel = $this->createCarousel("e3-carousel-main", ["large-carousel"], "e3modmain");
        
        $boozeCarousel = $this->createCarousel("booze-carousel-main", ["large-carousel"], "e3modmain");

        return View::make('pages/home', array('e3Carousel' => $e3Carousel, 'boozeCarousel' => $boozeCarousel));
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

    public function showContact() {
        return View::make('pages/contact');
    }
    
    public function getContactUsForm(){
        //get all the data and store it inside Store Variable
        $data = Input::all();
        
        
        //validation rules for message
        $rules = array(
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'phone_number' => 'numeric|digits:10',
            'email' => 'required|email',
            'message' => 'required|min:15'
        );
        
        //validate data
        $validator = Validator::make ($data, $rules);
        
        //if everything passes valdation...
        if ($validator -> passes()){
            Mail::send('emails.hello', $data, function($message) use ($data){
                //email 'From' field: get the users email and first name
                $message->from($data['email'], $data['first_name']);
                //email 'To' fiend: email that you want to be notified on
                $message->to('jxsavage@msn.com', 'Jake')->subject('Contact request from '.$data['first_name'].' '.$data['last_name']);
            });
            //finally return the view
            return View::make('pages/'.$data['route']);
        }else{
            //return contact form with errors
            return Redirect::to($data['route'])->withErrors($validator);
        }    
    }
    
    public function showBoozetique() {
        $boozeCarousel = $this->createCarousel("booze-carousel-main", ["large-carousel"], "e3modmain");
        
        $smallCarousel_1 = $this->createCarousel("booze-carousel-small-1", ["small-carousel"], "e3modsmall_1");
        
        $smallCarousel_2 = $this->createCarousel("booze-carousel-small-2", ["small-carousel"], "e3modsmall_2");
        
        $smallCarousel_3 = $this->createCarousel("booze-carousel-small-3", ["small-carousel"], "e3modsmall_3");
        
        return View::make('pages/boozetique', array('boozeCarousel' => $boozeCarousel, 'carouselSmall1' => $smallCarousel_1, 'carouselSmall2' => $smallCarousel_2, 'carouselSmall3' => $smallCarousel_3));
    }
    
    public function showGallery() {
        
        $e3Carousel = $this->createCarousel("e3-carousel-main", ["large-carousel"], "e3modmain");
        
        $smallCarousel_1 = $this->createCarousel("e3-carousel-small-1", ["small-carousel"], "e3modsmall_1");
        
        $smallCarousel_2 = $this->createCarousel("e3-carousel-small-2", ["small-carousel"], "e3modsmall_2");
        
        $smallCarousel_3 = $this->createCarousel("e3-carousel-small-3", ["small-carousel"], "e3modsmall_3");
        
        return View::make('pages/gallery', array('e3Carousel' => $e3Carousel, 'carouselSmall1' => $smallCarousel_1, 'carouselSmall2' => $smallCarousel_2, 'carouselSmall3' => $smallCarousel_3));
    }

}
