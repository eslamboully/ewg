<?php

namespace Modules\ConfigModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\ConfigModule\Entities\Config;
use Modules\ConfigModule\Entities\ConfigCategory;
use Modules\WidgetsModule\Entities\WorkHours;

class ConfigModuleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = Config::class;
        $config_categ = ConfigCategory::class;

        $config_categ::insert([
            'title' => 'اساسي'
        ]);
        $config_categ::insert([
            'title' => 'البحث'
        ]);
        $config_categ::insert([
            'title' => 'التواصل'
        ]);
        $config_categ::insert([
            'title' => 'منصات التواصل الاجتماعي'
        ]);
        $config_categ::insert([
            'title' => 'الاعلانات'
        ]);


        //////////////////////////////////////////////////////////////////////////////////////
        ///  General  ///////////////////////////////////////////////////////////////////////

        $config::insert([
            'var' => 'title_ar',
            'display_name' => 'اسم الموقع',
            'type' => 1,
            'value' => 'Car Rental',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'work_hour_ar',
            'display_name' => 'ساعات العمل',
            'type' => 1,
            'value' => 'السبت - الاحد من 10 صباحا الي 2 مسائا',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'first_title_ar',
            'display_name' => 'عنوان من نحن',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);



        $config::insert([
            'var' => 'first_desc_ar',
            'display_name' => 'النبذه الصغيرة لمن نحن',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'about_ar',
            'display_name' => 'النص الكتابي لمن نحن',
            'type' => 3,
            'value' => 'detail about website ',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'about_small_ar',
            'display_name' => 'وصف مصغر لمن نحن',
            'type' => 3,
            'value' => 'detail about website ',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'about',
            'display_name' => 'صورة من نحن',
            'type' => 2,
            'value' => 'about.png',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'logo',
            'display_name' => 'الشعار',
            'type' => 2,
            'value' => 'logo.png',
            'category_id' => 1
        ]);
        $config::insert([
            'var' => 'small_logo',
            'display_name' => 'الشعار المصغر',
            'type' => 2,
            'value' => 'logo.png',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'video',
            'display_name' => 'رابط اليوتيوب التعريفي',
            'type' => 1,
            'value' => 'https://www.youtube.com/watch?v=kxPCFljwJws',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'video_title_ar',
            'display_name' => 'عنوان الفيديو التعريفي',
            'type' => 1,
            'value' => 'https://www.youtube.com/watch?v=kxPCFljwJws',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'video_desc_ar',
            'display_name' => 'وصف الفيديو التعريفي',
            'type' => 3,
            'value' => 'https://www.youtube.com/watch?v=kxPCFljwJws',
            'category_id' => 1
        ]);



        $config::insert([
            'var' => 'why_us_title_ar',
            'display_name' => 'عنوان لماذا اخترتنا',
            'type' => 1,
            'value' => 'كلماتنا واهدافنا في الطب',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'why_us_desc_ar',
            'display_name' => 'وصف لماذا اخترتنا',
            'type' => 3,
            'value' => 'فيردى هى شركه مساهمه مصريه متخصصه فى انتاج وتوزيع الاسمده المتخصصه ',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'why_us_photo',
            'display_name' => 'صورة لماذا اخترتنا',
            'type' => 2,
            'value' => '',
            'category_id' => 1
        ]);



        $config::insert([
            'var' => 'helper_title_ar',
            'display_name' => 'عنوان الاستفسار والمساعدة',
            'type' => 1,
            'value' => 'بسبسي بس بسي ب',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'helper_desc_ar',
            'display_name' => 'وصف الاستفسار والمساعدة',
            'type' => 1,
            'value' => 'بسبسي بس بسي ب',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'helper_many_ar',
            'display_name' => 'نبذه الاستفسار والمساعدة',
            'type' => 3,
            'value' => 'بيسبيسبيسبيس بي سب يس بيس بي  بيس بيس بيس بيس يسب يس يس بي س بسيبب يسبسبسي بس بسي ب',
            'category_id' => 1
        ]);



         //////////////////////////////////////////////////////////////////////////////////////
        ///  SEO  ///////////////////////////////////////////////////////////////////////
        $config::insert([
            'var' => 'meta_title',
            'display_name' => 'Meta Title',
            'type' => 1,
            'value' => '0123456789',
            'category_id' => 2
        ]);
        $config::insert([
            'var' => 'meta_desc',
            'display_name' => 'Meta Description',
            'type' => 3,
            'value' => '0123456789',
            'category_id' => 2
        ]);
        $config::insert([
            'var' => 'meta_keywords',
            'display_name' => 'Meta Keywords',
            'type' => 3,
            'value' => '0123456789',
            'category_id' => 2
        ]);
        //////////////////////////////////////////////////////////////////////////////////////
        ///  Contact  ///////////////////////////////////////////////////////////////////////
        $config::insert([
            'var' => 'phone',
            'display_name' => 'الهاتف',
            'type' => 1,
            'value' => '0123456789',
            'category_id' => 3
        ]);
        $config::insert([
            'var' => 'email',
            'display_name' => 'البريد الالكتروني',
            'type' => 1,
            'value' => 'ddd@ff.com',
            'category_id' => 3
        ]);
        $config::insert([
            'var' => 'address_ar',
            'display_name' => 'العنوان',
            'type' => 3,
            'value' => '23 st cairo',
            'category_id' => 3
        ]);


        //////////////////////////////////////////////////////////////////////////////////////
        ///  Social  ///////////////////////////////////////////////////////////////////////
        $config::insert([
            'var' => 'youtube',
            'display_name' => 'يوتيوب ',
            'type' => 1,
            'value' => '',
            'category_id' => 4
        ]);
        $config::insert([
            'var' => 'telegram',
            'display_name' => 'تليجرام',
            'type' => 1,
            'value' => '',
            'category_id' => 4
        ]);
        $config::insert([
            'var' => 'tw_link',
            'display_name' => 'تويتر ',
            'type' => 1,
            'value' => '',
            'category_id' => 4
        ]);
        $config::insert([
            'var' => 'fb_link',
            'display_name' => 'فيس بوك',
            'type' => 1,
            'value' => '',
            'category_id' => 4
        ]);

        //////////////////////////////////
        /// ADs
        $config::insert([
            'var' => 'header_ads',
            'display_name' => 'Header Ad 728*90',
            'type' => 3,
            'value' => '  ',
            'category_id' => 5
        ]);

        $config::insert([
            'var' => 'sidebar_ads_1',
            'display_name' => 'Side Ad 300*250 (1)',
            'type' => 3,
            'value' => '  ',
            'category_id' => 5
        ]);
        $config::insert([
            'var' => 'sidebar_ads_2',
            'display_name' => 'Side Ad 300*250 (2)',
            'type' => 3,
            'value' => '  ',
            'category_id' => 5
        ]);
        $config::insert([
            'var' => 'bottom_ads',
            'display_name' => 'Bottom Ad 728*90',
            'type' => 3,
            'value' => '  ',
            'category_id' => 5
        ]);
        $config::insert([
            'var' => 'g+_link',
            'display_name' => 'google+_link',
            'type' => 4,
            'value' => ' https://www.googleplus.com/ ',
            'category_id' => 5
        ]);
        $config::insert([
            'var' => 'be_link',
            'display_name' => 'be_link',
            'type' => 4,
            'value' => ' https://www.behance.com/ ',
            'category_id' => 5
        ]);


        $config::insert([
            'var' => 'second_title_ar',
            'display_name' => 'عنوان خدماتنا',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'second_desc_ar',
            'display_name' => 'وصف لخدماتنا',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'third_title_ar',
            'display_name' => 'عنوان مشاريعنا',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'third_desc_ar',
            'display_name' => 'وصف لمشاريعنا',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);



        $config::insert([
            'var' => 'fourth_title_ar',
            'display_name' => 'عنوان فريقنا',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);

        $config::insert([
            'var' => 'fourth_desc_ar',
            'display_name' => 'وصف فريقنا',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);



        $config::insert([
            'var' => 'fifth_title_ar',
            'display_name' => 'عنوان العملاء',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);



        $config::insert([
            'var' => 'fifth_desc_ar',
            'display_name' => 'وصف العملاء',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'sixth_title_ar',
            'display_name' => 'عنوان المدونة',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


        $config::insert([
            'var' => 'sixth_desc_ar',
            'display_name' => 'وصف المدونة',
            'type' => 1,
            'value' => '',
            'category_id' => 1
        ]);


    }
}
