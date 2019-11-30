<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        @import url(http://fonts.googleapis.com/css?family=Montserrat+Alternates);

        * {
            margin:0;
            padding:0;
            font:12pt Arial;
        }

        body {
          background-color:#34495e;
        }

        .field {
          display:flex;
          position:realtive;
          margin:13em auto;
          width:70%;
          flex-direction:row;
          box-shadow:
           1px 1px 0 rgb(22, 160, 133),
           2px 2px 0 rgb(22, 160, 133),
           3px 3px 0 rgb(22, 160, 133),
           4px 4px 0 rgb(22, 160, 133),
           5px 5px 0 rgb(22, 160, 133),
           6px 6px 0 rgb(22, 160, 133),
           7px 7px 0 rgb(22, 160, 133)
          ;
        }

        .field>input[type=text],
        .field>button {
          display:block;
          font:1.2em 'Montserrat Alternates';
        }

        .field>input[type=text] {
          flex:1;
          padding:0.6em;
          border:0.2em solid rgb(26, 188, 156);
        }

        .field>button {
          padding:0.6em 0.8em;
          background-color:rgb(26, 188, 156);
          color:white;
          border:none;
        }
    </style>
</head>
<body>
    <a href="home.html" style="color:white">Home</a>
<form action="searchform.php" method="GET">
    <div class="field" id="searchform">
  <input type="text" id="fname" name="fname" placeholder="what are you searching for?" />
  <button type="submit" id="Search" name="Search">Find!</button>
</div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</form>
</body>
</html>