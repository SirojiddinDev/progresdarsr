<?php

class CategoryController extends Controller
{
    public function index()
    {
        $model = new Employees();

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
}