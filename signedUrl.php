<?php
require_once "vendor/autoload.php";
try {
    $path = __DIR__ . "/gcp_testuser_credentials.json";
    putenv("GOOGLE_APPLICATION_CREDENTIALS=${path}");
    $storage = new \Google\Cloud\Storage\StorageClient();
    $bucket = $storage->bucket("bucketName");
    $object = $bucket->object("object.jpg");
    return $object->signedUrl(time() + 180);
} catch (Exception $e) {
    /** @noinspection PhpUnhandledExceptionInspection */
    throw $e;
}