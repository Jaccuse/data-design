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
  commentContent VARCHAR(140) NOT NULL,
  commentDate DATETIME(6) NOT NULL,
  commentCommentId BINARY(16) NOT NULL,
  INDEX(commentProfileId),
  INDEX(commentPostId),
  INDEX(commentCommentId),
  FOREIGN KEY(commentCommentId) REFERENCES comment(commentId),
  FOREIGN KEY(commentPostId) REFERENCES post(postId),
  FOREIGN KEY(commentProfileId) REFERENCES profile(profileId),
  PRIMARY KEY(commentId)
);

-- I'm not sure what values to assign these

INSERT INTO profile (profileName, profileEmail) VALUES (1, 2);

INSERT INTO post (postContent) VALUES (5); -- what am i doing

INSERT INTO comment (commentContent) VALUES (7);

UPDATE profile SET profileID = 2 WHERE profileID = 1;

UPDATE post SET postProfileID = 2 WHERE postProfileID = 1;

UPDATE comment SET commentID = 3 WHERE commentID = 5;

SELECT profileID FROM profile WHERE profileID = 6;

SELECT postProfileID FROM post WHERE postProfileID = 9;

SELECT 'comment' FROM comment WHERE commentID = 8;

DELETE FROM profile WHERE profileID = 9;

DELETE FROM post WHERE postID = 5;

DELETE FROM comment WHERE commentID = 9;
