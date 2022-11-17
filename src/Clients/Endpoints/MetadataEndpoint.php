<?php namespace Digiom\ApiMoySklad\Clients\Endpoints;

use RuntimeException;
use Digiom\ApiMoySklad\Clients\EntityClientBase;
use Digiom\ApiMoySklad\Utils\HttpRequestExecutor;

/**
 * Trait MetadataEndpoint
 *
 * @package Digiom\ApiMoySklad\Clients\Endpoints
 */
trait MetadataEndpoint
{
	/**
	 * @return mixed
	 * @throws RuntimeException
	 */
	public function metadata()
	{
		if(get_parent_class($this) !== EntityClientBase::class)
		{
			throw new RuntimeException('The trait cannot be used outside the EntityClientBase class');
		}

		return HttpRequestExecutor::path($this->api(), $this->path() . 'metadata')->get($this->metaEntityClass());
	}
}
