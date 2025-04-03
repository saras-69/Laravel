<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        .calculator {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .operations {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }
        
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            flex: 1;
            margin: 0 5px;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 4px;
            text-align: center;
        }
        
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>Simple Calculator</h1>
        
        @if(session('error'))
            <div class="error">
                {{ session('error') }}
            </div>
        @endif
        
        <form action="{{ url('/calculate') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="num1">First Number:</label>
                <input type="number" id="num1" name="num1" value="{{ session('num1') ?? '' }}" required step="any">
            </div>
            
            <div class="form-group">
                <label for="num2">Second Number:</label>
                <input type="number" id="num2" name="num2" value="{{ session('num2') ?? '' }}" required step="any">
            </div>
            
            <input type="hidden" name="operation" id="operation-input" value="{{ session('operation') ?? 'add' }}">
            
            <div class="operations">
                <button type="submit" onclick="document.getElementById('operation-input').value='add'">Add</button>
                <button type="submit" onclick="document.getElementById('operation-input').value='subtract'">Subtract</button>
                <button type="submit" onclick="document.getElementById('operation-input').value='multiply'">Multiply</button>
                <button type="submit" onclick="document.getElementById('operation-input').value='divide'">Divide</button>
            </div>
        </form>
        
        @if(session('result') !== null)
            <div class="result">
                <h3>{{ session('operationName') }} Result:</h3>
                <p>{{ session('num1') }} 
                @if(session('operation') == 'add') + 
                @elseif(session('operation') == 'subtract') - 
                @elseif(session('operation') == 'multiply') × 
                @elseif(session('operation') == 'divide') ÷ 
                @endif
                {{ session('num2') }} = <strong>{{ session('result') }}</strong></p>
            </div>
        @endif
    </div>
</body>
</html>