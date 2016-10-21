<?php
namespace Cadre\CliAdr;

use Aura\Cli\Context;
use Aura\Cli\Stdio;

class Input
{
    public function __invoke(Context $context, Stdio $stdio)
    {
        $getopt = $context->getOpt(['h,help', 'v,verbose']);
        return [$getopt->get()];
    }
}