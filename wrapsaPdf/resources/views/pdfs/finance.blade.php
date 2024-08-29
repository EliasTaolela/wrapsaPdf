<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Department PDF</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #FF5722; }
        .field-label { font-weight: bold; }
    </style>
</head>
<body>
    <h1>Finance Department Report</h1>
    <p><span class="field-label">Account Number:</span> {{ $field1 }}</p>
    <p><span class="field-label">Balance:</span> {{ $field2 }}</p>
    <p><span class="field-label">Due Date:</span> {{ $field3 }}</p>
    <p><span class="field-label">Payment Status:</span> {{ $field4 }}</p>
</body>
</html>
