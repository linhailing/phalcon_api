<?php
/**
 * Created by PhpStorm.
 * User: henry hailing.lin@outlook.com
 * Date: 2018/4/22
 * Time: 20:26
 * 基础库
 */
namespace repositories;

use Phalcon\Di as di;

class BaseRepository{
    public function __construct(){
        $di = di::getDefault();
        $this->db = $di->get('db');
        $this->redis = $di->get('redis');
    }
}