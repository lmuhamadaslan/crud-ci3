<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller
{
    public function index()
    {
        echo "This is home page";
    }

    public function about()
    {
        echo "This is about page";
    }

    public function blog($title = null)
    {
        echo "This is blog page with title: $title";
    }
}

