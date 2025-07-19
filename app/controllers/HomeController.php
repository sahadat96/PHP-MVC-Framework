<?php


class HomeController extends Controller
{

     public function index()
     {
        echo "This is home controller";
     }
} 

 $home = new HomeController;
 $home->index();