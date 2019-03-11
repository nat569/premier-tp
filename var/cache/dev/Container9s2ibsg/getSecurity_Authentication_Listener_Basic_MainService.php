<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.basic.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/BasicAuthenticationListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/EntryPoint/BasicAuthenticationEntryPoint.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Session/SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Session/SessionAuthenticationStrategy.php';

$this->services['security.authentication.listener.basic.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\BasicAuthenticationListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, 'main', ${($_ = isset($this->services['security.authentication.basic_entry_point.main']) ? $this->services['security.authentication.basic_entry_point.main'] : ($this->services['security.authentication.basic_entry_point.main'] = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area'))) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : ($this->services['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())) && false ?: '_'});

$instance->setSessionAuthenticationStrategy(${($_ = isset($this->services['security.authentication.session_strategy.main']) ? $this->services['security.authentication.session_strategy.main'] : ($this->services['security.authentication.session_strategy.main'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))) && false ?: '_'});

return $instance;
