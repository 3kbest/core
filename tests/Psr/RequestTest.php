<?php
/**
 * This file is part of Open Swoole.
 *
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace OpenSwoole\Core\Psr7Test\Tests;

use Http\Psr7Test\RequestIntegrationTest;
use OpenSwoole\Core\Psr\Request;

/**
 * @internal
 * @coversNothing
 */
class RequestTest extends RequestIntegrationTest
{
    public function createSubject()
    {
        return new Request('/', 'GET');
    }
}
