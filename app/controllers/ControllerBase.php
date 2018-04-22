<?php


use Phalcon\Mvc\Controller;
use Phalcon\Di as di;




class ControllerBase extends Controller{
    public $requestData;
    public $errorList;
    public $token;
    public $userId;
    public function initialize(){
        $this->view->disable();
        $this->requestData = $this->request->get();
        $this->errorList = $this->config->errorList;
    }
    public function renderJson($data = [], $errorCode = 0, $errorMsg = '', $token = ''){
        $response = [];
        if (!empty($data)){
            $response['data'] = $data;
            $response['error_code'] = 0;
        }else{
            $response['error_code'] = -1;
        }
        $response['error_msg'] = '';
        if (!empty($errorCode)){
            $response['error_code'] = $errorCode * 1;
        }
        if (!empty($errorMsg)){
            $response['error_msg'] = $errorMsg;
        }else{
            if (!empty($errorCode)){
                $response['error_msg'] = $this->errorList[$errorCode];
            }
        }
        if (!empty($token)){
            $response['token'] = $token;
        }
        $this->response->setContentType('application/json', 'UTF-8');
        $this->response->setJsonContent($response)->send();
        exit(0);
    }
}
