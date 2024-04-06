<!DOCTYPE html>
<html>
<head>
    <title>Generate Unique Code</title>
</head>
<body>
    <!-- Display area for the generated code -->
    <div id="generated-code"></div>
    
    <!-- Button to generate unique code -->
    <button type="button" id="generate-code-btn">Generate Code</button>

    <script>
        // Function to generate a unique random code
        function generateUniqueRandomCode(length = 6) {
            var characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            var code = '';
            do {
                code = '';
                for (var i = 0; i < length; i++) {
                    code += characters.charAt(Math.floor(Math.random() * characters.length));
                }
                // Check if the generated code already exists in the DOM
                var existingCode = document.getElementById('generated-code').innerText;
            } while (existingCode === code); 
            return code;
        }

        // Event listener for the "Generate Code" button
        document.getElementById('generate-code-btn').addEventListener('click', function() {
            var generatedCode = generateUniqueRandomCode();
            document.getElementById('generated-code').innerText = generatedCode;
        });
    </script>
</body>
</html>
