<?php
// Tenant ID, First name, surname, email address, telephone number, required move-in date, required move-in time, property ID

class Application {
    public $tenant_id;
    public $first_name;
    public $surname;
    public $email_address;
    public $tel_number;
    public $required_movein_date;
    public $required_movein_time;
    public $property_id;

    public function __construct($tenant_id, $property_id)
    {
        $this->tenand_id = $tenant_id;
        $this->property_id = $property_id;
    }

    function get_tenant_id()
    {
        return $this->tenant_id;
    }

    function set_tenant_id($id) 
    {
        $this->tenant_id = $id;
    }

    function get_first_name() 
    {
        return $this->first_name;
    }

    function set_first_name($firstname) 
    {
        $this->first_name = $firstname;
    }

    function get_surname()
    {
        return $this->surname;
    }

    function set_surname($surname)
    {
        $this->surname = $surname;
    }

    function get_email_address()
    {
        return $this->email_address;
    }

    function set_email_address($email_address)
    {
        $this->email_address = $email_address;
    }

    function get_tel_number()
    {
        return $this->tel_number;
    }

    function set_tel_number($tel_number)
    {
        $this->tel_number = $tel_number;
    }

    function get_required_movein_date()
    {
        return $this->required_movein_date;
    }

    function set_required_movein_date($movein_date)
    {
        $this->required_movein_date = $movein_date;
    }

    function get_required_movein_time()
    {
        return $this->required_movein_time;
    }

    function set_required_movein_time($movein_time) 
    {
        $this->required_movein_time = $movein_time;
    }

    function get_property_id()
    {
        return $this->property_id;
    }

    function set_property_id($property_id)
    {
        $this->property_id = $property_id;
    }
}

$app = new Application($tenand_id = "ABC", $property_id = "123");

$app->set_first_name("William");
$app->set_surname("Mabotja");
$app->set_email_address("williammabotjadev@gmail->com");
$app->set_tel_number("0605360059");
$date = date('2022/11/03');
$app->set_required_movein_date($date);
$time = date("19:00");

$validate_time = (($time[3] == "0" || "3") && ($time[4] == "0")) ? $time : "Invalid Move in Time";
$app->set_required_movein_time($validate_time);

?>