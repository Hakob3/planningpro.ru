<?php

namespace ContainerTKP7EhH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera130d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerefd0f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese71d4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getConnection', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getMetadataFactory', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getExpressionBuilder', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'beginTransaction', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getCache', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'transactional', array('func' => $func), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'commit', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->commit();
    }

    public function rollback()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'rollback', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getClassMetadata', array('className' => $className), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'createQuery', array('dql' => $dql), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'createNamedQuery', array('name' => $name), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'createQueryBuilder', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'flush', array('entity' => $entity), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'clear', array('entityName' => $entityName), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->clear($entityName);
    }

    public function close()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'close', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->close();
    }

    public function persist($entity)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'persist', array('entity' => $entity), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'remove', array('entity' => $entity), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'refresh', array('entity' => $entity), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'detach', array('entity' => $entity), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'merge', array('entity' => $entity), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'contains', array('entity' => $entity), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getEventManager', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getConfiguration', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'isOpen', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getUnitOfWork', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getProxyFactory', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'initializeObject', array('obj' => $obj), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'getFilters', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'isFiltersStateClean', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'hasFilters', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return $this->valueHoldera130d->hasFilters();
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

        $instance->initializerefd0f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera130d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera130d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera130d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, '__get', ['name' => $name], $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        if (isset(self::$publicPropertiese71d4[$name])) {
            return $this->valueHoldera130d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera130d;

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

        $targetObject = $this->valueHoldera130d;
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
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera130d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera130d;
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
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, '__isset', array('name' => $name), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera130d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera130d;
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
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, '__unset', array('name' => $name), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera130d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera130d;
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
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, '__clone', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        $this->valueHoldera130d = clone $this->valueHoldera130d;
    }

    public function __sleep()
    {
        $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, '__sleep', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;

        return array('valueHoldera130d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerefd0f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerefd0f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerefd0f && ($this->initializerefd0f->__invoke($valueHoldera130d, $this, 'initializeProxy', array(), $this->initializerefd0f) || 1) && $this->valueHoldera130d = $valueHoldera130d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera130d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera130d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
