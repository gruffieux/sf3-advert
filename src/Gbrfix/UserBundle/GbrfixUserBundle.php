<?php

namespace Gbrfix\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GbrfixUserBundle extends Bundle {
	public function getParent() {
		return 'FOSUserBundle';
	}
}
