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
}