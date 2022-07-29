<?php

// Namespaces


namespace A
{
    const MESSAGE = __NAMESPACE__;

    class A
    {
        public function foo()
        {
            return __METHOD__;
        }
    }

    function foo() 
    {
        return __FUNCTION__;
    }

    function var_dump()
    {
        echo __FUNCTION__;
    }

    // var_dump();
    // \var_dump('Hello!!');

}

namespace A\B
{
    class A 
    {
        public function foo()
        {
            return __METHOD__;
        }
    }
}

namespace
{
    // use A\A;
    // $a = new A();
    // var_dump($a->foo());
    
    // $a = new A\A();
    // var_dump($a->foo());

    use A\A;
    use A\B\A as AB;
    use function A\foo;
    use const A\MESSAGE;

    // $a = new AB();
    // var_dump(foo());
    var_dump(MESSAGE);
}