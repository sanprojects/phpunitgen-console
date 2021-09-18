<?php

declare(strict_types=1);

namespace PhpUnitGen\Console\Files;

use PhpUnitGen\Console\Contracts\Files\Filesystem;
use PhpUnitGen\Console\Contracts\Files\TargetResolver as TargetResolverContract;
use PhpUnitGen\Core\Contracts\Generators\Factories\ClassFactory;
use PhpUnitGen\Core\Helpers\Str;

/**
 * Class TargetResolver.
 *
 * @author  Paul Thébaud <paul.thebaud29@gmail.com>
 * @author  Killian Hascoët <killianh@live.fr>
 * @license MIT
 */
class TargetResolver implements TargetResolverContract
{
    /**
     * @var Filesystem
     */
    protected $filesystem;

    /**
     * TargetResolver constructor.
     *
     * @param Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function getTestFileName($sourcePath): string
    {
        $path =  preg_replace('#/modules/(.+?)/#', '/modules/$1/Tests/', $sourcePath);

        return Str::replaceLast('.php', 'Test.php', $path);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(ClassFactory $classFactory, string $sourcePath, string $targetPath): string
    {
        if (true) {
            return $this->getTestFileName($sourcePath);
        }

        if ($targetPath === 'tests' && $classFactory->getTestSubNamespace() !== '') {
            $targetPath .= '/'.str_replace('\\', '/', $classFactory->getTestSubNamespace());
        }

        $targetPath = preg_replace('/\/+/', '/', $targetPath.'/');

        $compiledPath = Str::replaceFirst($this->filesystem->getRoot(), '', $sourcePath);
        $compiledPath = $targetPath.Str::afterFirst('/', $compiledPath);

        return Str::replaceLast('.php', 'Test.php', $compiledPath);
    }
}
