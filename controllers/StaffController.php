<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 12.16
 */

class StaffController
{

    private $modelObj;
    private $viewObj;

    function __construct( $model, $view )
    {
        $this->modelObj = $model;
        $this->viewObj = $view;

    }

    public function reservations($msg = 'default')
    {
        $reservations = $this->modelObj->getReservations();
        $this->viewObj->showReservations($reservations, $msg);
    }

    public function removeRes($id)
    {
       $isDeleted = $this->modelObj->removeRes($id);
       if ($isDeleted){
           $msg =  'Rezervacija sekmingai pasalinta';
       }else {
          $msg = 'Rezervacijos pasalinti nepavyko';
       }
       $this->reservations($msg);

    }
}