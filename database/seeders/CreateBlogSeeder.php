<?php

namespace Database\Seeders;

use App\Models\BlogBlogCategories;
use App\Models\Blogs;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample blog data
        $blogs = [
            [
                'id' => 1,
                'blog_categories_id' => 3, 
                'title' => 'The Walking Dad',
                'sub_title' => 'The Walking Dad',
                'slug' => 'the-walking-dad',
                'body' => '<p>A lot has been said about the dead beat dad. He abandons his family and chooses his desires over the needs of his children.&nbsp;</p><p><br></p><p>Then there\'s the unavailable dad. He never takes time to find out how his children are doing and lacks an emotional connection with his family.&nbsp;</p><p><br></p><p>There is also the abusive dad. He takes out all his frustrations on his family and beats his children down at every given turn.&nbsp;</p><p><br></p><p>All these dads leave their children broken.</p><p><br></p><p>Going into adulthood with a sense of hopelessness and despair.&nbsp;</p><p><br></p><p>Too afraid to connect or connecting with a different version of their dads.&nbsp;</p><p><br></p><p>But how often do we recognize The Walking Dad?</p><p><br></p><p>The one who hustles day and night to give the best to his family? The one who walks barefoot so that his children have a pair of shoes to go to school with?&nbsp;</p><p><br></p><p>How often do we salute the dads that take their time to share their experiences? Urging their children not to make the same mistakes as they did?&nbsp;</p><p><br></p><p>When do we say thank you to the dads who discipline their children? The ones who raise leaders that turn the tides of society around?&nbsp;</p><p><br></p><p>We pay attention to all the evil, and ignore all the good.&nbsp;</p><p><br></p><p>We look at the glass as half empty rather than half full.&nbsp;</p><p><br></p><p>We feed the darkness and wonder where the light went.&nbsp;</p><p><br></p><p>Let us encourage the next generation instead of burdening them with sins of the past.&nbsp;</p><p><br></p><p>Let us uplift our men to be The Walking Dad.&nbsp;</p><div><br></div>',
                'meta_title' => 'title',
                'meta_description' => 'description',
                'meta_keywords' => 'keywords',
                'meta_image' => 'image',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 2,
                'blog_categories_id' => 1, 
                'title' => 'Don\'t Be A Suck Up',
                'sub_title' => 'Don\'t Be A Suck Up',
                'slug' => 'Don\'t Be A Suck Up',
                'body' => '<p>Everyone has at one point come across an <b>obsequious</b> person.&nbsp;</p><p><br></p><p>Someone who\'s always being <u>unnecessarily</u> affectionate towards others just to <b>gain some favor</b>, usually because they can\'t gain it by their own merit.&nbsp;</p><p><br></p><p>Don\'t be a suck up.&nbsp;</p><p><br></p><p>Focus on boosting your self esteem by nurturing your gifts and attributes.&nbsp;</p><p><br></p><p>Because you can never be sure that people will always love you. But you can rest easy when you love yourself.&nbsp;</p>',
                'meta_title' => 'title',
                'meta_description' => 'description',
                'meta_keywords' => 'keywords',
                'meta_image' => 'image',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 3,
                'blog_categories_id' => 1, 
                'title' => 'Choose Kind',
                'sub_title' => 'Choose Kind',
                'slug' => 'Choose Kind',
                'body' => '<p>Choosing kindness is always rewarding.&nbsp;</p><p><br></p><p>Whenever you\'re faced with cruelty, choose to be kind. The one oppressing you is full of heartache, for <b>one can only give what they have in abundance.&nbsp;</b></p><p><br></p><p>Approach life with a heart filled with positive energy, and you will receive it in turn.&nbsp;</p>',
                'meta_title' => 'title',
                'meta_description' => 'description',
                'meta_keywords' => 'keywords',
                'meta_image' => 'image',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 4,
                'blog_categories_id' => 3, 
                'title' => 'Millenial',
                'sub_title' => 'Millenial',
                'slug' => 'Millenial',
                'body' => '<p>A lot has been said about <b>Millenials</b>.</p><p>&nbsp;</p><p>Raised in a <b>revolutionary</b> era of <b>technology</b> and <b>liberalism</b>, they are a huge shift from the conservative generations ahead of them.&nbsp;</p><p><br></p><p>They may seem to have fleeting mindsets that offer no value, but millenials are generally <b>transparent</b> and <b>open minded</b>.&nbsp;</p><p><br></p><p>This has caused a big effect in the <u>definition of success.</u></p><p><br></p><p>Previously, success was strictly defined by one\'s <b>accolades in education </b>which would lead to progression into the corporate, medical, technical or political fields.&nbsp;</p><p><br></p><p>Currently, being<b> \'social media famous\'</b> is considered as success, and is probably the most <b>valuable asset </b>that any millenial can hold.&nbsp;</p><p><br></p><p>Though there are stark differences between Gen X and Millenials, both have had a huge impact in the <b>overall transformation of society </b>and should work together to build the infamous Gen Z.&nbsp;</p>',
                'meta_title' => 'title',
                'meta_description' => 'description',
                'meta_keywords' => 'keywords',
                'meta_image' => 'image',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 5,
                'blog_categories_id' => 1, 
                'title' => 'Energy Is Contagious',
                'sub_title' => 'Energy Is Contagious',
                'slug' => 'Energy Is Contagious',
                'body' => '<p>Self preservation is the first law of nature. We are inclined to focus on protecting ourselves, in order to better protect those closest to us.&nbsp;</p><p><br></p><p>Many of life\'s lessons lead us to question whether what we are a part of is beneficial or harmful.&nbsp;</p><p><br></p><p>When our environment is toxic, the default response is to change it.&nbsp;</p><p><br></p><p>And many times resistance accompanies the changes we want to make.&nbsp;</p><p><br></p><p>But we need to be at peace with the fact that what\'s right for us may not be right for others.&nbsp;</p><p><br></p><p>And sometimes it\'s necessary to say <a href=\"https://www.instagram.com/p/CYJ9q4TqVUt/?igshid=YmMyMTA2M2Y=\" target=\"_blank\" style=\"font-size: 1rem; background-color: rgb(255, 255, 255);\">I\'m Good Luv, Enjoy</a></p>',
                'meta_title' => 'title',
                'meta_description' => 'description',
                'meta_keywords' => 'keywords',
                'meta_image' => 'image',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 6,
                'blog_categories_id' => 1, 
                'title' => 'Be His Queen',
                'sub_title' => 'Be His Queen',
                'slug' => 'Be His Queen',
                'body' => '<p><br></p><p>Society has gone through many changes over the past two decades. Some have been positive and others have been toxic.</p><p><br></p><p>The idea that a woman doesn\'t need a man has been the most toxic, as it has completely changed the dynamic of the most basic unit of society, which is the family.&nbsp;</p><p><br></p><p>Throughout history, man and woman have been complements of each other, and it is for the sole reason of continuity.&nbsp;</p><p><br></p><p>There would be no society to speak of if our ancestors thought that the \'king and queen\' dynamic was archaic and needed to be done away with.&nbsp;</p><p><br></p><p>Men and women have equally important roles to play, even though they may differ.&nbsp;</p><p><br></p><p>Ignoring the roles of one to impose them on the other distorts the framework of the world.&nbsp;</p><p><br></p><p>And with such a dynamic, humanity will surely be extinct in the next few centuries.&nbsp;</p><p><br></p><p>Be <a href=\"https://www.instagram.com/p/CKuFaz6h_KZ/?igshid=YmMyMTA2M2Y=\" target=\"_blank\">His Queen</a>.&nbsp;</p><p><br></p><p><br></p>',
                'meta_title' => 'title',
                'meta_description' => 'description',
                'meta_keywords' => 'keywords',
                'meta_image' => 'image',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 7,
                'blog_categories_id' => 1, 
                'title' => 'A Life Without Prayer Is  A Life Without Power',
                'sub_title' => 'A Life Without Prayer Is  A Life Without Power',
                'slug' => 'A Life Without Prayer Is  A Life Without Power',
                'body' => '<p>It\'s easy to ignore the <a href=\"https://www.instagram.com/p/CQeH5EHhYN7/?igshid=YmMyMTA2M2Y=\" target=\"_blank\">Power of Prayer</a>&nbsp;in today\'s world.&nbsp;</p><p><br></p><p>It\'s therefore no mystery that a myriad of psychological problems are plaguing a vast majority of people worldwide.&nbsp;</p><p><br></p><p>People are turning to medication to cure their depression and anxiety.&nbsp;</p><p><br></p><p>Others are turning to drugs, alcohol and even unhealthy foods to just keep it together.&nbsp;</p><p><br></p><p>Most people don\'t know that we are spiritual beings. And one cannot feed the spirit by feeding the body.&nbsp;</p><p><br></p><p>The only way to keep our spirit alive is to acknowledge our Creator.&nbsp;</p><p><br></p><p>Communication is the key to a healthy relationship.&nbsp;</p><p><br></p><p>Prayer is how we communicate with our Creator.&nbsp;</p><p><br></p><p>How then can we expect to live healthy lives if we are not plugged in to our Life Source?&nbsp;</p><p><br></p><p>Start praying, and never stop.&nbsp;</p><div><br></div>',
                'meta_title' => 'title',
                'meta_description' => 'description',
                'meta_keywords' => 'keywords',
                'meta_image' => 'image',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
        ];

        // Insert each blog
        foreach ($blogs as $blogData) {
            $blog = Blogs::create($blogData);

            // Populate pivot tables
            BlogBlogCategories::create([
                'blogs_id' => $blog->id,
                'blog_categories_id' => $blogData['blog_categories_id'],
            ]);
        }
    }
}
