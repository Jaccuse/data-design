<?php

/**
* This class represents an individual post on a site
*
* @author Jack Arnold
*/
class post
{
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