<?php
    class Contact
    {
        private $name;
        private $phone;
        private $adress;

        function __construct($name, $phone, $adress)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->adress = $adress;
        }

        // In the case of the setters, I'm trying to make sure the input is going to be returned as a string, but don't know if that's necessary

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setPhone($new_phone)
        {
            $this->phone = (string) $new_phone;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function setAdress($new_adress)
        {
            $this->phone = (string) $phone
        }

        function getAdress()
        {
            return $this->$adress;
        }

        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }
















    }
?>
