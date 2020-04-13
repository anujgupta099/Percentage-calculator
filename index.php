<html>
    <head>
        <title>Job Search</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <style>
        body
        {
            background-image: url(background.png);
            background-size: cover;
            background-repeat: no-repeat;
        
        }
        .searchBox
        {
                        
            margin-top: 16vw;
            margin-left : 18vw;
            object-position: center;
            background-color: white;
            padding-top: 5vw;
            padding-left: 10vw;
            margin-right: 18vw;
            margin-right: 18vw;
            padding-right: 2vw;
            padding-bottom: 3vw;
            background: rgba(0, 0, 0, 0.4);
        
            
        }
        inner{
            background-color: white;
            opacity: 1;
            
        }
        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="searchBox">
                
                <div class="inner">
                    <p style="padding-left:8px">Enter Your Skill set Below</p>
                <form method="POST" class="" style="opacity: 100%" action="sub.php" >
                      <div class="form-group mx-md-2 mb-2">
                             <label for="Search" class="sr-only">Registration</label>
                        
                             <input type="search" class="form-control" id="search" placeholder="REgistration Number+" style="opacity:100%;" name="REG">
                    </div>
                    <div class="form-group mx-md-2 mb-2">
                             <label for="Search" class="sr-only">Marksfor C++</label>
                        
                             <input type="search" class="form-control" id="search" placeholder="Enter Marks For c++" style="opacity:100%;" name="c++">
                    </div>
                    <div class="form-group mx-md-2 mb-2">
                             <label for="Search" class="sr-only">Marksfor python</label>
                        
                             <input type="search" class="form-control" id="search" placeholder="Enter Marks For python" style="opacity:100%;" name="python">
                    </div>
                    <div class="form-group mx-md-2 mb-2">
                             <label for="Search" class="sr-only">Marksfor java</label>
                        
                             <input type="search" class="form-control" id="search" placeholder="Enter Marks For java" style="opacity:100%;" name="java">
                    </div>
                    <div class="form-group mx-md-2 mb-2">
                             <label for="Search" class="sr-only">SMarksfor operating system</label>
                        
                             <input type="search" class="form-control" id="search" placeholder="Enter Marks For OS" style="opacity:100%;" name="OS">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Calculate</button>
                
                </form>
                </div>

                
            </div>
        </div>
    
    </body>
</html>

