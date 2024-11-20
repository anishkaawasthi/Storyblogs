<?php

// Path to the text file where blog posts will be saved
$file_path = 'blogs.txt';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate form inputs
    if (empty($_POST['blog-title']) || empty($_POST['blog-content'])) {
        echo "Title and content are required.";
    } else {
        // Sanitize form data for the title and author, but keep the HTML content as-is
        $title = htmlspecialchars(trim($_POST['blog-title']));
        $content = $_POST['blog-content'];  // Do not use htmlspecialchars here to retain HTML formatting
        $author = isset($_POST['author-name']) ? htmlspecialchars(trim($_POST['author-name'])) : 'Anonymous'; // Default to 'Anonymous' if no author provided

        // Prepare the text to append to the file
        $blog_entry = "Title: $title\n";
        $blog_entry .= "Author: $author\n";
        $blog_entry .= "Content: \n$content\n";  // The content is already HTML formatted
        $blog_entry .= "--------------------------------------------------\n";

        // Open the file and append the new blog entry
        if (file_put_contents($file_path, $blog_entry, FILE_APPEND)) {
            echo "New blog post created successfully!<br>";
            echo "<a href='index.html'>Go back to the homepage</a>"; // Or redirect to a thank-you page
        } else {
            echo "Error writing to file.";
        }
    }
}
?>
<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted successfully!"; // Debugging line

    // Validate form inputs
    if (empty($_POST['blog-title']) || empty($_POST['blog-content'])) {
        echo "Title and content are required.";
    } else {
        // Rest of the code
    }
}
?>
