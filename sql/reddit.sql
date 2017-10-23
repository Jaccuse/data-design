INSERT INTO profile (profileId, profileEmail, profileName, profileHash, profileSalt)
  VALUES(
    -- converted profileId UUID to binary
    UNHEX(REPLACE('91bdcca6-2896-4a4c-a285-9cb383293eb2', '-', '')),
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
    -- postId
    UNHEX(REPLACE('6477cda1-f8d4-4227-aa78-2771679bfb9e', '-', '')),
    -- postProfileId primary key
    UNHEX(REPLACE('91bdcca6-2896-4a4c-a285-9cb383293eb2', '-', '')),
    -- random postContent text
    'Post content',
    -- current date for postDate
    '2017-10-20'
);

INSERT INTO comment (commentId, commentProfileId, commentPostId, commentContent, commentDate, commentCommentId)
  VALUE(
    -- converted commentId UUID to binary
    UNHEX(REPLACE('e4b251e0-25de-4b82-be88-b2da8cce7ba2', '-', '')),
    -- profileId UUID again converted to binary
    UNHEX(REPLACE('91bdcca6-2896-4a4c-a285-9cb383293eb2', '-', '')),
    -- commentPostId converted to binary
    UNHEX(REPLACE('6477cda1-f8d4-4227-aa78-2771679bfb9e', '-', '')),
    -- random commentContent text
    'Comment content',
    -- current date for commentDate
    '2017-10-20',
    -- UUID for commentCommentId
    UNHEX(REPLACE('d255d51b-4167-47e5-ad9b-138b37a3d4bd', '-', ''))
);

SELECT commentCommentId FROM comment WHERE commentCommentId = 'd255d51b-4167-47e5-ad9b-138b37a3d4bd';

UPDATE comment
SET commentCommentId = 'k255d51b-4167-47e5-ad9b-138b37a3d4bd'
WHERE commentCommentId = 'd255d51b-4167-47e5-ad9b-138b37a3d4bd';

DELETE FROM comment WHERE commentCommentId = 'd255d51b-4167-47e5-ad9b-138b37a3d4bd';