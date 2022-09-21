<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WealthWheelClose extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(array $arr)
    {
        //
        $this->arr = $arr;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $wheel_name = $this->arr['wheel_name'];

        return (new MailMessage)
                    ->subject("Wealth Wheel $wheel_name Closed")
                    ->line("This email is to notify you that the owner of Wealth Wheel $wheel_name has closed 
                    the wheel, therefore it will no longer be available to join.")
                    ->line('If you have a cog purchase in this wheel that is pending payout, your 
                    purchase amount has been returned to your wallet, accessible in your My 
                    Account, where you can use it to join another wheel or withdraw it.')
                    ->line('We look forward to you continuing to generate profit, either by joining 
                    other wheels or creating a wheel of your own.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
