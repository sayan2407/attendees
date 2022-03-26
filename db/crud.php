<?php

class crud
{
    private $db;

    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function saveRecord($fullname, $dob, $position, $email, $contact)
    {
        try {
            $sql = "INSERT INTO attendee(name, dob, position, email, phone) 
            VALUES(:fullname,:dob,:position,:email,:contact)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':fullname', $fullname);
            $stmt->bindparam(':dob', $dob);
            $stmt->bindparam(':position', $position);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':contact', $contact);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false ;
        }
    }

    public function getAttendees()
    {
        $sql = "SELECT id,name,dob,position,email,phone FROM attendee";
        $result = $this->db->query($sql);
        // $stmt = $this->db->prepare($sql);
        // $stmt->execute();

        // $result = $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getAttendeDetails($empId)
    {
        $sql = "select * from attendee where id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $empId);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function updateAttendeDetails($empid, $fullname, $dob, $position, $email, $contact)
    {
        try { 
            $sql= "update `attendee` set `name`=:fullname, 
            `dob`=:dob, `position`=:position, `email`=:email, `phone`=:contact 
            where `id`=:id";
            
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':fullname', $fullname);
            $stmt->bindparam(':dob', $dob);
            $stmt->bindparam(':position', $position);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':contact', $contact);
            $stmt->bindparam(':id', $empid);
          
            $stmt->execute();
           
            return true;
        } catch (PDOException $e) {
            echo 'catch';
            // echo $e->getMessage();
            return false ;
        }
    }

    public function deleteEmploye($emp_id)
    {
        try{
            $sql = "delete from `attendee` where `id`=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $emp_id);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }
}
