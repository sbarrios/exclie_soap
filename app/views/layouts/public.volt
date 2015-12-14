
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        {{ get_title() }}
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Estilos  -->
        {{ stylesheet_link('public/css/login.css') }}
        <!-- bootstrap 3.0.2 -->
        {{ stylesheet_link('public/AdminLTE/bootstrap/css/bootstrap.min.css') }}
        <!-- font Awesome -->
        {{ stylesheet_link('public/font-awesome-4.5.0/css/font-awesome.min.css') }}
        
        <!-- Theme style -->
        <!-- {{ stylesheet_link('public/AdminLTE/dist/css/AdminLTE.min.css') }} -->
        <!-- Material Design  -->
        {{ stylesheet_link("public/bootstrap-material/dist/css/material-wfont.min.css") }}
        {{ stylesheet_link("public/bootstrap-material/dist/css/ripples.min.css") }}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        {{ content() }}

        <!-- jQuery 1.1.* -->
        {{ javascript_include('public/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js') }}
        <!-- Material Design -->
        {{ javascript_include("public/bootstrap-material/dist/js/material.min.js") }}
        {{ javascript_include("public/bootstrap-material/dist/js/ripples.js") }}
        <!-- Bootstrap -->
        {{ javascript_include('public/AdminLTE/bootstrap/js/bootstrap.min.js') }}

    </body>
</html>