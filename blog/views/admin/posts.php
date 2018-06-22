<html>
  <head>
    <meta charset="utf-8">
    <title>Databases with Platzi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Blog title</h1>
        </div>
    </div>  <!-- /aca termina el row Blog title -->
    <div class="row">
      <div class="col-md-8">
        <h2>Posts</h2>
        <p>  <a class="btn btn-primary" href="http://localhost/CursoPHP/blog/public/admin/posts/create">New Post</a></p>
<table  class="table">
  <tr>
    <th>Title</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
<?php

foreach ($blogPosts as $blogPost) {
  echo '<tr>';
  echo '<td>' . $blogPost['title'] . '</td>';
  echo '<td>Edit</td>';
  echo '<td>Delete</td>';
  echo '</tr>';
}

 ?>
</table>

      </div><!--  / col-md-8 termina aqui -->
      <div class="col-md-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div><!-- / col-md-4 termina aqui -->
    </div><!-- / row 2 -->
    <div class="row">
      <div class="col-md-12">
        <footer>
          This is a footer<br>
          <a href="http://localhost/CursoPHP/blog/public/admin">Admin panel</a>
        </footer>
      </div>
    </div>  <!-- / row 3 -->
  </div><!-- /   div container -->
  </body>
</html>