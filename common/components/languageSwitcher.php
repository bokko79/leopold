<?php
/*
author :: Pitt Phunsanit
website :: http://plusmagi.com
change language by get language=EN, language=TH,...
or select on this widget
*/
 
namespace common\components;
 
use Yii;
use yii\base\Component;
use yii\base\Widget;
use yii\bootstrap\Dropdown;
use yii\helpers\Url;
use yii\web\Cookie;
 
class languageSwitcher extends Widget
{
    public $languages = [
        'en-US' => 'English',
        'sr-Latn' => 'srpski',
        //'DE' => 'Deutsch',
    ];

    public $lang_codes = [
        'en-US' => 'EN',
        'sr-Latn' => 'SR',
        //'DE' => 'Deutsch',
    ];
 
    public function init()
    {
       /* if(php_sapi_name() === 'cli')
        {
            return true;
        }*/
 
        parent::init();
 
        $cookies = Yii::$app->response->cookies;
        $cookies1 = Yii::$app->request->cookies;
        $languageNew = Yii::$app->request->get('lang');
        if($languageNew)
        {
            if(isset($this->languages[$languageNew]))
            {
                Yii::$app->language = $languageNew;
                $cookies->add(new \yii\web\Cookie([
                    'name' => 'language',
                    'value' => $languageNew,
                    'expire' => time() + 60 * 60 * 24 * 30, // 30 days
                ]));
            }
        }
        elseif($cookies1->has('language'))
        {
            Yii::$app->language = $cookies1->getValue('language');
        }
 
    }
 
    public function run(){
        $languages = $this->languages;
        $current = $languages[Yii::$app->language];
        $current_code = $this->lang_codes[Yii::$app->language];
        //unset($languages[Yii::$app->language]);
        //unset($lang_codes[Yii::$app->language]);
 
        $items = [];
        foreach($languages as $code => $language)
        {
            $temp = [];
            $temp['label'] = $language;
            $temp['url'] = Url::current(['lang' => $code]);
            $temp['test'] = $current_code;
            array_push($items, $temp);
        }
 
        echo Dropdown::widget([
            /*'label' => $current_code,
            'dropdown' => [*/
                'items' => $items,
            /*],*/
        ]);
    }
 
}