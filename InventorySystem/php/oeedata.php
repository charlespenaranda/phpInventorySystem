<?php

include_once("../classes/connection.php");

session_start(); 


$line = $_GET['line'];
$datefrom = $_GET['date'];;

$value ="";
$downtime ="";


                try {

                            $conn = new Connection();
                            $conn->open();
                            $counter2 = 1;

                                    $dataset = $conn->query("EXEC SF_OEE_REPORT2 '".$line ."','" .$datefrom."'");
                                    while ($row = $conn->fetch_array($dataset)) {



                                            $value .= $row['model']."_".
                                            $row['0']."_".
                                            $row['1']."_".
                                            $row['2']."_".
                                            $row['3']."_".
                                            $row['4']."_".
                                            $row['5']."_".
                                            $row['6']."_".
                                            $row['7']."_".
                                            $row['8']."_".
                                            $row['9']."_".
                                            $row['10']."_".
                                            $row['11']."_".
                                            $row['12']."_".
                                            $row['13']."_".
                                            $row['14']."_".
                                            $row['15']."_".
                                            $row['16']."_".
                                            $row['17']."_".
                                            $row['18']."_".
                                            $row['19']."_".
                                            $row['20']."_".
                                            $row['21']."_".
                                            $row['22']."_".
                                            $row['23']."_".
                                            $row['Availability']."_".
                                            $row['Performance']."_".
                                            $row['Quality']."_".
                                            $row['OEE']."_"."&";

                                    $counter2++;



                                    }
                                    $conn->close();

                                    echo  'success&'.$value;


                                                    
                }catch (Exception $e) {

                        echo $e . "error_";

                }
                                       

?>
