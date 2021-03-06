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
    public function make($msg=-1)
    {
        $this->viewObj->getForm($msg);
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
        $message = $custRes? 'Jusu id yra ' . $custRes[0][0]: 'Rezervacija nepavyko. Bandykite dar karta';
        echo $view;
    }

    public function check()
    {
        $customer = $this->modelObj->getCustomer($_POST);

        if ($customer == -1){
            $msg = 'Tokio kliento nėra - patikslinkite savo duomenis arba rezervuokite iš naujo';
            return $this->viewObj->showUpdateForm($msg);
        } else {
            $reservations = $this->modelObj->getActiveReservations($customer['id']);
        }
        echo $this->viewObj->resConfirm([$customer,$reservations ]);

    }

    public function listAll($params = 'default')
    {

        $customers = $this->modelObj->getAllcustomers();
        return $this->viewObj->listAll($customers);

        return "This is " . $customers[1][1];
    }

    public function removeres($ids)
    {
        $isDeleted = $this->modelObj->removeRes($ids);
        if ($isDeleted){
            $msg =  'Rezervacija sėkmingai atšaukta';
        }else {
            $msg = 'Rezervacijos atšaukti nepavyko';
        }
        $this->make($msg);

    }

    public function update()
    {
        $this->viewObj->showUpdateForm();
    }
}