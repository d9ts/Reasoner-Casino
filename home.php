<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .button-container {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
      background-color: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .button-container button {
      padding: 12px 25px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      color: white;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .button-container button:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 15px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>

<div class="button-container">
  <button id="start">Start</button>
  <button id="cert">Cert</button>
  <button id="withdraw">Withdraw</button>
  <button id="contact">Contact Us</button>
  <button id="topup">Top Up</button>
  <button id="lastEvent">Last Event</button>
  <button id="faq">FAQ</button>
  <button id="about">About Us</button>
</div>

<script>
  // All buttons are visible by default; no registration/login elements

  // Example: handle button clicks
  document.querySelectorAll('.button-container button').forEach(button => {
    button.addEventListener('click', () => {
      alert(`You clicked: ${button.textContent}`);
    });
  });
</script>

</body>
</html>
