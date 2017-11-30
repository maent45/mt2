<?php

namespace mt2;

use SilverStripe\Assets\File;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class Loanee extends DataObject {

  private static $db = [
    'FirstName' => 'Varchar',
    'LastName' => 'Varchar',
    'Email' => 'Varchar',
    'Phone' => 'Varchar',
    'Mobile' => 'Varchar'
  ];

  public function getCMSFields() {

    $fields = parent::getCMSFields();

    $fields->addFieldsToTab('Root.Main', array(
      TextField::create('FirstName'),
      TextField::create('LastName'),
      TextField::create('Email'),
      TextField::create('Phone'),
      TextField::create('Mobile')
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