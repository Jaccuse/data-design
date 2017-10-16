<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Data Design Project</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
        <p>
            <h2>Persona</h2>
            James is a user with topics to talk about with members of his community. James enjoys photography and hanging out in bars with his friends drinking craft beers.
        </p>
        <p>
            <h2>Use Case</h2>
            As a registered user, James wants to create a post.
        </p>
        <p>
            <h2>Interaction Flow</h2>
            <ol>
                <li></li>
                <li></li>
            </ol>
        </p>
        <p>
            <h1>Conceptual Model</h1>
        </p>
        <p>
            <h1>profile</h1>
            <ul>
                <li>profileID</li>
                <li>profileEmail</li>
                <li>profileName</li>
                <li>profileSalt</li>
                <li>profileHash</li>
            </ul>
        </p>
        <p>
            <h1>post</h1>
            <ul>
                <li>postID</li>
                <li>postProfileID</li>
                <li>postDate</li>
                <li>postContent</li>
                <li>postUpvotes</li>
            </ul>
        </p>
        <p>
            <h1>comment</h1>
            <ul>
                <li></li>
            </ul>
        </p>
    </body>
</html>