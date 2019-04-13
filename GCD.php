  function GCD ($a,$b) {  
  
    if($a == 1 || $b ==1) return $a ;
    
    if($a<$b) $maxLimit = floor($a/2);
    else $maxLimit = floor($b/2);
    
    for($i=$maxLimit; $i>=1; $i--) {
      if(($a%$i==0) && ($b%$i==0)) {return $i;}
    }
  }
  
  echo 'GCD='.  GCD(100,60);
  
  /**
  Output : 20
  **/
