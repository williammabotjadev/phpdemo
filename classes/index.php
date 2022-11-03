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

    public function __construct($tenant_id = NULL, $first_name = NULL, $surname = NULL, $email_address = NULL, $tel_number = NULL, $required_movein_date = NULL, $required_movein_time = NULL, $property_id = NULL)
    {
        $this->tenand_id = $tenand_id;
        $this->first_name = $first_name;
        $this->surname = $surname;
        $this->email_address = $email_address;
        $this->tel_number = $tel_number;
        $this->required_movein_date = $required_movein_date;
        $this->required_movein_time = $required_movein_time;
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

?>