CREATE TABLE profile (
  profileID BINARY (16) NOT NULL,
  profileEmail VARCHAR(128) NOT NULL,
  profileName VARCHAR(32) NOT NULL,
  profileHash CHAR(128) NOT NULL,
  profileSalt CHAR(64) NOT NULL,
  UNIQUE(profileEmail),
  UNIQUE(profileName)
);

