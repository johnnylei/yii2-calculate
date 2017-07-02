<?php
/**
 * Created by PhpStorm.
 * User: johnny
 * Date: 17-7-2
 * Time: 下午9:43
 */

namespace johnnylei\calculate;


use yii\web\AssetBundle;

class CalculateAsset extends AssetBundle
{
    public $sourcePath =  '@johnnylei/calculate/assets';
    public $js = [
        'calculate.js',
    ];
    public $css = [
        'calculate.css'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}