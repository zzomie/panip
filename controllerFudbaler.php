<?php
// controller
require_once 'DAO.php';

class controllerFudbaler{

    function logout(){
        if($_SESSION["fudbaleri"]!=""){
            session_unset();
            session_destroy();
            include '../public/forma.php';
        }
    }

    function validate(){
        $id = isset($_POST["id"])?$_POST['id']:"";
        $ime = isset($_POST["ime"])?$_POST['ime']:"";
        $prezime = isset($_POST["prezime"])?$_POST['prezime']:"";
        $brgolova = isset($_POST["brgolova"])?$_POST['brgolova']:"";

        if(!empty($id)&&!empty($ime)&&!empty($prezime)&&!empty($brgolova)){
            $dao = new DAO();
            $postoji=$dao->getFubalerID($id);

                if($postoji){
                    $_SESSION["fudbaleri"]=$id;
                    include '../public/success.php';
                }
                else{
                        $message="Ovaj fudbaler ne postoji!";
                        include '../public/forma.php';
                }
        }
        else {
            $message="Validacija neuspesna!";
            include '../public/forma.php';
        }

    }


}
?>
