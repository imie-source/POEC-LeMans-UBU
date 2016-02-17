<?php

namespace Jarry\UbuBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JarryUbuBundle extends Bundle
{
    public function getParent(){
        return 'SonataUserBundle';
    }
}
