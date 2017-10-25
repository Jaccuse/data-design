<?php

/**
 * This class represents an individual user on a site
 *
 * @author Jack Arnold
 */
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
     **/
    public function __construct($newUserId, string $newUserEmail, string $newUserName, string $newUserHash, string $newUserSalt) {
        try {
            $this->setUserId($newUserId);
            $this->setUserEmail($newUserEmail);
            $this->setUserName($newUserName);
            $this->setUserHash($newUserHash);
            $this->setUserSalt($newUserSalt);
        } catch (\InvalidArgumentException| \RangeException| \Exception| \TypeError $exception) {
            $exceptionType = get_class($exception);
            throw (new $exceptionType($exception->getMessage(), 0, $exception));
        }

        /**
         * accessor method for userId
         *
         * @return string Uuid value of userId
         **/
        public
        function getUserId(): Uuid {
            return ($this->userId);
        }

        /**
         * mutator for userId
         *
         * @return $newUserId new value for the user's Id
         */
        public
        function setUserId($newUserId) {
            try {
                $uuid = self::validateUuid($newUserId);
            } catch (\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
                $exceptionType = get_class($exception);
                throw (new $exceptionType($exception->getMessage(), 0, $exception));
            }
            return $this->userId = $uuid;
        }

        /**
         * accessor method for userEmail
         *
         * @return string Email of the user
         **/
        public
        function getUserEmail(): string {
            return $this->userEmail;
        }

        /**
         * mutator for userEmail
         **/
        public
        function setUserEmail(string $newUserEmail) : void {
            $newUserEmail = trim($newUserEmail);
            $newUserEmail = filter_var($newUserEmail, FILTER_VALIDATE_EMAIL);
            if (empty($newUserEmail) == true) {
                throw(new \InvalidArgumentException("Email is invalid or insecure"));
            }

            $this->userEmail = $newUserEmail;
        }

        /**
         * accessor method for userName
         *
         * @return string Name of the user
         **/
        public
        function getUserName() : string {
            return $this->userName;
        }

        /**
         * mutator for userName
         **/
        public
        function setUserName(string $newUserName) : void {
            $newUserName = trim($newUserName);
            $newUserName = filter_var($newUserName, FILTER_SANITIZE_STRING);
            if (empty($newUserName) == true) {
                throw(new \InvalidArgumentException("Username field is empty or insecure"));
            }
            if (strlen($newUserName > 32)) {
                throw(new \RangeException("Username too large"));
            }
            $this->userName = $newUserName;
        }

        /**
         * accessor method for userHash
         *
         * @return string Hash of the user
         **/
        public
        function getUserHash() : string {
            return $this->userHash;
        }

        /**
         * mutator for userHash
         **/
        public
        function setUserHash(string $newUserHash) : void {
            $newUserHash = trim($newUserHash);
            $newUserHash = strtolower($newUserHash);
            if (!ctype_xdigit($newUserHash)) {
                throw (new \InvalidArgumentException("Hash is not in hexit form"));
            }
            if (strlen($newUserHash) !== 128) {
                throw (new \RangeException("User hash length is invalid"));
            }
            $this->userHash = $newUserHash;
        }

        /**
         * accessor method for userSalt
         *
         * @return string Salt of the user
         **/
        public
        function getUserSalt() : string {
            return $this->userSalt;
        }

        /**
         * mutator for userSalt
         **/
        public
        function setUserSalt(string $newUserSalt) : void {
            $newUserSalt = trim($newUserSalt);
            $newUserSalt = strtolower($newUserSalt);
            if (!ctype_xdigit($newUserSalt)) {
                throw (new \InvalidArgumentException("Salt is not in hexit form"));
            }
            if (strlen($newUserSalt) !== 64) {
                throw (new \RangeException("User Salt length is invalid"));
            }
            $this->userSalt = $newUserSalt;
        }

        /**
         * Insert a user into the profile table
         *
         * @param \PDO $pdo connection object for PDO
         * @throws \PDOException throws an exception when PDO-mySQL connection errors occur
         * @throws \TypeError throws something I'm not actually sure ¯\_(ツ)_/¯
         */
        public function delete(\PDO $pdo) : void {
            $query = "DELETE FROM `profile` WHERE profileId = :userId";
            $statement = $pdo->prepare($query);
            $parameters = ["profileId" => $this->userId->getBytes()];
            $statement->execute($parameters);
        }
    }
}