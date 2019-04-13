function MCD ($a,$b) {  
  
  if($a == 1 || $b ==1) return $a ;
  
  if($a<$b) $maxLimit = floor($a/2);
  else $maxLimit = floor($b/2);
  
  for($i=2; $i<=$maxLimit; $i++) {
    if(($a%$i==0) && ($b%$i==0)) {return $i;}
  }
}

echo 'MCD='.   LCM(100,60);


/*
Output : 2
*/
  
