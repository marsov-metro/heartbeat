<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\Heartbeat;

use Spryker\Shared\Application\ApplicationConstants;

interface HeartbeatConstants
{
    const YVES_STORAGE_SESSION_REDIS_PROTOCOL = ApplicationConstants::YVES_STORAGE_SESSION_REDIS_PROTOCOL;
    const YVES_STORAGE_SESSION_REDIS_PORT = ApplicationConstants::YVES_STORAGE_SESSION_REDIS_PORT;
    const YVES_STORAGE_SESSION_REDIS_HOST = ApplicationConstants::YVES_STORAGE_SESSION_REDIS_HOST;
    const YVES_STORAGE_SESSION_REDIS_PASSWORD = ApplicationConstants::YVES_STORAGE_SESSION_REDIS_PASSWORD;
    const YVES_STORAGE_SESSION_PERSISTENT_CONNECTION = ApplicationConstants::YVES_STORAGE_SESSION_PERSISTENT_CONNECTION;

    const ZED_STORAGE_SESSION_REDIS_PROTOCOL = ApplicationConstants::ZED_STORAGE_SESSION_REDIS_PROTOCOL;
    const ZED_STORAGE_SESSION_REDIS_PORT = ApplicationConstants::ZED_STORAGE_SESSION_REDIS_PORT;
    const ZED_STORAGE_SESSION_REDIS_HOST = ApplicationConstants::ZED_STORAGE_SESSION_REDIS_HOST;
    const ZED_STORAGE_SESSION_REDIS_PASSWORD = ApplicationConstants::ZED_STORAGE_SESSION_REDIS_PASSWORD;
    const ZED_STORAGE_SESSION_PERSISTENT_CONNECTION = ApplicationConstants::ZED_STORAGE_SESSION_PERSISTENT_CONNECTION;

    const ELASTICA_PARAMETER__HOST = ApplicationConstants::ELASTICA_PARAMETER__HOST;
    const ELASTICA_PARAMETER__TRANSPORT = ApplicationConstants::ELASTICA_PARAMETER__TRANSPORT;
    const ELASTICA_PARAMETER__PORT = ApplicationConstants::ELASTICA_PARAMETER__PORT;
    const ELASTICA_PARAMETER__AUTH_HEADER = ApplicationConstants::ELASTICA_PARAMETER__AUTH_HEADER;
    const ELASTICA_PARAMETER__INDEX_NAME = ApplicationConstants::ELASTICA_PARAMETER__INDEX_NAME;
    const ELASTICA_PARAMETER__DOCUMENT_TYPE = ApplicationConstants::ELASTICA_PARAMETER__DOCUMENT_TYPE;
}