<?php
require_once "vendor/autoload.php";
try {
    $storage = new \Google\Cloud\Storage\StorageClient(['keyFilePath' => __DIR__ . "/" . $argv[1]]);
    $bucket = $storage->bucket($argv[2]);
    $object = $bucket->object($argv[3]);
    return $object->signedUrl(time() + 180);
} catch (Exception $e) {
    /** @noinspection PhpUnhandledExceptionInspection */
    throw $e;
}