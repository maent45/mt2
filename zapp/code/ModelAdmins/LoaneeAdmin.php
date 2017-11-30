<?php

namespace mt2;

use Silverstripe\Admin\ModelAdmin;

class LoaneeAdmin extends ModelAdmin {
 
  private static $managed_models = array (
    'mt2\Loanee'
  );
 
  private static $url_segment = 'loanee';
  
  private static $menu_title = 'Loanees';
}