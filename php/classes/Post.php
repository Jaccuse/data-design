<?php

/**
* This class represents an individual post on a site
*
* @author Jack Arnold
*/
class post {
    use validateDate;
    use validateUuid;

    /**
     * this is the post primary key
     * @var string Uuid $postId
     **/
    private $postId;
    /**
     * this is the profile of the user who submitted the post
     * @var string Uuid $postProfileId
     **/
    private $postProfileId;
    /**
     * this is the post's content
     * @var string postContent
     **/
    private $postContent;
    /**
     * this is the date the post was submitted on
     * @var string postDate
     **/
    private $postDate;

    /**
     * Constructor for the post
     *
     * @param string $newPostId a new post
     * @param string $newPostProfileId a new profile ID relating to the post
     * @param string $newPostContent
     * @param string $newPostDate
     * @throws \InvalidArgumentException if data types are not valid
     * @throws \RangeException if data values are out of bounds
     * @throws \TypeError if data types violate type hits
     * @throws \Exception if some other exception occurs
     **/
    public function __construct($newPostId, string $newPostProfileId, string $newPostContent, string $newPostDate){
        try {
            $this->setPostId($newPostId);
            $this->setPostProfileId($newPostProfileId);
            $this->setPostContent($newPostContent);
            $this->setPostDate($newPostDate);
        } catch (\InvalidArgumentException| \RangeException| \Exception| \TypeError $exception) {
            $exceptionType = get_class($exception);
            throw (new $exceptionType($exception->getMessage(), 0, $exception));
        }
    }
}

/**
 * accessor for postId
 *
 * @return Uuid value of postId
 */
public function getPostId() : Uuid {
    return $this->postId;
}

/**
 * mutator for postId
 *
 * @param Uuid $newPostId value of postId
 */
public function setPostId($newPostId) : void {
    try {
        $uuid = self::validateUuid($newPostId);
    } catch (\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
        $exceptionType = get_class($exception);
        throw (new $exceptionType($exception->getMessage(), 0, $exception));
    }
    $this->postId = $uuid;
}

/**
 * accessor for postProfileId
 *
 * @return Uuid value of postProfileId
 */
public function getpostProfileId() : Uuid {
    return $this->postProfileId;
}

/**
 * mutator for postProfileId
 *
 * @param Uuid $newpostProfileId value of postProfileId
 */
public function setpostProfileId($newpostProfileId) : void {
    try {
        $uuid = self::validateUuid($newpostProfileId);
    } catch (\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
        $exceptionType = get_class($exception);
        throw (new $exceptionType($exception->getMessage(), 0, $exception));
    }
    $this->postProfileId = $uuid;
}

/**
 * accessor for postContent
 *
 * @return Uuid value of postContent
 */
public function getpostContent() : Uuid {
    return $this->postContent;
}

/**
 * mutator for postContent
 *
 * @param Uuid $newpostContent value of postContent
 */
public function setpostContent($newpostContent) : void {
    try {
        $uuid = self::validateUuid($newpostContent);
    } catch (\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
        $exceptionType = get_class($exception);
        throw (new $exceptionType($exception->getMessage(), 0, $exception));
    }
    $this->postContent = $uuid;
}

/**
 * accessor for postDate
 *
 * @return Uuid value of postDate
 */
public function getpostDate() : Uuid {
    return $this->postDate;
}

/**
 * mutator for postDate
 *
 * @param Uuid $newpostDate value of postDate
 */
public function setpostDate($newpostDate) : void {
    try {
        $uuid = self::validateUuid($newpostDate);
    } catch (\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
        $exceptionType = get_class($exception);
        throw (new $exceptionType($exception->getMessage(), 0, $exception));
    }
    $this->postDate = $uuid;
}