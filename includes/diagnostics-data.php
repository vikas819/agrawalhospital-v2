<?php
// Diagnostic test pages. Content from https://agrawalhospital.com/ (service pages).
// Each page is a list of blocks: ['p', text] paragraph, ['h', text] sub-heading, ['ul', [items]] bullet list.

$diagnostics = [
    'pathology.php' => [
        'title' => 'All Pathological Tests',
        'image' => 'image/diagnostics/pathology.jpg',
        'blocks' => [
            ['p', 'Pathology means the study of disease and its causes and progression. Pathology tests cover blood tests, and tests on urine, stools (faeces) and bodily tissues. Blood and pathology tests leave many people squeamish, but they’re an important part of detecting, diagnosing and treating disease. In fact, if you’re sick, many decisions about your care will come down to the results of your blood and pathology tests.'],
            ['p', 'A pathologist interprets the results of blood and pathology tests and looks for abnormalities that may point to disease, such as cancer and other chronic illnesses, or health risks, such as pre-diabetes.'],
            ['h', 'There are nine specialisations in pathology'],
            ['ul', [
                'Chemical pathology – looks at the chemicals in blood and other bodily fluids',
                'Haematology – explores blood disorders',
                'Anatomical pathology – looks at disease in human tissue, mostly tissue surgically removed from living patients. Cytopathology (the study of disease at a cellular level) is a subspecialty of anatomical pathology',
                'Medical microbiology – investigates infection caused by bacteria, viruses, fungi and parasites',
                'Immunopathology – looks at immune responses to disease',
                'Genetic pathology – looks at genetic diseases',
                'Forensic pathology – used to discover the cause of sudden or unexpected death',
                'General pathology – concerned with all aspects of laboratory investigation of disease',
                'Clinical pathology – the diagnosis of disease using laboratory testing',
            ]],
        ],
    ],
    'x-ray.php' => [
        'title' => 'X-ray',
        'image' => 'image/diagnostics/x-ray.jpg',
        'blocks' => [
            ['p', 'An X-ray is a quick, painless test that produces images of the structures inside your body — particularly your bones.'],
            ['p', 'X-ray beams pass through your body, and they are absorbed in different amounts depending on the density of the material they pass through. Dense materials, such as bone and metal, show up as white on X-rays. The air in your lungs shows up as black. Fat and muscle appear as shades of gray.'],
            ['p', 'For some types of X-ray tests, a contrast medium — such as iodine or barium — is introduced into your body to provide greater detail on the images.'],
        ],
    ],
    'ultrasound.php' => [
        'title' => 'Ultrasound',
        'image' => 'image/diagnostics/ultrasound.jpg',
        'blocks' => [
            ['p', 'Ultrasound is safe and painless. It produces pictures of the inside of the body using sound waves. Ultrasound imaging is also called ultrasound scanning or sonography. It uses a small probe called a transducer and gel placed directly on the skin. High-frequency sound waves travel from the probe through the gel into the body. The probe collects the sounds that bounce back, and a computer uses those sound waves to create an image.'],
            ['p', 'Ultrasound exams do not use radiation (as used in X-rays). Because images are captured in real time, they can show the structure and movement of the body’s internal organs. They can also show blood flowing through blood vessels.'],
            ['p', 'Conventional ultrasound displays the images in thin, flat sections of the body. Advancements in ultrasound technology include three-dimensional (3-D) ultrasound that formats the sound wave data into 3-D images. Ultrasound examinations can help to diagnose a variety of conditions and to assess organ damage following illness.'],
            ['h', 'Ultrasound is used to help physicians evaluate symptoms such as'],
            ['ul', ['Pain', 'Swelling', 'Infection']],
            ['h', 'Ultrasound is a useful way of examining many of the body’s internal organs, including'],
            ['ul', [
                'Heart and blood vessels, including the abdominal aorta and its major branches',
                'Liver', 'Gallbladder', 'Spleen', 'Pancreas', 'Kidneys', 'Bladder',
                'Uterus, ovaries, and unborn child (fetus) in pregnant patients',
                'Eyes', 'Thyroid and parathyroid glands', 'Scrotum (testicles)',
                'Brain, hips and spine in infants',
            ]],
        ],
    ],
    'ecg.php' => [
        'title' => 'ECG',
        'image' => 'image/diagnostics/ecg.jpg',
        'blocks' => [
            ['p', 'An electrocardiogram — abbreviated as EKG or ECG — is a test that measures the electrical activity of the heartbeat. With each beat, an electrical impulse (or “wave”) travels through the heart. This wave causes the muscle to squeeze and pump blood from the heart. A normal heartbeat on ECG will show the timing of the top and lower chambers.'],
            ['p', 'The right and left atria or upper chambers make the first wave called a “P wave”, followed by a flat line when the electrical impulse goes to the bottom chambers. The right and left bottom chambers or ventricles make the next wave called a “QRS complex”. The final wave or “T wave” represents electrical recovery or return to a resting state for the ventricles.'],
            ['p', 'An ECG gives two major kinds of information. First, by measuring time intervals on the ECG, a doctor can determine how long the electrical wave takes to pass through the heart — showing whether the electrical activity is normal, slow, fast or irregular. Second, by measuring the amount of electrical activity passing through the heart muscle, a cardiologist may be able to find out if parts of the heart are too large or are overworked.'],
        ],
    ],
    'colour-doppler.php' => [
        'title' => 'Colour Doppler',
        'image' => 'image/diagnostics/colour-doppler.jpg',
        'blocks' => [
            ['p', 'A Doppler ultrasound is a noninvasive test that can be used to estimate the blood flow through your blood vessels by bouncing high-frequency sound waves (ultrasound) off circulating red blood cells. A regular ultrasound uses sound waves to produce images, but can’t show blood flow.'],
            ['h', 'A Doppler ultrasound may help diagnose many conditions, including'],
            ['ul', [
                'Blood clots',
                'Poorly functioning valves in your leg veins, which can cause blood or other fluids to pool in your legs (venous insufficiency)',
                'Heart valve defects and congenital heart disease',
                'A blocked artery (arterial occlusion)',
                'Decreased blood circulation into your legs (peripheral artery disease)',
                'Bulging arteries (aneurysms)',
                'Narrowing of an artery, such as in your neck (carotid artery stenosis)',
            ]],
            ['p', 'A Doppler ultrasound can estimate how fast blood flows by measuring the rate of change in its pitch (frequency). During the test, a trained sonographer presses a small hand-held device (transducer) against your skin over the area being examined, moving from one area to another as necessary.'],
            ['p', 'This test may be done as an alternative to more-invasive procedures, such as angiography. It may also help your doctor check for injuries to your arteries or monitor certain treatments to your veins and arteries.'],
        ],
    ],
    'pulmonary-function-test.php' => [
        'title' => 'Pulmonary Function Test',
        'image' => 'image/diagnostics/pulmonary-function-test.jpg',
        'blocks' => [
            ['h', 'What are pulmonary function tests (PFTs)?'],
            ['p', 'Pulmonary function tests (PFTs) are a group of tests that measure how well your lungs work. This includes how well you’re able to breathe and how effective your lungs are at bringing oxygen to the rest of your body.'],
            ['p', 'PFTs are noninvasive tests. They measure lung volume, capacity, rates of flow, and gas exchange. This information can help your healthcare provider diagnose and decide the treatment of certain lung disorders. If you already have a condition that’s affecting your lungs, your doctor may order this test to see if the condition is progressing or how it’s responding to treatment.'],
            ['h', 'PFTs can help diagnose'],
            ['ul', [
                'Asthma', 'Allergies', 'Chronic bronchitis', 'Respiratory infections', 'Lung fibrosis',
                'Bronchiectasis, a condition in which the airways in the lungs stretch and widen',
                'COPD, including emphysema',
                'Asbestosis, a condition caused by exposure to asbestos',
                'Sarcoidosis, an inflammation of your lungs, liver, lymph nodes, eyes, skin, or other tissues',
                'Scleroderma, a disease that affects your connective tissue',
                'Pulmonary tumour', 'Lung cancer', 'Weakness of the chest wall muscles',
            ]],
        ],
    ],
    'allergy-testing.php' => [
        'title' => 'Allergy Testing',
        'image' => 'image/diagnostics/allergy-testing.jpg',
        'blocks' => [
            ['p', 'An allergy test is an exam performed by a trained allergy specialist to determine if your body has an allergic reaction to a known substance. The exam can be in the form of a blood test, a skin test, or an elimination diet.'],
            ['p', 'Allergies occur when your immune system, which is your body’s natural defence, overreacts to something in your environment. For example, pollen, which is normally harmless, can cause your body to overreact. This overreaction can lead to:'],
            ['ul', ['A runny nose', 'Sneezing', 'Blocked sinuses', 'Itchy, watery eyes']],
        ],
    ],
    'sleep-study.php' => [
        'title' => 'Sleep Study',
        'image' => 'image/diagnostics/sleep-study.jpg',
        'blocks' => [
            ['p', 'Polysomnography, also called a sleep study, is a comprehensive test used to diagnose sleep disorders. Polysomnography records your brain waves, the oxygen level in your blood, heart rate and breathing, as well as eye and leg movements during the study.'],
            ['p', 'Polysomnography may be done at a sleep disorders unit within a hospital or at a sleep centre. While it’s typically performed at night, it is occasionally done during the day to accommodate shift workers who habitually sleep during the day.'],
            ['p', 'In addition to helping diagnose sleep disorders, polysomnography may be used to help initiate or adjust your treatment plan if you’ve already been diagnosed with a sleep disorder.'],
            ['p', 'Sometimes you may be able to do the sleep study at home. Home sleep apnea testing uses a limited number of sensors to focus primarily on diagnosing obstructive sleep apnea (OSA).'],
        ],
    ],
    'audiometry.php' => [
        'title' => 'Audiometry',
        'image' => 'image/diagnostics/audiometry.jpg',
        'blocks' => [
            ['p', 'An audiometry evaluation is a painless, noninvasive hearing test that measures a person’s ability to hear different sounds, pitches, or frequencies.'],
            ['p', 'Patients who have a tumour in or around the ear may undergo audiometry testing to determine whether hearing loss has occurred, or to monitor their hearing before and after surgery. It is also used to evaluate whether hearing aids or surgery may improve one’s hearing.'],
        ],
    ],
    '2d-echo.php' => [
        'title' => '2D Echo',
        'image' => 'image/diagnostics/2d-echo.jpg',
        'blocks' => [
            ['p', 'A 2D echo is a non-invasive heart investigation that creates images of the sections of the heart using sound vibrations. It presents the various parts of the heart as pictures, so that it becomes easy to check for any damage or blockages, and the blood flow rate.'],
            ['p', 'An echocardiogram is a noninvasive (the skin is not pierced) procedure used to assess the heart’s function and structures. During the procedure, a transducer sends out sound waves at a frequency too high to be heard. When the transducer is placed on the chest at certain locations and angles, the sound waves move through the skin and other body tissues to the heart, where they bounce or “echo” off the heart structures. A computer turns these into moving images of the heart walls and valves.'],
            ['p', 'A 2-D echo view appears cone-shaped on the monitor, and the real-time motion of the heart’s structures can be observed. This enables the doctor to see the various heart structures at work and evaluate them.'],
        ],
    ],
    'spirometry.php' => [
        'title' => 'Spirometry',
        'image' => 'image/diagnostics/spirometry.jpg',
        'blocks' => [
            ['p', 'Spirometry is a common office test used to assess how well your lungs work by measuring how much air you inhale, how much you exhale and how quickly you exhale.'],
            ['p', 'Spirometry is used to diagnose asthma, chronic obstructive pulmonary disease (COPD) and other conditions that affect breathing. It may also be used periodically to monitor your lung condition and check whether a treatment for a chronic lung condition is helping you breathe better.'],
            ['h', 'Your doctor may suggest a spirometry test if your symptoms may be caused by a chronic lung condition such as'],
            ['ul', ['Asthma', 'COPD', 'Chronic bronchitis', 'Emphysema', 'Pulmonary fibrosis']],
        ],
    ],
    // Not on the live site; written from the respiratory department information.
    'bronchoscopy.php' => [
        'title' => 'Bronchoscopy',
        'image' => 'image/respiratory.jpg',
        'blocks' => [
            ['p', 'Bronchoscopy is a procedure that lets the doctor look directly inside your airways — the windpipe (trachea) and the large air passages of the lungs (bronchi). A thin tube called a bronchoscope is passed through the nose or mouth, down the throat and into the lungs.'],
            ['p', 'At Agrawal Hospital, the respiratory medicine department performs video bronchoscopy under the supervision of Dr. P. N. Agrawal. Rigid bronchoscopy is also used for procedures such as removing a foreign body that has been inhaled into the airway.'],
            ['h', 'Bronchoscopy may be used to'],
            ['ul', [
                'Find the cause of a persistent cough or coughing up blood',
                'Investigate an abnormal chest X-ray or CT scan, such as a lung nodule or mass',
                'Take samples of tissue or fluid (biopsy or lavage) to test for infection, tuberculosis or cancer',
                'Remove a foreign body, mucus plug or secretions blocking the airway',
                'Evaluate airway narrowing or collapse',
            ]],
            ['h', 'Before the procedure'],
            ['p', 'You will usually be asked not to eat or drink for a few hours beforehand. The throat is numbed with a local anaesthetic, and a sedative may be given so that you are relaxed and comfortable. Your doctor will explain the procedure and answer any questions before it begins.'],
        ],
    ],
];
