<!doctype html>
<html>
    <head>
        <title>contact</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
        <div class="container wrapper shadow rounded">
                <!-- Navigation Bar -->
            <div class="row">
                <div class="col-sm-4 header-brand">
                    <a href="index.php">Brand Name</a>
                </div>
                <div class="col-sm-8 navigation-links text-right">
                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
            <div class="row contact text-secondary">
                <div class="col-12 text-center">
                    <h1>Contact Us</h1>
                </div>
                <div class="col-12 text-center">
                    <form action="" method="post" class="form-horizontal ex_form">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Work email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea rows="5" name="desc" class="form-control" id="desc" placeholder="Write here..."></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row text-white bg-secondary p-5 footer">
                <div class="col-sm-3 sub footer-brand">
                    <a href="index.php">Brand Name</a>
                </div>
                <ul class="col-sm-3 sub text-center">
                    <li><a href="index.php" class="text-white btn">Home</a></li>
                    <li><a href="about.php" class="text-white btn">About</a></li>
                    <li><a href="contact.php" class="text-white btn">Contact</a></li>
                </ul>
                <ul class="col-sm-3 sub text-center">
                    <li><a href="#" class="text-white btn">Home</a></li>
                    <li><a href="#" class="text-white btn">About</a></li>
                    <li><a href="#" class="text-white btn">Contact</a></li>
                </ul>
                <div class="col-sm-3 text-center">
                    <p class="font-weight-bold text-white">Follow Us</p>
                    <a href="#" class="text-white btn"><i class="fa fa-facebook-f"></i></a>
                    <a href="#" class="text-white btn"><i class="fa fa-youtube"></i></a>
                    <a href="#" class="text-white btn"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="text-white btn"><i class="fa fa-github-square"></i></a>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
