<?php

namespace App\Http\Controllers\SupportTeam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Adjust the namespace if your User model is in a different namespace

class NotificationsController extends Controller
{
    /**
     * Display a listing of notifications for a user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Example: Get notifications for the authenticated user
        $notifications = $request->user()->notifications()->latest()->paginate(10);

        return view('notifications.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new notification.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Example: Show form to create a new notification
        return view('notifications.create');
    }

    /**
     * Store a newly created notification in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Example: Store a new notification
        $request->user()->notifications()->create([
            'message' => $request->input('message'),
        ]);

        return redirect()->route('notifications.index')
                         ->with('success', 'Notification created successfully.');
    }

    /**
     * Display the specified notification.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Example: Show details of a specific notification
        $notification = auth()->user()->notifications()->findOrFail($id);

        return view('notifications.show', compact('notification'));
    }

    /**
     * Remove the specified notification from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Example: Delete a notification
        $notification = auth()->user()->notifications()->findOrFail($id);
        $notification->delete();

        return redirect()->route('notifications.index')
                         ->with('success', 'Notification deleted successfully.');
    }
}
