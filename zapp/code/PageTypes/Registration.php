<?php

namespace mt2;

use Page;
use PageController;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Forms\TextField;

use mt2\Loanee;

class RegistrationPage extends Page {
    
    
    
}

class RegistrationPage_Controller extends PageController {
  
  private static $allowed_actions = [
    'form',
    'submit'
  ];
  
  public function form() {
    
    $fields = new FieldList(
      TextField::create('Email'),
      TextField::create('FirstName'),
      TextField::create('LastName'),
      TextField::create('Phone'),
      TextField::create('Mobile')
    );
    
    $validator = new RequiredFields(
      'Email',
      'FirstName',
      'LastName',
      'Phone',
      'Mobile'
    );
    
    $actions = new FieldList(
      new FormAction('submit', 'Go')
    );
    
    $form = new Form(
      $this,
      'form',
      $fields,
      $actions,
      $validator
    );
    
    return $form;
    
  }
  
  public function submit($data, $form) {
    
    $newLoanee = new Loanee();
    $newLoanee->write();
    $form->saveInto($newLoanee);
    $newLoanee->write();
    
  }
    
}