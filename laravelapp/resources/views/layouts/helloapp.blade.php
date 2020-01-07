<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/
    bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/
    iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title')</title>
    <style media="screen">
      body {
        font-size: 16pt;
        color: #999;
        margin: 5px;
      }
      h1 {
        font-size: 50pt;
        text-align: right;
        color: #f6f6f6;
        margin: -20px 0 -30px 0px;
        letter-spacing: -4pt;
      }
      ul {
        font-size: 12pt;
      }
      hr {
        margin: 25px 100px;
        border-top: 1px dashed #ddd;
      }
      .menutitle {
        font-size: 14pt;
        font-weight: bold;
        margin: 0;
      }
      .content {
        margin: 10px;
      }
      .footer {
        text-align: right;
        font-size: 10pt;
        margin: 10px;
        border-bottom: solid 1px #ccc;
        color: #ccc;
      }
      th {
        background-color: #999;
        color: #fff;
        padding: 5px 10px;
      }
      td {
        border: solid 1px #aaa;
        color: #999;
        padding: 5px 10px;
      }
    </style>
  </head>
  <body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="menutitle">メニュー</h2>
    <ul>
      <li>@show</li>
    </ul>
    <hr size="1">
    <div class="container">
      @yield('content')
    </div>
    <div class="content">
      @yield('content2')
    </div>
    <div class="content">
      @yield('content3')
    </div>
    <div class="content">
      @yield('content4')
    </div>
    <div class="content">
      @yield('content5')
    </div>
    <div class="footer">
      @yield('footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
