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
            
                case 'advanced-cataract-surgeries':
                    $data = [
                        'title' => 'Advanced Cataract Surgeries',
                        'description' => 'Expert surgeons performing minimally invasive cataract removal procedures utilizing the latest intraocular lens (IOL) technologies for optimal vision correction.',
                        'image' => 'assets/images/services/services-details-2.jpg',
                        'benefits' => [
                            'Minimally invasive procedure with faster recovery time',
                            'Use of the latest intraocular lens (IOL) technologies for clear vision',
                            'Personalized care and advanced surgical techniques'
                        ],
                        'faqs' => [
                            ['question' => 'What is cataract surgery?', 'answer' => 'Cataract surgery involves removing the cloudy lens from the eye and replacing it with a clear artificial lens.'],
                            ['question' => 'What are the benefits of advanced cataract surgery?', 'answer' => 'Advanced cataract surgery techniques offer faster recovery times and improved visual outcomes.'],
                        ],
                    ];
                    break;
    
                case 'retina-clinic':
                    $data = [
                        'title' => 'Retina Clinic',
                        'description' => 'Specialized care for retinal diseases such as diabetic retinopathy, macular degeneration, and retinal detachment. Advanced diagnostic tools, including OCT and fluorescein angiography. Cutting-edge treatments, such as intravitreal injections and vitreoretinal surgery.',
                        'image' => 'assets/images/services/services-details-2.jpg',
                        'benefits' => [
                            'Early and accurate diagnosis with advanced diagnostic tools',
                            'Cutting-edge treatments for complex retinal conditions',
                            'Expert care for managing and treating retinal diseases'
                        ],
                        'faqs' => [
                            ['question' => 'What retinal diseases are treated at your clinic?', 'answer' => 'We treat diseases such as diabetic retinopathy, macular degeneration, and retinal detachment.'],
                            ['question' => 'What diagnostic tools are used?', 'answer' => 'We use OCT and fluorescein angiography for accurate diagnosis and treatment planning.'],
                        ],
                    ];
                    break;
    
                case 'glaucoma-clinic':
                    $data = [
                        'title' => 'Glaucoma Clinic',
                        'description' => 'Comprehensive evaluation and management of glaucoma, including medical and surgical interventions. Advanced imaging techniques like OCT and visual field testing. Customized treatment plans to control intraocular pressure (IOP).',
                        'image' => 'assets/images/services/services-details-2.jpg',
                        'benefits' => [
                            'Comprehensive evaluation to assess and manage glaucoma',
                            'Advanced imaging and testing for precise diagnosis',
                            'Customized treatment plans to effectively control intraocular pressure'
                        ],
                        'faqs' => [
                            ['question' => 'What is glaucoma?', 'answer' => 'Glaucoma is a group of eye conditions that damage the optic nerve, often associated with high intraocular pressure.'],
                            ['question' => 'How is glaucoma treated?', 'answer' => 'Treatment may include medications, laser therapy, or surgery to lower intraocular pressure.'],
                        ],
                    ];
                    break;
    
                case 'oculoplasty-services':
                    $data = [
                        'title' => 'Oculoplasty Services',
                        'description' => 'Specialized care for eyelid, orbit, and lacrimal system disorders. Surgical and non-surgical treatments for conditions like ptosis, entropion, ectropion, and orbital fractures. Aesthetic procedures, including blepharoplasty and brow lift, to enhance your appearance.',
                        'image' => 'assets/images/services/services-details-2.jpg',
                        'benefits' => [
                            'Expert care for eyelid, orbit, and lacrimal system disorders',
                            'Advanced surgical and non-surgical treatments',
                            'Aesthetic improvements through specialized procedures like blepharoplasty'
                        ],
                        'faqs' => [
                            ['question' => 'What conditions are treated with oculoplasty?', 'answer' => 'Conditions such as ptosis, entropion, ectropion, and orbital fractures.'],
                            ['question' => 'What aesthetic procedures are available?', 'answer' => 'We offer blepharoplasty and brow lifts to improve appearance and function.'],
                        ],
                    ];
                    break;
    
                case 'pediatric-ophthalmology-services':
                    $data = [
                        'title' => 'Pediatric Ophthalmology Services',
                        'description' => 'Comprehensive eye care for children, from routine eye exams to complex pediatric eye conditions. Amblyopia (lazy eye) treatment, strabismus (misaligned eyes) correction, and refractive error management.',
                        'image' => 'assets/images/services/services-details-2.jpg',
                        'benefits' => [
                            'Specialized care for a wide range of pediatric eye conditions',
                            'Early detection and treatment for amblyopia and strabismus',
                            'Comprehensive management of refractive errors in children'
                        ],
                        'faqs' => [
                            ['question' => 'What conditions are treated in pediatric ophthalmology?', 'answer' => 'Conditions such as amblyopia, strabismus, and refractive errors.'],
                            ['question' => 'How often should children have their eyes examined?', 'answer' => 'Children should have their eyes examined regularly to detect and treat any issues early.'],
                        ],
                    ];
                    break;
    
                case 'low-vision-rehabilitation':
                    $data = [
                        'title' => 'Low Vision Rehabilitation',
                        'description' => 'Assessment and assistance for individuals with severe vision impairment to maximize their remaining vision through the use of low vision aids, visual training, and adaptive techniques.',
                        'image' => 'assets/images/services/services-details-2.jpg',
                        'benefits' => [
                            'Personalized assessment to maximize remaining vision',
                            'Access to specialized low vision aids and adaptive techniques',
                            'Support and training to enhance daily living activities'
                        ],
                        'faqs' => [
                            ['question' => 'What is low vision rehabilitation?', 'answer' => 'Low vision rehabilitation helps individuals with severe vision impairment maximize their remaining vision using aids and techniques.'],
                            ['question' => 'What types of aids are available?', 'answer' => 'Aids include magnifiers, special lighting, and adaptive technology designed to assist with daily activities.'],
                        ],
                    ];
                    break;
    
                case 'emergency-eye-care':
                    $data = [
                        'title' => 'Emergency Eye Care',
                        'description' => 'Immediate evaluation and treatment for eye emergencies, such as eye injuries, chemical burns, sudden vision loss, or severe eye pain.',
                        'image' => 'assets/images/services/services-details-2.jpg',
                        'benefits' => [
                            'Rapid assessment and treatment for urgent eye conditions',
                            'Expert care for a range of eye emergencies',
                            '24/7 availability for critical situations'
                        ],
                        'faqs' => [
                            ['question' => 'What constitutes an eye emergency?', 'answer' => 'Eye emergencies include injuries, chemical burns, sudden vision loss, or severe eye pain.'],
                            ['question' => 'What should I do if I experience an eye emergency?', 'answer' => 'Seek immediate medical attention at an emergency eye care facility.'],
                        ],
                    ];
                    break;

            default:
                abort(404);
        }

        return view('pages.services', compact('data'));
    }
}
