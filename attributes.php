<?php

#[Attribute]
class UglyAttribute
{
    public function __construct(string $fiz = null, string $biz = null)
    {
    }
}

#[Attribute]
class AnnotationOrSomething
{
    public function __construct(string $test)
    {
    }
}


#[UglyAttribute(biz: 'test')]
class Foo
{
    #[AnnotationOrSomething('lol')]
    public function bar(): int
    {
        return 5;
    }
}

$reflector = new ReflectionClass(Foo::class);

// var_dump($reflector->getAttributes());
// var_dump($reflector->getMethod('bar')->getAttributes());

foreach ($reflector->getAttributes() as $attribute) {
    var_dump($attribute->getTarget(), $attribute->getArguments());
}
