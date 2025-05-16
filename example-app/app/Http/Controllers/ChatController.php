<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Support\Facades\Log;
class ChatController extends Controller
{
    public function adminChatView()
    {
         $userIds = Chat::distinct()->pluck('user_id');
     
    // Ambil data user yang chat saja, sekaligus eager load latestChat
    $users = User::whereIn('id', $userIds)
        ->with(['latestChat' => function($q) {
            $q->latest();
        }])
        ->get();
        
        return view('admin.chat', compact('users'));
    }

    public function adminHistory($userId)
    {
        $chats = Chat::where('user_id', $userId)->orderBy('created_at')->get();
        return response()->json($chats);
    }

    public function adminSend(Request $request)
{
    // \Log::info('adminSend request', $request->all()); 

    try {
        Chat::create([
            'user_id' => $request->user_id,
            'sender' => 'admin',
            'message' => $request->message
        ]);

        return response()->json(['success' => true]);

    } catch (\Exception $e) {
        // \Log::error('adminSend error: ' . $e->getMessage());
        return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
    }
}


    public function userHistory()
    {
        $userId = auth()->id();
        $chats = Chat::where('user_id', $userId)->orderBy('created_at')->get();
        return response()->json($chats);
    }

    public function userSend(Request $request)
    {
        Chat::create([
            'user_id' => auth()->id(),
            'sender' => 'user',
            'message' => $request->message
        ]);
        return response()->json(['success' => true]);
    }
}
