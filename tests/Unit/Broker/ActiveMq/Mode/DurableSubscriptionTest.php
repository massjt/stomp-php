<?php
/*
 * This file is part of the Stomp package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Stomp\Tests\Unit\Broker\ActiveMq\Mode;

use PHPUnit\Framework\TestCase;
use Stomp\Broker\ActiveMq\Mode\DurableSubscription;
use Stomp\Client;
use Stomp\Exception\StompException;

/**
 * DurableSubscriptionTest
 *
 * @package Stomp\Tests\Unit\Broker\ActiveMq\Mode
 * @author Jens Radtke <swefl.oss@fin-sn.de>
 */
class DurableSubscriptionTest extends TestCase
{
    public function testDurableSubscriptionIsOnlyPossibleWithClientId()
    {
        $this->expectException(StompException::class);

        new DurableSubscription(new Client('tcp://127.0.0.1'), 'destination');
    }
}
