<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function showService($slug)
    {
        $data = [];

        switch ($slug) {
            case 'all-laser-lasik':
                $data = [
                    'title' => 'All Laser Lasik',
                    'description' => 'Description for All Laser Lasik',
                    'image' => 'public/assets/images/services/services-details-2.jpg',
                    'benefits' => [
                        'State-of-the-art surgical facilities',
                        'Experienced and compassionate surgical team',
                        'Comprehensive pre- and post-operative care',
                        'Minimally invasive techniques for faster recovery',
                    ],
                    'faqs' => [
                        ['question' => 'What is LASIK surgery and who is a good candidate?', 'answer' => 'LASIK is a laser eye surgery to correct vision. Good candidates are those with stable vision and no major eye issues.'],
                        ['question' => 'How often should I get my eyes checked?', 'answer' => 'It is recommended to have an eye exam every one to two years, depending on age and risk factors.'],
                    ]
                ];
                break;

            case 'cornea-glaucoma':
                $data = [
                    'title' => 'Cornea & Glaucoma',
                    'description' => 'Description for Cornea & Glaucoma',
                    'image' => 'public/assets/images/services/services-details-2.jpg',
                    'benefits' => [
                        'Advanced treatments for corneal diseases',
                        'Expert care for glaucoma patients',
                        'Cutting-edge diagnostic tools',
                        'Personalized treatment plans',
                    ],
                    'faqs' => [
                        ['question' => 'What causes glaucoma?', 'answer' => 'Glaucoma is usually caused by high pressure in the eye.'],
                        ['question' => 'How is corneal disease treated?', 'answer' => 'Treatment depends on the specific condition and can range from medication to surgery.'],
                    ]
                ];
                break;

            case 'eye-surgery':
                $data = [
                    'title' => 'Eye Surgery',
                    'description' => 'Description for Eye Surgery',
                    'image' => 'public/assets/images/services/services-details-2.jpg',
                    'benefits' => [
                        'State-of-the-art surgical facilities',
                        'Experienced and compassionate surgical team',
                        'Comprehensive pre- and post-operative care',
                        'Minimally invasive techniques for faster recovery',
                    ],
                    'faqs' => [
                        ['question' => 'What are common eye surgeries?', 'answer' => 'Common eye surgeries include cataract removal, LASIK, and retinal repair.'],
                        ['question' => 'How long is recovery from eye surgery?', 'answer' => 'Recovery times vary by procedure but generally range from a few days to a few weeks.'],
                    ]
                ];
                break;

            case 'ent-surgery':
                $data = [
                    'title' => 'ENT Surgery',
                    'description' => 'Description for ENT Surgery',
                    'image' => 'public/assets/images/services/services-details-2.jpg',
                    'benefits' => [
                        'Comprehensive ENT care',
                        'Advanced surgical techniques',
                        'Experienced surgeons',
                        'Post-operative care and support',
                    ],
                    'faqs' => [
                        ['question' => 'What are common ENT surgeries?', 'answer' => 'Common ENT surgeries include sinus surgery, tonsillectomy, and ear tube insertion.'],
                        ['question' => 'How can I prepare for ENT surgery?', 'answer' => 'Follow your surgeon’s pre-operative instructions and ask any questions you have beforehand.'],
                    ]
                ];
                break;

            case 'eye-test-care':
                $data = [
                    'title' => 'Eye Test Care',
                    'description' => 'Description for Eye Test Care',
                    'image' => 'public/assets/images/services/services-details-2.jpg',
                    'benefits' => [
                        'Comprehensive eye exams',
                        'Advanced diagnostic tools',
                        'Personalized care plans',
                        'Experienced optometrists',
                    ],
                    'faqs' => [
                        ['question' => 'How often should I get an eye test?', 'answer' => 'It is recommended to have an eye test every one to two years, depending on age and risk factors.'],
                        ['question' => 'What can I expect during an eye test?', 'answer' => 'An eye test will include a vision assessment, eye pressure test, and a thorough examination of the eye’s structures.'],
                    ]
                ];
                break;

            case 'contact-lenses':
                $data = [
                    'title' => 'Contact Lenses',
                    'description' => 'Description for Contact Lenses',
                    'image' => 'public/assets/images/services/services-details-2.jpg',
                    'benefits' => [
                        'Wide range of contact lens options',
                        'Fitting and training sessions',
                        'Ongoing support and care',
                        'Expert advice on lens care',
                    ],
                    'faqs' => [
                        ['question' => 'How do I choose the right contact lenses?', 'answer' => 'Your optometrist will help you choose the best lenses based on your vision needs and lifestyle.'],
                        ['question' => 'How should I care for my contact lenses?', 'answer' => 'Follow the care instructions provided by your optometrist and never sleep in lenses not designed for overnight wear.'],
                    ]
                ];
                break;

            case 'surgical-procedure':
                $data = [
                    'title' => 'Surgical Procedure',
                    'description' => 'Our comprehensive range of surgical procedures ensures the highest level of care and precision for your eye and ENT needs.',
                    'image' => 'public/assets/images/services/services-details-2.jpg',
                    'benefits' => [
                        'Expert surgeons with years of experience',
                        'State-of-the-art surgical equipment',
                        'Personalized treatment plans',
                        'Focused on patient safety and comfort',
                    ],
                    'faqs' => [
                        ['question' => 'What types of surgical procedures do you offer?', 'answer' => 'We offer a range of surgical procedures including LASIK, cataract surgery, and various ENT surgeries.'],
                        ['question' => 'How should I prepare for a surgical procedure?', 'answer' => 'Follow the pre-operative instructions provided by your surgeon and discuss any concerns you may have during your consultation.'],
                    ]
                ];
                break;

            default:
                abort(404);
        }

        return view('pages.services', compact('data'));
    }
}
