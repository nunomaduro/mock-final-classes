<?php

declare(strict_types=1);

namespace NunoMaduro\MockFinalClasses\Frameworks;

use NunoMaduro\MockFinalClasses\Contracts\Framework;

/**
 * @internal
 */
final class Pest implements Framework
{
    public function isRunning(): bool
    {
        return PHP_SAPI === 'cli'
            && strpos($_SERVER['argv'][0], 'pest') !== false;
    }
}
