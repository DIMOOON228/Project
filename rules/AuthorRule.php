<?php
namespace app\rules;

use yii\rbac\Rule;

class AuthorRule extends Rule
{
public $name = 'isAuthor'; // Имя правила

public function execute($user_id, $item, $params)
{
   if(isset($params['author_id'])and ($params['author_id'])== $user_id){
       return true;
   }else{
       return false;
   }
}
}
