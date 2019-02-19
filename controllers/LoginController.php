<?php session_start();
    if(isset($_POST['Submit'])){
    $logins = array('Marija' => '123','Urte' => '456','Adele' => '789');

    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    if (isset($logins[$Username]) && $logins[$Username] == $Password){
        $_SESSION['UserData']['Username']=$logins[$Username];
        header("location: http://localhost/nfq/index.php/staff/reservations/make");
        exit;
    } else {
        $msg="<span style='color:red'>Neteisingi prisijungimo duomenys</span>";
    }
}
?>
