<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EmailtoAdmin</title>
    <style type="text/css">
    div.post-admin{display: flex;
                   flex-direction:column;
                   align-items: center;
                   width:500px;
                   margin:auto;
                   padding:20px;
                   background:purple;
                   border:2px solid black;
                   border-radius:10px;
                  }
    p{color:white;}
    p.show-id,h1{color:black;text-align: center;}
    </style>
  </head>
  <body>
    <h1>Ciao Admin</h1>
    <p class="show-id">Il post con id:{{$post -> id}} è stato {{$action}}</p>
    <div class="post-admin">
      <p>Title: {{$post -> title}}</p>
      <p>Content: {{$post -> content}}</p>
      <p>Author:{{$post -> author}}</p>
      <p>Category_id:{{$post -> category_id}}</p>
    </div>

  </body>
</html>
