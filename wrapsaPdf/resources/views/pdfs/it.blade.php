<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Department PDF</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #2196F3; }
        .field-label { font-weight: bold; }
    </style>
</head>
<body>
    <h1>IT Department Report</h1>
    <p><span class="field-label">Project Name:</span> {{ $field1 }}</p>
    <p><span class="field-label">Project Manager:</span> {{ $field2 }}</p>
    <p><span class="field-label">Deadline:</span> {{ $field3 }}</p>
    <p><span class="field-label">Budget:</span> {{ $field4 }}</p>
</body>
</html>
