<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Data Design Project</title>
        <!-- i have no idea why i added a stylesheet -->
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
        <header>
            <h2>Persona</h2>
            <p>
                <h3>Who</h3>
                <p><strong>Name: </strong>James</p>
                <p><strong>Age: </strong>28 years old</p>
                <h3>What</h3>
                <p><strong>Profession: </strong>Freelance web designer</p>
                <p><strong>Technology: </strong>The latest and greatest MacBook Pro and iPhone, as well as a brand new high resolution digital camera.</p>
                <p><strong>Behavior: </strong>James is fairly busy with his work, any free time will often be spent working on his projects, but he still has some time to invest in his hobbies.</p>
                <p><strong>Goals: </strong>James wants to talk to people like himself online about his hobbies.</p>
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
                    <li>I click the create post button</li>
                    <li>The browser displays the post create field</li>
                    <li>I write and submit the post</li>
                    <li>The browser displays the post's page</li>
                </ol>
            </p>
                <h2>Conceptual Model</h2>
            <p>
                <h3>profile</h3>
                <ul>
                    <li>profileID (primary key)</li>
                    <li>profileEmail</li>
                    <li>profileName</li>
                    <li>profileSalt (for account password)</li>
                    <li>profileHash (for account password)</li>
                </ul>
            </p>
            <p>
                <h3>post</h3>
                <ul>
                    <li>postID (primary key)</li>
                    <li>postProfileID (foreign key)</li>
                    <li>postDate</li>
                    <li>postContent</li>
                </ul>
            </p>
            <p>
                <h3>comment</h3>
                <ul>
                    <li>commentID (primary key)</li>
                    <li>commentProfileID (foreign key)</li>
                    <li>commentDate</li>
                </ul>
            </p>
            <p>
                <h2>Relationships</h2>
                <ul>
                    <li>one profile can have many posts (1 to n)</li>
                    <li>one post can have many comments (1 to n)</li>
                    <li>one comment can have many comments (1 to n)</li>
                    <!-- why did i end up with the same kind of relationship every time here -->
                </ul>
            </p>
        </main>
    </body>
</html>