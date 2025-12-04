# SERGIO – Checker UI (Frontend + Simple Proxy)

SERGIO is a lightweight UI tool that sends user input to a backend API and displays the response.  
The project itself does **not** perform any checking or validation — it simply forwards data to a server URL of your choice.

This makes SERGIO flexible:  
**Anyone can plug in their own server URL and instantly use the checker with their own backend.**

---

## 🚀 How It Works

1. User enters data into the UI (BIN/CC/etc.)
2. The frontend sends this data to `api.php`
3. `api.php` forwards the request to an external API/server
4. The server processes it and replies
5. The UI displays the server’s response

### Important  
SERGIO itself does **not**:
- Validate or check cards
- Handle payments
- Use Stripe/Braintree
- Charge or authorize cards
- Store any data

All processing happens on **your external server**, not inside this project.

---

## 🔧 Configure Your Own Server URL

You can easily choose which backend the tool uses.

Open:

api.php

Find this line:

```php
$url = "https://alt.heroVishal.workers.dev";
Replace it with your own server, API, or Cloudflare Worker URL, for example:
$url = "https://your-server-url.com/api";
SERGIO/
│── index.php
│── index.html
│── api.php
│── script.js
│── style.css
│── cookie.txt
│── DragonBins.jpg
index.html / index.php → UI

script.js → Sends input to backend

api.php → Forwards request to your server URL

style.css → Styling

cookie.txt → Storage for user settings/data

DragonBins.jpg → Image asset
⚙️ Requirements

A functioning backend server (API or Worker) that accepts your request format

PHP 7+ hosting (for the simple proxy)

Web browser to run the UI

🛠 Setup

Upload the project to any PHP-enabled hosting

Edit api.php and insert your server URL

Access index.php from your browser

Start using the checker

🧩 Backend Notes

SERGIO does not include any backend logic.
If you need:

Real card validation

Payment authorization

Stripe / Braintree trials

Custom API logic

You must implement that on your own server URL.

🤝 Contributing

If you want to improve the UI, add themes, add animations, or make the proxy smarter — contributions are welcome.

📫 Support / Doubts

If you have a suggestion or issue, you can email:

mailtovishalsai227@gmail.com

Please:

Mention your doubt in the subject

Send the full doubt in a single mail

I’ll try my best to help.

⚠️ Disclaimer

This project is for educational and UI demonstration purposes only.
The author is not responsible for how you use or configure your backend.
