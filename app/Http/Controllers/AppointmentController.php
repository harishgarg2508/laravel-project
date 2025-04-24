<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AppointmentMail;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Show the appointment form.
    @return \Illuminate\View\View
 */
public function showForm()
{
    return view('appointment');
}
  /**
 * Send appointment email.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\RedirectResponse
 */
    public function sendEmail(Request $request)
    {
        // Validate form inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
            'service' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Send email directly to the dentist
        try {
            Mail::to('dentist@example.com')->send(new AppointmentMail($validated));
            return redirect()->back()->with('success', 'Your appointment request has been sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send your appointment request. Please try again later.');
        }
    }
}
