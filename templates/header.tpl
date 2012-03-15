<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/dev/css" />
    <script type="text/javascript" src="{"jquery-1.7.1.min.js"|cdn}"></script>
    <script type="text/javascript">
        
        $.holdReady(true);
        
        $.ajax({
            cache: true,
            dataType: 'script',
            url: "/dev/js",
            success: function() { $.holdReady(false); }
        });
        
    </script>
    <!--[if lt IE 9]>
    <script type="text/javascript">
        'abbr article aside audio canvas details figcaption figure footer header hgroup mark meter nav output progress section summary time video'.replace(/\w+/g,function(n){ document.createElement(n); });
    </script>
    <![endif]-->
</head>
<body>
