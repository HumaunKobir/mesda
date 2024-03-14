<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESDA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

.invoice-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.invoice-header h1 {
    margin-top: 0;
}

.invoice-details {
    margin-bottom: 20px;
}

.invoice-items table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.invoice-items th,
.invoice-items td {
    border: 1px solid #ccc;
    padding: 8px;
}

.invoice-items th {
    background-color: #f2f2f2;
    font-weight: bold;
}

.invoice-total {
    text-align: right;
    font-weight: bold;
}

</style>
<body>
    <div class="invoice-container">
        <div class="invoice-header">
            <h1>Invoice</h1>
        </div>
        <div class="invoice-details">
            <p><strong>Invoice Number:</strong></p>
            <p><strong>Customer Name:</strong></p>
            <p><strong>Customer Email:</strong></p>
            <!-- Add more details here -->
        </div>
        <div class="invoice-items">
            <table>
                <thead>
                    <tr>
                    <tr>
                        <th>Description</th>
                        <th>Event Name</th>
                        <th>Pay Amount</th>
                        <th>Total</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through items -->
                    
                    <tr>
                        
                        <td></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
       
    </div>
    
</body>
</html>
