<?php

namespace Sociomantic;

use Sociomantic\Http\Request;

//$res = new Test();

var_dump(get_included_files());
class Kernel {
    public function __construct(Request $request){
        $this->request = $request;
    }

    public function handle()
    {

    }
}
