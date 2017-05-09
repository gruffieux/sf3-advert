<?php
namespace Gbrfix\PlatformBundle\Service;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;

class JsonParamConverter implements ParamConverterInterface {
	public function supports(ParamConverter $configuration) {
		if ($configuration->getName() !== 'json') {
			return false;
		}
		
		return true;
	}
	
	public function apply(Request $request, ParamConverter $configuration) {
		// On récup la valeur actuelle de l'attribut
		$json = $request->attributes->get('json');
		
		// On effectue notre action: le décoder
		$json = json_decode($json, true);
		
		// On met à jour la nouvelle valeur de l'attribut
		$request->attributes->set('json', $json);
	}
}