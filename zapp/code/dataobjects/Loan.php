<?php

namespace mt2;

use SilverStripe\Assets\File;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class Loan extends DataObject {
    
  private static $db = [
    'Loanee' => 'Varchar',
    'Amount' => 'Varchar',
    'StartDate' => 'Varchar',
    'EndDate' => 'Varchar'
  ];
  
  public function getCMSFields() {

    $fields = parent::getCMSFields();

    $fields->addFieldsToTab('Root.Main', array(
      TextField::create('Loanee'),
      TextField::create('Amount'),
      TextField::create('StartDate'),
      TextField::create('EndDate')
    ));

    return $fields;

  }
  
}