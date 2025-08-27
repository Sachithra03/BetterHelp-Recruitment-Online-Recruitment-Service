<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="styles/feedback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>  
<section> 
    <div class="container">
        <form action="insert.php" method="post">
        

            <h1>Give Your Feedback</h1> 
            <input type="hidden" name="Feedback_ID" value="<?php echo $Feedback_ID; ?>">

            <textarea cols="10" rows="2" name= "pname" placeholder="Enter Your Name Here.."></textarea>
          <textarea cols="15" rows="5" name= "pcomment" placeholder="Enter Your Feedback Here.."></textarea>
    <div class= "star=rating">
        <span class="far fa-star" data-rating="1"></span>
        <span class="far fa-star" data-rating="2"></span>
        <span class="far fa-star" data-rating="3"></span>
        <span class="far fa-star" data-rating="4"></span>
        <span class="far fa-star" data-rating="5"></span>    
    </div>    
    <button>Send</button>
    <button>clear</button>

        </form> 
    </div>
</section>

</body>
</html>
