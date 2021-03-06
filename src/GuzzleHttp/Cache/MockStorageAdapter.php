<?php

/*
 * This file is part of the CsaGuzzleBundle package
 *
 * (c) Charles Sarrazin <charles@sarraz.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 */

namespace Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache;

use Csa\Bundle\GuzzleBundle\Cache\MockStorageAdapter as BaseAdapter;

/**
 * Legacy doctrine adapter.
 *
 * @deprecated This class is deprecated since version 2.1. It will be removed in version 3.0
 */
class MockStorageAdapter extends BaseAdapter implements StorageAdapterInterface
{
}
