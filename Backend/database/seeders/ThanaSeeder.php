<?php

namespace Database\Seeders;

use App\Models\Thana;
use Illuminate\Database\Seeder;

class ThanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thana::insert([
                [
                    "id" => 1,
                    "district_id" => 1,
                    "name" => "Belabo",
                    "bn_name" => "বেলাবো"
                ],
                [
                    "id" => 2,
                    "district_id" => 1,
                    "name" => "Monohardi",
                    "bn_name" => "মনোহরদী"
                ],
                [
                    "id" => 3,
                    "district_id" => 1,
                    "name" => "Narsingdi Sadar",
                    "bn_name" => "নরসিংদী সদর"
                ],
                [
                    "id" => 4,
                    "district_id" => 1,
                    "name" => "Palash",
                    "bn_name" => "পলাশ"
                ],
                [
                    "id" => 5,
                    "district_id" => 1,
                    "name" => "Raipura",
                    "bn_name" => "রায়পুরা"
                ],
                [
                    "id" => 6,
                    "district_id" => 1,
                    "name" => "Shibpur",
                    "bn_name" => "শিবপুর"
                ],
                [
                    "id" => 7,
                    "district_id" => 2,
                    "name" => "Kaliganj",
                    "bn_name" => "কালীগঞ্জ"
                ],
                [
                    "id" => 8,
                    "district_id" => 2,
                    "name" => "Kaliakair",
                    "bn_name" => "কালিয়াকৈর"
                ],
                [
                    "id" => 9,
                    "district_id" => 2,
                    "name" => "Kapasia",
                    "bn_name" => "কাপাসিয়া"
                ],
                [
                    "id" => 10,
                    "district_id" => 2,
                    "name" => "Gazipur Sadar",
                    "bn_name" => "গাজীপুর সদর"
                ],
                [
                    "id" => 11,
                    "district_id" => 2,
                    "name" => "Sreepur",
                    "bn_name" => "শ্রীপুর"
                ],
                [
                    "id" => 12,
                    "district_id" => 3,
                    "name" => "Shariatpur Sadar",
                    "bn_name" => "শরিয়তপুর সদর"
                ],
                [
                    "id" => 13,
                    "district_id" => 3,
                    "name" => "Naria",
                    "bn_name" => "নড়িয়া"
                ],
                [
                    "id" => 14,
                    "district_id" => 3,
                    "name" => "Zajira",
                    "bn_name" => "জাজিরা"
                ],
                [
                    "id" => 15,
                    "district_id" => 3,
                    "name" => "Gosairhat",
                    "bn_name" => "গোসাইরহাট"
                ],
                [
                    "id" => 16,
                    "district_id" => 3,
                    "name" => "Bhedarganj",
                    "bn_name" => "ভেদরগঞ্জ"
                ],
                [
                    "id" => 17,
                    "district_id" => 3,
                    "name" => "Damudya",
                    "bn_name" => "ডামুড্যা"
                ],
                [
                    "id" => 18,
                    "district_id" => 4,
                    "name" => "Araihazar",
                    "bn_name" => "আড়াইহাজার"
                ],
                [
                    "id" => 19,
                    "district_id" => 4,
                    "name" => "Bandar",
                    "bn_name" => "বন্দর"
                ],
                [
                    "id" => 20,
                    "district_id" => 4,
                    "name" => "Narayanganj Sadar",
                    "bn_name" => "নারায়নগঞ্জ সদর"
                ],
                [
                    "id" => 21,
                    "district_id" => 4,
                    "name" => "Rupganj",
                    "bn_name" => "রূপগঞ্জ"
                ],
                [
                    "id" => 22,
                    "district_id" => 4,
                    "name" => "Sonargaon",
                    "bn_name" => "সোনারগাঁ"
                ],
                [
                    "id" => 23,
                    "district_id" => 5,
                    "name" => "Basail",
                    "bn_name" => "বাসাইল"
                ],
                [
                    "id" => 24,
                    "district_id" => 5,
                    "name" => "Bhuapur",
                    "bn_name" => "ভুয়াপুর"
                ],
                [
                    "id" => 25,
                    "district_id" => 5,
                    "name" => "Delduar",
                    "bn_name" => "দেলদুয়ার"
                ],
                [
                    "id" => 26,
                    "district_id" => 5,
                    "name" => "Ghatail",
                    "bn_name" => "ঘাটাইল"
                ],
                [
                    "id" => 27,
                    "district_id" => 5,
                    "name" => "Gopalpur",
                    "bn_name" => "গোপালপুর"
                ],
                [
                    "id" => 28,
                    "district_id" => 5,
                    "name" => "Madhupur",
                    "bn_name" => "মধুপুর"
                ],
                [
                    "id" => 29,
                    "district_id" => 5,
                    "name" => "Mirzapur",
                    "bn_name" => "মির্জাপুর"
                ],
                [
                    "id" => 30,
                    "district_id" => 5,
                    "name" => "Nagarpur",
                    "bn_name" => "নাগরপুর"
                ],
                [
                    "id" => 31,
                    "district_id" => 5,
                    "name" => "Sakhipur",
                    "bn_name" => "সখিপুর"
                ],
                [
                    "id" => 32,
                    "district_id" => 5,
                    "name" => "Tangail Sadar",
                    "bn_name" => "টাঙ্গাইল সদর"
                ],
                [
                    "id" => 33,
                    "district_id" => 5,
                    "name" => "Kalihati",
                    "bn_name" => "কালিহাতী"
                ],
                [
                    "id" => 34,
                    "district_id" => 5,
                    "name" => "Dhanbari",
                    "bn_name" => "ধনবাড়ী"
                ],
                [
                    "id" => 35,
                    "district_id" => 6,
                    "name" => "Itna",
                    "bn_name" => "ইটনা"
                ],
                [
                    "id" => 36,
                    "district_id" => 6,
                    "name" => "Katiadi",
                    "bn_name" => "কটিয়াদী"
                ],
                [
                    "id" => 37,
                    "district_id" => 6,
                    "name" => "Bhairab",
                    "bn_name" => "ভৈরব"
                ],
                [
                    "id" => 38,
                    "district_id" => 6,
                    "name" => "Tarail",
                    "bn_name" => "তাড়াইল"
                ],
                [
                    "id" => 39,
                    "district_id" => 6,
                    "name" => "Hossainpur",
                    "bn_name" => "হোসেনপুর"
                ],
                [
                    "id" => 40,
                    "district_id" => 6,
                    "name" => "Pakundia",
                    "bn_name" => "পাকুন্দিয়া"
                ],
                [
                    "id" => 41,
                    "district_id" => 6,
                    "name" => "Kuliarchar",
                    "bn_name" => "কুলিয়ারচর"
                ],
                [
                    "id" => 42,
                    "district_id" => 6,
                    "name" => "Kishoreganj Sadar",
                    "bn_name" => "কিশোরগঞ্জ সদর"
                ],
                [
                    "id" => 43,
                    "district_id" => 6,
                    "name" => "Karimgonj",
                    "bn_name" => "করিমগঞ্জ"
                ],
                [
                    "id" => 44,
                    "district_id" => 6,
                    "name" => "Bajitpur",
                    "bn_name" => "বাজিতপুর"
                ],
                [
                    "id" => 45,
                    "district_id" => 6,
                    "name" => "Austagram",
                    "bn_name" => "অষ্টগ্রাম"
                ],
                [
                    "id" => 46,
                    "district_id" => 6,
                    "name" => "Mithamoin",
                    "bn_name" => "মিঠামইন"
                ],
                [
                    "id" => 47,
                    "district_id" => 6,
                    "name" => "Nikli",
                    "bn_name" => "নিকলী"
                ],
                [
                    "id" => 48,
                    "district_id" => 7,
                    "name" => "Harirampur",
                    "bn_name" => "হরিরামপুর"
                ],
                [
                    "id" => 49,
                    "district_id" => 7,
                    "name" => "Saturia",
                    "bn_name" => "সাটুরিয়া"
                ],
                [
                    "id" => 50,
                    "district_id" => 7,
                    "name" => "Manikganj Sadar",
                    "bn_name" => "মানিকগঞ্জ সদর"
                ],
                [
                    "id" => 51,
                    "district_id" => 7,
                    "name" => "Gior",
                    "bn_name" => "ঘিওর"
                ],
                [
                    "id" => 52,
                    "district_id" => 7,
                    "name" => "Shibaloy",
                    "bn_name" => "শিবালয়"
                ],
                [
                    "id" => 53,
                    "district_id" => 7,
                    "name" => "Doulatpur",
                    "bn_name" => "দৌলতপুর"
                ],
                [
                    "id" => 54,
                    "district_id" => 7,
                    "name" => "Singiar",
                    "bn_name" => "সিংগাইর"
                ],
                [
                    "id" => 55,
                    "district_id" => 8,
                    "name" => "Savar",
                    "bn_name" => "সাভার"
                ],
                [
                    "id" => 56,
                    "district_id" => 8,
                    "name" => "Dhamrai",
                    "bn_name" => "ধামরাই"
                ],
                [
                    "id" => 57,
                    "district_id" => 8,
                    "name" => "Keraniganj",
                    "bn_name" => "কেরাণীগঞ্জ"
                ],
                [
                    "id" => 58,
                    "district_id" => 8,
                    "name" => "Nawabganj",
                    "bn_name" => "নবাবগঞ্জ"
                ],
                [
                    "id" => 59,
                    "district_id" => 8,
                    "name" => "Dohar",
                    "bn_name" => "দোহার"
                ],
                [
                    "id" => 60,
                    "district_id" => 9,
                    "name" => "Munshiganj Sadar",
                    "bn_name" => "মুন্সিগঞ্জ সদর"
                ],
                [
                    "id" => 61,
                    "district_id" => 9,
                    "name" => "Sreenagar",
                    "bn_name" => "শ্রীনগর"
                ],
                [
                    "id" => 62,
                    "district_id" => 9,
                    "name" => "Sirajdikhan",
                    "bn_name" => "সিরাজদিখান"
                ],
                [
                    "id" => 63,
                    "district_id" => 9,
                    "name" => "Louhajanj",
                    "bn_name" => "লৌহজং"
                ],
                [
                    "id" => 64,
                    "district_id" => 9,
                    "name" => "Gajaria",
                    "bn_name" => "গজারিয়া"
                ],
                [
                    "id" => 65,
                    "district_id" => 9,
                    "name" => "Tongibari",
                    "bn_name" => "টংগীবাড়ি"
                ],
                [
                    "id" => 66,
                    "district_id" => 10,
                    "name" => "Rajbari Sadar",
                    "bn_name" => "রাজবাড়ী সদর"
                ],
                [
                    "id" => 67,
                    "district_id" => 10,
                    "name" => "Goalanda",
                    "bn_name" => "গোয়ালন্দ"
                ],
                [
                    "id" => 68,
                    "district_id" => 10,
                    "name" => "Pangsa",
                    "bn_name" => "পাংশা"
                ],
                [
                    "id" => 69,
                    "district_id" => 10,
                    "name" => "Baliakandi",
                    "bn_name" => "বালিয়াকান্দি"
                ],
                [
                    "id" => 70,
                    "district_id" => 10,
                    "name" => "Kalukhali",
                    "bn_name" => "কালুখালী"
                ],
                [
                    "id" => 71,
                    "district_id" => 11,
                    "name" => "Madaripur Sadar",
                    "bn_name" => "মাদারীপুর সদর"
                ],
                [
                    "id" => 72,
                    "district_id" => 11,
                    "name" => "Shibchar",
                    "bn_name" => "শিবচর"
                ],
                [
                    "id" => 73,
                    "district_id" => 11,
                    "name" => "Kalkini",
                    "bn_name" => "কালকিনি"
                ],
                [
                    "id" => 74,
                    "district_id" => 11,
                    "name" => "Rajoir",
                    "bn_name" => "রাজৈর"
                ],
                [
                    "id" => 75,
                    "district_id" => 12,
                    "name" => "Gopalganj Sadar",
                    "bn_name" => "গোপালগঞ্জ সদর"
                ],
                [
                    "id" => 76,
                    "district_id" => 12,
                    "name" => "Kashiani",
                    "bn_name" => "কাশিয়ানী"
                ],
                [
                    "id" => 77,
                    "district_id" => 12,
                    "name" => "Tungipara",
                    "bn_name" => "টুংগীপাড়া"
                ],
                [
                    "id" => 78,
                    "district_id" => 12,
                    "name" => "Kotalipara",
                    "bn_name" => "কোটালীপাড়া"
                ],
                [
                    "id" => 79,
                    "district_id" => 12,
                    "name" => "Muksudpur",
                    "bn_name" => "মুকসুদপুর"
                ],
                [
                    "id" => 80,
                    "district_id" => 13,
                    "name" => "Faridpur Sadar",
                    "bn_name" => "ফরিদপুর সদর"
                ],
                [
                    "id" => 81,
                    "district_id" => 13,
                    "name" => "Alfadanga",
                    "bn_name" => "আলফাডাঙ্গা"
                ],
                [
                    "id" => 82,
                    "district_id" => 13,
                    "name" => "Boalmari",
                    "bn_name" => "বোয়ালমারী"
                ],
                [
                    "id" => 83,
                    "district_id" => 13,
                    "name" => "Sadarpur",
                    "bn_name" => "সদরপুর"
                ],
                [
                    "id" => 84,
                    "district_id" => 13,
                    "name" => "Nagarkanda",
                    "bn_name" => "নগরকান্দা"
                ],
                [
                    "id" => 85,
                    "district_id" => 13,
                    "name" => "Bhanga",
                    "bn_name" => "ভাঙ্গা"
                ],
                [
                    "id" => 86,
                    "district_id" => 13,
                    "name" => "Charbhadrasan",
                    "bn_name" => "চরভদ্রাসন"
                ],
                [
                    "id" => 87,
                    "district_id" => 13,
                    "name" => "Madhukhali",
                    "bn_name" => "মধুখালী"
                ],
                [
                    "id" => 88,
                    "district_id" => 13,
                    "name" => "Saltha",
                    "bn_name" => "সালথা"
                ],
                [
                    "id" => 89,
                    "district_id" => 14,
                    "name" => "Debidwar",
                    "bn_name" => "দেবিদ্বার"
                ],
                [
                    "id" => 90,
                    "district_id" => 14,
                    "name" => "Barura",
                    "bn_name" => "বরুড়া"
                ],
                [
                    "id" => 91,
                    "district_id" => 14,
                    "name" => "Brahmanpara",
                    "bn_name" => "ব্রাহ্মণপাড়া"
                ],
                [
                    "id" => 92,
                    "district_id" => 14,
                    "name" => "Chandina",
                    "bn_name" => "চান্দিনা"
                ],
                [
                    "id" => 93,
                    "district_id" => 14,
                    "name" => "Chauddagram",
                    "bn_name" => "চৌদ্দগ্রাম"
                ],
                [
                    "id" => 94,
                    "district_id" => 14,
                    "name" => "Daudkandi",
                    "bn_name" => "দাউদকান্দি"
                ],
                [
                    "id" => 95,
                    "district_id" => 14,
                    "name" => "Homna",
                    "bn_name" => "হোমনা"
                ],
                [
                    "id" => 96,
                    "district_id" => 14,
                    "name" => "Laksam",
                    "bn_name" => "লাকসাম"
                ],
                [
                    "id" => 97,
                    "district_id" => 14,
                    "name" => "Muradnagar",
                    "bn_name" => "মুরাদনগর"
                ],
                [
                    "id" => 98,
                    "district_id" => 14,
                    "name" => "Nangalkot",
                    "bn_name" => "নাঙ্গলকোট"
                ],
                [
                    "id" => 99,
                    "district_id" => 14,
                    "name" => "Comilla Sadar",
                    "bn_name" => "কুমিল্লা সদর"
                ],
                [
                    "id" => 100,
                    "district_id" => 14,
                    "name" => "Meghna",
                    "bn_name" => "মেঘনা"
                ],
                [
                    "id" => 101,
                    "district_id" => 14,
                    "name" => "Monohargonj",
                    "bn_name" => "মনোহরগঞ্জ"
                ],
                [
                    "id" => 102,
                    "district_id" => 14,
                    "name" => "South Sadar",
                    "bn_name" => "দক্ষিণ সদর"
                ],
                [
                    "id" => 103,
                    "district_id" => 14,
                    "name" => "Titas",
                    "bn_name" => "তিতাস"
                ],
                [
                    "id" => 104,
                    "district_id" => 14,
                    "name" => "Burichang",
                    "bn_name" => "বুড়িচং"
                ],
                [
                    "id" => 105,
                    "district_id" => 14,
                    "name" => "Lalmai",
                    "bn_name" => "লালমাই"
                ],
                [
                    "id" => 106,
                    "district_id" => 15,
                    "name" => "Chhagalnaiya",
                    "bn_name" => "ছাগলনাইয়া"
                ],
                [
                    "id" => 107,
                    "district_id" => 15,
                    "name" => "Feni Sadar",
                    "bn_name" => "ফেনী সদর"
                ],
                [
                    "id" => 108,
                    "district_id" => 15,
                    "name" => "Sonagazi",
                    "bn_name" => "সোনাগাজী"
                ],
                [
                    "id" => 109,
                    "district_id" => 15,
                    "name" => "Fulgazi",
                    "bn_name" => "ফুলগাজী"
                ],
                [
                    "id" => 110,
                    "district_id" => 15,
                    "name" => "Parshuram",
                    "bn_name" => "পরশুরাম"
                ],
                [
                    "id" => 111,
                    "district_id" => 15,
                    "name" => "Daganbhuiyan",
                    "bn_name" => "দাগনভূঞা"
                ],
                [
                    "id" => 112,
                    "district_id" => 16,
                    "name" => "Brahmanbaria Sadar",
                    "bn_name" => "ব্রাহ্মণবাড়িয়া সদর"
                ],
                [
                    "id" => 113,
                    "district_id" => 16,
                    "name" => "Kasba",
                    "bn_name" => "কসবা"
                ],
                [
                    "id" => 114,
                    "district_id" => 16,
                    "name" => "Nasirnagar",
                    "bn_name" => "নাসিরনগর"
                ],
                [
                    "id" => 115,
                    "district_id" => 16,
                    "name" => "Sarail",
                    "bn_name" => "সরাইল"
                ],
                [
                    "id" => 116,
                    "district_id" => 16,
                    "name" => "Ashuganj",
                    "bn_name" => "আশুগঞ্জ"
                ],
                [
                    "id" => 117,
                    "district_id" => 16,
                    "name" => "Akhaura",
                    "bn_name" => "আখাউড়া"
                ],
                [
                    "id" => 118,
                    "district_id" => 16,
                    "name" => "Nabinagar",
                    "bn_name" => "নবীনগর"
                ],
                [
                    "id" => 119,
                    "district_id" => 16,
                    "name" => "Bancharampur",
                    "bn_name" => "বাঞ্ছারামপুর"
                ],
                [
                    "id" => 120,
                    "district_id" => 16,
                    "name" => "Bijoynagar",
                    "bn_name" => "বিজয়নগর"
                ],
                [
                    "id" => 121,
                    "district_id" => 17,
                    "name" => "Rangamati Sadar",
                    "bn_name" => "রাঙ্গামাটি সদর"
                ],
                [
                    "id" => 122,
                    "district_id" => 17,
                    "name" => "Kaptai",
                    "bn_name" => "কাপ্তাই"
                ],
                [
                    "id" => 123,
                    "district_id" => 17,
                    "name" => "Kawkhali",
                    "bn_name" => "কাউখালী"
                ],
                [
                    "id" => 124,
                    "district_id" => 17,
                    "name" => "Baghaichari",
                    "bn_name" => "বাঘাইছড়ি"
                ],
                [
                    "id" => 125,
                    "district_id" => 17,
                    "name" => "Barkal",
                    "bn_name" => "বরকল"
                ],
                [
                    "id" => 126,
                    "district_id" => 17,
                    "name" => "Langadu",
                    "bn_name" => "লংগদু"
                ],
                [
                    "id" => 127,
                    "district_id" => 17,
                    "name" => "Rajasthali",
                    "bn_name" => "রাজস্থলী"
                ],
                [
                    "id" => 128,
                    "district_id" => 17,
                    "name" => "Belaichari",
                    "bn_name" => "বিলাইছড়ি"
                ],
                [
                    "id" => 129,
                    "district_id" => 17,
                    "name" => "Juraichari",
                    "bn_name" => "জুরাছড়ি"
                ],
                [
                    "id" => 130,
                    "district_id" => 17,
                    "name" => "Naniarchar",
                    "bn_name" => "নানিয়ারচর"
                ],
                [
                    "id" => 131,
                    "district_id" => 18,
                    "name" => "Noakhali Sadar",
                    "bn_name" => "নোয়াখালী সদর"
                ],
                [
                    "id" => 132,
                    "district_id" => 18,
                    "name" => "Companiganj",
                    "bn_name" => "কোম্পানীগঞ্জ"
                ],
                [
                    "id" => 133,
                    "district_id" => 18,
                    "name" => "Begumganj",
                    "bn_name" => "বেগমগঞ্জ"
                ],
                [
                    "id" => 134,
                    "district_id" => 18,
                    "name" => "Hatia",
                    "bn_name" => "হাতিয়া"
                ],
                [
                    "id" => 135,
                    "district_id" => 18,
                    "name" => "Subarnachar",
                    "bn_name" => "সুবর্ণচর"
                ],
                [
                    "id" => 136,
                    "district_id" => 18,
                    "name" => "Kabirhat",
                    "bn_name" => "কবিরহাট"
                ],
                [
                    "id" => 137,
                    "district_id" => 18,
                    "name" => "Senbug",
                    "bn_name" => "সেনবাগ"
                ],
                [
                    "id" => 138,
                    "district_id" => 18,
                    "name" => "Chatkhil",
                    "bn_name" => "চাটখিল"
                ],
                [
                    "id" => 139,
                    "district_id" => 18,
                    "name" => "Sonaimori",
                    "bn_name" => "সোনাইমুড়ী"
                ],
                [
                    "id" => 140,
                    "district_id" => 19,
                    "name" => "Haimchar",
                    "bn_name" => "হাইমচর"
                ],
                [
                    "id" => 141,
                    "district_id" => 19,
                    "name" => "Kachua",
                    "bn_name" => "কচুয়া"
                ],
                [
                    "id" => 142,
                    "district_id" => 19,
                    "name" => "Shahrasti",
                    "bn_name" => "শাহরাস্তি"
                ],
                [
                    "id" => 143,
                    "district_id" => 19,
                    "name" => "Chandpur Sadar",
                    "bn_name" => "চাঁদপুর সদর"
                ],
                [
                    "id" => 144,
                    "district_id" => 19,
                    "name" => "South Matlab",
                    "bn_name" => "দক্ষিণ মতলব"
                ],
                [
                    "id" => 145,
                    "district_id" => 19,
                    "name" => "Hajiganj",
                    "bn_name" => "হাজীগঞ্জ"
                ],
                [
                    "id" => 146,
                    "district_id" => 19,
                    "name" => "North Matlab",
                    "bn_name" => "উত্তর মতলব"
                ],
                [
                    "id" => 147,
                    "district_id" => 19,
                    "name" => "Faridgonj",
                    "bn_name" => "ফরিদগঞ্জ"
                ],
                [
                    "id" => 148,
                    "district_id" => 20,
                    "name" => "Lakshmipur Sadar",
                    "bn_name" => "লক্ষ্মীপুর সদর"
                ],
                [
                    "id" => 149,
                    "district_id" => 20,
                    "name" => "Kamalnagar",
                    "bn_name" => "কমলনগর"
                ],
                [
                    "id" => 150,
                    "district_id" => 20,
                    "name" => "Raipur",
                    "bn_name" => "রায়পুর"
                ],
                [
                    "id" => 151,
                    "district_id" => 20,
                    "name" => "Ramgati",
                    "bn_name" => "রামগতি"
                ],
                [
                    "id" => 152,
                    "district_id" => 20,
                    "name" => "Ramganj",
                    "bn_name" => "রামগঞ্জ"
                ],
                [
                    "id" => 153,
                    "district_id" => 21,
                    "name" => "Rangunia",
                    "bn_name" => "রাঙ্গুনিয়া"
                ],
                [
                    "id" => 154,
                    "district_id" => 21,
                    "name" => "Sitakunda",
                    "bn_name" => "সীতাকুন্ড"
                ],
                [
                    "id" => 155,
                    "district_id" => 21,
                    "name" => "Mirsharai",
                    "bn_name" => "মীরসরাই"
                ],
                [
                    "id" => 156,
                    "district_id" => 21,
                    "name" => "Patiya",
                    "bn_name" => "পটিয়া"
                ],
                [
                    "id" => 157,
                    "district_id" => 21,
                    "name" => "Sandwip",
                    "bn_name" => "সন্দ্বীপ"
                ],
                [
                    "id" => 158,
                    "district_id" => 21,
                    "name" => "Banshkhali",
                    "bn_name" => "বাঁশখালী"
                ],
                [
                    "id" => 159,
                    "district_id" => 21,
                    "name" => "Boalkhali",
                    "bn_name" => "বোয়ালখালী"
                ],
                [
                    "id" => 160,
                    "district_id" => 21,
                    "name" => "Anwara",
                    "bn_name" => "আনোয়ারা"
                ],
                [
                    "id" => 161,
                    "district_id" => 21,
                    "name" => "Chandanaish",
                    "bn_name" => "চন্দনাইশ"
                ],
                [
                    "id" => 162,
                    "district_id" => 21,
                    "name" => "Satkania",
                    "bn_name" => "সাতকানিয়া"
                ],
                [
                    "id" => 163,
                    "district_id" => 21,
                    "name" => "Lohagara",
                    "bn_name" => "লোহাগাড়া"
                ],
                [
                    "id" => 164,
                    "district_id" => 21,
                    "name" => "Hathazari",
                    "bn_name" => "হাটহাজারী"
                ],
                [
                    "id" => 165,
                    "district_id" => 21,
                    "name" => "Fatikchhari",
                    "bn_name" => "ফটিকছড়ি"
                ],
                [
                    "id" => 166,
                    "district_id" => 21,
                    "name" => "Raozan",
                    "bn_name" => "রাউজান"
                ],
                [
                    "id" => 167,
                    "district_id" => 21,
                    "name" => "Karnafuli",
                    "bn_name" => "কর্ণফুলী"
                ],
                [
                    "id" => 168,
                    "district_id" => 22,
                    "name" => "Coxsbazar Sadar",
                    "bn_name" => "কক্সবাজার সদর"
                ],
                [
                    "id" => 169,
                    "district_id" => 22,
                    "name" => "Chakaria",
                    "bn_name" => "চকরিয়া"
                ],
                [
                    "id" => 170,
                    "district_id" => 22,
                    "name" => "Kutubdia",
                    "bn_name" => "কুতুবদিয়া"
                ],
                [
                    "id" => 171,
                    "district_id" => 22,
                    "name" => "Ukhiya",
                    "bn_name" => "উখিয়া"
                ],
                [
                    "id" => 172,
                    "district_id" => 22,
                    "name" => "Moheshkhali",
                    "bn_name" => "মহেশখালী"
                ],
                [
                    "id" => 173,
                    "district_id" => 22,
                    "name" => "Pekua",
                    "bn_name" => "পেকুয়া"
                ],
                [
                    "id" => 174,
                    "district_id" => 22,
                    "name" => "Ramu",
                    "bn_name" => "রামু"
                ],
                [
                    "id" => 175,
                    "district_id" => 22,
                    "name" => "Teknaf",
                    "bn_name" => "টেকনাফ"
                ],
                [
                    "id" => 176,
                    "district_id" => 23,
                    "name" => "Khagrachhari Sadar",
                    "bn_name" => "খাগড়াছড়ি সদর"
                ],
                [
                    "id" => 177,
                    "district_id" => 23,
                    "name" => "Dighinala",
                    "bn_name" => "দিঘীনালা"
                ],
                [
                    "id" => 178,
                    "district_id" => 23,
                    "name" => "Panchari",
                    "bn_name" => "পানছড়ি"
                ],
                [
                    "id" => 179,
                    "district_id" => 23,
                    "name" => "Laxmichhari",
                    "bn_name" => "লক্ষীছড়ি"
                ],
                [
                    "id" => 180,
                    "district_id" => 23,
                    "name" => "Mohalchari",
                    "bn_name" => "মহালছড়ি"
                ],
                [
                    "id" => 181,
                    "district_id" => 23,
                    "name" => "Manikchari",
                    "bn_name" => "মানিকছড়ি"
                ],
                [
                    "id" => 182,
                    "district_id" => 23,
                    "name" => "Ramgarh",
                    "bn_name" => "রামগড়"
                ],
                [
                    "id" => 183,
                    "district_id" => 23,
                    "name" => "Matiranga",
                    "bn_name" => "মাটিরাঙ্গা"
                ],
                [
                    "id" => 184,
                    "district_id" => 23,
                    "name" => "Guimara",
                    "bn_name" => "গুইমারা"
                ],
                [
                    "id" => 185,
                    "district_id" => 24,
                    "name" => "Bandarban Sadar",
                    "bn_name" => "বান্দরবান সদর"
                ],
                [
                    "id" => 186,
                    "district_id" => 24,
                    "name" => "Alikadam",
                    "bn_name" => "আলীকদম"
                ],
                [
                    "id" => 187,
                    "district_id" => 24,
                    "name" => "Naikhongchhari",
                    "bn_name" => "নাইক্ষ্যংছড়ি"
                ],
                [
                    "id" => 188,
                    "district_id" => 24,
                    "name" => "Rowangchhari",
                    "bn_name" => "রোয়াংছড়ি"
                ],
                [
                    "id" => 189,
                    "district_id" => 24,
                    "name" => "Lama",
                    "bn_name" => "লামা"
                ],
                [
                    "id" => 190,
                    "district_id" => 24,
                    "name" => "Ruma",
                    "bn_name" => "রুমা"
                ],
                [
                    "id" => 191,
                    "district_id" => 24,
                    "name" => "Thanchi",
                    "bn_name" => "থানচি"
                ],
                [
                    "id" => 192,
                    "district_id" => 25,
                    "name" => "Belkuchi",
                    "bn_name" => "বেলকুচি"
                ],
                [
                    "id" => 193,
                    "district_id" => 25,
                    "name" => "Chauhali",
                    "bn_name" => "চৌহালি"
                ],
                [
                    "id" => 194,
                    "district_id" => 25,
                    "name" => "Kamarkhand",
                    "bn_name" => "কামারখন্দ"
                ],
                [
                    "id" => 195,
                    "district_id" => 25,
                    "name" => "Kazipur",
                    "bn_name" => "কাজীপুর"
                ],
                [
                    "id" => 196,
                    "district_id" => 25,
                    "name" => "Raigonj",
                    "bn_name" => "রায়গঞ্জ"
                ],
                [
                    "id" => 197,
                    "district_id" => 25,
                    "name" => "Shahjadpur",
                    "bn_name" => "শাহজাদপুর"
                ],
                [
                    "id" => 198,
                    "district_id" => 25,
                    "name" => "Sirajganj Sadar",
                    "bn_name" => "সিরাজগঞ্জ সদর"
                ],
                [
                    "id" => 199,
                    "district_id" => 25,
                    "name" => "Tarash",
                    "bn_name" => "তাড়াশ"
                ],
                [
                    "id" => 200,
                    "district_id" => 25,
                    "name" => "Ullapara",
                    "bn_name" => "উল্লাপাড়া"
                ],
                [
                    "id" => 201,
                    "district_id" => 26,
                    "name" => "Sujanagar",
                    "bn_name" => "সুজানগর"
                ],
                [
                    "id" => 202,
                    "district_id" => 26,
                    "name" => "Ishurdi",
                    "bn_name" => "ঈশ্বরদী"
                ],
                [
                    "id" => 203,
                    "district_id" => 26,
                    "name" => "Bhangura",
                    "bn_name" => "ভাঙ্গুড়া"
                ],
                [
                    "id" => 204,
                    "district_id" => 26,
                    "name" => "Pabna Sadar",
                    "bn_name" => "পাবনা সদর"
                ],
                [
                    "id" => 205,
                    "district_id" => 26,
                    "name" => "Bera",
                    "bn_name" => "বেড়া"
                ],
                [
                    "id" => 206,
                    "district_id" => 26,
                    "name" => "Atghoria",
                    "bn_name" => "আটঘরিয়া"
                ],
                [
                    "id" => 207,
                    "district_id" => 26,
                    "name" => "Chatmohar",
                    "bn_name" => "চাটমোহর"
                ],
                [
                    "id" => 208,
                    "district_id" => 26,
                    "name" => "Santhia",
                    "bn_name" => "সাঁথিয়া"
                ],
                [
                    "id" => 209,
                    "district_id" => 26,
                    "name" => "Faridpur",
                    "bn_name" => "ফরিদপুর"
                ],
                [
                    "id" => 210,
                    "district_id" => 27,
                    "name" => "Kahaloo",
                    "bn_name" => "কাহালু"
                ],
                [
                    "id" => 211,
                    "district_id" => 27,
                    "name" => "Bogra Sadar",
                    "bn_name" => "বগুড়া সদর"
                ],
                [
                    "id" => 212,
                    "district_id" => 27,
                    "name" => "Shariakandi",
                    "bn_name" => "সারিয়াকান্দি"
                ],
                [
                    "id" => 213,
                    "district_id" => 27,
                    "name" => "Shajahanpur",
                    "bn_name" => "শাজাহানপুর"
                ],
                [
                    "id" => 214,
                    "district_id" => 27,
                    "name" => "Dupchanchia",
                    "bn_name" => "দুপচাচিঁয়া"
                ],
                [
                    "id" => 215,
                    "district_id" => 27,
                    "name" => "Adamdighi",
                    "bn_name" => "আদমদিঘি"
                ],
                [
                    "id" => 216,
                    "district_id" => 27,
                    "name" => "Nondigram",
                    "bn_name" => "নন্দিগ্রাম"
                ],
                [
                    "id" => 217,
                    "district_id" => 27,
                    "name" => "Sonatala",
                    "bn_name" => "সোনাতলা"
                ],
                [
                    "id" => 218,
                    "district_id" => 27,
                    "name" => "Dhunot",
                    "bn_name" => "ধুনট"
                ],
                [
                    "id" => 219,
                    "district_id" => 27,
                    "name" => "Gabtali",
                    "bn_name" => "গাবতলী"
                ],
                [
                    "id" => 220,
                    "district_id" => 27,
                    "name" => "Sherpur",
                    "bn_name" => "শেরপুর"
                ],
                [
                    "id" => 221,
                    "district_id" => 27,
                    "name" => "Shibganj",
                    "bn_name" => "শিবগঞ্জ"
                ],
                [
                    "id" => 222,
                    "district_id" => 28,
                    "name" => "Paba",
                    "bn_name" => "পবা"
                ],
                [
                    "id" => 223,
                    "district_id" => 28,
                    "name" => "Durgapur",
                    "bn_name" => "দুর্গাপুর"
                ],
                [
                    "id" => 224,
                    "district_id" => 28,
                    "name" => "Mohonpur",
                    "bn_name" => "মোহনপুর"
                ],
                [
                    "id" => 225,
                    "district_id" => 28,
                    "name" => "Charghat",
                    "bn_name" => "চারঘাট"
                ],
                [
                    "id" => 226,
                    "district_id" => 28,
                    "name" => "Puthia",
                    "bn_name" => "পুঠিয়া"
                ],
                [
                    "id" => 227,
                    "district_id" => 28,
                    "name" => "Bagha",
                    "bn_name" => "বাঘা"
                ],
                [
                    "id" => 228,
                    "district_id" => 28,
                    "name" => "Godagari",
                    "bn_name" => "গোদাগাড়ী"
                ],
                [
                    "id" => 229,
                    "district_id" => 28,
                    "name" => "Tanore",
                    "bn_name" => "তানোর"
                ],
                [
                    "id" => 230,
                    "district_id" => 28,
                    "name" => "Bagmara",
                    "bn_name" => "বাগমারা"
                ],
                [
                    "id" => 231,
                    "district_id" => 29,
                    "name" => "Natore Sadar",
                    "bn_name" => "নাটোর সদর"
                ],
                [
                    "id" => 232,
                    "district_id" => 29,
                    "name" => "Singra",
                    "bn_name" => "সিংড়া"
                ],
                [
                    "id" => 233,
                    "district_id" => 29,
                    "name" => "Baraigram",
                    "bn_name" => "বড়াইগ্রাম"
                ],
                [
                    "id" => 234,
                    "district_id" => 29,
                    "name" => "Bagatipara",
                    "bn_name" => "বাগাতিপাড়া"
                ],
                [
                    "id" => 235,
                    "district_id" => 29,
                    "name" => "Lalpur",
                    "bn_name" => "লালপুর"
                ],
                [
                    "id" => 236,
                    "district_id" => 29,
                    "name" => "Gurudaspur",
                    "bn_name" => "গুরুদাসপুর"
                ],
                [
                    "id" => 237,
                    "district_id" => 29,
                    "name" => "Naldanga",
                    "bn_name" => "নলডাঙ্গা"
                ],
                [
                    "id" => 238,
                    "district_id" => 30,
                    "name" => "Akkelpur",
                    "bn_name" => "আক্কেলপুর"
                ],
                [
                    "id" => 239,
                    "district_id" => 30,
                    "name" => "Kalai",
                    "bn_name" => "কালাই"
                ],
                [
                    "id" => 240,
                    "district_id" => 30,
                    "name" => "Khetlal",
                    "bn_name" => "ক্ষেতলাল"
                ],
                [
                    "id" => 241,
                    "district_id" => 30,
                    "name" => "Panchbibi",
                    "bn_name" => "পাঁচবিবি"
                ],
                [
                    "id" => 242,
                    "district_id" => 30,
                    "name" => "Joypurhat Sadar",
                    "bn_name" => "জয়পুরহাট সদর"
                ],
                [
                    "id" => 243,
                    "district_id" => 31,
                    "name" => "Chapainawabganj Sadar",
                    "bn_name" => "চাঁপাইনবাবগঞ্জ সদর"
                ],
                [
                    "id" => 244,
                    "district_id" => 31,
                    "name" => "Gomostapur",
                    "bn_name" => "গোমস্তাপুর"
                ],
                [
                    "id" => 245,
                    "district_id" => 31,
                    "name" => "Nachol",
                    "bn_name" => "নাচোল"
                ],
                [
                    "id" => 246,
                    "district_id" => 31,
                    "name" => "Bholahat",
                    "bn_name" => "ভোলাহাট"
                ],
                [
                    "id" => 247,
                    "district_id" => 31,
                    "name" => "Shibganj",
                    "bn_name" => "শিবগঞ্জ"
                ],
                [
                    "id" => 248,
                    "district_id" => 32,
                    "name" => "Mohadevpur",
                    "bn_name" => "মহাদেবপুর"
                ],
                [
                    "id" => 249,
                    "district_id" => 32,
                    "name" => "Badalgachi",
                    "bn_name" => "বদলগাছী"
                ],
                [
                    "id" => 250,
                    "district_id" => 32,
                    "name" => "Patnitala",
                    "bn_name" => "পত্নিতলা"
                ],
                [
                    "id" => 251,
                    "district_id" => 32,
                    "name" => "Dhamoirhat",
                    "bn_name" => "ধামইরহাট"
                ],
                [
                    "id" => 252,
                    "district_id" => 32,
                    "name" => "Niamatpur",
                    "bn_name" => "নিয়ামতপুর"
                ],
                [
                    "id" => 253,
                    "district_id" => 32,
                    "name" => "Manda",
                    "bn_name" => "মান্দা"
                ],
                [
                    "id" => 254,
                    "district_id" => 32,
                    "name" => "Atrai",
                    "bn_name" => "আত্রাই"
                ],
                [
                    "id" => 255,
                    "district_id" => 32,
                    "name" => "Raninagar",
                    "bn_name" => "রাণীনগর"
                ],
                [
                    "id" => 256,
                    "district_id" => 32,
                    "name" => "Naogaon Sadar",
                    "bn_name" => "নওগাঁ সদর"
                ],
                [
                    "id" => 257,
                    "district_id" => 32,
                    "name" => "Porsha",
                    "bn_name" => "পোরশা"
                ],
                [
                    "id" => 258,
                    "district_id" => 32,
                    "name" => "Sapahar",
                    "bn_name" => "সাপাহার"
                ],
                [
                    "id" => 259,
                    "district_id" => 33,
                    "name" => "Manirampur",
                    "bn_name" => "মণিরামপুর"
                ],
                [
                    "id" => 260,
                    "district_id" => 33,
                    "name" => "Abhaynagar",
                    "bn_name" => "অভয়নগর"
                ],
                [
                    "id" => 261,
                    "district_id" => 33,
                    "name" => "Bagherpara",
                    "bn_name" => "বাঘারপাড়া"
                ],
                [
                    "id" => 262,
                    "district_id" => 33,
                    "name" => "Chougachha",
                    "bn_name" => "চৌগাছা"
                ],
                [
                    "id" => 263,
                    "district_id" => 33,
                    "name" => "Jhikargacha",
                    "bn_name" => "ঝিকরগাছা"
                ],
                [
                    "id" => 264,
                    "district_id" => 33,
                    "name" => "Keshabpur",
                    "bn_name" => "কেশবপুর"
                ],
                [
                    "id" => 265,
                    "district_id" => 33,
                    "name" => "Jessore Sadar",
                    "bn_name" => "যশোর সদর"
                ],
                [
                    "id" => 266,
                    "district_id" => 33,
                    "name" => "Sharsha",
                    "bn_name" => "শার্শা"
                ],
                [
                    "id" => 267,
                    "district_id" => 34,
                    "name" => "Assasuni",
                    "bn_name" => "আশাশুনি"
                ],
                [
                    "id" => 268,
                    "district_id" => 34,
                    "name" => "Debhata",
                    "bn_name" => "দেবহাটা"
                ],
                [
                    "id" => 269,
                    "district_id" => 34,
                    "name" => "Kalaroa",
                    "bn_name" => "কলারোয়া"
                ],
                [
                    "id" => 270,
                    "district_id" => 34,
                    "name" => "Satkhira Sadar",
                    "bn_name" => "সাতক্ষীরা সদর"
                ],
                [
                    "id" => 271,
                    "district_id" => 34,
                    "name" => "Shyamnagar",
                    "bn_name" => "শ্যামনগর"
                ],
                [
                    "id" => 272,
                    "district_id" => 34,
                    "name" => "Tala",
                    "bn_name" => "তালা"
                ],
                [
                    "id" => 273,
                    "district_id" => 34,
                    "name" => "Kaliganj",
                    "bn_name" => "কালিগঞ্জ"
                ],
                [
                    "id" => 274,
                    "district_id" => 35,
                    "name" => "Mujibnagar",
                    "bn_name" => "মুজিবনগর"
                ],
                [
                    "id" => 275,
                    "district_id" => 35,
                    "name" => "Meherpur Sadar",
                    "bn_name" => "মেহেরপুর সদর"
                ],
                [
                    "id" => 276,
                    "district_id" => 35,
                    "name" => "Gangni",
                    "bn_name" => "গাংনী"
                ],
                [
                    "id" => 277,
                    "district_id" => 36,
                    "name" => "Narail Sadar",
                    "bn_name" => "নড়াইল সদর"
                ],
                [
                    "id" => 278,
                    "district_id" => 36,
                    "name" => "Lohagara",
                    "bn_name" => "লোহাগড়া"
                ],
                [
                    "id" => 279,
                    "district_id" => 36,
                    "name" => "Kalia",
                    "bn_name" => "কালিয়া"
                ],
                [
                    "id" => 280,
                    "district_id" => 37,
                    "name" => "Chuadanga Sadar",
                    "bn_name" => "চুয়াডাঙ্গা সদর"
                ],
                [
                    "id" => 281,
                    "district_id" => 37,
                    "name" => "Alamdanga",
                    "bn_name" => "আলমডাঙ্গা"
                ],
                [
                    "id" => 282,
                    "district_id" => 37,
                    "name" => "Damurhuda",
                    "bn_name" => "দামুড়হুদা"
                ],
                [
                    "id" => 283,
                    "district_id" => 37,
                    "name" => "Jibannagar",
                    "bn_name" => "জীবননগর"
                ],
                [
                    "id" => 284,
                    "district_id" => 38,
                    "name" => "Kushtia Sadar",
                    "bn_name" => "কুষ্টিয়া সদর"
                ],
                [
                    "id" => 285,
                    "district_id" => 38,
                    "name" => "Kumarkhali",
                    "bn_name" => "কুমারখালী"
                ],
                [
                    "id" => 286,
                    "district_id" => 38,
                    "name" => "Khoksa",
                    "bn_name" => "খোকসা"
                ],
                [
                    "id" => 287,
                    "district_id" => 38,
                    "name" => "Mirpur",
                    "bn_name" => "মিরপুর"
                ],
                [
                    "id" => 288,
                    "district_id" => 38,
                    "name" => "Daulatpur",
                    "bn_name" => "দৌলতপুর"
                ],
                [
                    "id" => 289,
                    "district_id" => 38,
                    "name" => "Bheramara",
                    "bn_name" => "ভেড়ামারা"
                ],
                [
                    "id" => 290,
                    "district_id" => 39,
                    "name" => "Shalikha",
                    "bn_name" => "শালিখা"
                ],
                [
                    "id" => 291,
                    "district_id" => 39,
                    "name" => "Sreepur",
                    "bn_name" => "শ্রীপুর"
                ],
                [
                    "id" => 292,
                    "district_id" => 39,
                    "name" => "Magura Sadar",
                    "bn_name" => "মাগুরা সদর"
                ],
                [
                    "id" => 293,
                    "district_id" => 39,
                    "name" => "Mohammadpur",
                    "bn_name" => "মহম্মদপুর"
                ],
                [
                    "id" => 294,
                    "district_id" => 40,
                    "name" => "Paikgasa",
                    "bn_name" => "পাইকগাছা"
                ],
                [
                    "id" => 295,
                    "district_id" => 40,
                    "name" => "Fultola",
                    "bn_name" => "ফুলতলা"
                ],
                [
                    "id" => 296,
                    "district_id" => 40,
                    "name" => "Digholia",
                    "bn_name" => "দিঘলিয়া"
                ],
                [
                    "id" => 297,
                    "district_id" => 40,
                    "name" => "Rupsha",
                    "bn_name" => "রূপসা"
                ],
                [
                    "id" => 298,
                    "district_id" => 40,
                    "name" => "Terokhada",
                    "bn_name" => "তেরখাদা"
                ],
                [
                    "id" => 299,
                    "district_id" => 40,
                    "name" => "Dumuria",
                    "bn_name" => "ডুমুরিয়া"
                ],
                [
                    "id" => 300,
                    "district_id" => 40,
                    "name" => "Botiaghata",
                    "bn_name" => "বটিয়াঘাটা"
                ],
                [
                    "id" => 301,
                    "district_id" => 40,
                    "name" => "Dakop",
                    "bn_name" => "দাকোপ"
                ],
                [
                    "id" => 302,
                    "district_id" => 40,
                    "name" => "Koyra",
                    "bn_name" => "কয়রা"
                ],
                [
                    "id" => 303,
                    "district_id" => 41,
                    "name" => "Fakirhat",
                    "bn_name" => "ফকিরহাট"
                ],
                [
                    "id" => 304,
                    "district_id" => 41,
                    "name" => "Bagerhat Sadar",
                    "bn_name" => "বাগেরহাট সদর"
                ],
                [
                    "id" => 305,
                    "district_id" => 41,
                    "name" => "Mollahat",
                    "bn_name" => "মোল্লাহাট"
                ],
                [
                    "id" => 306,
                    "district_id" => 41,
                    "name" => "Sarankhola",
                    "bn_name" => "শরণখোলা"
                ],
                [
                    "id" => 307,
                    "district_id" => 41,
                    "name" => "Rampal",
                    "bn_name" => "রামপাল"
                ],
                [
                    "id" => 308,
                    "district_id" => 41,
                    "name" => "Morrelganj",
                    "bn_name" => "মোড়েলগঞ্জ"
                ],
                [
                    "id" => 309,
                    "district_id" => 41,
                    "name" => "Kachua",
                    "bn_name" => "কচুয়া"
                ],
                [
                    "id" => 310,
                    "district_id" => 41,
                    "name" => "Mongla",
                    "bn_name" => "মোংলা"
                ],
                [
                    "id" => 311,
                    "district_id" => 41,
                    "name" => "Chitalmari",
                    "bn_name" => "চিতলমারী"
                ],
                [
                    "id" => 312,
                    "district_id" => 42,
                    "name" => "Jhenaidah Sadar",
                    "bn_name" => "ঝিনাইদহ সদর"
                ],
                [
                    "id" => 313,
                    "district_id" => 42,
                    "name" => "Shailkupa",
                    "bn_name" => "শৈলকুপা"
                ],
                [
                    "id" => 314,
                    "district_id" => 42,
                    "name" => "Harinakundu",
                    "bn_name" => "হরিণাকুন্ডু"
                ],
                [
                    "id" => 315,
                    "district_id" => 42,
                    "name" => "Kaliganj",
                    "bn_name" => "কালীগঞ্জ"
                ],
                [
                    "id" => 316,
                    "district_id" => 42,
                    "name" => "Kotchandpur",
                    "bn_name" => "কোটচাঁদপুর"
                ],
                [
                    "id" => 317,
                    "district_id" => 42,
                    "name" => "Moheshpur",
                    "bn_name" => "মহেশপুর"
                ],
                [
                    "id" => 318,
                    "district_id" => 43,
                    "name" => "Jhalakathi Sadar",
                    "bn_name" => "ঝালকাঠি সদর"
                ],
                [
                    "id" => 319,
                    "district_id" => 43,
                    "name" => "Kathalia",
                    "bn_name" => "কাঠালিয়া"
                ],
                [
                    "id" => 320,
                    "district_id" => 43,
                    "name" => "Nalchity",
                    "bn_name" => "নলছিটি"
                ],
                [
                    "id" => 321,
                    "district_id" => 43,
                    "name" => "Rajapur",
                    "bn_name" => "রাজাপুর"
                ],
                [
                    "id" => 322,
                    "district_id" => 44,
                    "name" => "Bauphal",
                    "bn_name" => "বাউফল"
                ],
                [
                    "id" => 323,
                    "district_id" => 44,
                    "name" => "Patuakhali Sadar",
                    "bn_name" => "পটুয়াখালী সদর"
                ],
                [
                    "id" => 324,
                    "district_id" => 44,
                    "name" => "Dumki",
                    "bn_name" => "দুমকি"
                ],
                [
                    "id" => 325,
                    "district_id" => 44,
                    "name" => "Dashmina",
                    "bn_name" => "দশমিনা"
                ],
                [
                    "id" => 326,
                    "district_id" => 44,
                    "name" => "Kalapara",
                    "bn_name" => "কলাপাড়া"
                ],
                [
                    "id" => 327,
                    "district_id" => 44,
                    "name" => "Mirzaganj",
                    "bn_name" => "মির্জাগঞ্জ"
                ],
                [
                    "id" => 328,
                    "district_id" => 44,
                    "name" => "Galachipa",
                    "bn_name" => "গলাচিপা"
                ],
                [
                    "id" => 329,
                    "district_id" => 44,
                    "name" => "Rangabali",
                    "bn_name" => "রাঙ্গাবালী"
                ],
                [
                    "id" => 330,
                    "district_id" => 45,
                    "name" => "Pirojpur Sadar",
                    "bn_name" => "পিরোজপুর সদর"
                ],
                [
                    "id" => 331,
                    "district_id" => 45,
                    "name" => "Nazirpur",
                    "bn_name" => "নাজিরপুর"
                ],
                [
                    "id" => 332,
                    "district_id" => 45,
                    "name" => "Kawkhali",
                    "bn_name" => "কাউখালী"
                ],
                [
                    "id" => 333,
                    "district_id" => 45,
                    "name" => "Zianagar",
                    "bn_name" => "জিয়ানগর"
                ],
                [
                    "id" => 334,
                    "district_id" => 45,
                    "name" => "Bhandaria",
                    "bn_name" => "ভান্ডারিয়া"
                ],
                [
                    "id" => 335,
                    "district_id" => 45,
                    "name" => "Mathbaria",
                    "bn_name" => "মঠবাড়ীয়া"
                ],
                [
                    "id" => 336,
                    "district_id" => 45,
                    "name" => "Nesarabad",
                    "bn_name" => "নেছারাবাদ"
                ],
                [
                    "id" => 337,
                    "district_id" => 46,
                    "name" => "Barisal Sadar",
                    "bn_name" => "বরিশাল সদর"
                ],
                [
                    "id" => 338,
                    "district_id" => 46,
                    "name" => "Bakerganj",
                    "bn_name" => "বাকেরগঞ্জ"
                ],
                [
                    "id" => 339,
                    "district_id" => 46,
                    "name" => "Babuganj",
                    "bn_name" => "বাবুগঞ্জ"
                ],
                [
                    "id" => 340,
                    "district_id" => 46,
                    "name" => "Wazirpur",
                    "bn_name" => "উজিরপুর"
                ],
                [
                    "id" => 341,
                    "district_id" => 46,
                    "name" => "Banaripara",
                    "bn_name" => "বানারীপাড়া"
                ],
                [
                    "id" => 342,
                    "district_id" => 46,
                    "name" => "Gournadi",
                    "bn_name" => "গৌরনদী"
                ],
                [
                    "id" => 343,
                    "district_id" => 46,
                    "name" => "Agailjhara",
                    "bn_name" => "আগৈলঝাড়া"
                ],
                [
                    "id" => 344,
                    "district_id" => 46,
                    "name" => "Mehendiganj",
                    "bn_name" => "মেহেন্দিগঞ্জ"
                ],
                [
                    "id" => 345,
                    "district_id" => 46,
                    "name" => "Muladi",
                    "bn_name" => "মুলাদী"
                ],
                [
                    "id" => 346,
                    "district_id" => 46,
                    "name" => "Hizla",
                    "bn_name" => "হিজলা"
                ],
                [
                    "id" => 347,
                    "district_id" => 47,
                    "name" => "Bhola Sadar",
                    "bn_name" => "ভোলা সদর"
                ],
                [
                    "id" => 348,
                    "district_id" => 47,
                    "name" => "Borhan Uddin",
                    "bn_name" => "বোরহান উদ্দিন"
                ],
                [
                    "id" => 349,
                    "district_id" => 47,
                    "name" => "Charfesson",
                    "bn_name" => "চরফ্যাশন"
                ],
                [
                    "id" => 350,
                    "district_id" => 47,
                    "name" => "Doulatkhan",
                    "bn_name" => "দৌলতখান"
                ],
                [
                    "id" => 351,
                    "district_id" => 47,
                    "name" => "Monpura",
                    "bn_name" => "মনপুরা"
                ],
                [
                    "id" => 352,
                    "district_id" => 47,
                    "name" => "Tazumuddin",
                    "bn_name" => "তজুমদ্দিন"
                ],
                [
                    "id" => 353,
                    "district_id" => 47,
                    "name" => "Lalmohan",
                    "bn_name" => "লালমোহন"
                ],
                [
                    "id" => 354,
                    "district_id" => 48,
                    "name" => "Amtali",
                    "bn_name" => "আমতলী"
                ],
                [
                    "id" => 355,
                    "district_id" => 48,
                    "name" => "Barguna Sadar",
                    "bn_name" => "বরগুনা সদর"
                ],
                [
                    "id" => 356,
                    "district_id" => 48,
                    "name" => "Betagi",
                    "bn_name" => "বেতাগী"
                ],
                [
                    "id" => 357,
                    "district_id" => 48,
                    "name" => "Bamna",
                    "bn_name" => "বামনা"
                ],
                [
                    "id" => 358,
                    "district_id" => 48,
                    "name" => "Pathorghata",
                    "bn_name" => "পাথরঘাটা"
                ],
                [
                    "id" => 359,
                    "district_id" => 48,
                    "name" => "Taltali",
                    "bn_name" => "তালতলি"
                ],
                [
                    "id" => 360,
                    "district_id" => 49,
                    "name" => "Panchagarh Sadar",
                    "bn_name" => "পঞ্চগড় সদর"
                ],
                [
                    "id" => 361,
                    "district_id" => 49,
                    "name" => "Debiganj",
                    "bn_name" => "দেবীগঞ্জ"
                ],
                [
                    "id" => 362,
                    "district_id" => 49,
                    "name" => "Boda",
                    "bn_name" => "বোদা"
                ],
                [
                    "id" => 363,
                    "district_id" => 49,
                    "name" => "Atwari",
                    "bn_name" => "আটোয়ারী"
                ],
                [
                    "id" => 364,
                    "district_id" => 49,
                    "name" => "Tetulia",
                    "bn_name" => "তেতুলিয়া"
                ],
                [
                    "id" => 365,
                    "district_id" => 50,
                    "name" => "Nawabganj",
                    "bn_name" => "নবাবগঞ্জ"
                ],
                [
                    "id" => 366,
                    "district_id" => 50,
                    "name" => "Birganj",
                    "bn_name" => "বীরগঞ্জ"
                ],
                [
                    "id" => 367,
                    "district_id" => 50,
                    "name" => "Ghoraghat",
                    "bn_name" => "ঘোড়াঘাট"
                ],
                [
                    "id" => 368,
                    "district_id" => 50,
                    "name" => "Birampur",
                    "bn_name" => "বিরামপুর"
                ],
                [
                    "id" => 369,
                    "district_id" => 50,
                    "name" => "Parbatipur",
                    "bn_name" => "পার্বতীপুর"
                ],
                [
                    "id" => 370,
                    "district_id" => 50,
                    "name" => "Bochaganj",
                    "bn_name" => "বোচাগঞ্জ"
                ],
                [
                    "id" => 371,
                    "district_id" => 50,
                    "name" => "Kaharol",
                    "bn_name" => "কাহারোল"
                ],
                [
                    "id" => 372,
                    "district_id" => 50,
                    "name" => "Fulbari",
                    "bn_name" => "ফুলবাড়ী"
                ],
                [
                    "id" => 373,
                    "district_id" => 50,
                    "name" => "Dinajpur Sadar",
                    "bn_name" => "দিনাজপুর সদর"
                ],
                [
                    "id" => 374,
                    "district_id" => 50,
                    "name" => "Hakimpur",
                    "bn_name" => "হাকিমপুর"
                ],
                [
                    "id" => 375,
                    "district_id" => 50,
                    "name" => "Khansama",
                    "bn_name" => "খানসামা"
                ],
                [
                    "id" => 376,
                    "district_id" => 50,
                    "name" => "Birol",
                    "bn_name" => "বিরল"
                ],
                [
                    "id" => 377,
                    "district_id" => 50,
                    "name" => "Chirirbandar",
                    "bn_name" => "চিরিরবন্দর"
                ],
                [
                    "id" => 378,
                    "district_id" => 51,
                    "name" => "Lalmonirhat Sadar",
                    "bn_name" => "লালমনিরহাট সদর"
                ],
                [
                    "id" => 379,
                    "district_id" => 51,
                    "name" => "Kaliganj",
                    "bn_name" => "কালীগঞ্জ"
                ],
                [
                    "id" => 380,
                    "district_id" => 51,
                    "name" => "Hatibandha",
                    "bn_name" => "হাতীবান্ধা"
                ],
                [
                    "id" => 381,
                    "district_id" => 51,
                    "name" => "Patgram",
                    "bn_name" => "পাটগ্রাম"
                ],
                [
                    "id" => 382,
                    "district_id" => 51,
                    "name" => "Aditmari",
                    "bn_name" => "আদিতমারী"
                ],
                [
                    "id" => 383,
                    "district_id" => 52,
                    "name" => "Syedpur",
                    "bn_name" => "সৈয়দপুর"
                ],
                [
                    "id" => 384,
                    "district_id" => 52,
                    "name" => "Domar",
                    "bn_name" => "ডোমার"
                ],
                [
                    "id" => 385,
                    "district_id" => 52,
                    "name" => "Dimla",
                    "bn_name" => "ডিমলা"
                ],
                [
                    "id" => 386,
                    "district_id" => 52,
                    "name" => "Jaldhaka",
                    "bn_name" => "জলঢাকা"
                ],
                [
                    "id" => 387,
                    "district_id" => 52,
                    "name" => "Kishorganj",
                    "bn_name" => "কিশোরগঞ্জ"
                ],
                [
                    "id" => 388,
                    "district_id" => 52,
                    "name" => "Nilphamari Sadar",
                    "bn_name" => "নীলফামারী সদর"
                ],
                [
                    "id" => 389,
                    "district_id" => 53,
                    "name" => "Sadullapur",
                    "bn_name" => "সাদুল্লাপুর"
                ],
                [
                    "id" => 390,
                    "district_id" => 53,
                    "name" => "Gaibandha Sadar",
                    "bn_name" => "গাইবান্ধা সদর"
                ],
                [
                    "id" => 391,
                    "district_id" => 53,
                    "name" => "Palashbari",
                    "bn_name" => "পলাশবাড়ী"
                ],
                [
                    "id" => 392,
                    "district_id" => 53,
                    "name" => "Saghata",
                    "bn_name" => "সাঘাটা"
                ],
                [
                    "id" => 393,
                    "district_id" => 53,
                    "name" => "Gobindaganj",
                    "bn_name" => "গোবিন্দগঞ্জ"
                ],
                [
                    "id" => 394,
                    "district_id" => 53,
                    "name" => "Sundarganj",
                    "bn_name" => "সুন্দরগঞ্জ"
                ],
                [
                    "id" => 395,
                    "district_id" => 53,
                    "name" => "Phulchari",
                    "bn_name" => "ফুলছড়ি"
                ],
                [
                    "id" => 396,
                    "district_id" => 54,
                    "name" => "Thakurgaon Sadar",
                    "bn_name" => "ঠাকুরগাঁও সদর"
                ],
                [
                    "id" => 397,
                    "district_id" => 54,
                    "name" => "Pirganj",
                    "bn_name" => "পীরগঞ্জ"
                ],
                [
                    "id" => 398,
                    "district_id" => 54,
                    "name" => "Ranisankail",
                    "bn_name" => "রাণীশংকৈল"
                ],
                [
                    "id" => 399,
                    "district_id" => 54,
                    "name" => "Haripur",
                    "bn_name" => "হরিপুর"
                ],
                [
                    "id" => 400,
                    "district_id" => 54,
                    "name" => "Baliadangi",
                    "bn_name" => "বালিয়াডাঙ্গী"
                ],
                [
                    "id" => 401,
                    "district_id" => 55,
                    "name" => "Rangpur Sadar",
                    "bn_name" => "রংপুর সদর"
                ],
                [
                    "id" => 402,
                    "district_id" => 55,
                    "name" => "Gangachara",
                    "bn_name" => "গংগাচড়া"
                ],
                [
                    "id" => 403,
                    "district_id" => 55,
                    "name" => "Taragonj",
                    "bn_name" => "তারাগঞ্জ"
                ],
                [
                    "id" => 404,
                    "district_id" => 55,
                    "name" => "Badargonj",
                    "bn_name" => "বদরগঞ্জ"
                ],
                [
                    "id" => 405,
                    "district_id" => 55,
                    "name" => "Mithapukur",
                    "bn_name" => "মিঠাপুকুর"
                ],
                [
                    "id" => 406,
                    "district_id" => 55,
                    "name" => "Pirgonj",
                    "bn_name" => "পীরগঞ্জ"
                ],
                [
                    "id" => 407,
                    "district_id" => 55,
                    "name" => "Kaunia",
                    "bn_name" => "কাউনিয়া"
                ],
                [
                    "id" => 408,
                    "district_id" => 55,
                    "name" => "Pirgacha",
                    "bn_name" => "পীরগাছা"
                ],
                [
                    "id" => 409,
                    "district_id" => 56,
                    "name" => "Kurigram Sadar",
                    "bn_name" => "কুড়িগ্রাম সদর"
                ],
                [
                    "id" => 410,
                    "district_id" => 56,
                    "name" => "Nageshwari",
                    "bn_name" => "নাগেশ্বরী"
                ],
                [
                    "id" => 411,
                    "district_id" => 56,
                    "name" => "Bhurungamari",
                    "bn_name" => "ভুরুঙ্গামারী"
                ],
                [
                    "id" => 412,
                    "district_id" => 56,
                    "name" => "Phulbari",
                    "bn_name" => "ফুলবাড়ী"
                ],
                [
                    "id" => 413,
                    "district_id" => 56,
                    "name" => "Rajarhat",
                    "bn_name" => "রাজারহাট"
                ],
                [
                    "id" => 414,
                    "district_id" => 56,
                    "name" => "Ulipur",
                    "bn_name" => "উলিপুর"
                ],
                [
                    "id" => 415,
                    "district_id" => 56,
                    "name" => "Chilmari",
                    "bn_name" => "চিলমারী"
                ],
                [
                    "id" => 416,
                    "district_id" => 56,
                    "name" => "Rowmari",
                    "bn_name" => "রৌমারী"
                ],
                [
                    "id" => 417,
                    "district_id" => 56,
                    "name" => "Char Rajibpur",
                    "bn_name" => "চর রাজিবপুর"
                ],
                [
                    "id" => 418,
                    "district_id" => 57,
                    "name" => "Balaganj",
                    "bn_name" => "বালাগঞ্জ"
                ],
                [
                    "id" => 419,
                    "district_id" => 57,
                    "name" => "Beanibazar",
                    "bn_name" => "বিয়ানীবাজার"
                ],
                [
                    "id" => 420,
                    "district_id" => 57,
                    "name" => "Bishwanath",
                    "bn_name" => "বিশ্বনাথ"
                ],
                [
                    "id" => 421,
                    "district_id" => 57,
                    "name" => "Companiganj",
                    "bn_name" => "কোম্পানীগঞ্জ"
                ],
                [
                    "id" => 422,
                    "district_id" => 57,
                    "name" => "Fenchuganj",
                    "bn_name" => "ফেঞ্চুগঞ্জ"
                ],
                [
                    "id" => 423,
                    "district_id" => 57,
                    "name" => "Golapganj",
                    "bn_name" => "গোলাপগঞ্জ"
                ],
                [
                    "id" => 424,
                    "district_id" => 57,
                    "name" => "Gowainghat",
                    "bn_name" => "গোয়াইনঘাট"
                ],
                [
                    "id" => 425,
                    "district_id" => 57,
                    "name" => "Jaintiapur",
                    "bn_name" => "জৈন্তাপুর"
                ],
                [
                    "id" => 426,
                    "district_id" => 57,
                    "name" => "Kanaighat",
                    "bn_name" => "কানাইঘাট"
                ],
                [
                    "id" => 427,
                    "district_id" => 57,
                    "name" => "Sylhet Sadar",
                    "bn_name" => "সিলেট সদর"
                ],
                [
                    "id" => 428,
                    "district_id" => 57,
                    "name" => "Zakiganj",
                    "bn_name" => "জকিগঞ্জ"
                ],
                [
                    "id" => 429,
                    "district_id" => 57,
                    "name" => "Dakshin Surma",
                    "bn_name" => "দক্ষিণ সুরমা"
                ],
                [
                    "id" => 430,
                    "district_id" => 57,
                    "name" => "Osmani Nagar",
                    "bn_name" => "ওসমানী নগর"
                ],
                [
                    "id" => 431,
                    "district_id" => 58,
                    "name" => "Barlekha",
                    "bn_name" => "বড়লেখা"
                ],
                [
                    "id" => 432,
                    "district_id" => 58,
                    "name" => "Kamolganj",
                    "bn_name" => "কমলগঞ্জ"
                ],
                [
                    "id" => 433,
                    "district_id" => 58,
                    "name" => "Kulaura",
                    "bn_name" => "কুলাউড়া"
                ],
                [
                    "id" => 434,
                    "district_id" => 58,
                    "name" => "Moulvibazar Sadar",
                    "bn_name" => "মৌলভীবাজার সদর"
                ],
                [
                    "id" => 435,
                    "district_id" => 58,
                    "name" => "Rajnagar",
                    "bn_name" => "রাজনগর"
                ],
                [
                    "id" => 436,
                    "district_id" => 58,
                    "name" => "Sreemangal",
                    "bn_name" => "শ্রীমঙ্গল"
                ],
                [
                    "id" => 437,
                    "district_id" => 58,
                    "name" => "Juri",
                    "bn_name" => "জুড়ী"
                ],
                [
                    "id" => 438,
                    "district_id" => 59,
                    "name" => "Nabiganj",
                    "bn_name" => "নবীগঞ্জ"
                ],
                [
                    "id" => 439,
                    "district_id" => 59,
                    "name" => "Bahubal",
                    "bn_name" => "বাহুবল"
                ],
                [
                    "id" => 440,
                    "district_id" => 59,
                    "name" => "Ajmiriganj",
                    "bn_name" => "আজমিরীগঞ্জ"
                ],
                [
                    "id" => 441,
                    "district_id" => 59,
                    "name" => "Baniachong",
                    "bn_name" => "বানিয়াচং"
                ],
                [
                    "id" => 442,
                    "district_id" => 59,
                    "name" => "Lakhai",
                    "bn_name" => "লাখাই"
                ],
                [
                    "id" => 443,
                    "district_id" => 59,
                    "name" => "Chunarughat",
                    "bn_name" => "চুনারুঘাট"
                ],
                [
                    "id" => 444,
                    "district_id" => 59,
                    "name" => "Habiganj Sadar",
                    "bn_name" => "হবিগঞ্জ সদর"
                ],
                [
                    "id" => 445,
                    "district_id" => 59,
                    "name" => "Madhabpur",
                    "bn_name" => "মাধবপুর"
                ],
                [
                    "id" => 446,
                    "district_id" => 60,
                    "name" => "Sunamganj Sadar",
                    "bn_name" => "সুনামগঞ্জ সদর"
                ],
                [
                    "id" => 447,
                    "district_id" => 60,
                    "name" => "South Sunamganj",
                    "bn_name" => "দক্ষিণ সুনামগঞ্জ"
                ],
                [
                    "id" => 448,
                    "district_id" => 60,
                    "name" => "Bishwambarpur",
                    "bn_name" => "বিশ্বম্ভরপুর"
                ],
                [
                    "id" => 449,
                    "district_id" => 60,
                    "name" => "Chhatak",
                    "bn_name" => "ছাতক"
                ],
                [
                    "id" => 450,
                    "district_id" => 60,
                    "name" => "Jagannathpur",
                    "bn_name" => "জগন্নাথপুর"
                ],
                [
                    "id" => 451,
                    "district_id" => 60,
                    "name" => "Dowarabazar",
                    "bn_name" => "দোয়ারাবাজার"
                ],
                [
                    "id" => 452,
                    "district_id" => 60,
                    "name" => "Tahirpur",
                    "bn_name" => "তাহিরপুর"
                ],
                [
                    "id" => 453,
                    "district_id" => 60,
                    "name" => "Dharmapasha",
                    "bn_name" => "ধর্মপাশা"
                ],
                [
                    "id" => 454,
                    "district_id" => 60,
                    "name" => "Jamalganj",
                    "bn_name" => "জামালগঞ্জ"
                ],
                [
                    "id" => 455,
                    "district_id" => 60,
                    "name" => "Shalla",
                    "bn_name" => "শাল্লা"
                ],
                [
                    "id" => 456,
                    "district_id" => 60,
                    "name" => "Derai",
                    "bn_name" => "দিরাই"
                ],
                [
                    "id" => 457,
                    "district_id" => 61,
                    "name" => "Sherpur Sadar",
                    "bn_name" => "শেরপুর সদর"
                ],
                [
                    "id" => 458,
                    "district_id" => 61,
                    "name" => "Nalitabari",
                    "bn_name" => "নালিতাবাড়ী"
                ],
                [
                    "id" => 459,
                    "district_id" => 61,
                    "name" => "Sreebordi",
                    "bn_name" => "শ্রীবরদী"
                ],
                [
                    "id" => 460,
                    "district_id" => 61,
                    "name" => "Nokla",
                    "bn_name" => "নকলা"
                ],
                [
                    "id" => 461,
                    "district_id" => 61,
                    "name" => "Jhenaigati",
                    "bn_name" => "ঝিনাইগাতী"
                ],
                [
                    "id" => 462,
                    "district_id" => 62,
                    "name" => "Fulbaria",
                    "bn_name" => "ফুলবাড়ীয়া"
                ],
                [
                    "id" => 463,
                    "district_id" => 62,
                    "name" => "Trishal",
                    "bn_name" => "ত্রিশাল"
                ],
                [
                    "id" => 464,
                    "district_id" => 62,
                    "name" => "Bhaluka",
                    "bn_name" => "ভালুকা"
                ],
                [
                    "id" => 465,
                    "district_id" => 62,
                    "name" => "Muktagacha",
                    "bn_name" => "মুক্তাগাছা"
                ],
                [
                    "id" => 466,
                    "district_id" => 62,
                    "name" => "Mymensingh Sadar",
                    "bn_name" => "ময়মনসিংহ সদর"
                ],
                [
                    "id" => 467,
                    "district_id" => 62,
                    "name" => "Dhobaura",
                    "bn_name" => "ধোবাউড়া"
                ],
                [
                    "id" => 468,
                    "district_id" => 62,
                    "name" => "Phulpur",
                    "bn_name" => "ফুলপুর"
                ],
                [
                    "id" => 469,
                    "district_id" => 62,
                    "name" => "Haluaghat",
                    "bn_name" => "হালুয়াঘাট"
                ],
                [
                    "id" => 470,
                    "district_id" => 62,
                    "name" => "Gouripur",
                    "bn_name" => "গৌরীপুর"
                ],
                [
                    "id" => 471,
                    "district_id" => 62,
                    "name" => "Gafargaon",
                    "bn_name" => "গফরগাঁও"
                ],
                [
                    "id" => 472,
                    "district_id" => 62,
                    "name" => "Iswarganj",
                    "bn_name" => "ঈশ্বরগঞ্জ"
                ],
                [
                    "id" => 473,
                    "district_id" => 62,
                    "name" => "Nandail",
                    "bn_name" => "নান্দাইল"
                ],
                [
                    "id" => 474,
                    "district_id" => 62,
                    "name" => "Tarakanda",
                    "bn_name" => "তারাকান্দা"
                ],
                [
                    "id" => 475,
                    "district_id" => 63,
                    "name" => "Jamalpur Sadar",
                    "bn_name" => "জামালপুর সদর"
                ],
                [
                    "id" => 476,
                    "district_id" => 63,
                    "name" => "Melandah",
                    "bn_name" => "মেলান্দহ"
                ],
                [
                    "id" => 477,
                    "district_id" => 63,
                    "name" => "Islampur",
                    "bn_name" => "ইসলামপুর"
                ],
                [
                    "id" => 478,
                    "district_id" => 63,
                    "name" => "Dewangonj",
                    "bn_name" => "দেওয়ানগঞ্জ"
                ],
                [
                    "id" => 479,
                    "district_id" => 63,
                    "name" => "Sarishabari",
                    "bn_name" => "সরিষাবাড়ী"
                ],
                [
                    "id" => 480,
                    "district_id" => 63,
                    "name" => "Madarganj",
                    "bn_name" => "মাদারগঞ্জ"
                ],
                [
                    "id" => 481,
                    "district_id" => 63,
                    "name" => "Bokshiganj",
                    "bn_name" => "বকশীগঞ্জ"
                ],
                [
                    "id" => 482,
                    "district_id" => 64,
                    "name" => "Barhatta",
                    "bn_name" => "বারহাট্টা"
                ],
                [
                    "id" => 483,
                    "district_id" => 64,
                    "name" => "Durgapur",
                    "bn_name" => "দুর্গাপুর"
                ],
                [
                    "id" => 484,
                    "district_id" => 64,
                    "name" => "Kendua",
                    "bn_name" => "কেন্দুয়া"
                ],
                [
                    "id" => 485,
                    "district_id" => 64,
                    "name" => "Atpara",
                    "bn_name" => "আটপাড়া"
                ],
                [
                    "id" => 486,
                    "district_id" => 64,
                    "name" => "Madan",
                    "bn_name" => "মদন"
                ],
                [
                    "id" => 487,
                    "district_id" => 64,
                    "name" => "Khaliajuri",
                    "bn_name" => "খালিয়াজুরী"
                ],
                [
                    "id" => 488,
                    "district_id" => 64,
                    "name" => "Kalmakanda",
                    "bn_name" => "কলমাকান্দা"
                ],
                [
                    "id" => 489,
                    "district_id" => 64,
                    "name" => "Mohongonj",
                    "bn_name" => "মোহনগঞ্জ"
                ],
                [
                    "id" => 490,
                    "district_id" => 64,
                    "name" => "Purbadhala",
                    "bn_name" => "পূর্বধলা"
                ],
                [
                    "id" => 491,
                    "district_id" => 64,
                    "name" => "Netrokona Sadar",
                    "bn_name" => "নেত্রকোণা সদর"
                ]
            ]
        );
    }
}
