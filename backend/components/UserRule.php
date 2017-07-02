<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/7/2
 * Time: 14:06
 */
namespace backend\components;

use yii;

class UserRule extends \yii\rbac\Rule {

    public function execute($user, $item, $params){

        if (Yii::$app->controller->action->id !=='update' || Yii::$app->user->id == $params['id']){
            return true;
        }
        return false;

    }

}