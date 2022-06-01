<?php

class Contact {
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
    public function __toString(){
        return "This contact's phone is: ".$this->phone.", and email address is: ".$this->email;
    }
}

class ContactList {
    protected $contacts=[];

    /**
     * function that checks if object that has the same email address already exists in list of contacts
     * @param $newContactEntry
     * @return boolean
     */
    public function contactsContain($newContactEntry):bool{
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
            echo $contact."<br><hr>";
        }
    }
}



$contact1 = new Contact();
$contact1->setPhone('555555');
$contact1->setEmail('pera@pera.com');
$contact2 = new Contact();
$contact2->setPhone('555555');
$contact2->setEmail('laza@laza.com');
$contactList1 = new ContactList();
//Probacu da dodam isti kontakt vise putai ukoliko je kod dobar krajni ispis ce biti zamo kontakti koji su razliciti, jer ukoliko kontakt postoji u listi ne vrsi se unos funkcijom addContact
$contactList1->addContact($contact1);
$contactList1->addContact($contact1);
$contactList1->addContact($contact1);
$contactList1->addContact($contact2);
$contactList1->addContact($contact2);
$contactList1->addContact($contact2);
$contactList1->listAllContacts();
