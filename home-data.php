<?php
// Shared homepage content for index.php and the index-1 / index-2 design concepts.
// Content mirrors https://agrawalhospital.com/ so every concept shows the same facts.

function img($path)
{
    return implode('/', array_map('rawurlencode', explode('/', $path)));
}

$hospital = [
    'name'     => 'Agrawal Hospital',
    'tagline'  => 'Multispeciality • Bhopal',
    'address'  => 'E-3/34, Arera Colony, Near Veer Savarkar Flyover and Ganesh Temple, Bhopal (M.P.) - 462016',
    'email'    => 'info@agrawalhospital.com',
    'phones'   => ['+91-755-4283383', '+91-755-4278190', '+91-8959444999'],
    'emergency' => '+91-8959444999',
    'hours'    => 'Open 24 Hours - 7 Days a Week',
    'opd'      => 'OPD: Mon - Sat, 10:00 AM - 7:00 PM',
    'since'    => 2002,
    'about'    => 'Agrawal Hospital is an effort towards providing the best and the latest in diagnosis and treatment of obstetric, gynaecological, respiratory, surgical and critically ill patients in a homely and friendly atmosphere.',
    'story'    => 'Started on 16th August 2002 in the centrally located Arera Colony of Bhopal city with excellent connectivity and easy approachability, we have grown into a trusted name that generates confidence amongst patients. We provide health services to patients from all walks of life and from across the country.',
    'promise'  => 'We strive to exceed your expectations and we encourage you to be an active participant in your care. We will treat you with courtesy and respect. We will listen carefully to you. We will explain things to ensure your understanding.',
];

function tel($phone)
{
    return 'tel:' . preg_replace('/[^0-9+]/', '', $phone);
}

$stats = [
    ['value' => '1.5 Lakh+', 'label' => 'Patients treated'],
    ['value' => '350+',      'label' => 'Lives saved on mechanical ventilation'],
    ['value' => '2002',      'label' => 'Serving Bhopal since'],
    ['value' => '24/7',      'label' => 'Emergency & ICU'],
];

$highlights = [
    'NABH Accredited',
    '24/7 Emergency & ICU',
    'Cashless TPA Facility',
    'Modular Operation Theatre',
    'Advanced Diagnostics',
    'BSNL & RBI Authorized',
];

$departments = [
    ['name' => 'Respiratory Medicine', 'url' => 'respiratory-medicine.php', 'img' => 'image/respiratory.jpg',
     'desc' => 'Advanced pulmonology with video bronchoscopy, sleep studies, allergy testing, and comprehensive treatment of all respiratory diseases.'],
    ['name' => 'Obstetrics & Gynaecology', 'url' => 'obstetrics-gynaecology.php', 'img' => 'image/gynaecology.jpg',
     'desc' => 'Complete maternity care including normal and C-section delivery, high-risk pregnancy management, infertility treatment, and laparoscopic gynaecology.'],
    ['name' => 'Emergency & Critical Care', 'url' => 'emergency-critical-care.php', 'img' => 'image/emergency.jpg',
     'desc' => '24/7 emergency services with fully-equipped ICU featuring central monitoring, central oxygen, central suction, and ventilator support at each bed.'],
    ['name' => 'General Surgery', 'url' => 'general-surgery.php', 'img' => 'image/surgery.jpg',
     'desc' => 'Expert surgical services including laparoscopic and minimal access surgery, with modular operation theatres furnished with ultra-modern facilities.'],
    ['name' => 'General Medicine', 'url' => 'general-medicine.php', 'img' => 'image/medicine.jpg',
     'desc' => 'Comprehensive medical care for a wide range of health conditions with expert diagnosis and personalized treatment plans.'],
    ['name' => 'Clinical Haematology', 'url' => 'clinical-haematology.php', 'img' => 'image/haematology.jpg',
     'desc' => 'Specialized diagnosis and treatment of blood disorders with advanced laboratory testing and expert consultation.'],
    ['name' => 'ENT (Otorhinolaryngology)', 'url' => 'ent.php', 'img' => 'image/ent.jpg',
     'desc' => 'Expert treatment of ear, nose, and throat conditions with advanced audiometry and comprehensive ENT care.'],
    ['name' => 'Anaesthesiology', 'url' => 'anaesthesiology.php', 'img' => 'image/anaesthesiology.jpg',
     'desc' => 'Expert anaesthesia services for all surgical procedures with dedicated obstetric anaesthesia for safe deliveries and pain management.'],
];

$conditions = [
    ['Asthma', 'Personalized assessment and care to help control asthma symptoms and support easier breathing.'],
    ['COPD', 'Comprehensive evaluation and ongoing support for chronic obstructive pulmonary disease.'],
    ['Lung Cancer', 'Expert investigation of lung concerns, with coordinated specialist care and guidance.'],
    ['Pneumonia', 'Assessment and treatment planning for lung infections, including pneumonia.'],
    ['Tuberculosis', 'Specialist evaluation, testing, and care for tuberculosis and related lung concerns.'],
    ['Lung Fibrosis', 'Care focused on evaluating lung scarring and helping manage breathing symptoms.'],
    ['Interstitial Lung Disease', 'Diagnostic assessment and specialist management for interstitial lung conditions.'],
    ['Chronic Cough', 'Evaluation to help identify possible causes of a persistent cough and guide care.'],
    ['Airway Foreign Body', 'Prompt specialist assessment and care for suspected objects in the airway.'],
    ['Pleural Effusion', 'Assessment and treatment options for fluid accumulation around the lungs.'],
    ['Pulmonary Embolism', 'Urgent specialist evaluation and coordinated care for blood clots affecting the lungs.'],
    ['Pulmonary Hypertension', 'Specialist evaluation and management of elevated pressure in the lung arteries.'],
    ['Respiratory Failure', "Critical respiratory assessment and support tailored to each patient's needs."],
    ['Sleep Disorders', 'Sleep assessment and testing to investigate disorders that affect breathing and rest.'],
    ['Allergic Rhinitis', 'Assessment and care for nasal allergy symptoms and related breathing concerns.'],
    ['Sarcoidosis', 'Specialist assessment and follow-up for sarcoidosis affecting the lungs.'],
    ['Emphysema', 'Personalized care to help manage emphysema and its impact on breathing.'],
    ['Chronic Bronchitis', 'Evaluation and ongoing support for persistent bronchial inflammation and cough.'],
    ['Cystic Fibrosis', 'Coordinated respiratory care and monitoring for people living with cystic fibrosis.'],
    ['Lung Nodules', 'Imaging review and specialist assessment to monitor and evaluate lung nodules.'],
    ['Dyspnea', 'Assessment to investigate shortness of breath and determine appropriate next steps.'],
    ['Eosinophilic Lung Disorders', 'Specialist investigation and care for eosinophilic conditions affecting the lungs.'],
    ['Vocal Cord Dysfunction', 'Evaluation of vocal cord-related breathing symptoms with specialist care planning.'],
];

$doctors = [
    ['name' => 'Dr. P. N. Agrawal',     'role' => 'Pulmonology & Critical Care, DM', 'img' => 'image/team-item/Dr. P. N. Agrawal.JPG', 'url' => 'founder.php'],
    ['name' => 'Dr. Neelima Agrawal',   'role' => 'Obstetrics & Gynaecology, DGO',   'img' => 'image/team-item/Dr. Neelima Agrawal.JPG', 'url' => 'cofounder.php'],
    ['name' => 'Dr. R. K. Jain',        'role' => 'Anaesthesia, MD',                 'img' => 'image/team-item/Dr. R.k jain.jpg'],
    ['name' => 'Dr. Shirish Upasani',   'role' => 'Surgeon, MS, FMAS',               'img' => 'image/team-item/Dr S. S. Upasani.jpg'],
    ['name' => 'Dr. Rajeev Sharda',     'role' => 'Surgeon, MS, FMAS',               'img' => 'image/team-item/Dr. Rajeev Sharda.jpg'],
    ['name' => 'Dr. Rishi Nigam',       'role' => 'Pathologist',                     'img' => 'image/team-item/Dr R. K. Nigam.jpg'],
    ['name' => 'Dr. Sandeep Dheer',     'role' => 'Radiologist, MD',                 'img' => 'image/team-item/Dr. Sandeep Dheer.jpg'],
    ['name' => 'Dr. Sumeet Bhargava',   'role' => 'Anaesthesia, MD',                 'img' => 'image/team-item/Dr. Sumeet Bhargava.jpg'],
    ['name' => 'Dr. Sudeep Bhargava',   'role' => 'Anaesthesia, MD',                 'img' => 'image/team-item/Dr Sudeep Bhargava.jpg'],
    ['name' => 'Dr. Apoorv Jain',       'role' => 'Cardiologist, DM',                'img' => 'image/team-item/Dr. Apoorv Jain.jpg'],
];

$quickHelp = [
    ['no' => '01', 'title' => 'Looking For Medical & Health Care', 'cta' => 'Find Medical Services', 'url' => 'facilities.php',
     'desc' => 'Your Health is your greatest asset, and finding trusted medical and healthcare services is essential for quality life.'],
    ['no' => '02', 'title' => 'Find Professional & Quality Doctors', 'cta' => 'Find a Doctor', 'url' => 'our-experts.php',
     'desc' => 'Finding professional, highly qualified, and experienced doctors is essential for receiving the best medical treatment.'],
    ['no' => '03', 'title' => 'Need Emergency Ambulance?', 'cta' => 'Call Ambulance', 'url' => tel('+91-8959444999'),
     'desc' => 'In a medical emergency, every second counts. Get a fast, reliable, and fully equipped ambulance.'],
];

$facilityPhotos = [
    ['ICU with ventilator support', 'image/icu.jpg'],
    ['Patient ward', 'image/ward.jpg'],
    ['Ambulance service', 'image/ambulance2.jpg'],
    ['Pharmacy', 'image/department-of-pharmacy.jpg'],
];

// Transcribed from the review screenshots in image/review/ (r*.jpg, g*.JPG).
$testimonials = [
    ['name' => 'Shafiq Khan', 'rating' => 5, 'doctor' => 'Dr. P. N. Agrawal', 'topic' => 'Respiratory',
     'headline' => 'He gave new life to my son',
     'text' => 'My son had inhaled black gram during coughing. After that he developed severe dyspnoea and severe bouts of cough. I brought him to Agrawal Hospital for treatment. Dr. P. N. Agrawal sir is a very good doctor — he removed the black chana using a rigid bronchoscope. He gave new life to my son. I am thankful to Dr. Agrawal sir.'],
    ['name' => 'Nidhi Agarwal', 'rating' => 5, 'doctor' => 'Dr. Neelima Agrawal', 'topic' => 'Maternity',
     'headline' => 'You gave me my angel in my hands',
     'text' => 'Thank you so much Dr. Neelima Agrawal for giving me the best treatment during my entire pregnancy. I feel so motherly with you — because of you I faced so many complications very easily. Finally you gave me my angel in my hands. All staff are very caring. I stayed 7 days in hospital but I felt like home.'],
    ['name' => 'Umesh Prasad Sahu', 'rating' => 4.5, 'doctor' => 'Dr. P. N. Agrawal', 'topic' => 'Respiratory',
     'headline' => 'Fully recovered within a week',
     'text' => 'I was suffering from covid infection and it had majorly infected my lungs. I was first admitted to another hospital, but after no improvement I arrived at Agrawal Hospital and within a week I was fully recovered. All the doctors, staff and every helper fully supported me. I am totally fine and discharged today.'],
    ['name' => 'Apeksha Nagda', 'rating' => 5, 'doctor' => 'Dr. P. N. Agrawal', 'topic' => 'Respiratory',
     'headline' => 'Very good and professional',
     'text' => 'My father was admitted to Agrawal Hospital for almost 20 days. The treatment given by Dr. P. N. Agrawal and his team was very good and professional. He is a highly experienced doctor in respiratory and critical care. I found treatment and care very hygienic and up to the mark. Kudos to the entire team of Agrawal Hospital!'],
    ['name' => 'Anitha Thomas', 'rating' => 5, 'doctor' => 'Dr. P. N. Agrawal', 'topic' => 'Respiratory',
     'headline' => 'Recovered from a severe asthma attack',
     'text' => 'Nice hospitality. Very good care given by Dr. P. N. Agrawal. Hospitalized for 5 days here — now fully recovered from a severe asthmatic attack. Even the nurses and caretakers are doing a great job. All the very best.'],
    ['name' => 'Sanjay Gupta', 'rating' => 5, 'doctor' => 'Dr. P. N. Agrawal', 'topic' => 'Critical Care',
     'headline' => 'Support in such dire times',
     'text' => 'The doctors were so vigilant to admit the patient immediately, and proper treatment began with constant monitoring. Excellent staff and proper care was taken for hygiene. Thank you for your support in such dire times. Thank you once again.'],
    ['name' => 'Rinkle', 'rating' => 5, 'doctor' => 'Dr. Neelima Agrawal', 'topic' => 'Maternity',
     'headline' => 'They care like family',
     'text' => 'It was a great experience with Dr. Neelima ma\'am and staff. They all treat their patients like family members and care like family. We are always blessed to have great doctors like you, Neelima ma\'am.'],
    ['name' => 'Jini Das', 'rating' => 5, 'doctor' => 'Dr. Neelima Agrawal', 'topic' => 'Maternity',
     'headline' => 'I feel very safe there',
     'text' => 'I had a very great experience here. The whole staff is very polite with patients and they take good care of their patients. I feel very safe there.'],
    ['name' => 'Anamika Pal', 'rating' => 5, 'doctor' => null, 'topic' => 'Hospital Care',
     'headline' => 'Got relief fast',
     'text' => 'Hospital is hygienic. Doctor is very good and experienced — got relief fast. Staff\'s behaviour is good and caring. Thank you so much for the kind work.'],
    ['name' => 'Aman Kumar', 'rating' => 5, 'doctor' => 'Dr. P. N. Agrawal', 'topic' => 'Hospital Care',
     'headline' => 'So much care for patients',
     'text' => 'Very good hospital — so much care for patients, very punctual for everything, and also neat and clean.'],
    ['name' => 'Vijay Sahu', 'rating' => 5, 'doctor' => 'Dr. P. N. Agrawal', 'topic' => 'Hospital Care',
     'headline' => 'Satisfied with the treatment',
     'text' => 'Good hospital. I am satisfied with the treatment of this hospital. Facilities are good. Proper caring of the patient by staff members.'],
];

function initials($name)
{
    $parts = preg_split('/\s+/', trim($name));
    return strtoupper(substr($parts[0], 0, 1) . (count($parts) > 1 ? substr(end($parts), 0, 1) : ''));
}

function stars($rating)
{
    return str_repeat('★', (int) floor($rating)) . ($rating - floor($rating) >= .5 ? '½' : '');
}

$partners = [];
for ($i = 1; $i <= 23; $i++) {
    $partners[] = sprintf('image/client/client-%02d.jpg', $i);
}
