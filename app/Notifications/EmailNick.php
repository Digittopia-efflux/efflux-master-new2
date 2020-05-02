<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailNick extends Notification {
 use Queueable;
 public function __construct() {
  //
 }
 public function via($notifiable) {
  return ['mail'];
 }
 public function toMail($notifiable) {
  return (new MailMessage)
   ->line('The introduction to the notification.')
   ->action('Notification Action', url('/'))
   ->line('Thank you for using our application!');
 }
 public function toArray($notifiable) {
  return [
   //
  ];
 }
}