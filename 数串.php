<?php

	/**
     *数串
     *设有n个正整数，将他们连接成一排，组成一个最大的多位整数。
	 *如:n=3时，3个整数13,312,343,连成的最大整数为34331213。
     *如:n=4时,4个整数7,13,4,246连接成的最大整数为7424613。
     * @param int $num
     * @param array $arr
     */
    public function nums(){
    	$num = 3;
    	$arr = [12,123,43];
    	$arrRes = [];
    	for($n=0;$n<count($arr);$n++){
    		$arr1 = explode('', $arr[$n]);
    		foreach ($arr1 as $key => $value) {
    			array_push($arrRes, $value);
    		}
    	}
    	sort($arrRes,'desc');
    	$strRes = implode('', $arrRes);
    	return $strRes;
    }