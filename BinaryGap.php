
<?php 
class BinaryGap {
	
	public function solution($number) {
		$maxGap = 0;
		$counter = 0;
		$isStartCount = false;
		while($number > 0) {
			if(($number & 1) == 1) {
				if($isStartCount) {
					$maxGap = max($maxGap, $counter);
					$counter = 0;
				} else {
					$isStartCount = true;
					$counter = 0;
				}
			} else {
				if($isStartCount) {
					$counter++;
				}
			}
			$number >>= 1;
		}
		return $maxGap;
	}
}
$obj = new BinaryGap();
echo $obj->solution(1041);
?> 
