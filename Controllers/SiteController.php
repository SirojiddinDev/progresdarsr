<?php

class SiteController extends Controller
{
    public function index()
    {
        include 'views/layouts/header.php';
        echo "bu site index, yani default";
        include 'views/layouts/footer.php';
    }
    public function view()
    {
        include 'views/layouts/header.php';
        echo "bu site view";
        include 'views/layouts/footer.php';
    }
    public function edit()
    {
        include 'views/layouts/header.php';
        echo "bu site edit";
        include 'views/layouts/footer.php';
    }
    public function dev()
    {
    	echo "Salom";
    }

    public function delete()
    {
        include 'views/layouts/header.php';
        echo "bu site delete";
        include 'views/layouts/footer.php';
    }
}