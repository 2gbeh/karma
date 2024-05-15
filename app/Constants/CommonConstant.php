<?php

namespace App\Constants;

class CommonConstant
{
  const
    ROLE = [null, 'Webmaster', 'Administrator', 'Director', 'Manager', 'Officer'],
    ACCESS_RIGHT = ['NONE', 'ALL', 'ADD', 'VIEW', 'EDIT', 'DELETE', 'GRANT', 'REVOKE', 'READ_ONLY', 'WRITE_ONLY'],
    ACTION = [null, 'INSERT', 'SELECT', 'UPDATE', 'DELETE', 'SIGN_UP', 'SIGN_IN', 'SIGN_OUT'],
    TXN_TYPE = [null, 'Credit', 'Debit'],
    TXN_TYPE_MAP = ['N/A' => null, 'CR' => 'Credit', 'DR' => 'Debit'],
    TXN_STATUS = ['Pending', 'Approved', 'Declined', 'Critical'],
    PAY_MODE = [null, 'ATM/Quick Teller', 'Bank Transfer', 'Cash Deposit', 'Internet Banking', 'Mobile Transfer', 'Point-Of-Sale (POS)', 'SMS/USSD Code', 'Web Checkout'],
    PAY_ISP = [null, 'Paypal', 'Interswitch', 'Stripe', 'Remita', 'Paystack', 'Flutterwave', 'VoguePay', 'CashEnvoy'],
    CARD_TYPE = ['AMEX', 'APPLE PAY', 'VERVE', 'VISA', 'MASTERCARD'],
    STATUS = ['Unverified', 'Verified', 'Disabled', 'Enabled', 'Inactive', 'Active'],
    ENTITY = [
      null,
      'ADMIN', 'USER',
      'FAMILY', 'FRIEND',
      'EMPLOYER', 'EMPLOYEE', 'CUSTOMER/CLIENT', 'ENQUIRER', 'VISITOR',
      'STAFF', 'STUDENT', 'PUPIL',
      'PARENT/GUARDIAN', 'SPONSOR', 'NEXT OF KIN',
      'APPLICANT', 'GUARANTOR',
      'CANDIDATE', 'REFERER', 'REFEREE',
      'DOCTOR', 'NURSE', 'PHARMACIST/CHEMIST', 'PATIENT',
    ];
}
