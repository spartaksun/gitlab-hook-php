<?php

//var_export(date_parse('2012-01-03T23:36:29+02:00'));
//die;

use Spartaksun\GitLabHook\Entity\CodeSnippetComment;
use Spartaksun\GitLabHook\GitLabHook;

require __DIR__ . '/vendor/autoload.php';

$data = file_get_contents(__DIR__ . "/test/data/pipeline.json");

$hook = new GitLabHook('12345');
/** @var CodeSnippetComment $result */
$result = $hook->process('12345', '', $data);

//var_export($result);
$a = '';
