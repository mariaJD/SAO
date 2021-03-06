<?php

namespace SAO\Modules\App\Users\Database;

trait userNameExist {

    /**
     * @return \SAO\Modules\Extended
     */
    public abstract function Extended();

    /**
     * 
     * @param string $username
     * @return boolean
     */
    public function userNameExist($username) {
        $db = $this->Extended()->Database();

        $db_id = NULL;

        $stmt = $db->prepare("SELECT User_Id FROM User_Entries WHERE User_Name = ?");

        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->bind_result($db_id);
        $stmt->store_result();
        $stmt->fetch();
        $stmt->free_result();
        $stmt->close();

        return ( $db_id ? TRUE : FALSE);
    }

}
