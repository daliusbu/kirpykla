<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 19.31
 */

class ReservationController
{

    private $modelObj;
    private $viewObj;

    function __construct( $model, $view )
    {
        $this->modelObj = $model;
        $this->viewObj = $view;
    }

// Displays reservation form complete with all HTML
    public function make()
    {
        $this->viewObj->getForm();
    }

// Gets free times from reservations table and displays them as JSON for AJAX request from reservationForm
    public function getFreeTimes(){
        $month = $_POST['month'];
        $day = $_POST['day'];
        $result = $this->modelObj->getFreeTimes($month, $day);
        echo json_encode($result);
    }

    public function confirm()
    {
        $reservation = $_POST;
        $custRes = $this->modelObj->addReservation($reservation);
        $view = $this->viewObj->resConfirm($custRes);
        var_dump($custRes);
        $message = $custRes? 'Jusu id yra ' . $custRes[0][0]: 'Rezervacija nepavyko. Bandykite dar karta';
        echo $view;
    }

    public function listAll($params = 'default')
    {

        $customers = $this->modelObj->getAllcustomers();
        return $this->viewObj->listAll($customers);

        return "This is " . $customers[1][1];
    }
}