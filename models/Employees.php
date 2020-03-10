<?php


class Employees extends Model
{

	/*
	Bazadagi malumotlrnin hammasini olib keladi
	 */
    public function getAll()
    {
        $sql = 'select * from employees';
        $st = $this->db->prepare($sql);
        $st->execute();
        return $st->fetchAll(PDO::FETCH_OBJ);
    }
    /*
    Bazadan id bo'yicha olib chiqdi
     */

    public function getOnce($id)
    {
        $sql = 'select * from employees where employeeNumber=:id';
        $st = $this->db->prepare($sql);
        $st->bindValue(':id',$id);
        $st->execute();
        return $st->fetchAll(PDO::FETCH_OBJ);
    }
    /*
    Bu funksia bazaga insert qilib keyin eng oxirgi inser qilingan ma'lumot id sini qaytaradi
    oldin qiymatlani berish kerak
     */
    public $name;

    public $lname;
    public $extension;

    public $email;
    public $officeCode;
    public $reportsTo;

    public $jobTitle;

    public $image;


    public function save(){

		$ins = $this->db->prepare("INSERT INTO employees(lastName,firstName,extension,email,officeCode,re
			portsTo,jobTitle,image)
				VALUES (:lname, :name, :extension, :email, :officeCode, :reportsTo, :jobTitle, :img);");
		$ins->bindValue(':lname', $this->lname);
		$ins->bindValue(':name', $this->name);

		$ins->bindValue(':extension', $this->extension);


		$ins->bindValue(':email', $this->email);
		$ins->bindValue(':officeCode', $this->officeCode);

		$ins->bindValue(':reportsTo', $this->reportsTo);
		$ins->bindValue(':jobTitle', $this->jobTitle);

		$ins->bindValue(':img', $this->image);
		try {
			$ins->execute();

			return $this->db->lastInsertId();

		} catch (PDOException $e) {
			echo "Insert yoq: ".$e->getMessage();
		}
	}

	/*
	 * hohlagan query
	 */
	public function query($value)
	{
		$st = $this->db->prepare($value);

		try {
	        $st->execute();
	        return $st->fetchAll(PDO::FETCH_OBJ);
	        
		} catch (PDOException $e) {
			echo "Hatolik: ".$e->getMessage();
		}
	}

	/*
	Bazani o'zgartirish
	 */
	public function update($name,$lname,$email,$id){
		$sql_update = "UPDATE employees SET firstName =:firstname, lastName =:lastname, email =:email  where employeeNumber=:id";
		$prepare = $this->db->prepare($sql_update);
		$prepare->bindValue(':firstname', $name);
		$prepare->bindValue(':lastname', $lname);
		$prepare->bindValue(':email', $email);
		$prepare->bindValue(':id', $id);
		try {
			$prepare->execute();
			return  1;
		} catch (PDOException $e) {
			echo "Update yoq: ".$e->getMessage();
		}
	}

	public function save()
	{
		return true;
	}



	public function getAllDb()
	{
		$st = $this->db->prepare($value);
		try {
	        $st->execute();
	        return $st->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			echo "Hatolik: ".$e->getMessage();
		}
	}

}