<?php

/** @generate-function-entries */

interface FileSystem extends IO {}

interface Network extends IO {}

/* Should use more specialized ones instead but for PoC will use this instead */
class FileSystemError extends Exception implements FileSystem {}

class InsufficientPermissions extends Exception implements FileSystem {}

class TemporaryFailure extends Exception implements Network {}
