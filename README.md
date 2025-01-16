# Email Tracking Pixel with Telegram Notifications

This project tracks email openings using a 1x1 tracking pixel. When the pixel is loaded, a notification is sent to a Telegram chat or channel using the [telegram-bot-sdk](https://github.com/telegram-bot-sdk/telegram-bot-sdk). Environment variables are managed using [phpdotenv](https://github.com/vlucas/phpdotenv).

## Requirements

- PHP 8.0 or higher
- Composer
- A Telegram bot token ([create one using BotFather](https://core.telegram.org/bots#botfather))
- A server to host the PHP files

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/your-repo-name.git
   cd your-repo-name
   ```

2. **Install dependencies:**

   ```bash
   composer install
   ```

3. **Set up environment variables in the .env file**

4. **Add the tracking pixel to your email:**
    Include the following <img> tag in your email:
    ```html
    <img src="https://your-domain.com/pixel.php?email=recipient@example.com" style="display:none;" alt="" />
    ```

