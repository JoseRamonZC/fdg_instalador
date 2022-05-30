<?php

namespace ContainerU06nP1J;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4e3d8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc434d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbd9d4 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        if ($this->valueHolder4e3d8 === $returnValue = $this->valueHolder4e3d8->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializerc434d = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder4e3d8) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder4e3d8 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, '__get', ['name' => $name], $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        if (isset(self::$publicPropertiesbd9d4[$name])) {
            return $this->valueHolder4e3d8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4e3d8;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4e3d8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4e3d8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4e3d8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, '__isset', array('name' => $name), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4e3d8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4e3d8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, '__unset', array('name' => $name), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4e3d8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4e3d8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, '__clone', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        $this->valueHolder4e3d8 = clone $this->valueHolder4e3d8;
    }

    public function __sleep()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, '__sleep', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return array('valueHolder4e3d8');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc434d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc434d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'initializeProxy', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4e3d8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4e3d8;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
