<?php

require_once '../dbconnect';

class UserLogic
{
    /**
     * ユーザを登録する
     * @param array $userData
     * @return bool $result
     */
    public static function createUser($userData)
    {
        $sql = 'INSERT INTO users (name, email, password) VALUES (?, ?, ?)';

      //ユーザデータを配列に入れる
      $arr = [];
      $arr[] = //name
      $arr[] = //
        return $result;
    }
}