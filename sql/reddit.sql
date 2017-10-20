INSERT INTO profile (profileId, profileEmail, profileName, profileHash, profileSalt)
VALUES ((UNHEX(REPLACE('55ee2f5a-6c7c-444e-b286-bfa368b9bf15', '-', ''))), 'jarnold33@cnm.edu', 'jarnold33', '063b6645cdb3042291015982db2e30d5df9746a772fb0b42c8ba108bcc8326ba5fd587a8fb8ad6b08d434d9bb3a1fe92270d06ce836de0dadbc56469ffa31360', '8b20cee20d192945db6fc76b9674d7d0fab776b9416e74e4715f296f2e77b1fc');

INSERT INTO post (postId, postProfileId, postContent, postDate)
  VALUE ((UNHEX(REPLACE('2af2363b-9dc7-4fac-a0cb-8bd09911c20e', '-', ''))), (UNHEX(REPLACE('55ee2f5a-6c7c-444e-b286-bfa368b9bf15', '-', ''))), 'yeaaaah', '2017-10-20');

INSERT INTO comment (commentId, commentProfileId, commentPostId, commentContent, commentDate, commentCommentId)
  VALUE ((UNHEX(REPLACE('018a5b80-f900-4947-952a-40a8ee181e32', '-', ''))), (UNHEX(REPLACE('55ee2f5a-6c7c-444e-b286-bfa368b9bf15', '-', ''))), (UNHEX(REPLACE('2af2363b-9dc7-4fac-a0cb-8bd09911c20e', '-', ''))), 'yaehh', '2017-10-20', (UNHEX(REPLACE('7f958081-dda0-43f2-b960-37069a2594ec', '-', ''))));