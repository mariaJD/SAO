<?php

namespace SAO\Modules\App\Users;

/**
 * @todo Documentar
 */
class UserEntry {

    /**
     *
     * @var int
     */
    private $User_Id;

    /**
     *
     * @var int
     */
    private $User_Type;

    /**
     *
     * @var string
     */
    private $User_Name;

    /**
     *
     * @var string
     */
    private $CreateAt;

    /**
     * 
     * @param int $User_Id
     * @param int $User_Type
     * @param string $User_Name
     * @param string $User_Email
     * @param string $CreateAt
     */
    public function __construct($User_Id = 0, $User_Type = 0, $User_Name = 'Invitado', $CreateAt = 0) {
        $this->User_Id = $User_Id;
        $this->User_Type = $User_Type;
        $this->User_Name = $User_Name;
        $this->CreateAt = $CreateAt;
    }

    /**
     * 
     * @return int
     */
    public function getUserId() {
        return $this->User_Id;
    }

    /**
     * 
     * @return int
     */
    public function getUserType() {
        return $this->User_Type;
    }

    /**
     * 
     * @return int
     */
    public function getUserName() {
        return $this->User_Name;
    }

    /**
     * 
     * @return int
     */
    public function getCreateAt() {
        return $this->CreateAt;
    }

}
