# mailfix
> Simple Web Contact-Form based mailer

![Build Status](https://img.shields.io/github/issues/getPoland/mailfix.svg?style=flat-square)![Build Stars](https://img.shields.io/github/stars/getPoland/mailfix.svg?style=flat-square)![Build License](https://img.shields.io/github/license/getPoland/mailfix.svg?style=flat-square)




> Dependencies

- <a href="https://pear.php.net">php-pear</a>
- <a href="https://pear.php.net/package/Mail/">php-mail</a>
- <a href="https://pear.php.net/package/Mail_Mime/">php-mail_mime</a>

> Desgin is inspired by <a href="https://html5up.net">html5up.net</a>

---

## Table of Contents (Optional)

- [Installation](#installation)
- [Contributing](#contributing)
- [FAQ](#faq)
- [License](#license)


---

## Example (send a mail)

```html
<form method="post" action="mailer.php">
    <div class="fields">
            <div class="field half">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" />
            </div>
            <div class="field half">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" />
            </div>
            <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="4"></textarea>
            </div>
    </div>
    <ul class="actions">
            <input type="text" id="to" name="to" value="YOUR_MAIL_ADRESS(RECIVER)" style="display: none"/>
            <li><input type="submit" value="Nachricht senden" class="primary" /></li>
            <li><input type="reset" value="Reset" /></li>
    </ul>
</form>

```

---

## Installation

- Download as Zip or clone, setup mailserver settings in <b>mailer.php</b> and change reciver in <b>index.php</b>

### Setup

- Open this project over your webserver fill out form and try to send. (If you get trouble setting up <b>mailfix</b>, <a href="https://baumirein.de/mailfix">contact me</a>)

> update and install this package first

```shell
$ pear install mail
$ pear install mail-mime
```

> now restart mailserver (e.x.: apache2)

```shell
$ service apache2 restart
```

---
## Contributing

> To get started...

### Step 1

- **Option 1**
    - 🍴 Fork this repo!

- **Option 2**
    - 👯 Clone this repo to your local machine using `https://github.com/getPoland/mailfix.git`

### Step 2

- **HACK AWAY!** 🔨🔨🔨

### Step 3

- 🔃 Create a new pull request using <a href="https://github.com/getPoland/mailfix/compare/" target="_blank">`https://github.com/getPoland/mailfix/compare/`</a>.

---



## FAQ

- **There are actually no *FAQ's*!**
    - <a href="https://baumirein.de/mailfix">Contact me here!</a>

---

## Support

Reach out to me at one of the following places!

- Forum at <a href="https://werkstatt-company.de" target="_blank">`werkstatt-company.de`</a>
- Instagram at <a href="https://instagram.com/baumirein" target="_blank">`@baumirein`</a>

---


## License

- **[MIT license](http://opensource.org/licenses/mit-license.php)**
- Copyright 2019 © <a href="https://baumirein.de" target="_blank">baumirein</a>.
