<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $settings = [
        [
            'key'                       =>  'site_name',
            'value'                     =>  'PNG Guru',
        ],
        [
            'key'                       =>  'site_title',
            'value'                     =>  'PngGuru',
        ],
        [
            'key'                       =>  'default_email_address',
            'value'                     =>  'admin@admin.com',
        ],
        [
            'key'                       =>  'default_phone',
            'value'                     =>  '7636438783723',
        ],
        [
            'key'                       =>  'default_address',
            'value'                     =>  'B-12 New Ashok Nagar',
        ],
        [
            'key'                       =>  'email',
            'value'                     =>  'admin2@admin.com',
        ],
        [
            'key'                       =>  'phone',
            'value'                     =>  '22222222222',
        ],
        [
            'key'                       =>  'address',
            'value'                     =>  'B-1222 New Ashok Nagar',
        ],
        [
            'key'                       =>  'map',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'currency_code',
            'value'                     =>  'INR',
        ],
        [
            'key'                       =>  'currency_symbol',
            'value'                     =>  '₹',
        ],
        [
            'key'                       =>  'site_logo',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'site_favicon',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'footer_copyright_text',
            'value'                     =>  'Copyright © 2022 Png Guru. All rights reserved.',
        ],
        [
            'key'                       =>  'footer_about_text',
            'value'                     =>  'Welcome to PngGuru.in ! Png Guru provides you the Biggest Collection & High Quality of PNG Images around the world. Check-out the different Categories of PNG Images and Free to Download Unlimited.',
        ],
        [
            'key'                       =>  'seo_meta_title',
            'value'                     =>  'PngGuru',
        ],
        [
            'key'                       =>  'seo_meta_keywords',
            'value'                     =>  'PngGuru,Image,PNG.',
        ],
        [
            'key'                       =>  'seo_meta_description',
            'value'                     =>  'PngGuru Provides background images, yoga png image, animal png image, fruit png image, good night status, good morning status and much more.',
        ],
        [
            'key'                       =>  'social_facebook',
            'value'                     =>  'https://mycodingsolution.com/',
        ],
        [
            'key'                       =>  'social_twitter',
            'value'                     =>  'https://mycodingsolution.com/',
        ],
        [
            'key'                       =>  'social_instagram',
            'value'                     =>  'https://mycodingsolution.com/',
        ],
        [
            'key'                       =>  'social_linkedin',
            'value'                     =>  'https://mycodingsolution.com/',
        ],
        [
            'key'                       =>  'social_pintrest',
            'value'                     =>  'https://mycodingsolution.com/',
        ],
        [
            'key'                       =>  'social_youtube',
            'value'                     =>  'https://mycodingsolution.com/',
        ],
        [
            'key'                       =>  'ads_script_first',
            'value'                     =>  'https://mycodingsolution.com/',
        ],
        [
            'key'                       =>  'ads_script_second',
            'value'                     =>  'https://mycodingsolution.com/',
        ],
        [
            'key'                       =>  'ads_script_third',
            'value'                     =>  'https://mycosolution.com/',
        ],
        [
            'key'                       =>  'ads_script_fourth',
            'value'                     =>  'https://mycodingsolution.com/',
        ],
        [
            'key'                       =>  'ads_script_fifth',
            'value'                     =>  'https://mycodingsolution.com/',
        ],
        [
            'key'                       =>  'google_analytics',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'facebook_pixels',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_key',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_secret_key',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_client_id',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_secret_id',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'smtp_method',
            'value'                     =>  '1',
        ],
        [
            'key'                       =>  'smtp_host',
            'value'                     =>  'host.mycodingsolution.com',
        ],
        [
            'key'                       =>  'smtp_user',
            'value'                     =>  'smtp@mycodingsolution.com',
        ],
        [
            'key'                       =>  'smtp_password',
            'value'                     =>  'admin@1234',
        ],
        [
            'key'                       =>  'smtp_port',
            'value'                     =>  '465',
        ],
        [
            'key'                       =>  'smtp_type',
            'value'                     =>  'SSL',
        ],
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting)
        {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->settings). ' records');
    }
}
