<?php

/**
 * @copyright Copyright 2012-2013 Rackspace US, Inc. 
  See COPYING for licensing information.
 * @license   https://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 * @version   1.5.9
 * @author    Glen Campbell <glen.campbell@rackspace.com>
 * @author    Jamie Hannaford <jamie.hannaford@rackspace.com>
 */

namespace OpenCloud\Common\Http\Message;

use Guzzle\Http\Message\RequestFactory as GuzzleRequestFactory;

/**
 * Description of RequestFactory
 * 
 * @link 
 */
class RequestFactory extends GuzzleRequestFactory
{
    protected $requestClass = 'OpenCloud\\Http\\Message\\Request';
}