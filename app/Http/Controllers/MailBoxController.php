<?php

namespace App\Http\Controllers;

use App\Model\Attachments;
use App\Model\Attachs;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Webklex\IMAP\Client;


use App\Model\Inbox;
class MailBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $user_data = User::find($user_id);
//            DB::table('users')->find($user_id)->get();

        $messages = DB::table('inbox')->where('toUserMail', $user_data->email)->get();
        $senders = array();
        foreach ($messages as $message){

        $senders = User::find($message->fromUserId)->get();
//            DB::table('users')->find($message->fromUserId)->get();

       }
        $files = array();
        foreach ($messages as $message){

            if($message->isAttachment == 1){
                $files = DB::table('attachments')->where('inbox_id',$message->id)->get();

            }
//            $senders = User::find($message->fromUserId)->get();
//            DB::table('users')->find($message->fromUserId)->get();

        }

        return view('mailbox.inbox',compact('messages', 'senders','files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mailbox.compose');
    }

    public function show1()
    {
        return view('mailbox.read');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $toUserMail = $_POST['toUserMail'];

        $messages = DB::table('users')->where('email', $toUserMail)->get();
        if(count($messages) > 0){
            $subject = $_POST['subject'];
            $body = $_POST['body'];
            $fromUserId = Auth::user()->id;
            $isRead = 0;
            $isReceived = 0;
            $isReceived = 0;
            $isSent = 1;
            $isStar = 0;
            $isDeleteSender = 0;
            $isDeleteReceiver = 0;
            $isAttachment = 0;


//                $file = $request->file;
//                $filename = $file->getClientOriginalName();
////
////             echo $namefile;
//                $filename = $file->storeAs('files', $filename);
//                Attachments::create([
//                    'inbox_id' => $id,
//                    'filename' => $filename
//                ]);

            $files = $request->file('files');

            if($request->hasFile('files'))
            { $isAttachment = 1;
                DB::insert('insert into inbox (fromUserId,toUserMail,subject,body,isRead,isReceived,isSent,isStar,isDeleteSender,isDeleteReceiver,isAttachment) values(?,?,?,?,?,?,?,?,?,?,?)',[$fromUserId,$toUserMail,$subject,$body,$isRead,$isReceived,$isSent,$isStar,$isDeleteSender,$isDeleteReceiver, $isAttachment]);
                $id = DB::getPdo()->lastInsertId();

                foreach ($files as $file) {
                    $name=$file->getClientOriginalName();
//               echo $name;

                  $filename =   $file->move(storage_path().'/app/files/', $name );
                                    Attachments::create([
                    'inbox_id' => $id,
                    'filename' => $filename
                ]);
                }

            }else{
                DB::insert('insert into inbox (fromUserId,toUserMail,subject,body,isRead,isReceived,isSent,isStar,isDeleteSender,isDeleteReceiver,isAttachment) values(?,?,?,?,?,?,?,?,?,?,?)',[$fromUserId,$toUserMail,$subject,$body,$isRead,$isReceived,$isSent,$isStar,$isDeleteSender,$isDeleteReceiver, $isAttachment]);
                $id = DB::getPdo()->lastInsertId();

            }
            // send the email
            $document = $request->file('document');
            $to_email = $toUserMail;
            $data = [
                'document' => $document
            ];
    \Mail::to($to_email)->send(new \App\Mail\Upload($data));

    dd(\ReceivedMail::all());


        session()->flash('success', 'Mail Sent Successfully');
            return redirect()->back();

        }else {
            session()->flash('msg', 'User not found');
            return redirect()->back();
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $message = Inbox::find($id);

        $sender = User::find($message->fromUserId);

        $files = array();


            if($message->isAttachment == 1){

                $files = DB::table('attachments')->where('inbox_id',$message->id)->get();

            }

        return view('mailbox.read',compact('message','sender','files'));


        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function sent()
    {
        $user_id = Auth::user()->id;
        $messages = DB::table('inbox')->where('fromUserId', $user_id)->get();

        return view('mailbox.sent',compact('messages'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function readImap(){

        $oClient = new Client([
            'host'          => 'imap.secureserver.net',
            'port'          => 993,
            'encryption'    => 'ssl',
            'validate_cert' => true,
            'username'      => '',
            'password'      => '',
            'protocol'      => 'imap'
        ]);

        //Connect to the IMAP Server
        $oClient->connect();


//Get all Mailboxes
//        /** @var \Webklex\IMAP\Support\FolderCollection $aFolder */

        $aFolder = $oClient->getFolders();



//Loop through every Mailbox
//        /** @var \Webklex\IMAP\Folder $oFolder */
        foreach($aFolder as $oFolder){

            //Get all Messages of the current Mailbox $oFolder
            /** @var \Webklex\IMAP\Support\MessageCollection $aMessage */
//            $aMessage = $oFolder->messages()->all()->get();
            $aMessage = $oFolder->query()->from('abdullahpsoft@gmail.com')->get();

            /** @var \Webklex\IMAP\Message $oMessage */
            foreach($aMessage as $oMessage){


                echo $oMessage->getSubject().'<br />';
                echo 'Attachments: '.$oMessage->getAttachments()->count().'<br />';
                echo $oMessage->getHTMLBody(true);

                //Move the current Message to 'INBOX.read'
                if($oMessage->moveToFolder('INBOX.read') == true){
                    echo 'Message has ben moved';
                }else{
                    echo 'Message could not be moved';
                }


            }
        }
    }


    public function replies(){
        $user_id = Auth::user()->id;
        $messages = DB::table('inbox')->where('fromUserId', $user_id)->distinct()->get('toUserMail');

        //IMAP CONNECT
        $oClient = new Client([
            'host'          => 'imap.secureserver.net',
            'port'          => 993,
            'encryption'    => 'ssl',
            'validate_cert' => true,
            'username'      => 'abdullah@sowebit.tech',
            'password'      => 'MALONGneverlose1!',
            'protocol'      => 'imap'
        ]);

        //Connect to the IMAP Server
        $oClient->connect();


        //READING MAIL FOLDERS
        $aFolder = $oClient->getFolders();
        $allMessages = array();
        $fMessages = array();

//Loop through every Mailbox
//        /** @var \Webklex\IMAP\Folder $oFolder */
        $i = 0;
        foreach($aFolder as $oFolder){
foreach ($messages as $message){
            //Get all Messages of the current Mailbox $oFolder
            /** @var \Webklex\IMAP\Support\MessageCollection $aMessage */
//            $aMessage = $oFolder->messages()->all()->get();
            $aMessage = $oFolder->query()->from($message->toUserMail)->get();

            $allMessages['from'] = $message->toUserMail;

            /** @var \Webklex\IMAP\Message $oMessage */
            foreach($aMessage as $oMessage){
                $aAttachment = $oMessage->getAttachments();

                $allMessages['subject'] = $oMessage->getSubject().'<br />';
                $allMessages['attachments'] = $oMessage->getAttachments()->count();
                $fileName = '';
                $aAttachment->each(function ($oAttachment) {

                    /** @var \Webklex\IMAP\Attachment $oAttachment */
                    $oAttachment->save();

                });

                $allMessages['body'] = $oMessage->getHTMLBody(true);

                //Move the current Message to 'INBOX.read'

                if ($allMessages['attachments'] > 0 ){
                    foreach ($oMessage->getAttachments() as $key => $oAttachment) {
                        $filename =  $oAttachment->getName();

                        Attachs::create([
                            'user_mail' => $message->toUserMail,
                            'filename' => $filename
                        ]);

                    }
                    }
              $fMessages['item'.$i] = $allMessages;
              $i++;
            }
        }
        }


//foreach ($fMessages as $newF){
//    dd($newF['subject']);
//
//}
       //dd($fMessages);
       return view('mailbox.replies',compact('fMessages'));
    }
}
