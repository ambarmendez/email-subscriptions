# Email Subscription

This is an open source email subscription functionality was built and maintained for myself.

- [Guzzle, PHP HTTP client](http://docs.guzzlephp.org/en/stable/).

## Installation

### Step 1.

>To run this project, you must have Laravel 5.5 installed as a prerequisite.

Begin by cloning this repository to your machine, and installing all Composer dependencies.

```bash
git clone https://github.com/ambarmendez/email-subscriptions.git
cd email-subscriptions && composer install
mv .env.example .env
```
### Step 2.

You need to create free account of [MailChimp](https://mailchimp.com). Then, if you don't have a list already, it is necesary to [create one](https://kb.mailchimp.com/lists/growth/getting-started-with-lists#Create-a-List) and [find your List ID](https://kb.mailchimp.com/lists/manage-contacts/find-your-list-id)

Finally, the mailchimp domain in this case take the root directory for the API and the subresource used for sub/unsub list members. For more details about them go to: [Resources](http://developer.mailchimp.com/documentation/mailchimp/guides/get-started-with-mailchimp-api-3/#resources) and [Lists](http://developer.mailchimp.com/documentation/mailchimp/reference/lists/)

Once all the values are identified, they need to be referenced in your `.env` file.

```
MAILCHIMP_DOMAIN=paste-domain-here
MAILCHIMP_SECRET=paste-key-here
MAILCHIMP_LIST_ID=paste-list-id-here
```

### Step 4.

You're all set to go!

```
php artisan serve
```

###step 5.

Use the portal! Visit localhost:8000 to subscribe.