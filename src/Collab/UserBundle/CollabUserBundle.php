<?php

namespace Collab\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CollabUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
