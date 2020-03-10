<?php

class CategoryController extends Controller
{
    public function index()
    {
        $model = new Employees();

        $this->render('category/index', $model->getAll());
    }

     public function newgit()
    {
        $this->render('category/view');
    }

    public function view()
    {
        $this->render('category/view');
    }

    public function edit()
    {
        $this->render('category/edit');
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
}
