CREATE TABLE profile (
  profileID BINARY (16) NOT NULL,
  profileEmail VARCHAR(128) NOT NULL,
  profileName VARCHAR(32) NOT NULL,
  profileHash CHAR(128) NOT NULL,
  profileSalt CHAR(64) NOT NULL,
  UNIQUE(profileEmail),
  UNIQUE(profileName),
  PRIMARY KEY(profileID)
);

CREATE TABLE post (
  postID BINARY(16) NOT NULL,
  INDEX(postProfileID),
  postProfileID BINARY(16) NOT NULL,
  postContent VARCHAR(140) NOT NULL,
  postDate DATETIME(6),
  FOREIGN KEY(postProfileID)
);

CREATE TABLE comment (
  commentID BINARY(16),
  commentProfileID BINARY(16),
  commentContent VARCHAR(140),
  commentDate DATETIME(6),
  INDEX(commentProfileID),
  INDEX(commentID)

);

-- I'm not sure what values to assign these

INSERT INTO profile (profileName, profileEmail) VALUES (1, 2);

INSERT INTO post (postContent) VALUES (5); -- what am i doing

INSERT INTO comment (commentContent) VALUES (7);

UPDATE profile
SET profileID = 2,
WHERE profileID = 1;

UPDATE post
SET postProfileID = 2,
WHERE postProfileID = 1;

UPDATE comment
SET commentID = 3,
WHERE commentID = 5;

SELECT profileID
FROM profile
WHERE profileID = 6;

SELECT postProfileID
FROM post
WHERE postProfileID = 9;

SELECT 'comment'
FROM comment
WHERE commentID = 8;

DELETE FROM profile WHERE profileID = 9;

DELETE FROM post WHERE postID = 5;

DELETE FROM comment WHERE commentID = 9;
