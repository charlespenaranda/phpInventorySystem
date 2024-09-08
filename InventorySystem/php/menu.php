<?php

include_once("../classes/connection.php");
session_start(); 
$value ="";



                try {

                            $conn = new Connection();
                            $conn->open();
                            $counter2 = 1;

                                    $dataset = $conn->query("SELECT * FROM Inventory.dbo.Menu");
                                    while ($row = $conn->fetch_array($dataset)) {

                                            $value .= $row['menu']."_".
                                            $row['sequence']."_".
                                            $row['filename']."_"."&";

                                    $counter2++;



                                    }
                                    $conn->close();

                                    echo 'success&'.$value;


                                                    
                }catch (Exception $e) {

                        echo $e . "error_";

                }
                                       

?>
