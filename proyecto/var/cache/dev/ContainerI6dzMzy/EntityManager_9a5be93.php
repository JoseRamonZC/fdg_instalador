<?php

namespace ContainerI6dzMzy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getConnection', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getMetadataFactory', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getExpressionBuilder', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'beginTransaction', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getCache', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getCache();
    }

    public function transactional($func)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'transactional', array('func' => $func), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'wrapInTransaction', array('func' => $func), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'commit', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->commit();
    }

    public function rollback()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'rollback', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getClassMetadata', array('className' => $className), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'createQuery', array('dql' => $dql), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'createNamedQuery', array('name' => $name), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'createQueryBuilder', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'flush', array('entity' => $entity), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'clear', array('entityName' => $entityName), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->clear($entityName);
    }

    public function close()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'close', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->close();
    }

    public function persist($entity)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'persist', array('entity' => $entity), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'remove', array('entity' => $entity), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'refresh', array('entity' => $entity), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'detach', array('entity' => $entity), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'merge', array('entity' => $entity), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getRepository', array('entityName' => $entityName), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'contains', array('entity' => $entity), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getEventManager', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getConfiguration', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'isOpen', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getUnitOfWork', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getProxyFactory', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'initializeObject', array('obj' => $obj), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'getFilters', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'isFiltersStateClean', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, 'hasFilters', array(), $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        return $this->valueHolder2cb9e->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera03b1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2cb9e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2cb9e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2cb9e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera03b1 && ($this->initializera03b1->__invoke($valueHolder2cb9e, $this, '__get', ['name' => $name], $this->initializera03b1) || 1) && $this->valueHolder2cb9e = $valueHolder2cb9e;

        if (isset(self::$publicPropertiesdb22a[$name])) {
            return $this->valueHolder2cb9e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
