<?php
/**
 * Redis类单元测试
 *
 * @author zhiyuan <zhiyuan12@staff.weibo.com>
 */
namespace Framework\Tests;
use Framework\Libraries\KeyBuilder;
use Framework\Libraries\TestSuite;

class TestKeyBuilder extends TestSuite {
    public function beginTest() {
        $kb = new KeyBuilder();
        $key_sets_index='demo';
        $param=array('id'=>123);
        var_dump($kb->buildKey($key_sets_index, $param));

    }
}