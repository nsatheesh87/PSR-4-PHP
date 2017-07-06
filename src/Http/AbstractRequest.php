<?php

namespace Sociomantic\Http;

abstract class AbstractRequest() {

    public function getMethod()
    {
            return $_SERVER['REQUEST_METHOD'];
    }

}
