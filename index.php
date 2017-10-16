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
            James is a user with topics to talk about with members of his community. James enjoys photography and hanging out in bars with his friends drinking craft beers. He wants to connect and talk with members of his community about popular hangouts and the latest news.
        </p>
        <p>
            <h2>Use Case</h2>
            As a registered user, James wants to create a post.
        </p>
        <p>
            <h2>Interaction Flow</h2>
            <ol>
                <li>I write and send a post</li>
                <li>The browser displays the post</li>
            </ol>
        </p>
        <p>
            <h1>Conceptual Model</h1>
        </p>
        <p>
            <h2>profile</h2>
            <ul>
                <li>profileID</li>
                <li>profileEmail</li>
                <li>profileName</li>
                <li>profileSalt</li>
                <li>profileHash</li>
            </ul>
        </p>
        <p>
            <h2>post</h2>
            <ul>
                <li>postID</li>
                <li>postProfileID</li>
                <li>postDate</li>
                <li>postContent</li>
                <li>postUpvotes</li>
            </ul>
        </p>
        <p>
            <h3>comment</h3>
            <ul>
                <li>commentID</li>
                <li>commentProfileID</li>
                <li>commentDate</li>
                <li>commentUpvotes</li>
            </ul>
        </p>
    </body>
</html>