INSERT INTO profile (profileId, profileEmail, profileName, profileHash, profileSalt)
VALUES(
  -- converted profileId UUID to binary
  (UNHEX(REPLACE('55ee2f5a-6c7c-444e-b286-bfa368b9bf15', '-', ''))),
  -- email for profileEmail
  'jarnold33@cnm.edu',
  -- username for profileName
  'jarnold33',
  -- password hash for profileHash
  '063b6645cdb3042291015982db2e30d5df9746a772fb0b42c8ba108bcc8326ba5fd587a8fb8ad6b08d434d9bb3a1fe92270d06ce836de0dadbc56469ffa31360',
  -- hash salt for profileSalt
  '8b20cee20d192945db6fc76b9674d7d0fab776b9416e74e4715f296f2e77b1fc'
);

INSERT INTO post (postId, postProfileId, postContent, postDate)
  VALUE(
  -- converted postId UUID to binary
  (UNHEX(REPLACE('2af2363b-9dc7-4fac-a0cb-8bd09911c20e', '-', ''))),
  -- do i need to convert the profileId UUID to binary again here?
  (UNHEX(REPLACE('55ee2f5a-6c7c-444e-b286-bfa368b9bf15', '-', ''))),
  -- random postContent text
  'yeaaaah',
  -- current date for postDate, should i have included the time down to the millisecond?
  '2017-10-20'
);

INSERT INTO comment (commentId, commentProfileId, commentPostId, commentContent, commentDate, commentCommentId)
  VALUE(
  -- converted commentId UUID to binary
  (UNHEX(REPLACE('018a5b80-f900-4947-952a-40a8ee181e32', '-', ''))),
  -- profileId UUID again converted to binary
  (UNHEX(REPLACE('55ee2f5a-6c7c-444e-b286-bfa368b9bf15', '-', ''))),
  -- commentPostId converted to binary
  (UNHEX(REPLACE('2af2363b-9dc7-4fac-a0cb-8bd09911c20e', '-', ''))),
  -- random commentContent text
  'yaehh',
  -- current date for commentDate
  '2017-10-20',
  -- UUID for commentCommentId
  (UNHEX(REPLACE('7f958081-dda0-43f2-b960-37069a2594ec', '-', '')))
);