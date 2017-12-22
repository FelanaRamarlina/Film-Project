<?php
class User
{
	private  $id;
	private  $email;
	private  $password;
	private  $firstName;
	private  $lastName;
	private  $address;
	private  $postalCode;
	private  $city;
  private  $admin;

	public function __construct($id = null, $email = null, $password = null, $firstname = null, $lastname = null, $address = null, $postalcode = null, $city = null, $admin = null) {
			$this->id = $id;
			$this->email = $email;
			$this->password = $password;
			$this->firstName = $firstname;
			$this->lastName = $lastname;
			$this->address = $address;
			$this->postalCode = $postalcode;
			$this->city = $city;
			$this->admin = $admin;
	}
    public function hydrate(array $donnees)
    {
        foreach($donnees as $key => $value)
        {
            $this->$key=$value;
				}
    }


    public function getId()
    {
		return $this->id;
	}

	public function setId($id)
    {
		$this->id = $id;
	}

	public function getEmail()
    {
		return $this->email;
	}

	public function setEmail($email)
    {
		$this->email = $email;
	}

	public function getPassword()
    {
		return $this->password;
	}

	public function setPassword($password)
    {
		$this->password = $password;
	}

	public function getFirstName()
    {
		return $this->firstName;
	}

	public function setFirstName($firstName)
    {
		$this->firstName = $firstName;
	}

	public function getLastName()
    {
		return $this->lastName;
	}

	public function setLastName($lastName)
    {
		$this->lastName = $lastName;
	}

	public function getAddress()
    {
		return $this->address;
	}

	public function setAddress($address)
    {
		$this->address = $address;
	}

	public function getPostalCode()
    {
		return $this->postalCode;
	}

	public function setPostalCode($postalCode)
    {
		$this->postalCode = $postalCode;
	}

	public function getCity()
    {
		return $this->city;
	}

	public function setCity($city)
    {
		$this->city = $city;
	}

    public function getAdmin()
    {
		return $this->admin;
	}

	public function setAdmin($admin)
    {
		$this->admin = $admin;
	}
  }
?>
