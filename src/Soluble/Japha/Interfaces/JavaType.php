<?php

declare(strict_types=1);

/*
 * Soluble Japha
 *
 * @link      https://github.com/belgattitude/soluble-japha
 * @copyright Copyright (c) 2013-2019 Vanvelthem Sébastien
 * @license   MIT License https://github.com/belgattitude/soluble-japha/blob/master/LICENSE.md
 */

namespace Soluble\Japha\Interfaces;

interface JavaType
{
    /**
     * Return java object id.
     *
     * @return int
     */
    public function __getJavaInternalObjectId(): int;
}
