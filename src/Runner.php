<?php

declare(strict_types=1);

namespace NunoMaduro\MockFinalClasses;

use DG\BypassFinals;

/**
 * @internal
 */
final class Runner
{
    /**
     * The list of suported frameworks.
     *
     * @var array<int, string>
     */
    private static $frameworks = [
        Frameworks\PhpUnit::class,
    ];

    /**
     * Removes the `final` keyword if a
     * testing framework is running.
     */
    public static function run(): void
    {
        foreach (self::$frameworks as $framework) {
            if ((new $framework())->isRunning()) {
                BypassFinals::enable();
                break;
            }
        }
    }
}
