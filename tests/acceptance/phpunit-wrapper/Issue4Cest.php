<?php
namespace { # global namespace

    class Issue4Cest
    {

       /**
        * @dataprovider pageProvider
        */
        public function withProvider(AcceptanceTester $I, \Codeception\Example $example)
        {
            $I->amOnPage($example['url']);
            $I->seeInTitle($example['title']);
        }

        public function failedWithoutProvider(AcceptanceTester $I)
        {
            $I->amOnPage("http://www.bbc.co.uk");
            $I->see('rumplestiltskin', 'h1');
        }

        public function passedWithoutProvider(AcceptanceTester $I)
        {
            $I->amOnPage("http://www.bbc.co.uk");
            $I->see('BBC Homepage', 'h1');
        }

        public function failedAssert(AcceptanceTester $I)
        {
            $I->assertEquals(true, false);
        }

        public function passedAssert(AcceptanceTester $I)
        {
            $I->assertEquals(true, true);
        }

        /**
         * @return array
         */
        protected function pageProvider()
        {
            return [
                [
                    'url'   => "http://www.bbc.co.uk",
                    'title' => "BBC - Home"
                ],
                [
                    'url'   => "http://codeception.com",
                    'title' => "Zebra"
                ],
                [
                    'url'   => "http://www.php.net",
                    'title' => "PHP: Hypertext Preprocessor"
                ],
                [
                    'url'   => "http://www.google.com",
                    'title' => "Google"
                ],

            ];
        }
    }
}
