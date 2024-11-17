<?php
// Assuming you're storing data in a file for simplicity (use a database for real applications)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $title = $_POST['blog-title'];
    $content = $_POST['blog-content'];
    $author = $_POST['author-name'] ? $_POST['author-name'] : 'Anonymous'; // Default to 'Anonymous' if no name is provided

    // Create a new blog post (for now, we just save it in a file)
    $blogData = "Title: $title\nAuthor: $author\nContent: $content\n\n";
    
    // Save the blog data to a text file
    file_put_contents('blogs.txt', $blogData, FILE_APPEND);
    
    // Redirect the user to a confirmation page or show a success message
    echo "Thank you for submitting your blog!";
}
?>
