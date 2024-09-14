<?php

function addContact($name, $email, $phone){
    $contact= "Name:$name, Email: $email, Phone:$phone \n";
    file_put_contents('contacts.txt',$contact, FILE_APPEND);
    echo "Contact Added Successfully";

}

function listContacts()
{
    if(!file_exists('contacts.txt')){
        echo "No contacts available. Add some first!\n";
        return;
    }

    $contacts= file_get_contents('contacts.txt');
    echo "Contacts: \n";
    echo "-------------------\n";
    echo $contacts;

}

$options=getopt("al");

if(isset($options['a'])){
    $name=readline("Enter Name: ");
    $email=readline("Enter Email: ");
    $phone=readline("Enter phone: ");
    addContact(trim($name),trim($email),trim($phone));

}

if(isset($options['l'])){
    listContacts();
}

