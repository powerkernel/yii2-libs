<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2018 Power Kernel
 */

namespace powerkernel\libs\jsteps;


use yii\web\AssetBundle;

/**
 * Class JStepsAsset
 * @package powerkernel\libs\jsteps
 */
class JStepsAsset extends AssetBundle
{
    public $css = [
    ];
    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
