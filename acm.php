<?php
/**
 * Created by PhpStorm.
 * @author     xiaojiao.he  <1570306409@qq.com>
 * @createTime:     2021/9/6 14:04
 */
function findMedianSortedArrays($nums1, $nums2) {
    $retArr = array_merge($nums1, $nums2);
    sort( $retArr);
    $count = count($retArr);
    $begin = $retArr[(1 + $count) / 2 - 1];
    $end = $retArr[(1 + $count) / 2];
    if ($count % 2 == 0) {
        return ($begin + $end) / 2;
    }
    return $begin;
}
var_dump(findMedianSortedArrays([1,3],[2]));