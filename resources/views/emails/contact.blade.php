<h2>New website enquiry</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Organisation:</strong> {{ $data['organisation'] ?? 'Not provided' }}</p>
<p><strong>Work email:</strong> {{ $data['email'] }}</p>
<p><strong>Service of interest:</strong> {{ $data['subject'] }}</p>

<hr>

<p><strong>Requirements:</strong></p>
<p style="white-space: pre-line;">{{ $data['message'] }}</p>
