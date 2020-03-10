<?php

class Talaba extends Model
{
	/*
	Bazadagi malumotlrnin hammasini olib keladi
	 */
    public function getAll()
    {
        $sql = 'select * from talaba';
        $st = $this->db->prepare($sql);
        $st->execute();
        return $st->fetchAll(PDO::FETCH_OBJ);
    }
    /*
    Bazadan id bo'yicha olib chiqdi
     */
    public function getOnce($id)
    {
        $sql = 'select * from talaba where id=:id';
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
    public $password;
    public $email;
    public $image;

    public function save(){
		$ins = $this->db->prepare("INSERT INTO talaba(firstname,lastname,email,paswword,image)
				VALUES (:lname, :name, :email, :password, :img);");
		$ins->bindValue(':lname', $this->lname);
		$ins->bindValue(':name', $this->name);
		$ins->bindValue(':email', $this->email);
		$ins->bindValue(':password', $this->password);
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
	public function update($name,$lname,$email,$id,$image=null){
		$sql_update = "UPDATE talaba SET firstname =:firstname, lastname =:lastname, email =:email  where id=:id";
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



}