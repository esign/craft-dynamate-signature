<?php

namespace esign\craftdynamatesignature\tests\unit;

use Craft;
use craft\test\TestCase;
use craft\web\View;
use esign\craftdynamatesignature\DynamateSignature;
use UnitTester;

class SignatureTest extends TestCase
{
    /**
     * @var UnitTester
     */
    protected $tester;

    /**
     * @var DynamateSignature
     */
    protected $plugin;

    public function testCanLoadSignatureTemplate()
    {
        $view = Craft::$app->getView();
        
        // Set site template mode
        $view->setTemplateMode(View::TEMPLATE_MODE_SITE);
        
        // Get the rendered template
        $html = $view->renderTemplate('_dynamate-signature/default');

        // Assert the signature contains expected elements
        $this->tester->assertStringContainsString('Site by Dynamate', $html);
        $this->tester->assertStringContainsString('https://www.dynamate.be/', $html);
    }
} 