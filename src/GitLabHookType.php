<?php


namespace Spartaksun\GitLabHook;


interface GitLabHookType
{
   public const PUSH = 'Push Hook';
   public const TAG_PUSH = 'Tag Push Hook';
   public const ISSUE = 'Issue Hook';

   public const NOTE ='Note Hook';
}
