<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'api_platform.swagger.action.ui' shared service.

include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Action/SwaggerUiAction.php';

return $this->services['api_platform.swagger.action.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction(${($_ = isset($this->services['api_platform.metadata.resource.name_collection_factory']) ? $this->services['api_platform.metadata.resource.name_collection_factory'] : $this->getApiPlatform_Metadata_Resource_NameCollectionFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.metadata.resource.metadata_factory']) ? $this->services['api_platform.metadata.resource.metadata_factory'] : $this->getApiPlatform_Metadata_Resource_MetadataFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->getSerializerService()) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, '', '', '0.0.0', $this->parameters['api_platform.formats'], false, '', '', 'oauth2', 'application', '/oauth/v2/token', '/oauth/v2/auth', array());
