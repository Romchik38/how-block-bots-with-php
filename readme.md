# How to block bots

- Fast
- Secure
- Easly

For PHP developers

## Block via bot name

1. Add as high as possible in your index.php [this code](./index.php)
2. Create new file `bots.php` in the same directory.
3. Add as many *bots name* as you want

### Q: Where I can get *bots name*?

1. Check your server log file and find like this:

    ```txt
    3.142.218.250 - - [07/Jun/2024:12:13:24 +0300] "GET /some_page_name.html HTTP/2.0" 403 60 "-" "Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; ClaudeBot/1.0; +claudebot@anthropic.com)" "-"
    ```

2. *Bot name* is ClaudeBot in the example above

3. So just add `ClaudeBot` to `bots.php`

4. Do not forget check who is this bot.

    If this bot is like `Googlebot`, **do not** block it.
