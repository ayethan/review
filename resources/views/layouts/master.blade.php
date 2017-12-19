<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Blog</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <a href="#" class="navbar-brand">Review</a>

  </div>
  <div class="nav navbar-nav navbar-default">
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
  </div>
</div>
  
</nav>
<main>
<div class="container">
  @yield('content')
</div>
</main>
</body>
</html>