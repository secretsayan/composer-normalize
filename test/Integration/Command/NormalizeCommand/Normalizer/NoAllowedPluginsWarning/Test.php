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

use Composer\Console\Application;
use Composer\Factory;
use Ergebnis\Composer\Normalize\Command\NormalizeCommand;
use Ergebnis\Composer\Normalize\Exception\Exception;
use Ergebnis\Composer\Normalize\NormalizePlugin;
use Ergebnis\Composer\Normalize\Test\Integration;
use Ergebnis\Composer\Normalize\Test\Util;
use Ergebnis\Json\Normalizer;
use Ergebnis\Json\Printer;
use Localheinz\Diff;
use Symfony\Component\Console;
use Symfony\Component\Console\Tester\CommandTester;

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
        $plugin = new NormalizePlugin();
        $command = $plugin->getCommands();
        $normalizeCommand = reset($command);

        $application = new Application();
        $application->add($normalizeCommand);

        $command = $application->find('normalize');
        $tester = new CommandTester($command);

        $inputs = [
            'yes'
        ];
        $tester->setInputs($inputs);
        $tester->execute([
            'file' => [
                __DIR__ . '/fixture/subject/composer.json'
            ],
            '--working-dir' => __DIR__ . '/fixture/actor',
        ]);

        $statusCode = $tester->getStatusCode();

        self::assertEquals(1, $statusCode);
    }
}
