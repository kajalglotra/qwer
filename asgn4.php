<?php
 $students = array();
 $students['A']['Math'] = 60;
 $students['A']['Bio'] = 80;
 $students['A']['Chem'] = 70;
 $students['B']['Math'] = 50;
 $students['B']['Bio'] = 60;
 $students['B']['Chem'] = 90;
 $students['C']['Math'] = 100;
 $students['C']['Bio'] = 87;
 $students['C']['Chem'] = 67;
     $total = array('A'=>0,'B'=>0,'C'=>0);
     $avg = array('A'=>0,'B'=>0,'C'=>0);
             foreach($students as $stud => $val){
	           foreach($val as $val2 => $subj){
		       $total[$stud] += $subj;
	       }
	                $avg[$stud] = $total[$stud]/3;
          }
                    echo 'the total marks of students A,B,C are : ';
                    print_r($total);
                    echo '<br>';
                    echo 'the average marks of students A,B,C are : ';
                    print_r($avg);
?>
