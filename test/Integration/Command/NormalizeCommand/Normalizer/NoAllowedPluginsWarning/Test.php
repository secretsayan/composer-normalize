<?php

declare(strict_types=1);

/**
 * Copyright (c) 2018-2022 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/composer-normalize
 */

namespace Ergebnis\Composer\Normalize\Test\Integration\Command\NormalizeCommand\Normalizer\NoAllowedPluginsWarning;

use Ergebnis\Composer\Normalize\NormalizePlugin;
use Ergebnis\Composer\Normalize\Test\Integration;
use Ergebnis\Composer\Normalize\Test\Util\CommandInvocation;
use Symfony\Component\Console;

/**
 * @internal
 *
 * @covers \Ergebnis\Composer\Normalize\Command\NormalizeCommand
 * @covers \Ergebnis\Composer\Normalize\NormalizePlugin
 *
 * @uses   \Ergebnis\Composer\Normalize\Version
 */
final class Test extends Integration\Command\NormalizeCommand\AbstractTestCase
{
    public function testDoesNotWarnAboutAllowedPluginsWhenNormalizerRunsInOtherDirectory(): void
    {
        $scenario = self::createScenario(
            CommandInvocation::usingFileArgument(),
            __DIR__ . '/fixture/subject/',
        );

        $initialState = $scenario->initialState();

        self::assertComposerJsonFileExists($initialState);

        $plugin = new NormalizePlugin();
        $command = $plugin->getCommands();
        $normalizeCommand = reset($command);

        $application = self::createApplication($normalizeCommand);

        $input = new Console\Input\ArrayInput($scenario->consoleParametersWith([
            '--working-dir' => __DIR__ . '/fixture/actor',
            '-n'
        ]));

        $output = new Console\Output\BufferedOutput();

        $exitCode = $application->run(
            $input,
            $output
        );

        self::assertStringNotContainsString("which is blocked by your allow-plugins config",
        $output->fetch());

        self::assertExitCodeSame(0, $exitCode);
    }
}
