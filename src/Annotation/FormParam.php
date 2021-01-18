<?php

namespace Ray\WebContextParam\Annotation;

use Attribute;

/**
 * @Annotation
 * @Target("METHOD")
 */
#[Attribute(Attribute::TARGET_PARAMETER | Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
final class FormParam extends AbstractWebContextParam
{
    const GLOBAL_KEY = '_POST';
}
