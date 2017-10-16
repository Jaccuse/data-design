CREATE TABLE profile (
  profileID BINARY (16) NOT NULL,
  profileEmail VARCHAR(128) NOT NULL,
  profileName VARCHAR(32) NOT NULL,
  profileHash CHAR(128) NOT NULL,
  profileSalt CHAR(64) NOT NULL,
  UNIQUE(profileEmail),
  UNIQUE(profileName)
);

CREATE TABLE post (
  postID BINARY(16) NOT NULL,
  postProfileID BINARY(16) NOT NULL,
  postContent VARCHAR(140) NOT NULL, -- not sure what value to assign here
  postDate DATETIME(6)
);

CREATE TABLE comment (
  commentID BINARY(16),
  commentProfileID BINARY(16),
  commentContent VARCHAR(140), -- again not sure what to put in here
  commentDate DATETIME(6)
);