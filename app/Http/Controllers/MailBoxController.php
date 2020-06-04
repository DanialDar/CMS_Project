<?php

namespace App\Http\Controllers;

use App\Model\Attachments;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        return view('mailbox.inbox',compact('messages', 'senders'));
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
            DB::insert('insert into inbox (fromUserId,toUserMail,subject,body,isRead,isReceived,isSent,isStar,isDeleteSender,isDeleteReceiver) values(?,?,?,?,?,?,?,?,?,?)',[$fromUserId,$toUserMail,$subject,$body,$isRead,$isReceived,$isSent,$isStar,$isDeleteSender,$isDeleteReceiver]);

            $id = DB::getPdo()->lastInsertId();
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
            {
                foreach ($files as $file) {
                    $name=$file->getClientOriginalName();
//               echo $name;

                  $filename =   $file->move(storage_path().'/app/files/', $name );
                                    Attachments::create([
                    'inbox_id' => $id,
                    'filename' => $filename
                ]);
                }
            }

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

        return view('mailbox.read',compact('message','sender'));


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
}
