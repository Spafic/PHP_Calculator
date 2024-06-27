<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calculator</title>
<style>
    body {
        margin-top: 60px; /* Adjust based on nav bar height */
    }
    .calculator {
        text-align: center;
        margin: auto;
        margin-top: 150px;
        width: 280px; /* Adjust width as needed */
        position: relative; /* Ensure position is relative to nav bar */
        background-color: cadetblue;
        border-radius: 20px;
        overflow: hidden;
    }
    .calculator .display {
        width: 265px; /* Adjusted to be larger */
        margin: 10px auto; /* Center display with more space */
        text-align: right;
        font-weight: 500;
        font-size: 30px; /* Larger font size */
        height: 50px; /* Increased height */
        background-color: #333;
        color: #fff;
    }
    .calculator button {
        width: 60px; /* Larger buttons */
        height: 60px; /* Larger buttons */
        margin: 5px;
        font-size: 20px; /* Larger font size */
        border-radius: 10px; /* Rounded corners */
        border: none; /* Remove default border */
        color: #fff; /* White text */
        background-color: #333; /* Bootstrap primary color, adjust to match nav bar */
        cursor: pointer; /* Cursor indicates clickable */
    }
    .calculator button:hover {
        background-color: #0056b3; /* Darker shade on hover, adjust as needed */
    }
    .row {
        display: flex;
        justify-content: center;
    }
</style>
</head>
<body>
    <?php require_once '../assets/nav.php'; ?>
    <div class="calculator">
        <input type="text" id="display" class="display" disabled>
        <div class="row">
            <button onclick="appendNumber('1')">1</button>
            <button onclick="appendNumber('2')">2</button>
            <button onclick="appendNumber('3')">3</button>
            <button onclick="setOperation('+')">+</button>
        </div>
        <div class="row">
            <button onclick="appendNumber('4')">4</button>
            <button onclick="appendNumber('5')">5</button>
            <button onclick="appendNumber('6')">6</button>
            <button onclick="setOperation('-')">-</button>
        </div>
        <div class="row">
            <button onclick="appendNumber('7')">7</button>
            <button onclick="appendNumber('8')">8</button>
            <button onclick="appendNumber('9')">9</button>
            <button onclick="setOperation('*')">X</button>
        </div>
        <div class="row">
            <button onclick="clearDisplay()">C</button>
            <button onclick="appendNumber('0')">0</button>
            <button onclick="calculate()">=</button>
            <button onclick="setOperation('/')">/</button>
        </div>
    </div>
    <script>
        let operation = '';
        let firstNumber = '';
        let secondNumber = '';
        let resultDisplayed = false;
        
        function appendNumber(number) {
            if (resultDisplayed) {
                firstNumber = '';
                resultDisplayed = false;
            }
            if (operation === '') {
                firstNumber += number;
                document.getElementById('display').value = firstNumber;
            } else {
                secondNumber += number;
                document.getElementById('display').value = secondNumber;
            }
        }
        
        function setOperation(op) {
            operation = op;
            resultDisplayed = false;
            document.getElementById('display').value = '';
        }
        
        function calculate() {
            let result;
            switch (operation) {
                case '+':
                    result = parseFloat(firstNumber) + parseFloat(secondNumber);
                    break;
                    case '-':
                        result = parseFloat(firstNumber) - parseFloat(secondNumber);
                        break;
                        case '*':
                            result = parseFloat(firstNumber) * parseFloat(secondNumber);
                            break;
                            case '/':
                                if (secondNumber === '0') {
                                    alert('Cannot divide by zero');
                        return;
                    }
                    result = parseFloat(firstNumber) / parseFloat(secondNumber);
                    break;
                    default:
                        return;
                    }
                    document.getElementById('display').value = result;
                    firstNumber = result.toString();
                    secondNumber = '';
                    operation = '';
                    resultDisplayed = true;
                }
                
                function clearDisplay() {
                    firstNumber = '';
                    secondNumber = '';
                    operation = '';
                    document.getElementById('display').value = '';
                    resultDisplayed = false;
                }
                </script>
    <?php require_once '../assets/footer.php'; ?>
</body>
</html>