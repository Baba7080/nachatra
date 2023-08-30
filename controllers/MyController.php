<?php
require_once 'controllers/BaseController.php';
require_once 'models/MyModel.php';

class MyController extends BaseController {

    public function __construct()
    {
        $this->userModel = $this->model('MyModel');
        $this->pujaType = $this->model('PujaModel');
    }

    public function viewForm()
    {
        if(isset($_GET['id']))
        {
            $data['id'] = $_GET['id'];
            $this->loadView('addPuja' , $data);
        }
    }

    public function savePuja()
    {
       if(isset($_POST))
       {
            $name = $_POST['userName'];
            $mob = $_POST['phoneNo'];
            $date = $_POST['selectedDate'];
            $email = $_POST['mail'];
            $id = $_POST['puja_id'];
            $sql = "INSERT INTO puja (name, phone , date , email , puja_id) VALUES ('$name', '$mob', '$date', '$email' , '$id')";
            $res = $this->userModel->executeQuery($sql);
            $this->index();
       }
    }
}
?>
