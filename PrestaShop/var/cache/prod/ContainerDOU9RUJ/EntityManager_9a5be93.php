<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2161c = null;
    private $initializer7dd3e = null;
    private static $publicProperties03fff = [
        
    ];
    public function getConnection()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getConnection', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getMetadataFactory', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getExpressionBuilder', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'beginTransaction', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getCache', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getCache();
    }
    public function transactional($func)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'transactional', array('func' => $func), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'commit', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->commit();
    }
    public function rollback()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'rollback', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getClassMetadata', array('className' => $className), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'createQuery', array('dql' => $dql), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'createNamedQuery', array('name' => $name), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'createQueryBuilder', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'flush', array('entity' => $entity), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'clear', array('entityName' => $entityName), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->clear($entityName);
    }
    public function close()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'close', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->close();
    }
    public function persist($entity)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'persist', array('entity' => $entity), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'remove', array('entity' => $entity), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'refresh', array('entity' => $entity), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'detach', array('entity' => $entity), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'merge', array('entity' => $entity), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'contains', array('entity' => $entity), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getEventManager', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getConfiguration', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'isOpen', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getUnitOfWork', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getProxyFactory', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'initializeObject', array('obj' => $obj), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'getFilters', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'isFiltersStateClean', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'hasFilters', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return $this->valueHolder2161c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer7dd3e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder2161c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2161c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder2161c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, '__get', ['name' => $name], $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        if (isset(self::$publicProperties03fff[$name])) {
            return $this->valueHolder2161c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2161c;
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
        $targetObject = $this->valueHolder2161c;
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
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2161c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2161c;
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
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, '__isset', array('name' => $name), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2161c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2161c;
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
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, '__unset', array('name' => $name), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2161c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2161c;
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
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, '__clone', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        $this->valueHolder2161c = clone $this->valueHolder2161c;
    }
    public function __sleep()
    {
        $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, '__sleep', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
        return array('valueHolder2161c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7dd3e = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7dd3e;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer7dd3e && ($this->initializer7dd3e->__invoke($valueHolder2161c, $this, 'initializeProxy', array(), $this->initializer7dd3e) || 1) && $this->valueHolder2161c = $valueHolder2161c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2161c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2161c;
    }
}
