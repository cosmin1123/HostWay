--TEST--
PHPUnit_Framework_MockObject_Generator::generate('Foo', array(), 'MockFoo', TRUE, TRUE, TRUE)
--FILE--
<?php
class Foo
{
    public static function bar(Foo $foo)
    {
    }

    public static function baz(Foo $foo)
    {
    }
}

require_once 'PHPUnit/Autoload.php';
require_once 'Text/Template.php';

$mock = PHPUnit_Framework_MockObject_Generator::generate(
  'Foo',
  array(),
  'MockFoo',
  TRUE,
  TRUE,
  TRUE
);

print $mock['code'];
?>
--EXPECTF--
class MockFoo extends Foo implements PHPUnit_Framework_MockObject_MockObject
{
    private static $__phpunit_staticInvocationMocker;
    private $__phpunit_invocationMocker;
    private $__phpunit_id;
    private static $__phpunit_nextId = 0;

    public function __clone()
    {
        $this->__phpunit_invocationMocker = clone $this->__phpunit_getInvocationMocker();
        $this->__phpunit_setId();
    }

    public static function bar(Foo $foo)
    {
        $arguments = array($foo);
        $count     = func_num_args();

        if ($count > 1) {
            $_arguments = func_get_args();

            for ($i = 1; $i < $count; $i++) {
                $arguments[] = $_arguments[$i];
            }
        }

        $result = self::__phpunit_getStaticInvocationMocker()->invoke(
          new PHPUnit_Framework_MockObject_Invocation_Static(
            'Foo', 'bar', $arguments, TRUE
          )
        );

        return $result;
    }

    public static function baz(Foo $foo)
    {
        $arguments = array($foo);
        $count     = func_num_args();

        if ($count > 1) {
            $_arguments = func_get_args();

            for ($i = 1; $i < $count; $i++) {
                $arguments[] = $_arguments[$i];
            }
        }

        $result = self::__phpunit_getStaticInvocationMocker()->invoke(
          new PHPUnit_Framework_MockObject_Invocation_Static(
            'Foo', 'baz', $arguments, TRUE
          )
        );

        return $result;
    }

    public function expects(PHPUnit_Framework_MockObject_Matcher_Invocation $matcher)
    {
        return $this->__phpunit_getInvocationMocker()->expects($matcher);
    }

    public static function staticExpects(PHPUnit_Framework_MockObject_Matcher_Invocation $matcher)
    {
        return self::__phpunit_getStaticInvocationMocker()->expects($matcher);
    }

    public function __phpunit_getInvocationMocker()
    {
        if ($this->__phpunit_invocationMocker === NULL) {
            $this->__phpunit_invocationMocker = new PHPUnit_Framework_MockObject_InvocationMocker;
        }

        return $this->__phpunit_invocationMocker;
    }

    public static function __phpunit_getStaticInvocationMocker()
    {
        if (self::$__phpunit_staticInvocationMocker === NULL) {
            self::$__phpunit_staticInvocationMocker = new PHPUnit_Framework_MockObject_InvocationMocker;
        }

        return self::$__phpunit_staticInvocationMocker;
    }

    public function __phpunit_hasMatchers()
    {
        return self::__phpunit_getStaticInvocationMocker()->hasMatchers() ||
               $this->__phpunit_getInvocationMocker()->hasMatchers();
    }

    public function __phpunit_verify()
    {
        self::__phpunit_getStaticInvocationMocker()->verify();
        $this->__phpunit_getInvocationMocker()->verify();
    }

    public function __phpunit_cleanup()
    {
        self::$__phpunit_staticInvocationMocker = NULL;
        $this->__phpunit_invocationMocker       = NULL;
        $this->__phpunit_id                     = NULL;
    }

    public function __phpunit_setId()
    {
        $this->__phpunit_id = sprintf('%s#%s', get_class($this), self::$__phpunit_nextId++);
    }
}
