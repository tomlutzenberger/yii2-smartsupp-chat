<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Smartsupp;

use Yii;
use yii\base\Widget;
use yii\web\View;

/**
 * Class SmartsuppChat
 *
 * @package   TomLutzenberger\Smartsupp
 * @copyright 2019 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergertom@gmail.com>
 */
class SmartsuppChat extends Widget
{
    /**
     * @var string The Smartsupp key
     */
    public $key;

    /**
     * @var boolean Whether to hide default widget and use a custom chat opener/trigger
     * @see https://docs.smartsupp.com/examples/html-api/#open-chat
     */
    public $useCustomOpener = false;

    /**
     * @var boolean Whether to hide default widget and use a custom chat opener/trigger on mobile devices
     * @see https://docs.smartsupp.com/examples/html-api/#open-chat
     */
    public $useCustomOpenerMobile = false;


    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if (isset(Yii::$app->params['smartsupp'])) {
            $this->key = Yii::$app->params['smartsupp'];
        }

        if (empty($this->key)) {
            return '';
        }

        $script = "var _smartsupp = _smartsupp || {};_smartsupp.key = '$this->key';";
        $script .= $this->useCustomOpener ? "_smartsupp.hideWidget = true;" : '';
        $script .= $this->useCustomOpenerMobile ? "_smartsupp.hideMobileWidget = true;" : '';
        $script .= "
window.smartsupp||(function(d) {
var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
s=d.getElementsByTagName('script')[0];c=d.createElement('script');
c.type='text/javascript';c.charset='utf-8';c.async=true;
c.src='//www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);";

        $view = $this->getView();
        $view->registerJs($script, View::POS_HEAD, 'smartsupp');

        return '';
    }
}
