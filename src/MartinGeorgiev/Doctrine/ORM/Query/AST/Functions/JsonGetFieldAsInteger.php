<?php

namespace MartinGeorgiev\Doctrine\ORM\Query\AST\Functions;

/**
 * Implementation of PostgreSql json field retrival as integer, filtered by key (using ->> and type casting to BIGINT)
 * @see http://www.postgresql.org/docs/9.4/static/functions-json.html
 *
 * @since 0.3
 * @author Martin Georgiev <martin.georgiev@gmail.com>
 */
class JsonGetFieldAsInteger extends AbstractFunction
{
    protected function customiseFunction()
    {
        $this->setFunctionPrototype('CAST(%s ->> %s as BIGINT)');
        $this->addLiteralMapping('StringPrimary');
        $this->addLiteralMapping('StringPrimary');
    }
}