<?php

use \core\Datasource;


class Member
{

    private $dbConn;

    private $ds;

    function __construct()
    {
        require_once "DataSource.php";
        $this->ds = new DataSource();
    }

    function getMemberById($memberId)
    {
        $query = "select * FROM users WHERE id = ?";
        $paramType = "i";
        $paramArray = array($memberId);
        $memberResult = $this->ds->select($query, $paramType, $paramArray);
        
        return $memberResult;
    }
    
    public function processLogin($email, $password) {
        $query = "select * FROM users WHERE User_email = ?";
        $paramType = "ss";
        $paramArray = array($username, $username);
        $memberResult = $this->ds->select($query, $paramType, $paramArray);
        if(!empty($memberResult)) {
            $hashedPassword = $memberResult[0]["User_password"];
            if (password_verify($password, $hashedPassword)) {
                $_SESSION["user"] = $memberResult[0]["id"];
                return true;
            }
        }
        return false;
    }

    private $applicationUrl = 'http://localhost:8888/forgot-password-reset/';

    /**
     * to get member record by email
     *
     * @param string $email
     * @return array    
     */
    public function getMember($email)
    {
        $query = 'SELECT * FROM users where User_email = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }

    /**
     * main function that handles the forgot password
     *
     * @return string[]
     */
    public function handleForgot()
    {
        if (! empty($_POST["email"])) {
            $memberRecord = $this->getMember($_POST["email"]);
            require_once __DIR__ . "/PasswordReset.php";
            $passwordReset = new PasswordReset();
            $token = $this->generateRandomString(97);
            if (! empty($memberRecord)) {
                $passwordReset->insert($memberRecord[0]['id'], $token);
                $this->sendResetPasswordEmail($memberRecord, $token);
            } else {
                // the input email is invalid
                // do not display a message saying 'email as invalid'
                // that is a security issue. Instead,
                // sleep for 2 seconds to mimic email sending duration
                sleep(2);
            }
        }
        // whatever be the case, show the same message for security purposes
        $displayMessage = array(
            "status" => "success",
            "message" => "Check your email to reset password."
        );
        return $displayMessage;
    }

    /**
     * to send password recovery email
     *
     * @param array $memberListAry
     * @param string $token
     */
    public function sendResetPasswordEmail($memberListAry, $token)
    {
        $resetUrl = '<a href="' . $this->applicationUrl . 'reset-password.php?token=' . $token . '">reset</a>';
        $emailBody = 'Hi, </br>To reset your password, click this link ' . $resetUrl;
        $to = $memberListAry[0]["email"];
        $subject = 'Reset password';
        mail($to, $subject, $emailBody);
    }

    public function updatePassword($id, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = 'UPDATE users SET password = ? WHERE id = ?';
        $paramType = 'si';
        $paramValue = array(
            $hashedPassword,
            $id
        );
        $this->ds->execute($query, $paramType, $paramValue);

        $displayMessage = array(
            "status" => "success",
            "message" => "Password reset successfully."
        );
        return $displayMessage;
    }

    /**
     *
     * @param int $length
     * @param string $keyspace
     * @throws \RangeException
     * @return string
     */
    function getRandomString(int $length = 64, string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): string
    {
        if ($length < 1) {
            throw new \RangeException("Length must be a positive integer");
        }
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++ $i) {
            $pieces[] = $keyspace[random_int(0, $max)];
        }
        return implode('', $pieces);
    }

    /**
     * this generates predictable random strings.
     *
     * @param number $length
     * @return string
     */
    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i ++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
