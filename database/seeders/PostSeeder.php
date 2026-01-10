<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $techCatId = DB::table('post_categories')->where('slug', 'technology')->first()->id ?? 1;
        $fashionCatId = DB::table('post_categories')->where('slug', 'fashion-style')->first()->id ?? 1;
        $lifestyleCatId = DB::table('post_categories')->where('slug', 'lifestyle')->first()->id ?? 1;

        DB::table('posts')->insert([
            [
                'title' => '10 Best Laptops for 2026',
                'slug' => '10-best-laptops-for-2026',
                'summary' => 'Discover the top laptops of 2026 with cutting-edge features and performance.',
                'description' => '<p>In this article, we review the 10 best laptops available in 2026. From gaming powerhouses to sleek ultrabooks, find the perfect laptop for your needs.</p><p>We cover specifications, pricing, and user reviews to help you make an informed decision.</p>',
                'quote' => 'Technology is best when it brings people together.',
                'photo' => '/storage/photos/blog/laptop-blog.jpg',
                'tags' => 'hot,trending',
                'post_cat_id' => $techCatId,
                'added_by' => 1,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fashion Trends for Spring 2026',
                'slug' => 'fashion-trends-spring-2026',
                'summary' => 'Explore the hottest fashion trends coming this spring season.',
                'description' => '<p>Spring 2026 brings exciting new fashion trends. From vibrant colors to sustainable fabrics, discover what\'s in style this season.</p><p>Learn about the must-have pieces and how to incorporate them into your wardrobe.</p>',
                'quote' => 'Fashion is about dressing according to what\'s fashionable. Style is more about being yourself.',
                'photo' => '/storage/photos/blog/fashion-blog.jpg',
                'tags' => 'featured,new',
                'post_cat_id' => $fashionCatId,
                'added_by' => 1,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Healthy Living Tips for Busy People',
                'slug' => 'healthy-living-tips-busy-people',
                'summary' => 'Practical tips for maintaining a healthy lifestyle despite a busy schedule.',
                'description' => '<p>Staying healthy doesn\'t have to be complicated. These simple tips will help you maintain your wellbeing even with a packed schedule.</p><p>From quick workouts to meal prep ideas, we\'ve got you covered.</p>',
                'quote' => 'Take care of your body. It\'s the only place you have to live.',
                'photo' => '/storage/photos/blog/health-blog.jpg',
                'tags' => 'trending',
                'post_cat_id' => $lifestyleCatId,
                'added_by' => 1,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Rise of AI in E-commerce',
                'slug' => 'rise-of-ai-ecommerce',
                'summary' => 'How artificial intelligence is transforming online shopping.',
                'description' => '<p>AI technology is revolutionizing the e-commerce industry. Learn about chatbots, personalized recommendations, and automated customer service.</p><p>Discover how AI can improve your shopping experience and boost business efficiency.</p>',
                'quote' => 'The future is already here – it\'s just not evenly distributed.',
                'photo' => '/storage/photos/blog/ai-blog.jpg',
                'tags' => 'hot,featured',
                'post_cat_id' => $techCatId,
                'added_by' => 1,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
