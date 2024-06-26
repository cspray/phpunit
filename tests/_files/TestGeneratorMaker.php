<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestFixture;

final class TestGeneratorMaker
{
    public function create($array = [])
    {
        foreach ($array as $key => $value) {
            yield $key => $value;
        }
    }
}
