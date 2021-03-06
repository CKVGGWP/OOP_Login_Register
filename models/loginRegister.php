<?php

class LoginRegister extends Database
{
    public function registerAccount($data)
    {
        if ($this->checkExistingAccount($data['email'])) {
            return 1;
            exit();
        }

        return $this->insertAccount($data);
    }

    public function loginAccount($data)
    {
        if ($this->checkExistingAccount($data['email']) != true) {
            return 1;
            exit();
        }

        return $this->setSession($data['email']);
    }

    public function userInfo($id)
    {
        $sql = "SELECT * FROM userdetails
                WHERE id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    private function getSession($email)
    {
        $sql = "SELECT id FROM userdetails WHERE email = :email";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(':email' => $email));
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['id'];
    }

    private function setSession($email)
    {
        session_start();
        $id = $this->getSession($email);
        $_SESSION['id'] = $id;
    }

    private function checkExistingAccount($email)
    {
        $sql = "SELECT * FROM userdetails WHERE email = :email";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(':email' => $email));
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $result = $stmt->rowCount();

        if ($result > 0) {
            return true;
        } else {
            return false;
        }
    }

    private function insertAccount($data)
    {
        $sql = "INSERT INTO userdetails (firstName, middleName, lastName, email, password) VALUES (:firstName, :middleName, :lastName, :email, :password)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(
            ':firstName'         => $data['firstName'],
            ':middleName'        => $data['middleName'],
            ':lastName'          => $data['lastName'],
            ':email'             => $data['email'],
            ':password'          => $data['password']
        ));

        if ($stmt->rowCount() > 0) {
            return 3;
        } else {
            return 2;
        }
    }
}
