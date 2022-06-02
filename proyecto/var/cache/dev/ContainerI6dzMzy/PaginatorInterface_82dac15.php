<?php

namespace ContainerI6dzMzy;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2cb9e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera03b1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdb22a = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        if ($this->valueHolder2cb9e === $returnValue = $this->valueHolder2cb9e->paginate($target, $page, $limit, $options)) {
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

        $instance->initializera03b1 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder2cb9e) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder2cb9e = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, '__get', ['name' => $name], $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        if (isset(self::$publicPropertiesdb22a[$name])) {
            return $this->valueHolder2cb9e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2cb9e;

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

        $targetObject = $this->valueHolder2cb9e;
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
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2cb9e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2cb9e;
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
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, '__isset', array('name' => $name), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2cb9e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2cb9e;
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
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, '__unset', array('name' => $name), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2cb9e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2cb9e;
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
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, '__clone', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        $this->valueHolder2cb9e = clone $this->valueHolder2cb9e;
    }

    public function __sleep()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, '__sleep', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return array('valueHolder2cb9e');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera03b1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera03b1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'initializeProxy', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2cb9e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2cb9e;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
