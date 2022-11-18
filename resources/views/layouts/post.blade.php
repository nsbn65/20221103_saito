<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      background-color:rgb(47,11,124);
      width: 100%;
      margin: 0 auto;
      position: relative;
    }

    .container {
      background-color:#fff;
      width:55%;
      position: absolute;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      border-radius:10px;
    }

    .top {
      margin-left: 30px;
    }

    h1 {
      font-size: 30px;
    }

    .input-add {
      width: 80%;
      height: 35px;
      padding: 5px;
      left: 10px;
      border-radius:5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none; 
    }
    .button-add {
      text-align: left; 
      font-size:11px;
      color:#FA6FEC;
      border:2px solid #FA6FEC;
      border-radius:5px;
      background-color:#fff;
      padding:7px 14px;
      font-weight: bold;
      cursor: pointer;
      outline: none;
    }

    .button-add:hover{
      background-color: #FA6FEC;
      border-color: #FA6FEC;
      color: #fff;
    }

    table {
      width: 100%;
      text-align: center;
      border-collapse: separate;
      border-spacing: 40px 10px;
    }

    .input-update {
      width: 75%;
      height: 30px;
      padding: 5px;
      left: 10px;
      border-radius:5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 12px;
      outline: none; 
    }

    .button-update {
      font-size:11px;
      color:#faa628;
      border:2px solid #faa628;
      border-radius:5px;
      background-color:#fff;
      padding:7px 13px;
      font-weight: bold;
      cursor: pointer;
      outline: none;
    }

    .button-update:hover {
      background-color: #faa628;
      border-color: #faa628;
      color: #fff;
    }

    .button-delete {
      font-size:11px;
      color: #21e0ed;
      border:2px solid #21e0ed;
      border-radius:4px;
      background-color:#fff;
      padding:7px 13px;
      font-weight: bold;
      cursor: pointer;
      outline: none;
    }

    .button-delete:hover {
      background-color: #21e0ed;
      border-color: #21e0ed;
      color: #fff;
    }
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  <div class="content">
    @yield('content')
  </div>
</body>
</html>