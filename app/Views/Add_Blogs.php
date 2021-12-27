<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Blogs</title>
    </head>

    <body>
        <h1>Add your blogs here</h1>

        <form action="/blogs/addBlogs" method="POST">
        <label>Name of Author: </label>
        <input type="text" name="name_author"><br>

        <label>Title of Blog: </label>
        <input type="text" name="blog_title"><br>

        <label>Blog Contents: </label>
        <textarea name="blog_content" id="" cols="30" rows="10"></textarea><br>

        <input type="submit" name="submit" value="Submit your blog">
        </form>
        
    </body>

</html>