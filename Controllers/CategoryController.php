<?php

class CategoryController extends Controller
{
    public function index()
    {
 /* SAlikhovID*/       $model = new Employees();

        $this->render('category/index', $model->getAll());
    }

    public function view()
    {
        $this->render('category/view');
    }

    public function edit()
    {
        $this->render('category/edit');
    }
    
    public function edit1()
    {
        $this->render('category/edit1');
    }
}