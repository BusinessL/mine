<?php

namespace App\Http\Controllers;
/**
* Author:LQ
* About Math Arithmetic  
*/
class MathsController extends Controller
{
	
	public function __construct()
	{
		// $this->middleware('auth');
	}

    /**
     * 排序组合算法.
     *
     * @param  array $arr
     * @param  int   $m
     * @return array
     */
    public function getCombinationToString($arr, $m) {
        if ($m == 1) {
           return $arr;
        }
        $result = [];
        
        $tmpArr = $arr;
        unset($tmpArr[0]);
        for($i = 0; $i < count($arr); $i++) {
            $s = $arr[$i];
            $ret = $this->getCombinationToString(array_values($tmpArr), ($m - 1), $result);
            foreach($ret as $row) {
                $val = $s . ',' . $row;
                $val = explode(',', $val);
                sort($val);
                $val = implode(',', $val);
                if(!in_array($s, explode(',', $row)) && !in_array($val, $result)) {
                    $result[] = $val;
                }
            }
        }   
      return $result;
    }
    /**
     * 水仙花数.
     *
     *题目描述：春天是鲜花的季节，水仙花就是其中最迷人的代表，数学上有个水仙花数，他是这样定义的： 
     *“水仙花数”是指一个三位数，它的各位数字的立方和等于其本身，比如：153=1^3+5^3+3^3。  *现在要求输出所有在m和n范围内的水仙花数。
     *
     *输入：输入数据有多组，每组占一行，包括两个整数m和n（100 ≤ m ≤ n ≤ 999）。
     *
     *输出：对于每个测试实例，要求输出所有在给定范围内的水仙花数，就是说，输出的水仙花数必须大于*等于m,并且小于等于n，如果 *有多个，则要求从小到大排列在一行内输出，之间用一个空格隔开;
	 *如果给定的范围内不存在水仙花数，则输出no;
	 *每个测试实例的输出占一行。
     * @param  int   $n
     * @param  int   $m  
     * @return array
     */
    public function narcissisticNumber(){
    	fscanf(STDIN,'%d %d',$a,$b);
    	$n = 100;
    	$m = 999;
    	$result = [];
    	for($n;$n<=$m;$n++){
    		$a = intval($n/100);
    		$b = intval($n/10) % 10;
    		$c = $n %10;

    		if(pow($a,3) + pow($b,3) + pow($c,3) == $n){
    			array_push($result, $n);
    		}
    	}
    	return $result;
    }
    /**
     *电话号码分身
     *
     *题目描述：继MIUI8推出手机分身功能之后，MIUI9计划推出一个电话号码分身的功能：首先将电话号码中 *的每个数字加上8取个位，然后使用对应的大写字母代替 （"ZERO", "ONE", "TWO", "THREE", *"FOUR", "FIVE", "SIX", "SEVEN", "EIGHT", "NINE"）， *然后随机打乱这些字母，所生成的字符串即为电话号码对应的分身。
     */
    public function telephone(){
    	// $telArr = explode('', $telephone)
    	// foreach ($telArr as $key => $value) {
    	 	
    	//  	switch (variable) {
    	//  		case 'value':
    	//  			# code...
    	//  			break;
    	 		
    	//  		default:
    	//  			# code...
    	//  			break;
    	//  	}
    	// }	
    }
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
}