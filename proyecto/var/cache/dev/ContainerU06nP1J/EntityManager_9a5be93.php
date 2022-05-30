<?php

namespace ContainerU06nP1J;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getConnection', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getMetadataFactory', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getExpressionBuilder', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'beginTransaction', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getCache', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'transactional', array('func' => $func), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'commit', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->commit();
    }

    public function rollback()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'rollback', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getClassMetadata', array('className' => $className), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'createQuery', array('dql' => $dql), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'createNamedQuery', array('name' => $name), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'createQueryBuilder', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'flush', array('entity' => $entity), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'clear', array('entityName' => $entityName), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->clear($entityName);
    }

    public function close()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'close', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->close();
    }

    public function persist($entity)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'persist', array('entity' => $entity), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'remove', array('entity' => $entity), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'refresh', array('entity' => $entity), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'detach', array('entity' => $entity), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'merge', array('entity' => $entity), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'contains', array('entity' => $entity), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getEventManager', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getConfiguration', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'isOpen', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getUnitOfWork', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getProxyFactory', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'initializeObject', array('obj' => $obj), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'getFilters', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'isFiltersStateClean', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, 'hasFilters', array(), $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        return $this->valueHolder4e3d8->hasFilters();
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

        $instance->initializerc434d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4e3d8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4e3d8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4e3d8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc434d && ($this->initializerc434d->__invoke($valueHolder4e3d8, $this, '__get', ['name' => $name], $this->initializerc434d) || 1) && $this->valueHolder4e3d8 = $valueHolder4e3d8;

        if (isset(self::$publicPropertiesbd9d4[$name])) {
            return $this->valueHolder4e3d8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
