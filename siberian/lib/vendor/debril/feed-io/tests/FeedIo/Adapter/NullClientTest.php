<?php
/*
 * This file is part of the feed-io package.
 *
 * (c) Alexandre Debril <alex.debril@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FeedIo\Adapter;

class NullClientTest extends \PHPUnit_Framework_TestCase
{
    public function testGetResponse()
    {
        $client = new NullClient();
        $response = $client->getResponse('', new \DateTime());

        $this->assertInstanceOf('\FeedIo\Adapter\NullResponse', $response);
        $this->assertInstanceOf('\DateTime', $response->getLastModified());
        $this->assertNull($response->getBody());
        $this->assertInternalType('array', $response->getHeaders());
        $this->assertEquals('foo', $response->getHeader('foo'));
    }
}
