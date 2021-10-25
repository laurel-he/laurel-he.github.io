<?php
/**
 * Created by PhpStorm.
 * @author     xiaojiao.he  <1570306409@qq.com>
 * @createTime:     2021/10/22 17:22
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     * [1, 1, 1, 2, 3, 3, 3]
     * [1, 3]
     *
     */
    function majorityElement($nums) {
        $count = ceil(count($nums) / 3);
        $repeat = array_count_values($nums);

        foreach ($nums as $num) {

        }
        array_intersect();
    }
}