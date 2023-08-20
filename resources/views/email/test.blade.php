<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Email</title>
</head>
<body>
    
    <h3 style="color: red;">PRODUCT SHORTAGE ALERT !!!</h3>
    <p>Product Name: {{ $mailData['product_name']  }}</p>
    <p>Product Code: {{ $mailData['product_code']  }}</p>
    <p>Address  : {{ $mailData['branch'] }} branch</p>

    <p>This product about to end please contact with the Shop Manager.</p>

</body>
</html>