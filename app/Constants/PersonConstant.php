<?php

namespace App\Constants;

class PersonConstant
{
  const
    NAMES = ['John', 'Jane', 'Jack', 'Jill', 'Jake', 'Jade', 'Jeff', 'Jess', 'Joel', 'Josh', 'Jose', 'Jude', 'June', 'Jean'],
    GENDER = [null, 'Male', 'Female', 'Non-Binary'],
    SEX = [null, 'M', 'F', 'N_B'],
    SEX_MAP = ['N/A' => null, 'M' => 'Male', 'F' => 'Female', 'N_B' => 'Non-Binary'],
    TITLE = [null, 'Dr.', 'Esq.', 'Hon.', 'Jr.', 'Mr.', 'Mrs.', 'Ms.', 'Msgr.', 'Prof.', 'Rev.', 'Sr.', 'St.'],
    PRONOUN = [null, 'I', 'You', 'He', 'She', 'It', 'We', 'They', 'Me', 'Him', 'Her', 'Us', 'Them'],
    MARITAL_STATUS = [null, 'Single', 'Married', 'Separated', 'Divorced', 'Widowed'],
    RELIGION = [null, 'Christianity', 'Islam', 'Hinduism', 'Buddhism', 'Sikhism', 'Taoism', 'Judaism', 'Confucianism', 'Bahá&apos;í', 'Shinto', 'Jainism', 'Zoroastrianism', 'Others'],
    RACE = [null, 'White/Caucasian', 'Mongoloid/Asian', 'Negroid/Black', 'Australoid'],
    AGE_GROUP = [null, '0 – 12  (Adolescent)', '13 – 19  (Teenager)', '20 – 49  (Adult)', '50 – 74  (Senior)', '75 – above  (Elder)'],
    AGE_GROUP_MAP = [null, 'Adolescent' => '0 – 12', 'Teenager' => '13 – 19', 'Adult' => '20 – 49', 'Senior' => '50 – 74', 'Elder' => '75 – above'],
    DEGREE = [
      null,
      'WASSCE' => 'West African Secondary School Certificate Examination',
      'GCE ' => 'General Certificate of Education',
      'OND' => 'Ordinary National Diploma',
      'NHD' => 'Higher National Diploma',
      'LLB' => 'Bachelor of Law',
      'B.Sc' => 'Bachelor of Science',
      'PGD' => 'Post Graduate Diploma',
      'PGDE' => 'Post Graduate Diploma in Education',
      'M.Sc' => 'Master of Science',
      'Ph.D' => 'Doctor of Philosophy',
    ];
}
