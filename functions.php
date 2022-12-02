<?php

function checkMail($mail)
{
  $result = false;

  if (str_contains($mail, '@') && str_contains($mail, '.')) {
    return true;
  }

  return $result;
}
