<?php

class PersonController extends Controller
{
    public function view()
    {
        echo "bu personni view funksiyasini ichi";
    }
    public function edit($id=null)
    {
        echo "bu personni edit funksiyasini ichi: ".$id;
    }
    public function git()
    {
        echo "gitga Personga nimadir qo'shdim";
    }
}