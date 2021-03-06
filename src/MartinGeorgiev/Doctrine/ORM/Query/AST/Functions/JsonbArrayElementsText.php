<?php

namespace MartinGeorgiev\Doctrine\ORM\Query\AST\Functions;

/**
 * Implementation of PostgreSql JSONB_ARRAY_ELEMENTS_TEXT()
 * @see http://www.postgresql.org/docs/9.4/static/functions-json.html
 *
 * @since 0.1
 * @author Martin Georgiev <martin.georgiev@gmail.com>
 */
class JsonbArrayElementsText extends AbstractFunction
{
    protected function customiseFunction()
    {
        $this->setFunctionPrototype('jsonb_array_elements_text(%s)');
        $this->addLiteralMapping('StringPrimary');
    }
}