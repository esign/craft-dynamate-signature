<?php

namespace esign\craftdynamatesignature;

use Craft;
use yii\base\Event;
use craft\base\Plugin;
use craft\events\RegisterTemplateRootsEvent;
use craft\web\twig\variables\CraftVariable;
use esign\craftdynamatesignature\variables\SignatureVariable;
use craft\web\View;
use esign\craftdynamatesignature\assets\SignatureAsset;

/**
 * DynamateSignature plugin
 *
 * @method static DynamateSignature getInstance()
 */
class DynamateSignature extends Plugin
{
    public string $schemaVersion = '1.0.0';

    public static function config(): array
    {
        return [
            'components' => [
                // Define component configs here...
            ],
        ];
    }

    public function init(): void
    {
        parent::init();

        Craft::$app->onInit(function() {
            $this->_registerTemplateRoots();
        });
    }

    private function _registerTemplateRoots(): void
    {
        Event::on(View::class, View::EVENT_REGISTER_SITE_TEMPLATE_ROOTS, function(RegisterTemplateRootsEvent $event) {
            $event->roots[$this->id] = $this->getBasePath() . DIRECTORY_SEPARATOR . 'templates/';
        });
    }
}
