<?php
/**
 * Created by PhpStorm.
 * User: VvV
 * Date: 12.10.2017
 * Time: 14:59
 */

namespace app\classes;
use app\models\Type;


class Replacement
{

    static public function replacement($contentL,$tpl_v='')
    {
       // $contentL->hits += 1;
      //  $contentL->save();


        $type = Type::find()->where("`type` = '{$contentL->type}'")->one();
        //echo $type[0]->type;


        if($type->type == 'about_text') {

            if ($contentL->id - 1 & 1) {

                $v_type = $type->tpl_v1;

            } else {

                $v_type = $type->tpl_v2;
            }

        }
        elseif($tpl_v == '1' || $tpl_v == ''){

            $v_type = $type->tpl_v1;
        }
        else
        {
            $v_type = $type->tpl_v2;
        }

        foreach ($contentL as $kl => $zn) {

            $sod[$kl] = $zn;
        }
            // print_r($sod);

            preg_match_all('/\D%(.*)%/isU', $v_type, $replacement);

           if(isset($contentL->image)) {
               preg_match_all('#<img.*src="(.*)".*>#isU', $contentL->image, $image);
               $sod['url_image'] = $image[1][0];
           }

               $sod['data'] = \app\classes\Replacement::fullDate(strtotime($contentL->data));


            ob_start();
            echo \app\classes\Admin::admin($contentL);
            $sod['edit']  = ob_get_clean();

            foreach($replacement[1] as $kl=>$zn)
            {

                // echo $zn.'<br>';
                if(isset($sod[$zn])){
                    $v_type = str_replace('%'.$zn.'%', $sod[$zn], $v_type );
                }


            }
            return $v_type;

    }


    // дата
    static public function fullDate($timestamp,$time=true,$sec=false)
    {
        if(!is_numeric($timestamp)) $timestamp = strtotime($timestamp);
        $month=array(1=>'января','февраля','марта','апреля','мая','июня','июля',
            'августа','сентября','октября','ноября','декабря');
        $d=date('j',$timestamp);
        $m=date('n',$timestamp);
        $Y=date('Y',$timestamp);
        $t='';
        if ($time)
            if ($sec)
                $t=date(', H:i:s',$timestamp);
            else
                $t=date(', H:i',$timestamp);

        return $d.' '.$month[$m].' '.$Y;
    }
}