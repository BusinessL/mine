<?php

	/**
     *����
     *����n�������������������ӳ�һ�ţ����һ�����Ķ�λ������
	 *��:n=3ʱ��3������13,312,343,���ɵ��������Ϊ34331213��
     *��:n=4ʱ,4������7,13,4,246���ӳɵ��������Ϊ7424613��
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