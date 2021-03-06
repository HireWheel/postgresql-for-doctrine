<?php

namespace MartinGeorgiev\Doctrine\ORM\Query\AST\Functions;

/**
 * Implementation of PostgreSql text search matching (using @@)
 * @see http://www.postgresql.org/docs/9.4/static/textsearch-controls.html
 *
 * @since 0.1
 * @author Martin Georgiev <martin.georgiev@gmail.com>
 */
class Tsmatch extends AbstractFunction
{
    protected function customiseFunction()
    {
        $this->setFunctionPrototype('(%s @@ %s)');
        $this->addLiteralMapping('StringPrimary');
        $this->addLiteralMapping('StringPrimary');
    }
}