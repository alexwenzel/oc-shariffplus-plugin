# october cms - shariff plus plugin

This october cms plugins gives you a component, which adds [shariff plus](https://www.npmjs.com/package/shariff-plus)
functionality to your page.

## what is ShariffPlus

Shariff-Plus enables website users to share and like their favorite content without compromising their privacy.

## installation

```
composer require alexwenzel/shariffplus-plugin
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

**Please remember:** all component properties need to be camelCase.

If you want to set the shariff `data-info-url` attribute, write like this:

````
[ShariffPlus]
infoUrl=xyz...

# or

{% component 'ShariffPlus' infoUrl="xyz..." %}
````

For detailed options check out this readme: https://github.com/richard67/shariff-plus#options-data-attributes

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
