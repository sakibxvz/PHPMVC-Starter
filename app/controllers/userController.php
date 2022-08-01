<?php 
class userController extends framework {
    public function index(){
        echo "userController";
    }
    public function userMethod()
    {
        $myModel = $this->model('userModel');
        if ($myModel->myData()) {
           $result = $myModel->myData() ;
        }else{
            echo "Soory for issue";
        }
        // $myData = [
        //     'tittle' => "My frist post",
        //     'body' => "My frist post body",
        // ];
        $this->view("userView",$result);
    }
}