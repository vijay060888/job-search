<html>
<head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
        <h1>Job search</h1>
        <form method="POST" action="views/job-search.php" >
            <div class="col-md-4">
            <input type="text" name="job_title" value="" class="form-control" placeholder="Job Title" required/>
</div> 
<div class="col-md-4">
            <input type="text" name="experience_from" value="" class="form-control" placeholder="experience_from" />
</div> 
<div class="col-md-4">
            <input type="text" name="experience_to" value="" class="form-control" placeholder="experience_to" />
</div> 
<div class="col-md-4">
            <input type="text" name="job_type" value="" class="form-control" placeholder="job_type" />
</div>
<div class="col-md-4">
            <input type="text" name="salary_from" value="" class="form-control" placeholder="salary_from" />
</div>
<div class="col-md-4">
            <input type="text" name="salary_to" value="" class="form-control" placeholder="salary_to" />
</div>
<?php  /*experience_from
            experience_to
            job_type
            salary_from
            salary_to*/?>
            <div class="col-md-4">
            <input type="submit" class="btn btn-primary" />
</div>
        </form>
</div>
</div>
    </body>
</html>