<?php

namespace App\Utils;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JobappUtil
 *
 * @author kokzilla
 * 
 */

class JobappUtil {
    //put your code here
    public static function prefixList(){
        $prefix = [
            '' => 'คำนำหน้า',
            'นาย' => 'นาย',
            'นาง' => 'นาง',
            'นางสาว' => 'นางสาว',
            'อื่น ๆ' => 'อื่น ๆ'
        ];
        return $prefix;
    }
    
    public static function raceList(){
        $race = [
            'ไทย' => 'ไทย',
            'พม่า' => 'พม่า',
            'ลาว' => 'ลาว',
            'กัมพูชา' => 'กัมพูชา',
            'อื่น ๆ' => 'อื่น ๆ'
        ];
        return $race;
    }
    
    public static function nationList(){
        $nation = [
            'ไทย' => 'ไทย',
            'พม่า' => 'พม่า',
            'ลาว' => 'ลาว',
            'กัมพูชา' => 'กัมพูชา',
            'อื่น ๆ' => 'อื่น ๆ'
        ];
        return $nation;
    }
    
    public static function religionList(){
        $result = [
            'พุทธ' => 'พุทธ',
            'คริสต์' => 'คริสต์',
            'อิสลาม' => 'อิสลาม',
            'อื่น ๆ' => 'อื่น ๆ'
        ];
        return $result;
    }
    
    
    public static function donateList(){
        $result = [
            'วัด' => 'วัด',
            'โรงเรียน' => 'โรงเรียน',
            'สถานสงเคราะห์เด็ก' => 'สถานสงเคราะห์เด็ก'
        ];
        return $result;                
    }
}
