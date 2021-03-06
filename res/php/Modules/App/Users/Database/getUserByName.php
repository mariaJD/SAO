<?php

namespace SAO\Modules\App\Users\Database;

use SAO\Modules\App\Users\UserEntry;

trait getUserByName {

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
     * @param string $name
     * @return UserEntry
     */
    public function getUserByName(string $name) {

        $db = $this->Extended()->Database();

        $user_id = NULL;

        $stmt = $db->prepare("SELECT User_Id FROM User_Entries WHERE User_Name = ?");

        $stmt->bind_param('s', $name);
        $stmt->execute();
        $stmt->bind_result($user_id);
        $stmt->store_result();
        $stmt->fetch();
        $stmt->free_result();
        $stmt->close();

        if ($user_id) {
            return $this->getUser($user_id);
        }

        return NULL;
    }

}
