<?php $font_family = 'Graphik'; ?>
<?php $font_weight = 400; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webfonts Plus</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap-cover.css">

    <style>
    @import url(http://webfonts-plus.herokuapp.com/?family=<?php echo $font_family ?>);

    h1, p.lead {
        text-shadow: none;
        font-family: '<?php echo $font_family ?>', sans-serif !important;
        font-weight: <?php echo $font_weight ?>;
    }
    h1 {
        font-size: 50px;
    }
    p.lead {
        font-size: 30px;
    }
    </style>
    <link rel="stylesheet" href="assets/style.css">    
</head>
<body>
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <!-- <h3 class="masthead-brand">Konsalta Kuatorial</h3> -->
                    <!-- <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav> -->
                </div>
            </div> 
            <!-- .masthead -->

            <div class="inner cover">
                <!-- <img src="http://beta.konsaltakuatorial.com/assets/images/logo.png" alt=""> -->
                <h1 class="cover-heading">
                    <?php echo $font_family ?>
                    <!-- Yuri Pratama -->
                </h1>
                <p class="lead">
                    The quick brown fox jumps over the lazy dog
                </p>
                <!-- <p class="lead">
                    <a href="#" class="btn btn-lg btn-default">Learn more</a>
                </p> -->
            </div> <!-- .inner -->

            <div class="mastfoot">
                <div class="inner">
                    <!-- <p>Coming Soon on June 2016</p> -->
                    <!-- <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p> -->
                </div>
            </div> 
            <!-- .mastfoot -->

        </div> <!-- .site-wrapper -->
    </div> <!-- .site-wrapper-inner -->
</div> <!-- .cover-container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        // window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>