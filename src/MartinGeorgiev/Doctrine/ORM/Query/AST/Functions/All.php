<?php

namespace MartinGeorgiev\Doctrine\ORM\Query\AST\Functions;

/**
 * Implementation of PostgreSql ALL()
 * @see http://www.postgresql.org/docs/9.4/static/functions-subquery.html#FUNCTIONS-SUBQUERY-ALL
 *
 * @since 0.1
 * @author Martin Georgiev <martin.georgiev@gmail.com>
 */
class All extends AbstractFunction
{
    protected function customiseFunction()
    {
        $this->setFunctionPrototype('ALL(%s)');
        $this->addLiteralMapping('ArithmeticPrimary');
    }
}
