<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2018 Power Kernel
 */

namespace powerkernel\libs\paypal;


use yii\web\AssetBundle;

/**
 * Class ECOAsset
 * @package powerkernel\libs\paypal
 */
class ECOAsset extends AssetBundle
{
    public $css = [
    ];
    public $js = [
        '//www.paypalobjects.com/api/checkout.js'
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
