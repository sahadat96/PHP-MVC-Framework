<?php


class HomeController extends Controller
{

     public function index()
     {
         $result = new Model;
         $result->test();
         $this->view('home');
     }
} 
