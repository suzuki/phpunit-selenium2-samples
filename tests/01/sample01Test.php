<?php

class sample01Test extends PHPUnit_Extensions_Selenium2TestCase
{

    public function setUp()
    {
        $targetUrl = 'http://phpunit-selenium2-samples.herokuapp.com/01/';

        $this->setHost('172.16.25.131');  // Selenium Server Host
        $this->setPort(4444);             // Selenium Server Port
        $this->setBrowser('firefox');     // firefox, chrome, iexplorer, safari
        $this->setBrowserUrl($targetUrl);
    }

    public function testTitle()
    {
        $this->url('/index.php');
        $this->assertEquals('Sample 01', $this->title());
    }

    public function testForm()
    {
        $this->url('/index.php');

        // in index.php

        // set Name
        $element = $this->byId('inputName'); // like getElementById()
        $element->value('suzuki');

        // set Email
        $this->byName('data[email]')->value('suzuki@example.com'); // method chaining

        // select Fruits
        $this->select($this->byId('inputFruits'))->selectOptionByLabel('Orange');

        // click City checkbox
        $this->byId('inputCitySapporo')->click();

        // click Number radio
        $this->byId('inputNumberEven')->click();

        // submit form
        $this->byCssSelector('button.btn-primary')->click(); // like CSS, use class
        //$this->byCssSelector('button#btnSubmit')->click(); // like CSS, use id

        // in receive.php

        // Name
        $element = $this->byId('resultName');
        $innerText = $element->text();
        $this->assertEquals('suzuki', $innerText);

        // Email
        $innerText = $this->byId('resultEmail')->text();
        $this->assertEquals('suzuki@example.com', $innerText);

        // Fruits
        $this->assertEquals('orange', $this->byId('resultFruits')->text());

        // City
        $this->assertEquals('sapporo', $this->byId('resultCity')->text());

        // Number
        $this->assertEquals('even', $this->byId('resultNumber')->text());
    }
}
