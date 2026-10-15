<h2>New website enquiry</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] ?: 'Not provided' }}</p>
<p><strong>Subject:</strong> {{ $data['subject'] }}</p>

<hr>

<p style="white-space: pre-line;">{{ $data['message'] }}</p>