<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Filesystem;

use League\Flysystem\Filesystem;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                Filesystem::class => FilesystemInvoker::class,
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for HyperfFlysystem.',
                    'source' => __DIR__ . '/../publish/file.php',
                    'destination' => BASE_PATH . '/config/autoload/file.php',
                ],
            ],
        ];
    }
}
