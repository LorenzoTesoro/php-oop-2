<?php

require_once __DIR__ . '/User.php';


class Registered_user extends User
{
    public $user_type;
    public $discount;

    public function __construct($name, $age, $user_type)
    {
        parent::__construct($name, $age);
        $this->user_type = $user_type;
    }

    public function set_discount($user_type)
    {
        if ($user_type == 'registered') {
            return $this->discount = 20 . ' %';
        } else {
            return $this->discount = 0;
        }
    }
}
