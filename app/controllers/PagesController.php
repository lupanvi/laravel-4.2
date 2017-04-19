<?php
class PagesController extends BaseController {

  
  public function contact()
  {
      
    return View::make('hello');
  }

  public function aboutus()
  {
      
    return View::make('aboutus');
  }

  public function gallery()
  {
      
    return View::make('gallery');
  }

   public function friends()
  {
      
    return View::make('friends');
  }


}