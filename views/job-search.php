<?php 
include_once '../config/database.php';
include_once '../class/job-search.php';
$database = new Database();
$db = $database->getConnection();
$job_title = $_POST['job_title'];
$experience_from = $_POST['experience_from'];
$experience_to = $_POST['experience_to'];
$job_type = $_POST['job_type'];
$salary_from = $_POST['salary_from'];
$salary_to = $_POST['salary_to'];

//$js_arr = [$job_title,$experience_from,$experience_to,$job_type,$salary_from,$salary_to];
$js_arr = array(
    "job_title" => "%$job_title%",
    "experience_from" => "$experience_from",
    "experience_to" => "$experience_to",
    "job_type" => "$job_type",
    "salary_from" => "$salary_from");
$items = new Jobsearch($db);
$stmt = $items->getJobs($js_arr);
$itemCount = $stmt->rowCount();


?>
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
                <div class="col-md-12">
                    <h1>Job Details</h1>
                    <table class="table">
                    <tr>
                        <th>Job Title</th>
                        <th>Job Description</th>
                        <th>Posted On</th>
                    </tr>
                    
                    <?php 
                   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                        
                        <tr>
                        <td><?php echo $row['job_title'];?></td>
                        <td><?php echo substr($row['job_description'],0 , 5);?></td>
                        <td><?php echo $row['created_at']?></td>
                        </tr>
                    <?php } ?>
                </table>
                <?php 
                
                ?>
                <button class="btn btn-info">Previous</button>
                <button class="btn btn-info">NEXT</button>
                
                </div>

            </div>

        </div>
        
    </body>

    </html>