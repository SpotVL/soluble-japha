<?php

declare(strict_types=1);

/*
 * Soluble Japha
 *
 * @link      https://github.com/belgattitude/soluble-japha
 * @copyright Copyright (c) 2013-2019 Vanvelthem Sébastien
 * @license   MIT License https://github.com/belgattitude/soluble-japha/blob/master/LICENSE.md
 */

namespace Soluble\Japha\Util\Exception;

use Soluble\Japha\Bridge\Exception\ExceptionInterface;
use Soluble\Japha\Bridge\Exception\RuntimeException as RE;

class UnsupportedTzException extends RE implements ExceptionInterface
{
}
