<?php
session_start();

function isLoggedIn()
{
   if(isset($_SESSION['customer']))
      return true;

   return false;
}

function hasMessage($message_name)
{
   if(isset($_SESSION['messages'][$message_name]))
      return true;

   return false;
}

function getMessage($message_name)
{
   if(isset($_SESSION['messages'][$message_name])) {
      $message = $_SESSION['messages'][$message_name];
      unset($_SESSION['messages'][$message_name]);

      return $message;
   }

   return '';
}