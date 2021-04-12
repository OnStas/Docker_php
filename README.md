Docker - Apache with Let's Encrypt

This is a debian-based image which runs an apache and get's it SSL-certificates automatically from Let's Encrypt.
Instructions
Prepare your apache-config

There are some things you have to care about in your apache-config if you want to use it with certbot:

    for every domain given in DOMAINS there must be a apache-vhost which uses this domain as ServerName or ServerAlias. Else certbot won't get a certificate for this domain.
    this image contains a simple apache webserver. Therefore you can configure your vhosts like you ever did.

Run it

For an easy test-startup you just have to:

$ python compose-autostart.py
