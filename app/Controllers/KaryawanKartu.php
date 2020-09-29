<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class KaryawanKartu extends ResourceController {
    use ResponseTrait;

    //protected $format       = 'json';
    protected $modelName    = 'App\Models\KaryawanKartu_model';
 
    public function index() {
        return $this->respond($this->model->findAll(), 200);
    }

    public function create() {
        $validation =  \Config\Services::validation();
    
        $name   = $this->request->getPost('category_name');
        $status = $this->request->getPost('category_status');
        
        $data = [
            'category_name' => $name,
            'category_status' => $status
        ];
        
        if($validation->run($data, 'category') == FALSE){
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->model->insertCategory($data);
            if($simpan){
                $msg = ['message' => 'Created category successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }
    }
}