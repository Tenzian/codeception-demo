<?php
namespace { # global namespace

    class Issue4672Cest
    {

       /**
        * @dataprovider pageProvider
        */
        public function staticPages(AcceptanceTester $I, \Codeception\Example $example)
        {
            $I->amOnPage($example['url']);
            $I->see($example['title'], 'h1');
            $I->seeInTitle($example['title']);
        }

        /**
         * @return array
         */
        protected function pageProvider()
        {
            return [
                [
                    'url'   => "http://www.google.com",
                    'title' => "Giraffe"
                ],
                [
                    'url'   => "http://www.php.net",
                    'title' => "Elephant"
                ],
                [
                    'url'   => "http://codeception.com",
                    'title' => "Zebra"
                ]
            ];
        }
    }
}
