<?php

namespace SAO\Modules\App;

use SAO\Modules\App\Users\Database;
use SAO\Modules\Extended\ExtendedExtended;
use SAO\Modules\Extended;

/**
 * 
 */
class Users extends ExtendedExtended {

    use Database\getUser,
        Database\getUserByName,
        Database\userNameExist,
        Database\checkPassword,
        Database\registerUser;

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL) {
        parent::__construct($Extended);

        $this->Basics()->setLog("Nueva clase controladora de usuarios creada");
    }

}
