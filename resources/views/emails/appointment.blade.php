@component('mail::message')
# New Appointment Request

Dear Doctor,

You have received a new appointment request with the following details:

@component('mail::panel')
**Patient Name:** {{ $appointmentData['name'] }}

**Email:** {{ $appointmentData['email'] }}

**Phone:** {{ $appointmentData['phone'] }}

**Date:** {{ \Carbon\Carbon::parse($appointmentData['date'])->format('l, F j, Y') }}

**Time:** {{ $appointmentData['time'] }}

**Service:** {{ $appointmentData['service'] }}

@if(isset($appointmentData['message']) && !empty($appointmentData['message']))
**Additional Information:**
{{ $appointmentData['message'] }}
@endif
@endcomponent

Please contact the patient to confirm this appointment at your earliest convenience.

Thanks,<br>
{{ config('app.name') }}
@endcomponent