<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="ec.css">
    <script type="text" src="script.php"></script>

</head>
<body>
    <section id="header">
        <a href="#"><img src="" class="logo" alt=""></a>
        <div>
        <ul  id="navbar">
            <li><a  class="active"  href="index.html">Home</a></li>
            <li><a href="#">categories</a>
                <div class="sub-menu">
                <ul>
                    <li><a href="acoustic.html">Acoustic/semi-acoustic</a></li><li>
                        <a href="electronic.html">Electric guitar</a></li>
                    <li><a href="ukulele.html">ukulele</a></li>
                </ul>
    
            </div></li>
            <li><a href=" aboutus.html">about us</a>
            </li>
            <li><a href="login.html">signup/signin</a></li>
            <li id="lg-bag"><a href=" cart.html"><i class="fa-regular fa-bag-shopping"></i></a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
            
        </ul>
        </div>
        <div id="mobile">
            <a href=" cart.html"><i class="fa-regular fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <div class="form">
        <form action="script.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
        <input type="" id="email" class="form-control" name="email"/>
        </div class="form-group">
             <label for="password">Password</label>
             <input type="password" id="password" class="form-control" name="password"/>
    </div>
    <input type="submit" class="btn btn-primary w-100" value="login" name="">
    </form>
    </div>

</body>
</html>




