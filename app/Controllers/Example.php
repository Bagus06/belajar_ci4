<?php

namespace App\Controllers;

use App\Models\ExampleModel;

class Example extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new ExampleModel();
    }

    public function home()
    {
        $datas = [
            "select" => "id, title, description",
            "getreturn" => "data",
            "order_by" => [
                "column" => "title",
                "order" => "DESC"
            ],
            "limit" => [
                "length" => -1,
                "start" => ""
            ],
            "whereclause" => ""
        ];
        // $datas = [
        //     "title" => "percobaan 4",
        //     "description" => "ini adalah percobaan 4"
        // ];
        // $data = $this->model->example(0, $datas, "get");
        // $data = $this->model->next_previous_edit(encrypt_url(3));
        dd($data);
    }
}
