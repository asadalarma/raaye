<?php

use Illuminate\Database\Seeder;
use App\Setting;
use Carbon\Carbon;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ************************************
        // Creating settings
        // ************************************
        $settings = [

            // Admin
            [
                'key' => 'about_uses_name',
                'value' => 'Who are Raaye?',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'key' => 'about_uses_description',
                'value' => '<p><span style=\"color: #737373; font-family: AvenirLTStd55RomanRegular, Arial; font-size: 16px; text-align: justify;\">Raaye Influencers are everyday people just like you, connected to many via multiple digital media channels including our online community. As a Raaye Influencer, you are empowered to transform the products and services that matter to you! Share your opinion by answering our surveys, inspire change in real time.</span><br style=\"color: #737373; font-family: AvenirLTStd55RomanRegular, Arial; font-size: 16px; text-align: justify;\" /><span style=\"color: #737373; font-family: AvenirLTStd55RomanRegular, Arial; font-size: 16px; text-align: justify;\">Your voice + Our voice = The Voice of Change. We promise that your opinion will have a direct impact on companies and how they market, distribute or advertise new products and services to consumers like you.&nbsp;Not only that, with Raaye your participation is recognized and you will be awarded points that you can exchange for cash and/or rewards.</span><br style=\"color: #737373; font-family: AvenirLTStd55RomanRegular, Arial; font-size: 16px; text-align: justify;\" /><br style=\"color: #737373; font-family: AvenirLTStd55RomanRegular, Arial; font-size: 16px; text-align: justify;\" /><span style=\"color: #737373; font-family: AvenirLTStd55RomanRegular, Arial; font-size: 16px; text-align: justify;\">So, are you ready to join us and begin influencing your world?</span></p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'key' => 'about_footer',
                'value' => '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</span></p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'key' => 'left_footer',
                'value' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'key' => 'right_footer',
                'value' => 'http://www.twitter.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'key' => 'logo_name',
                'value' => 'logo.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'key' => 'offer_title',
                'value' => 'What we Services You',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'key' => 'facebook_url',
                'value' => 'http://www.facebook.com/you',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'key' => 'twitter_url',
                'value' => 'http://www.twitter/you',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'key' => 'google_url',
                'value' => 'http://plus.google.com/you',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'key' => 'linkedin_url',
                'value' => 'http://www.linkedin/you',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'key' => 'youtube_url',
                'value' => 'http://www.youtube.com/you',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'key' => 'title',
                'value' => 'RAAYE Online Survey',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]

        ];
        DB::statement( 'SET FOREIGN_KEY_CHECKS=0;' );
        Setting::truncate();
        Setting::insert($settings);
        DB::statement( 'SET FOREIGN_KEY_CHECKS=1;' );
    }
}
