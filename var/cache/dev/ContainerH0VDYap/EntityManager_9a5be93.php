<?php

namespace ContainerH0VDYap;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaf023 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera2e74 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbac17 = [
        
    ];

    public function getConnection()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getConnection', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getMetadataFactory', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getExpressionBuilder', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'beginTransaction', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getCache', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getCache();
    }

    public function transactional($func)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'transactional', array('func' => $func), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'wrapInTransaction', array('func' => $func), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'commit', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->commit();
    }

    public function rollback()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'rollback', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getClassMetadata', array('className' => $className), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'createQuery', array('dql' => $dql), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'createNamedQuery', array('name' => $name), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'createQueryBuilder', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'flush', array('entity' => $entity), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'clear', array('entityName' => $entityName), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->clear($entityName);
    }

    public function close()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'close', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->close();
    }

    public function persist($entity)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'persist', array('entity' => $entity), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'remove', array('entity' => $entity), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'refresh', array('entity' => $entity), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'detach', array('entity' => $entity), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'merge', array('entity' => $entity), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getRepository', array('entityName' => $entityName), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'contains', array('entity' => $entity), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getEventManager', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getConfiguration', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'isOpen', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getUnitOfWork', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getProxyFactory', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'initializeObject', array('obj' => $obj), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'getFilters', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'isFiltersStateClean', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'hasFilters', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return $this->valueHolderaf023->hasFilters();
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

        $instance->initializera2e74 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderaf023) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaf023 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaf023->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, '__get', ['name' => $name], $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        if (isset(self::$publicPropertiesbac17[$name])) {
            return $this->valueHolderaf023->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf023;

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

        $targetObject = $this->valueHolderaf023;
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
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf023;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaf023;
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
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, '__isset', array('name' => $name), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf023;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaf023;
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
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, '__unset', array('name' => $name), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf023;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaf023;
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
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, '__clone', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        $this->valueHolderaf023 = clone $this->valueHolderaf023;
    }

    public function __sleep()
    {
        $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, '__sleep', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;

        return array('valueHolderaf023');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera2e74 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera2e74;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera2e74 && ($this->initializera2e74->__invoke($valueHolderaf023, $this, 'initializeProxy', array(), $this->initializera2e74) || 1) && $this->valueHolderaf023 = $valueHolderaf023;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaf023;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaf023;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
