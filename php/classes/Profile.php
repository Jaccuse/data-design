<?php
class user {
    /**
     * this is the user primary key
     * @var string Uuid $userId
     **/
    private $userId;
    /**
     * this is the user's email
     * @var string Uuid $userEmail
     **/
    private $userEmail;
    /**
     * this is the user username
     * @var string Uuid $userName
     **/
    private $userName;
    /**
     * this is the user's password hash
     * @var string Uuid $userHash
     **/
    private $userHash;
    /**
     * this is the user's password's salt
     * @var string Uuid $userSalt
     **/
    private $userSalt;

    /**
     * Constructor for the user
     *
     * @param string $newUserId the user's ID
     * @param string $newUserEmail the user's Email
     * @param string $newUserName the user's nickname
     * @param string $newUserHash the user's password hash
     * @param string $newUserSalt the user's hash salt
     * @throws \InvalidArgumentException if data types are not valid
     * @throws \RangeException if data values are out of bounds
     * @throws \TypeError if data types violate type hits
     * @throws \Exception if some other exception occurs
     */
    public function __construct($newUserId, string $newUserEmail, string $newUserName, string $newUserHash, string $newUserSalt){
        try {
            $this->setUserId($newUserId)
            $this->setUserEmail($newUserEmail)
            $this->setUserName($newUserName)
            $this->setUserHash($newUserHash)
            $this->setUserSalt($newUserSalt)
        }
        catch (\InvalidArgumentException|\RangeException|\Exception|\TypeError $exception) {
            $exceptionType = get_class($exception);

        }
    }
}