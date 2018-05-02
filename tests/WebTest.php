<?php

namespace Tests;

use App\Tests\Functional\BaseWebTest;
use Facebook\WebDriver\WebDriverBy;

class WebTest extends BaseWebTest
{
    public function testTitle()
    {
        $this->webDriver->get('https://google.com');
        $this->webDriver->takeScreenshot('google.jpg');

        $this->assertContains('Google', $this->webDriver->getTitle());
        $this->assertEquals('', $this->webDriver->findElement(WebDriverBy::id('cst'))->getText());
    }
}
