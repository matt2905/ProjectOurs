<?php

namespace Ours\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OursUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
