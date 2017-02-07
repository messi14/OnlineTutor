<?php
include('db.php');

$student_id = $_POST['name'];

$sql = "select * from tbl_absentees where student_id=".$student_id;

                                        $stmt = $dbh->prepare($sql);
                                        $json = array();
                                        $products = array();
                                        if($stmt->execute()) {
                                         

                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                $products[] = $row;
                                            }
                                        }
                                        $str = "";
                                        //echo $products[0]['student_id'];
                                         foreach ($products as $product) {
                                             $bus = array(
									        'date' => $product['date'],
									        'badge' => true,
									        'title' => 'Absent'
									    	);
									    	array_push($json, $bus);
                                        }

                                        $jsonstring = json_encode($json);
										echo $jsonstring;

//var eventData = [
//    {"date":"2016-06-01","badge":true,"title":"Absent"},
//    {"date":"2016-06-02","badge":true,"title":"Absent"}
//];

?>