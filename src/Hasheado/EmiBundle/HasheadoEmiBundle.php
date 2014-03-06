<?php

namespace Hasheado\EmiBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HasheadoEmiBundle extends Bundle
{
	public function getParent()
    {
        return 'HasheadoBlogBundle';
    }
}
