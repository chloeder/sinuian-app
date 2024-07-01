<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailNotification extends Notification
{
  use Queueable;
  protected $record;
  /**
   * Create a new notification instance.
   */
  public function __construct($record)
  {
    $this->record = $record;
  }

  /**
   * Get the notification's delivery channels.
   *
   * @return array<int, string>
   */
  public function via(object $notifiable): array
  {
    return ['mail'];
  }

  /**
   * Get the mail representation of the notification.
   */
  public function toMail(object $notifiable): MailMessage
  {
    if ($this->record->status == 'Pending') {
      return (new MailMessage)
        ->greeting('Halo!' . " " . $this->record->nama)
        ->subject('Notifikasi Surat Menyurat')
        ->line('Ada surat menyurat baru yang perlu ditindaklanjuti.')
        ->line('Nama: ' . $this->record->nama)
        ->line('NIK: ' . $this->record->nik)
        ->line('Jenis Surat: ' . $this->record->jenis_surat)
        ->line('Status: ' . $this->record->status)
        ->line('Berkas anda telah kami terima, mohon menunggu untuk proses selanjutnya. Terima kasih.');
    } else {
      return (new MailMessage)
        ->greeting('Halo!' . " " . $this->record->nama)
        ->subject('Notifikasi Surat Menyurat')
        ->line('Ada surat menyurat baru yang perlu ditindaklanjuti.')
        ->line('Nama: ' . $this->record->nama)
        ->line('NIK: ' . $this->record->nik)
        ->line('Jenis Surat: ' . $this->record->jenis_surat)
        ->line('Status: ' . $this->record->status)
        ->line('Berkas anda berhasil diproses, silahkan cek email anda untuk melihat hasilnya. Terima kasih.')
        ->attach(public_path('/storage/' . $this->record->file));
    }
  }

  /**
   * Get the array representation of the notification.
   *
   * @return array<string, mixed>
   */
  public function toArray(object $notifiable): array
  {
    return [
      //
    ];
  }
}
