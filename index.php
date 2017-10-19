<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Data Design Project</title>
    </head>
    <body>
        <header>
            <h2>Persona</h2>
            <p>
                <h3>Who</h3>
                <p><strong>Name: </strong>James</p>
                <p><strong>Age: </strong>26 years old</p>
                <h3>What</h3>
                <p><strong>Profession: </strong>James is a former waiter and now works as a freelance web developer</p>
                <p><strong>Technology: </strong>James uses an up-to-date MacBook and iPhone, as well as a brand new high resolution digital camera. As an avid user of the internet, he always intends to keep his hardware updated as new technology is released.</p>
                <p><strong>Behavior: </strong>James is fairly busy with his work, his free time will often be spent working on his projects and hobbies, as well as spent surfing the web.</p>
                <p><strong>Goals: </strong>James wants to connect with and talk to people around his age and post pictures for such people to see.</p>
            </p>
            <p>
                <h2>Use Case</h2>
                As a registered user, James wants to create posts about good drinking spots.
            </p>
        </header>
        <main>
            <p>
                <h2>Interaction Flow</h2>
                <ol>
                    <li>I log onto the website</li>
                    <li>The browser displays the homepage</li>
                    <li>I click login</li>
                    <li>The browser displays the login dialog</li>
                    <li>I enter my login information and click the confirmation button</li>
                    <li>The browser takes me to my account's homepage</li>
                    <li>I click the create post button</li>
                    <li>The browser displays the post creation field</li>
                    <li>I write and submit a post</li>
                    <li>The browser redirects me to the post's page</li>
                </ol>
            </p>
                <h2>Conceptual Model</h2>
            <p>
                <h3>profile</h3>
                <ul>
                    <li>profileId (primary key)</li>
                    <li>profileEmail</li>
                    <li>profileName</li>
                    <li>profileSalt (for account password)</li>
                    <li>profileHash (for account password)</li>
                </ul>
            </p>
            <p>
                <h3>post</h3>
                <ul>
                    <li>postId (primary key)</li>
                    <li>postProfileId (foreign key)</li>
                    <li>postDate</li>
                    <li>postContent</li>
                </ul>
            </p>
            <p>
                <h3>comment</h3>
                <ul>
                    <li>commentId (primary key)</li>
                    <li>commentProfileId (foreign key)</li>
                    <li>commentCommentId (foreign key)</li>
                    <li>commentPostId</li>
                    <li>commentDate</li>
                    <li>commentContent</li>
                </ul>
            </p>
            <p>
                <h2>Relationships</h2>
                <ul>
                    <li>one profile can have many posts (1 to n)</li>
                    <li>one post can have many comments (1 to n)</li>
                    <li>one comment can have many comments (1 to n)</li>
                    <!-- why did i end up with the same kind of relationship every time here-->
                </ul>
            </p>
        </main>
    </body>
</html>