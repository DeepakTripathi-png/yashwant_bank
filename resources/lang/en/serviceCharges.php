<?php

return [
    'home' => 'Home',
    'heading' => 'Service Charges',

    'second_heading'=>'Tariff Sheet for Welcome Kit',


    'table1' => [
        'header' => [
            'sr_no' => 'Sr. No',
            'particular' => 'Particular',
            'commission_gst' => 'Commission with GST',
        ],
        'rows' => [
            ['1', 'NEFT CHARGES', ''],
            ['', 'i) Upto RS. 100000/-', '10'],
            ['', 'ii) RS 100001 TO 200000/-', '15'],
            ['2', 'RTGS CHARGES', ''],
            ['', 'i) RS 200001 TO 500000/-', '51'],
            ['', 'ii) Above RS. 5 LAKH', '78'],
            ['', 'SERVICE CHARGES', ''],
            ['3', 'MICR Cheque - Saving', '3 per cheque'],
            ['4', 'MICR Cheque-Current', '3 per cheque'],
            ['5', 'Issue of Passbook/Balance Certificate', '118'],
            ['6', 'Duplicate passbook', '118'],
            ['7', 'Stop Payment Instruction per Instrument', '118'],
            ['8', 'AC Closure Charges', ''],
            ['', 'i) Individual', 'a) 200 before 1 year<br>b) 100 after 1 year'],
            ['9', 'Cheque return Charges- cheque drawn us', '250'],
            ['10', 'Cheque/Bills deposited Returned unpaid', '200'],
            ['11', 'No dues Certificate', '100'],
            ['12', 'Revalidation/Cancellation Drafts', '118'],
            ['13', 'Bankers Cheque', ''],
            ['', 'A) issuance cheque', ''],
            ['', 'i) Upto Rs 1000', '11'],
            ['', 'ii) Above Rs. 1000', '1.20 per 1000'],
            ['', 'B) Revalidation/cancellation of bankers cheque', '118'],
            ['', 'C) Issuance of duplicate bankers cheque', '118'],
            ['14', 'Photo Attestation Charges', '118'],
            ['15', 'Interest Certificate', '75'],
            ['16', 'Duplicate term deposit receipt', '200'],
            ['17', 'AC statement Charges for saving and current', '50 upto 1 year<br>50 + 10 rs per page'],
            ['18', 'IMPS CHARGES', ''],
            ['', 'i) upto Rs 10000/-<br>ii) RS.10001 To Rs. 100000/-<br>iii) Rs. 100001 To 300000/-', '7.08(6+GST)<br>11.80(10+GST)<br>20.06(17+GST)'],
        ],
    ],




    'table' => [
        's_no' => 'S.No.',
        'fees_charges' => 'Fees/Charges',
        'amount' => 'Amount',
        'remarks' => 'Remarks',
        'rows' => [
            [
                's_no' => '1',
                'fees_charges' => 'Annual fees (p.a.)',
                'amount' => 'Rs. 300/Card + Service Tax',
                'remarks' => 'Fee applicable to all card holders for yearly card maintenance fees'
            ],
            [
                's_no' => '2',
                'fees_charges' => 'Additional card (p.a.)',
                'amount' => 'Rs. 300/Card + Service Tax',
                'remarks' => 'Fee applicable, if card is to be issued to account holders other than primary holder. For this bank needs to give confirmation for enabling the joint card functionality.'
            ],
            [
                's_no' => '3',
                'fees_charges' => 'Card Replacement Fees',
                'amount' => 'Rs. 300/Card + Service Tax',
                'remarks' => 'If a customer lost his/her card and requests another card'
            ],
            [
                's_no' => '4',
                'fees_charges' => 'Rupay debit card tariff charges',
                'amount' => '',
                'remarks' => ''
            ],
            [
                's_no' => '',
                'fees_charges' => 'Transaction free of charges as per RBI',
                'amount' => 'First 5 transactions (including Financial + Non-Financial)',
                'remarks' => 'As per NPCI guidelines for a month at least five free transactions need to be given to the account holder'
            ],
            [
                's_no' => '',
                'fees_charges' => 'a) Financial (Cash Withdrawal)',
                'amount' => 'Rs 17 / transaction + service tax',
                'remarks' => 'Fee applicable from any 6th financial transaction onwards performed on other bank’s ATM'
            ],
            [
                's_no' => '',
                'fees_charges' => 'b) Non-Financial (Balance Enquiry, Mini Statement, Pin change)',
                'amount' => 'Rs 9 / transaction + service tax',
                'remarks' => 'Fee applicable from any 6th non-financial transaction onwards performed on other bank’s ATM'
            ],
            [
                's_no' => '5',
                'fees_charges' => 'Daily Withdrawal Limit',
                'amount' => 'Rs 30000/card',
                'remarks' => ''
            ],
            [
                's_no' => '6',
                'fees_charges' => 'Daily Purchase Limit',
                'amount' => 'Rs 100000/card',
                'remarks' => 'Not Applicable'
            ],
            [
                's_no' => '7',
                'fees_charges' => 'PIN Replacement Charges',
                'amount' => 'Rs. 30 / Pin + Taxes',
                'remarks' => 'Fee Applicable if the customer lost, forgets his/her card, and requests another PIN'
            ]
        ],
    ],
    'footer_note' => 'We have removed cash at POS since it is not applicable (As of now not allowed to our bank). Thanking you.'
];
