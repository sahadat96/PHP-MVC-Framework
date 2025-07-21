<?php


class HomeController extends Controller
{

     public function index()
     {
         $model = new Model;
         
         $arr['id'] = 1;
         $arr['name'] = "sohel";
         $result = $model->where($arr);

         print_r($result);
         


         $this->view('home');
     }
} 
