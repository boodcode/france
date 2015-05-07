<?php

namespace Boodcode\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BoodcodeUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
