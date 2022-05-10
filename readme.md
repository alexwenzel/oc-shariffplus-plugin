# october cms - shariff plus plugin

This october cms plugins gives you a component, which adds [shariff plus](https://www.npmjs.com/package/shariff-plus)
functionality to your page.

## what is ShariffPlus

Shariff-Plus enables website users to share and like their favorite content without compromising their privacy.

## installation

```
composer require
```

## usage

Add the component to your page and set miniumum url property.

````
...

[ShariffPlus]
url=testurl-wuff
theme=grey
==

...

{% component 'ShariffPlus' %}
````

## options

Differences to Shariff are marked with (1), (2) and so on and explained below the table.

| Attribute                       | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Default                                                                               |
|---------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|---------------------------------------------------------------------------------------|
| `data-backend-url`              | The path to your Shariff backend, see below. Setting the value to `null` disables the backend feature. No counts will occur.                                                                                                                                                                                                                                                                                                                                                                  | `null`                                                                                |
| `data-button-style`             | How to display the buttons. Values: `standard`, `icon`, `icon-count`. With `icon` only the icon is shown, with `icon-count` icon and counter and with `standard` icon, text and counter are shown, depending on the display size.                                                                                                                                                                                                                                                             | `standard`                                                                            |
| `data-dialogs-media-url` (1)    | The path to css or js for special dialogs like e.g. the one of the `facebooklike` service. This has to be an absolute URL. Example: `https://www.example.com/shariff`. This allows to use own css e.g. for the `facebooklike` dialog.                                                                                                                                                                                                                                                         | Path to directory where Shariff-Plus is installed.                                    |
| `data-facebook-count-btn` (1)   | The button(s) which shall show the counter from backend if both services `facebook` and `facebooklike` are used. Values: `like`, `share`, `both`.                                                                                                                                                                                                                                                                                                                                             | `like`                                                                                |
| `data-facebooklike-css` (1)     | Name of the CSS file for the `facebooklike` dialog. The file has to be present in the folder specified by the `data-dialogs-media-url` option. Example : `data-facebooklike-css="my-styles.css"`.                                                                                                                                                                                                                                                                                             | `facebooklike_dlg.css`                                                                |
| `data-facebooklike-options` (1) | An entity-encoded JSON string containing an object with options for the Facebook "Like" button as provided by the Facebook configurator for that button. Example with default values of Facebook: `data-facebooklike-options="{&quot;width&quot;:450,&quot;layout&quot;:&quot;standard&quot;,&quot;action&quot;:&quot;like&quot;,&quot;size&quot;:&quot;large&quot;,&quot;show_faces&quot;:true,&quot;share&quot;:true,&quot;appId&quot;:&quot;99999&quot;}"` with 99999 = Facebook `app_id`. | See example, with appId = value of the `fb:app_id` meta tag or `null` if not defined. |
| `data-flattr-category`          | Category to be used for Flattr.                                                                                                                                                                                                                                                                                                                                                                                                                                                               | `null`                                                                                |
| `data-flattr-user`              | User that receives Flattr donation.                                                                                                                                                                                                                                                                                                                                                                                                                                                           | `null`                                                                                |
| `data-info-url` (2)             | URL of the info page.                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | `https://www.richard-fath.de/de/software/shariff-plus.html`                           |
| `data-info-display`             | How to display the info page. Values: `blank`, `popup`, `self`.                                                                                                                                                                                                                                                                                                                                                                                                                               | `blank`                                                                               |
| `data-lang`                     | The localisation to use. Available: `bg`, `cs`, `da`, `de`, `en`, `es`, `fi`, `fr`, `hr`, `hu`, `it`, `ja`, `ko`, `nl`, `no`, `pl`, `pt`, `ro`, `ru`, `sk`, `sl`, `sr`, `sv`, `tr`, `zh`                                                                                                                                                                                                                                                                                                      | `de`                                                                                  |
| `data-mail-body`                | If a `mailto:` link is used in `data-mail-url`, then this value is used as the mail body. The body text should contain the placeholder `{url}` which will be replaced with the share URL.                                                                                                                                                                                                                                                                                                     | see `data-url`                                                                        |
| `data-mail-subject`             | If a `mailto:` link is used in `data-mail-url`, then this value is used as the mail subject.                                                                                                                                                                                                                                                                                                                                                                                                  | see `data-title`                                                                      |
| `data-mail-url`                 | The url target used for the `mail` service button                                                                                                                                                                                                                                                                                                                                                                                                                                             | `?view=mail`                                                                          |
| `data-media-url`                | Media url to be shared (pinterest)                                                                                                                                                                                                                                                                                                                                                                                                                                                            | `null`                                                                                |
| `data-orientation`              | `vertical` will stack the buttons vertically.                                                                                                                                                                                                                                                                                                                                                                                                                                                 | `horizontal`                                                                          |
| `data-referrer-track`           | A string that will be appended to the share url. Can be disabled using `null`.                                                                                                                                                                                                                                                                                                                                                                                                                | `null`                                                                                |
| `data-services` (3)             | An entity-encoded JSON string containing an array of service names to be enabled. Example: `data-services="[&quot;facebook&quot;,&quot;twitter&quot;]"` Available service names: `twitter`, `facebook`, `facebooklike`, `linkedin`, `pinterest`, `xing`, `whatsapp`, `mail`, `info`, `addthis`, `tumblr`, `flattr`, `diaspora`, `reddit`, `stumbleupon`, `threema`, `weibo`, `tencent-weibo`, `qzone`, `print`, `telegram`, `vk`, `flipboard`, `pocket`, `buffer`                             | `twitter`, `facebooklike`, `facebook`, `info`                                         |
| `data-theme`                    | We include 3 color schemes, `standard`, `grey` and `white`.                                                                                                                                                                                                                                                                                                                                                                                                                                   | `standard`                                                                            |
| `data-title`                    | Title to be used as share text in Twitter/Whatsapp                                                                                                                                                                                                                                                                                                                                                                                                                                            | page's `DC.title`/`DC.creator` or `<title>`                                           |
| `data-twitter-via`              | Screen name of the user to attribute the Tweet to                                                                                                                                                                                                                                                                                                                                                                                                                                             | `null`                                                                                |
| `data-url`                      | The canonical URL of the page to check.                                                                                                                                                                                                                                                                                                                                                                                                                                                       | page's canonical URL or `og:url` or current URL                                       |

## supported services

Shariff-Plus supports the following social sharing services:

- AddThis
- buffer
- diaspora*
- facebook
- Flattr
- Flipboard
- LinkedIn
- Mail
- Pinterest
- Pocket
- Print
- Qzone
- reddit
- StumbleUpon
- Telegram
- Tencent Weibo
- Threema
- Tumblr
- Twitter
- VK
- Weibo
- WhatsApp
- XING
