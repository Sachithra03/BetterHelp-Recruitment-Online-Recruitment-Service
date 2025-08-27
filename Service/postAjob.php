<html>
    <head>
        <title>POST A JOB</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head> 
    <body>
        <div class="job-form">
            <h1>POST A JOB</h1>
            <form action="insert.php" method="post">
                <p>Job ID:</p>
                <input type="hidden" id="id" name="id" value="1">

                <input type="text" name="cid" placeholder="Jobid">
                <p>Company Name:</p>
                <input type="text" nae="cname" placeholder="Full Name">
                <p>Position</p>
                <input type="text"  name="cposition" placeholder="Position">
                <p>Required Qualifications:</p>
                <input type="text"  name="cqualification"  placeholder="Qualification">
                <p>Salary:</p>
                <input type="numberm"  name="csalary" placeholder="Salary">
                <p>Experience</p>
                <input type="text"  name="cexperience" placeholder="Experience">
                <p>Location:</p>
                <input type="text"  name="clocation" placeholder="Location">
                <p>Company Details:</p>
                <input type="text" name="cdetails" placeholder="Details">
                <button type="submit">Submit</button>
                
            </form>
        </div>

    </body>
    
        
</html>