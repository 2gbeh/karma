<?php

namespace App\Constants;

class CalenderConstant
{
  const
    MONTH = [null, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    DAY = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
    MONTH_ = [null, 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
    DAY_ = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
    NOTICE_PERIOD = [null, 'Immediately', '3 days', '1 Week', '2 weeks', '3 weeks', '4 weeks', '1+ month', '2+ months', '3+ months', '6+ months'],
    SEASON = [null, 'Spring', 'Summer', 'Autumn (Fall)', 'Winter'],
    SCHEDULE = [
      null,
      'Full-time',
      'Part-time',
      'Contract',
      'Intern',
      'Apprentice',
      'Seasonal',
      'On-site',
      'Off-site',
      'Hybrid',
    ];
}
