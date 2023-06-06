<?php 


    class Jobsearch{
        // Connection
        private $conn;
        // Table
        private $db_table = "recruiter_job_post";
        // Columns
        public $job_title;
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        // GET ALL
        public function getJobs($js_arr){
            $sqlQuery = "SELECT * FROM " . $this->db_table;
            $whereConditions = [];
            foreach ($js_arr as $js_ar => $value) {
                if($value == ''){

                }else {
                    if ($js_ar === 'job_type') {
                        // Apply equal operator
                        $whereConditions[] = "{$js_ar} = '{$value}'";
                    } elseif ($js_ar === 'job_title') {
                        // Apply like operator
                        $whereConditions[] = "{$js_ar} LIKE '%{$value}%'";
                    } else {
                        $whereConditions[] = "{$js_ar} = '{$value}'";
                    }
                }
                
            }
            
            if (!empty($whereConditions)) {
                $whereClause = "WHERE " . implode(" AND ", $whereConditions);
                $sqlQuery .= " {$whereClause}";
            }
            echo $sqlQuery .= "order by created_at desc limit 5";
            //exit;
           
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

       
    }

?>