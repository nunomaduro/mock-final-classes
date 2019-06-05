<?php

declare(strict_types=1);

namespace NunoMaduro\MockFinalClasses\Contracts;

/**
 * @internal
 */
interface Framework
{
    /**
     * Determines if the framework is running.
     */
    public function isRunning(): bool;
}
