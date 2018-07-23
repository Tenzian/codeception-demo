<?php
namespace Helper;

class Response extends \Codeception\Module
{
    public function code()
    {
        return (integer) $this->getModule('PhpBrowser')->_getResponseCode();
    }

    public function codeIs($code)
    {
        return (boolean) ($this->code() === $code);
    }
}
