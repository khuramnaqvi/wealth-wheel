<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PurchaseCogNotification extends Notification
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
        // dd($this->arr);

        $cog_no = $this->arr['cog_no'];
        $date = $this->arr['date'];
        $amount = $this->arr['amount'];
        $payment = $this->arr['payment'];
        // dd($cog_no,$date,$amount,$payment);
        return (new MailMessage)
            ->subject('Cog Order Confirmation')
            // ->view( 'email.cog_purchase', ['wheel_number' => $wheel_number]);
            ->view( 'email.cog_purchase', ['cog_no' => $cog_no,'date' => $date,'amount' => $amount,'payment' => $payment]);
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
