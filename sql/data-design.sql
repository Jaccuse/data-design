DROP TABLE IF EXISTS profile;
DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS comment;

CREATE TABLE profile (
  profileId BINARY (16) NOT NULL,
  profileEmail VARCHAR(128) NOT NULL,
  profileName VARCHAR(32) NOT NULL,
  profileHash CHAR(128) NOT NULL,
  profileSalt CHAR(64) NOT NULL,
  UNIQUE(profileEmail),
  UNIQUE(profileName),
  PRIMARY KEY(profileId)
);

CREATE TABLE post (
  postId BINARY(16) NOT NULL,
  postProfileId BINARY(16) NOT NULL,
  postContent VARCHAR(140) NOT NULL,
  postDate DATETIME(6) NOT NULL,
  INDEX(postProfileId),
  FOREIGN KEY(postProfileId) REFERENCES profile(profileId),
  PRIMARY KEY(postId)
);

CREATE TABLE comment (
  commentId BINARY(16) NOT NULL,
  commentProfileId BINARY(16) NOT NULL,
  commentPostId BINARY(16) NOT NULL,
  commentCommentId BINARY(16) NOT NULL,
  commentContent VARCHAR(140) NOT NULL,
  commentDate DATETIME(6) NOT NULL,
  INDEX(commentProfileId),
  INDEX(commentPostId),
  INDEX(commentCommentId),
  PRIMARY KEY(commentId),
  FOREIGN KEY(commentProfileId) REFERENCES profile(profileId),
  FOREIGN KEY(commentPostId) REFERENCES post(postId),
  FOREIGN KEY(commentCommentId) REFERENCES comment(commentId)
);