<?php
/**
 * Created by PhpStorm.
 * User: VvV
 * Date: 10.10.2017
 * Time: 14:03
 */

namespace app\classes;
use \app\classes\ContentFunction;


class Content
{
    static public function content($content,$type='')
    {
        foreach ($content as $val) {
            if($type != '')
            {
                if ($val->type == $type) {

                    $function = $val->type;

                    $return = call_user_func('\app\classes\ContentFunction::'.$function, $val);
                  //  $return =  ContentFunction::$function($val);
                }
            }

        }

        return $return;
    }

}