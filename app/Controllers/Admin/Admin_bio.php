<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin_bio extends BaseController{

    public function Admin_bio($dob){
        echo "Your Date of Birth is: $dob";

    }
}



?>