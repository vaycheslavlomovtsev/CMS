<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 13.02.2018
 * Time: 17:14
 */

namespace Admin\Model\User;

use Engine\Core\Database\ActiveRecord;

class User
{
    use ActiveRecord;
    /**
     * @var string
     */
    protected $table = 'user';
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $password;
    /**
     * @var
     */
    public $role;
    /**
     * @var
     */
    public $hash;
    /**
     * @var
     */
    public $data_reg;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param mixed $hash
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    }

    /**
     * @return mixed
     */
    public function getDataReg()
    {
        return $this->data_reg;
    }

    /**
     * @param mixed $data_reg
     */
    public function setDataReg($data_reg)
    {
        $this->data_reg = $data_reg;
    }
}