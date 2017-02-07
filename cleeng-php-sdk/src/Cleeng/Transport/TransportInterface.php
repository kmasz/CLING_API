<?php
/**
 * Cleeng PHP SDK (http://cleeng.com)
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * @link    https://github.com/Cleeng/cleeng-php-sdk for the canonical source repository
 * @package Cleeng_PHP_SDK
 */

interface Cleeng_Transport_TransportInterface
{
    /**
     * Send data to Cleeng API endpoint and return resulting string
     *
     * @param $url
     * @param $data
     * @return string
     */
    public function call($url, $data);
}
