<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request; // 追加

class BaseMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $request; // 追加

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
//        return $this->view('mail.contact')
//                    ->subject('お問い合わせ')
//                    ->with([
//                        'contact_name' => $this->request->name,
//                        'contact_message' => $this->request->message
//                    ]);



//        echo $request->input('username');
//        echo $request->input('username');
//        echo $request->input('email');
//        exit;
        return $this->view("mail.sample")
            ->with("username", $request->input('username'))
            ->with("email", $request->input('email'))
            ->with("uniqeid", $request->session()->get('uniqeid'))
            ->with("hash", $request->session()->get('hash'))
            ->subject("テストメール");
    }
}
