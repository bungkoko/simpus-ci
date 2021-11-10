
<!--
* CoreUI Bootstrap 4 Admin Template built as framework!
* Version 1.4.2
* http://coreui.io
* Copyright 2016 creativeLabs Łukasz Holeczek
* License : http://coreui.io/license.html
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
        <meta name="author" content="Lukasz Holeczek">
        <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
        <title>CoreUI Bootstrap 4 Admin Template</title>
        <!-- Icons -->
        <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/css/simple-line-icons.css" rel="stylesheet">
        <!-- Main styles for this application -->
        <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    </head>
    <body class="">
        <div class="container">
            <div class="row">
                <div class="col-md-5 m-x-auto pull-xs-none vamiddle">
                    <div class="clearfix">
                        <h1 class="pull-left display-3 m-r-2">404</h1>
                        <h4 class="p-t-1">Oops! You're lost.</h4>
                        <p class="text-muted">The page you are looking for was not found.</p>
                    </div>
                    <div class="input-prepend input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input id="prependedInput" class="form-control" size="16" type="text" placeholder="What are you looking for?">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="button">Search</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap and necessary plugins -->
        <script src="<?php echo base_url()?>assets/js/libs/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/libs/tether.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/libs/bootstrap.min.js"></script>
        <script>
        function verticalAlignMiddle()
        {
            var bodyHeight = $(window).height();
            var formHeight = $('.vamiddle').height();
            var marginTop = (bodyHeight / 2) - (formHeight / 2);
            if (marginTop > 0)
            {
                $('.vamiddle').css('margin-top', marginTop);
            }
        }
        $(document).ready(function()
        {
            verticalAlignMiddle();
        });
        $(window).bind('resize', verticalAlignMiddle);
        </script>
    </body>
</html>
