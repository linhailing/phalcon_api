<?php
/**
 * Created by PhpStorm.
 * User: henry hailing.lin@outlook.com
 * Date: 2018/4/22
 * Time: 21:54
 */
namespace repositories;

class UserRepository extends BaseRepository{
    private $userTablePrefix = 'member';
    public function __construct(){
        parent::__construct();
    }

    /**
     * 获取用户信息
     * @param $userId id
     */
    public function getUserInfo($userId){
        $memberTable = $this->userTablePrefix;
        $sql = <<<SQL
SELECT * FROM {$memberTable} WHERE id={$userId} 
SQL;
        $memberInfo = $this->db->fetchOne($sql);
        return $memberInfo;
    }
    public function getUserToken($id){
        $privateKey = $this->jwt->privateKey;
        $token = array(
            "iss" => $id
        );
        $jwt = JWT::encode($token, $privateKey, 'RS256');
        return $jwt;
    }
    public function gottenUserData($data = [], $tokenSet = true){
        $token = '';
        if ($tokenSet){
            $token = $this->getUserToken($data['id']);
        }
    }
}