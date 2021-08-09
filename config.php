<?php
class Appcon
{
    private $signin;

    public function __construct($signin)
    {
        $this->signin = $signin;
    }

    public function Filterdata($data)
    {
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = rtrim($data);
        return $data;
    }

    public function IfUserExists($email, $aadhar)
    {
        $email = $this->Filterdata($email);
        $aadhar = $this->Filterdata($aadhar);
        $query = $this->signin->prepare("SELECT * FROM users WHERE email = :email AND aadhar =:ac");
        $query->bindParam(":email", $email);
        $query->bindParam(":ac", $aadhar);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        if (count($results) == 1) {
            return true;
        } else {
            return false;
        }
    }


    public function register($type, $fname, $lname,  $aadhar,  $email, $p, $photo)
    {


        $fname = $this->Filterdata($fname);
        $lname = $this->Filterdata($lname);
        $aadhar = $this->Filterdata($aadhar);
        $email = $this->Filterdata($email);
        $p = $this->Filterdata($p);
        $type = $this->Filterdata($type);

        $query = $this->signin->prepare("INSERT INTO info (email) VALUES (:email)");
        $query->bindParam(':email', $email);
        $query->execute();

        $query = $this->signin->prepare(" INSERT INTO users (type, fname, lname,  aadhar,  email, password, photo) VALUES (:role, :fn, :ln,  :ad, :e, :pass, :img)");

        $query->bindParam(':role', $type);
        $query->bindParam(':fn', $fname);
        $query->bindParam(':ln', $lname);
        $query->bindParam(':ad', $aadhar);
        $query->bindParam(':e', $email);
        $query->bindParam(':pass', $p);
        $query->bindParam(':img', $photo);
        $query->execute();
        $error = $query->errorInfo();

        if ($error[1]) {
            echo $error[2];
            echo $query->errorCode();
        } else {
            echo '<script>swal("Register Successfully!", "Plz Login!", "success");</script>';
            header("location:register.php");
        }
    }

    public function login($email, $p)
    {
        $email = $this->Filterdata($email);
        $p = $this->Filterdata($p);

        $query = $this->signin->prepare(" SELECT * FROM users WHERE email = :email AND password = :pass");
        $query->bindParam(':email', $email);
        $query->bindParam(':pass', $p);
        $query->execute();

        $error = $query->errorInfo();

        if ($error[1]) {
            echo $error[2];
            echo $query->errorCode();
        } else {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if (count($result) == 1) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function CommonSelect($table, $table_column1, $email, $table_column2, $password)
    {

        $email = $this->Filterdata($email);
        $password = $this->Filterdata($password);
        $query = $this->signin->prepare(" SELECT otp FROM $table WHERE $table_column1=:email and $table_column2=:pass");
        $query->bindParam(':email', $email);
        $query->bindParam(':pass', $password);
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_COLUMN);
        if (count($result) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function isLoggedIn()
    {
        if (isset($_SESSION['MYSESSION'])) {
            return true;
        } else {
            return false;
        }
    }
    function Update($fname, $lname, $phone, $city, $pincode, $bday, $website, $bio, $email)
    {
        $query = $this->signin->prepare("UPDATE users JOIN info ON users.email = info.email SET users.fname = :fname, users.lname = :lname,  users.mobile = :phone, users.city = :ct, users.pincode = :code, info.dob= :dob, info.website = :website, info.bio = :bio WHERE users.email = :email");
        $query->bindParam(':fname', $fname);
        $query->bindParam(':lname', $lname);
        $query->bindParam(':phone', $phone);
        $query->bindParam(':ct', $city);
        $query->bindParam(':code', $pincode);
        $query->bindParam(':dob', $bday);
        $query->bindParam(':website', $website);
        $query->bindParam(':bio', $bio);
        $query->bindParam(':email', $email);
        $query->execute();

        echo '<div class="alert alert-success">
                                  <strong>Success!</strong> updated Successfully!.
                                  </div>';
    }

    public function Forget($table, $table_column1, $email)
    {

        $email = $this->Filterdata($email);
        $query = $this->signin->prepare(" SELECT email FROM $table WHERE $table_column1=:email");
        $query->bindParam(':email', $email);
        $query->execute();

        $result = $query->rowCount();
        if ($result == 1) {
            return true;
        } else {
            return false;
        }
    }
}


