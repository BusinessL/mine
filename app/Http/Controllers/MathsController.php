<?php

/**
* Author:LQ
* About Math Arithmetic  
*/
class MathsController extends Controller
{
	
	function __construct(argument)
	{
		# code...
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
}