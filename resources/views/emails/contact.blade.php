<h2>New Contact Form Submission</h2>
<p><strong>Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone_number'] }}</p>
<p><strong>Company:</strong> {{ $data['company'] ?? 'N/A' }}</p>
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p>
