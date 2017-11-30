<?php

namespace mt2;

use SilverStripe\Assets\File;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DateField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

use mt2\Loanee;

class Loan extends DataObject {

  private static $db = [
    'Amount' => 'Currency',
    'StartDate' => 'Date',
    'EndDate' => 'Date',
    'InterestRate' => 'Percentage'
  ];

  private static $has_one = [
    'Loanee' => Loanee::class
  ];

  public function getCMSFields() {

    $fields = parent::getCMSFields();

    $fields->addFieldsToTab('Root.Main', array(
      TextField::create('Amount'),
      DateField::create('StartDate'),
      DateField::create('EndDate'),
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
