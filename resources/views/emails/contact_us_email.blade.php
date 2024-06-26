
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Email</title>
</head>
<body>
    <p><strong>Name:</strong> {{ isset($data['form_name']) ? $data['form_name'] : 'N/A' }}</p>
    <p><strong>Email:</strong> {{ isset($data['form_email']) ? $data['form_email'] : 'N/A' }}</p>
    <p><strong>Phone:</strong> {{ isset($data['form_phone']) ? $data['form_phone'] : 'N/A' }}</p>
    <p><strong>Address:</strong> {{ isset($data['form_address']) ? $data['form_address'] : 'N/A' }}</p>
    <p><strong>Message:</strong> {{ isset($data['form_message']) ? $data['form_message']: 'N/A' }}</p>
    <p><strong>Booking Date:</strong> {{ isset($data['booking_date']) ? $data['booking_date']: 'N/A' }}</p>
    <p><strong>Location:</strong> {{ isset($data['location']) ? $data['location']: 'N/A' }}</p>
    <p><strong>Type:</strong> {{ isset($data['comertial_residen']) ? $data['comertial_residen']: 'N/A' }}</p>
    
</body>
</html>