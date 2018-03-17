<?php
require_once "vendor/autoload.php";
try {
    $path = __DIR__ . "/" . $argv[1];
    putenv("GOOGLE_APPLICATION_CREDENTIALS=${path}");
    $storage = new \Google\Cloud\Storage\StorageClient();
    $bucket = $storage->bucket($argv[2]);
    $object = $bucket->object($argv[3]);
    return $object->signedUrl(time() + 180);
} catch (Exception $e) {
    /** @noinspection PhpUnhandledExceptionInspection */
    throw $e;
}