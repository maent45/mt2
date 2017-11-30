<?php

namespace mt2;

use SilverStripe\Assets\File;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;

use mt2\Loan;

class Loanee extends DataObject {

  private static $db = [
    'FirstName' => 'Varchar',
    'LastName' => 'Varchar',
    'Email' => 'Varchar',
    'Phone' => 'Varchar',
    'Mobile' => 'Varchar'
  ];
  
  private static $has_many = [
    'Loans' => Loan::class 
  ];

  public function getCMSFields() {

    $fields = parent::getCMSFields();
    
    $fields->removeByName("Loans");

    $fields->addFieldsToTab('Root.Main', array(
      TextField::create('FirstName'),
      TextField::create('LastName'),
      TextField::create('Email'),
      TextField::create('Phone'),
      TextField::create('Mobile')
    ));
    
    $fields->addFieldToTab('Root.Main', GridField::create(
      'Loans',
      'Loans',
      $this->Loans(),
      GridFieldConfig_RelationEditor::create()
    ));

    return $fields;

  }
  
  private static $summary_fields = [
    'FirstName' => 'First name',
    'LastName' => 'Last name',
    'Email' => 'Email',
    'Phone' => 'Phone',
    'Mobile' => 'Mobile'
  ];

}