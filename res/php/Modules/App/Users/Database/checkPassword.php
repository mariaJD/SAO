<?php

namespace SAO\Modules\App\Users\Database;

use SAO\Modules\App\Users\UserEntry;

trait checkPassword {

    /**
     * @return \SAO\Modules\Extended
     */
    public abstract function Extended();

    /**
     * 
     * @param int $id
     * @return UserEntry
     */
    public abstract function getUser($id);

    /**
     * 
     * @param int $user_id
     * @param string $user_password
     * @return UserEntry
     */
    public function checkPassword($user_id, $user_password) {
        $db = $this->Extended()->Database();

        $db_id = NULL;

        $stmt = $db->prepare("SELECT User_Id FROM User_Entries WHERE User_Id = ? and User_Password = MD5(?)");

        $stmt->bind_param('is', $user_id, $user_password);
        $stmt->execute();
        $stmt->bind_result($db_id);
        $stmt->store_result();
        $stmt->fetch();
        $stmt->free_result();
        $stmt->close();

        return ( $db_id ? $this->getUser($db_id) : FALSE);
    }

}
