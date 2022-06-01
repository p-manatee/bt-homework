<?php

Abstract class Contact {
    protected $phone;
    protected $email;
    public function getPhone(){
        return $this->phone;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function setEmail($mail){
        $this->email = $mail;
    }
    protected Abstract function displayMe();
    /**
     * function checks if param txt is contained within a property of an object.Second param is string property that we are checking if it contains the searched param txt
     * @param $txt string
     * @param $property String
     * @return boolean
     */
    public function containsText(String $txt='',String $property):bool{
        if(str_contains($this->$property,$txt)){
            return true;
        }else{
            return false;
        }
    }
    
    
}

class CustomerContact extends Contact{
    protected $firstName;
    protected $lastName;
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setFirstName($fname){
        $this->firstName=$fname;
    }
    public function setLastName($lname){
        $this->lastName=$lname;
    }
    public function displayMe(){
        echo "Customer's first name is: ".$this->getFirstName()." and last name is:  ".$this->getLastName().", phone number is: ".$this->getPhone().", email : ".$this->getEmail()."<br><hr>";
    }
}

class BusinessContact extends Contact{
    protected $address;
    protected $companyName;
    public function getAddress(){
        return $this->address;
    }
    public function getCompanyName(){
        return $this->companyName;
    }
    public function setAddress($address){
        $this->address=$address;
    }
    public function setCompanyName($companyName){
        $this->companyName=$companyName;
    }
    public function displayMe(){
        echo "Company's address is: ".$this->getAddress()." and name is:  ".$this->getCompanyName().", phone number is: ".$this->getPhone().", email : ".$this->getEmail()."<br><hr>";
    }
}



class ContactList {
    protected $contacts=[];

    /**
     * function that checks if object that has the same email address already exists in list of contacts
     * @param $newContactEntry
     * @return boolean
     */
    public function contactsContain(Contact $newContactEntry):bool{
        foreach ($this->contacts as $compare) {
            if($compare->getEmail() == $newContactEntry->getEmail() ){
                return true;
            }   
            
        }
        return false;
        
    }

    public function getContacts(){
        return $this->contacts;
    }

    /**
     * function that adds object of type Contact to array contacts
     * @param $contact instance of Contact
     * @return mixed
     */
    public function addContact(Contact $contact):mixed{
        if($contact instanceof Contact){
            if(!$this->contactsContain($contact)){
                $this->contacts[]=$contact;
                return "contact added!";
            }else{
            return "Contact already exists!";
            }
        }else{
            return "Can not add non contact to list of contacts!";
        }
   
    }
    public function listAllContacts(){
        foreach ($this->contacts as $contact) {
            $contact->displayMe();
        }
    }
}

$customer1 = new CustomerContact();
$customer1->setPhone('555555');
$customer1->setEmail('pera@pera.com');
$customer1->setFirstName('Petar');
$customer1->setLastName('Trajkovic');

$customer2 = new CustomerContact();
$customer2->setPhone('555555');
$customer2->setEmail('laza@laza.com');
$customer2->setFirstName('Lazar');
$customer2->setLastName('Lazarevic');

$businessContact1 = new BusinessContact();
$businessContact1->setPhone('55566644');
$businessContact1->setEmail('company1@company1.com');
$businessContact1->setAddress('newYork');
$businessContact1->setCompanyName('BajsBook');

$businessContact2 = new BusinessContact();
$businessContact2->setPhone('334545');
$businessContact2->setEmail('dentist@dentist.com');
$businessContact2->setAddress('Mramor Brdo');
$businessContact2->setCompanyName('Nece mnogo da boli');

$contactList = new ContactList();
$contactList->addContact($customer1);
$contactList->addContact($customer2);
$contactList->addContact($businessContact1);
$contactList->addContact($businessContact2);

$contactList->listAllContacts();

