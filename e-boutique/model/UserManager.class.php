<?php


class UserManager
{
    private  $db;

    public function __construct()
    {
        try
        {
         $db = new PDO('mysql:host=localhost;dbname=eboutique;charset=utf8', 'root', 'root');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
        $this->db = $db;
    }

    function create(User $user)
    {
        $req = $this->db->prepare(
	    'INSERT INTO USERS (id,lastName, firstName, email, address, postalCode, city, password, admin)
	    VALUES (:id, :lastName, :firstName, :email, :address, :cp, :city, :password, 0)'
	    );

	    $req->execute(
			array(
                'id' => $user-> getId(),
				'lastName' => $user->getLastName(),
				'firstName' => $user->getFirstName(),
				'email' => $user->getEmail(),
				'address' => $user->getAddress(),
				'cp' => $user->getPostalCode(),
				'city' => $user->getCity(),
				'password' => $user->getPassword()
			)
		);
        $req->closeCursor();
    }

    public function login(varchar $email,varchar $password)
    {
      $req = $this->db->prepare(
	    "SELECT * FROM USERS WHERE email = :email AND password = :password");
        $req->closeCursor();

        $res = $req->execute(
			array(
                'email' => $user->$email,
                'password' => $user->$password,
			)
		);

        if(empty($res)){
            return null;
        }

    }

    public function update(User $user)
    {
        $req = $this->db->prepare("SELECT * FROM USERS WHERE id = :id LIMIT 1");
        $req->execute(array("id" => $user->getId()));
        $res = $req->fetch();
        $req->closeCursor();


        if(empty($res)) {
            echo "Cet utilisateur n'existe pas (pas d'id correspondant)";
        } else {
            $req = $this->db->prepare(
            "UPDATE USERS set lastName = :lastName, firstName = :firstName, email = :email, address = :address, postalCode = :postalCode, city = :city, password = :password WHERE id = :id
           "
            );
            $req->execute(
                array('id' => $user->getId(),
                    'lastName' => $user->getLastName(),
                    'firstName' => $user->getFirstName(),
                    'email' => $user->getEmail(),
                    'address' => $user->getAddress(),
                    'postalCode' => $user->getPostalCode(),
                    'city' => $user->getCity(),
                    'password' => $user->getPassword())
            );
            var_dump($req);

        }
    }

    public function delete(User $user)
    {
        $req = $this->db->prepare("DELETE FROM USERS WHERE id = :id");

	    $req->execute(
			array(
                'id' => $user->getId(),
			)
		);

    }

    public function findOne($id)
    {
        $req = $this->db->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
        $req->execute(array("id" => $id));
        $req->fetch();
        $req->closeCursor();
        return new User(
            $result['id'],
            $result['email'],
            $result['password'],
            $result['firstName'],
            $result['lastName'],
            $result['address'],
            $result['postalCode'],
            $result['city'],
            $result['admin']
        );

    }

    public function findAll()
    {
        $usersArray = array();

        $req = $this->db->prepare("SELECT * FROM users");
        $req->execute();
        $res = $req->fetchAll();

        foreach($res as $row) {
            array_push($usersArray, new User(
                $row['id'],
                $row['email'],
                $row['password'],
                $row['firstName'],
                $row['lastName'],
                $row['address'],
                $row['postalCode'],
                $row['city'],
                $row['admin']
            ));
        }
        return $usersArray;
    }
}


?>
