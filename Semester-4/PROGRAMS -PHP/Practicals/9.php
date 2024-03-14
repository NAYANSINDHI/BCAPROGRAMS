<?php
$matrix_1= array(array(2,3),array(4,5));
$matrix_2= array(array(6,7),array(8,9));
$result =array();
for ($i=0; $i <=1; $i++) { 
    for ($j=0; $j <=1; $j++) { 
        $result[$i][$j]=0;
        for ($k=0; $k <=1; $k++) { 
            $result[$i][$j]+=$matrix_1[$i][$k]*$matrix_2[$k][$j];
        }
    }
}
echo "<p> result of matrix multiplication :</p>";
echo "<pre>";
print_r($result);
?>
