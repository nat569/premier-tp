<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.swagger.command.swagger_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Command/SwaggerCommand.php';

return $this->services['api_platform.swagger.command.swagger_command'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\SwaggerCommand(${($_ = isset($this->services['api_platform.swagger.normalizer.api_gateway']) ? $this->services['api_platform.swagger.normalizer.api_gateway'] : $this->getApiPlatform_Swagger_Normalizer_ApiGatewayService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.metadata.resource.name_collection_factory']) ? $this->services['api_platform.metadata.resource.name_collection_factory'] : $this->getApiPlatform_Metadata_Resource_NameCollectionFactoryService()) && false ?: '_'}, '', '', '0.0.0', $this->parameters['api_platform.formats']);
