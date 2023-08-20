<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    public function __construct(protected ApiClient $client)
    {
    }

    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->setListMember($list, md5(strtolower($email)), [
            'email_address' => $email,
            'status_if_new' => 'subscribed'
        ]);
    }
}
