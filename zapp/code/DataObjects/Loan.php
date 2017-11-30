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
    'Amount' => 'Varchar',
    'StartDate' => 'Varchar',
    'EndDate' => 'Varchar',
    'InterestRate' => 'Varchar'
  ];

  public function getCMSFields() {

    $fields = parent::getCMSFields();

    $fields->addFieldsToTab('Root.Main', array(
      TextField::create('Amount'),
      TextField::create('StartDate'),
      TextField::create('EndDate'),
      TextField::create('InterestRate'),
    ));

    return $fields;

  }
  
  private static $summary_fields = [
    'Amount' => 'Amount',
    'StartDate' => 'Start date',
    'EndDate' => 'End date',
    'InterestRate' => 'Interest rate'
  ];

}