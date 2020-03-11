<?php


namespace app\model;


use base\model\Model;

class User extends Model
{
    public $email;
    public $password;
    public $salt;
    public $role;
    public $name;
    public $surname;

    /**
     * Admin constructor.
     * @param $email
     * @param $password
     * @param $salt
     * @param $role
     * @param $name
     * @param $surname
     */
    public function __construct($email, $password, $salt, $role, $name = null, $surname = null)
    {
        $this->email = $email;
        $this->password = $password;
        $this->salt = $salt;
        $this->role = $role;
        $this->name = $name;
        $this->surname = $surname;

        $validate = $this->validate();
        if (!$validate['status']) {
            return null;
        }
    }

    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
            'salt' => ['required'],
            'role' => ['required'],
            'name' => ['string'],
            'surname' => ['string']
        ];
    }
}