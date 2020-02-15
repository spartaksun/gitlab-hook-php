# Gitlab webhook handler
Framework agnostic handling GitLab project hooks

Install:
`
composer require spartaksun/gitlab-hook-php
`

Usage:
```php
<?php

use Spartaksun\GitLabHook\Entity\CodeSnippetComment;
use Spartaksun\GitLabHook\GitLabHook;

require 'vendor/autoload.php';

$key = 'your_secret_key';
$hook = new GitLabHook($key);

/** @var $requestBody string  */
/** @var CodeSnippetComment $result */
$result = $hook->process($key, $requestBody);
```

[![Build Status](https://travis-ci.org/spartaksun/gitlab-hook-php.svg?branch=master)](https://travis-ci.org/spartaksun/gitlab-hook-php)
